{if $projects}
<section class="realised">
    <h1 class="topic">
        Реализованные проекты
    </h1>

    <div class="projects-container">
        {foreach from=$projects item=sort}
        <div class="projects">
            <div class="projects-text">
                <p class="projects-text-price">{$sort.title}</p>
                <div><a href="/realizovannye-proekty/{$sort.system}" class="link-btn">Узнать больше</a></div>
                <p>{$sort.desc}</p>
                <p class="projects-text-price">{$sort.price}</p>
                {if $sort.tech}
                    <p>Стоимость техники</p>
                    <p class="projects-text-price">{$sort.tech}</p>
                {/if}    
            </div>
            {foreach from=$sort.image_file item=img}
            <a href="{$img.original.file}""><img src="{$img.sm.file}" alt="{$sort.title}"></a>
            {break}
            {/foreach}
    	</div>
        {/foreach}
    </div>
</section>
{/if}