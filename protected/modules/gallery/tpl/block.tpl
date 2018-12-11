{strip}
{if $gallery}
<h2 class="topic">Галерея</h2>
<div class="gallery-slider">
    {foreach from=$gallery item=sort}
    <div>
        <div class="gallery">
        <div class="gallery-image">
            {foreach from=$sort.image_file item=img}
            <a href="{$img.original.file}"><img src="{$img.sm.file}" alt="{$sort.model}"></a>
            {/foreach}
            {if $sort.price}
            <div class="gallery-price">{$sort.price}</div>
            {/if}
        </div>
        <div class="bordered">
            <div>
                <p class="gallery-header">Модель:</p>
                <p>{$sort.model}</p>
            </div>
            <div>
                {if $sort.category}
                <p class="gallery-header">Категория:</p>
                <p>{$sort.category}</p>
                {/if}
            </div>
            <div>
                {if $sort.material}
                <p class="gallery-header">Материал фасада:</p>
                <p>{$sort.material}</p>
                {/if}
            </div>
            <div>
                {if $sort.color}
                <p class="gallery-header">Цвет:</p>
                <p>{$sort.color}</p>
                {/if}
            </div>
            <div>
                {if $sort.elements}
                <p class="gallery-header">Декоративные элементы:</p>
                <p>{$sort.elements}</p>
                {/if}
            </div>
            <div>
                {if $sort.vitrage}
                <p class="gallery-header">Витраж:</p>
                <p>{$sort.vitrage}</p>
                {/if}
            </div>
        </div>
    </div>
    </div>
    
    {/foreach}
</div>
<div class="container">
    <div class="link-btn gallery-btn wow zoomInUp"><a href="/realizovannye-proekty"> Посмотреть реализованные проекты </a></div>
</div>
{/if}
{/strip}