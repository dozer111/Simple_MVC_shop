{extends file="../../layout.tpl"}
{block name=body}
    <ul style="font-size: 30px">
    {foreach $categories as $category}
        <li><a href="/category/index/category/{$category['id']}">{$category['name']}</a></li>



        {/foreach}

    </ul>

    {/block}