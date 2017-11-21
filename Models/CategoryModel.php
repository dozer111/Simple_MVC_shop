<?php


class CategoryModel
{
    private $id;
    private $name;
    private $weight;

    const TABLE = "categories";

    public function __construct($name = '', $weight = 0)
    {
        $this->name = $name;
        $this->weight = $weight;
    }

    public function save()
    {
        if ($this->id) {
            return $this->update();
        }

        return $this->create();
    }

    private function update()
    {
        $db = DB::getInstance();
        $query = "
        UPDATE `" . self::TABLE . "` 
            SET `name` = '".$this->name."',
            `weight` = ".$this->weight."
        WHERE `id` = ".$this->id." LIMIT 1";
        (new Logger(Logger::LOG_LEVEL_REQUEST, $query));
        $db->query($query);
        return (bool) $db->affected_rows;
    }

    private function create()
    {

        $query = "
          INSERT INTO `" . self::TABLE . "` 
            SET `name` = '".$this->name."', 
            `weight` = '".$this->weight."'";

        $db = DB::getInstance();
        (new Logger(Logger::LOG_LEVEL_REQUEST, $query));
        $db->query($query);

        return (!$this->id = $db->insert_id) ? false : true;
    }

    public static function getCat()
    {
        $db = DB::getInstance();
        $query = "SELECT * FROM `" . self::TABLE . "` ORDER BY `weight` DESC";
        return $db->query($query)->fetch_all(MYSQLI_ASSOC);
    }

    public static function find($id) {
        $id = intval($id);
        $db = DB::getInstance();
        $query = "SELECT * FROM `" . self::TABLE . "` WHERE `id` = ".$id ." LIMIT 1";
        $res = $db->query($query)->fetch_assoc();
        if(!$res) {
            return null;
        }

        $self = new self($res['name'], $res['weight']);
        $self->id = $res['id'];
        return $self;
    }

    public function setName($name) {
        $this->name = ucfirst($name);
    }

    public function setWeight($weight) {
        $this->weight = intval($weight);
    }
}