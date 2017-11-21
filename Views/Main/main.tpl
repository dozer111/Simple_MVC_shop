{extends file="../Main/main.tpl"}
{block name=title}MainControllerTitle {/block}
{block name=body}HTML resource of MAIN CONTROLLER

    <div class="row">
        <div class="col-sm-3 col-md-3">
            <ul class="list-group">
                {foreach $categories as $category}
                <li class="list-group-item"
                        {if isset($categoryId) && $category['id']===$categoryId}style="background-color: silver" {/if}>
                    <a href="/category/show/{$category['id']}">{$category['name']}</a></li>
                {/foreach}
            </ul>
        </div>

        <div class="row col-sm-9 col-md-9">
            {foreach $items as $item}
        <div class="col-sm-3 col-md-3">
                <div class="thumbnail">
                    <img alt="100%x200" data-src="holder.js/100%x200"
                         src="/cdn/getItemImage/{$item['id']}"
                         data-holder-rendered="true" style="height: 200px; width: 250px; display: block;">
                        <div class="caption">
                        <h3>{$item['name']}</h3>
                        <p>{$item['id']}===>{$item['name']}</p>
                        <h3>{$item['price']}</h3>
                        <p ></p>
                        <p><a href="/main/show/{$item['id']}" class="btn btn-primary" role="button">About</a>
                    </div>
                </div>
            </div>
        {/foreach}
    </div>
        </div>


{/block}