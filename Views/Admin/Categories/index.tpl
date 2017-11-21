{extends file="../../layout.tpl"}
{block name=body}


    <div class="container">
        <h2>Update Cat</h2>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Weight</th>
                <th>Update</th>
                <th>Remove</th>
            </tr>
            </thead>
            <tbody>
            {foreach $categories as $category}
            <tr>
                <form action="/admin/categories/update" method="post">
                    <td>{$category['id']} </td>
                    <td><input type="text" name="name" class="form-control" value="{$category['name']}"></td>
                    <td><input type="number" name="weight" value="{$category['weight']}"></td>
                    <td><input type="submit" class="btn btn-success"></td>
                    <input type="hidden" name="id" value="{$category['id']}">
                </form>
                <td><button class="btn-danger" onclick="remove()" >Remove</button></td>
            </tr>
            </tbody>
            {/foreach}

            </tbody>
        </table>
    </div>
    <h2> Create Cat</h2>
                <form action="/admin/categories/create" method="post" style="width: 400px">
                    <input type="text" name="name" value="name" class="form-control">
                    <input type="number" name="weight" value="1" style="width: 100%">
                    <input type="submit" class="btn btn-success">
                </form>














{/block}