{extends file="../../layout.tpl"}
{block name=body}
    <h1> Admin =====> ItemsController====> IndexAction</h1>


    <div class="container">
        <h2>Update Item</h2>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Category name</th>
                <th>Category Number</th>
                <th>Image</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            {foreach $items as $item}
            <tr>
                <td>{$item['id']}</td>
                <td>{$item['name']}</td>
                <td>{$item['description']}</td>
                <td>{$item['price']}</td>
                <td>{$item['category_name']}</td>
                <td>{$item['category_id']}</td>
                <td><img src="/cdn/getItemImage/{$item['id']}" alt="" width="130px" height="100px"></td>
                <td><a href="/admin/items/remove/{$item['id']}">Delete</a></td>
            </tr>
            </tbody>
            {/foreach}

            </tbody>
        </table>
        <div style="width: 100%;text-align: center">
            <ul class="pagination">
                {for $i=1;$i<$pagination['pagesTotal'];$i++}
                    <li {if isset($smarty.get.page) && $smarty.get.page==$i}
                        class="active" {/if}><a href="/admin/items/index/?page={$i}">{$i}</a></li>
                {/for}

            </ul>
        </div>
    </div>
    <h2> Create Item</h2>


    <form action="/admin/items/create" method="post" style="width: 400px" enctype="multipart/form-data">
        <input type="text" name="name"  class="form-control" placeholder="Item Name">
        <input type="text" name="description" style="width: 100%" placeholder="Item Description"><br>
        <input type="number" name="price"  style="width: 100%" placeholder="Item Price"><br>
        <select class="selectpicker show-tick" style="width: 100%" name="category_id">
            {foreach $cats as $cat}

            <option  value="{$cat['name']}">{$cat['name']}</option>
            {/foreach}
        </select><br>
        <input type="file" name="file" value="Choose file">
        <input type="submit" class="btn btn-success">
    </form>










{/block}