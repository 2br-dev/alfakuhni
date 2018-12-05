{if $projects && $uri[0] != ''}
<section class="realised">
    <a href="/" class="link-btn-nav">← на главную </a>
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
{if $uri[0] == ''}
<section class="realised realised-main">
    <h1 class="topic" style="margin-top: 120px;">
    Реализованные проекты
    </h1>
    <div class="projects-slider">
        {foreach from=$projects item=sort}
        <div class="projects-container" style="text-align: center;">
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
        </div>
        {/foreach}
    </div>
</section>    
    <div class="hint">
        <img src="img/1.jpg" alt="Лучшая мебель">
        <div class="bordered">
            <p>В нашей мебели используется лучшая немецкая, австрийская и итальянская фурнитура со сроком эксплуатации 25 лет и более.</p>
            <p>Широкий ассортимент встраиваемой техники различных брендов от эконом до премиум.</p>
            <p>Используем всё внутреннее пространство кухонной мебели, задействуя мертвые зоны системами выдвижения и трансформации.</p>
        </div>
    </div>
    <h2 class="topic">Кухня от и до</h2>
    <div class="result">
        <div class="result-description wow slideInLeft">Столешницы</div>
        <div class="result-img wow slideInLeft" data-wow-delay="1.5s">
        	<img src="img/icons/triangle.png">
        		</div>
        <div class="result-description wow slideInLeft" data-wow-delay="1.2s">Фурнитура</div>
        <div class="result-img wow slideInLeft" data-wow-delay=".9s">
                <img src="img/icons/triangle.png">
        		</div>
        <div class="result-description wow slideInLeft" data-wow-delay=".6s">Освещение</div>
         <div class="result-img wow slideInLeft" data-wow-delay=".3s">
                    <img src="img/icons/triangle.png">
        		</div>
        <div class="result-img wow slideInRight">
                        <img src="img/icons/triangle.png">
         		</div>
         <div class="result-description wow slideInRight" data-wow-delay=".3s">Бытовая техника</div>
         <div class="result-img wow slideInRight" data-wow-delay=".6s">
                            <img src="img/icons/triangle.png">
          		</div>
          <div class="result-description wow slideInRight" data-wow-delay=".9s">Внутренне наполнение</div>
          <div class="result-img wow slideInRight" data-wow-delay="1.2s">
                                <img src="img/icons/triangle.png">
            	</div>
            <div class="result-description wow slideInRight" data-wow-delay="1.5s">Сантехника</div>
     </div>
{/if}