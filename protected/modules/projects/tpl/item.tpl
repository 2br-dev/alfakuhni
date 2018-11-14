{strip}
<section class="realised-projects">
	<div class="container">
		<a href="/realizovannye-proekty" class="link-btn">← к проектам </a>
		<h1 class="topic">{$projects.title}</h1>
		<div class="realised-projects-price">
			<div>
				<p>Цена кухни со всеми механизмами составила:</p>
				<p>{$projects.price}</p>
			</div> 
			{if $projects.tech}
			<div>
				<p>Стоимость техники:</p>
				<p>{$projects.tech}</p>
			</div>
			{/if}
		</div>
	</div>

	<!-- <div class="realised-projects-img">
		{foreach from=$projects.image_back item=img}
		<img src="{$img.original.file}" alt="{$projects.title}">
		{/foreach}
		<div class="bordered">
			<p>{$projects.title}</p>
			<div class="bordered-desc">{$projects.innerdesc}</div>
			<div class="bordered-tech">{$projects.innertech}</div>
		</div>
	</div> -->
	
	<div class="bordered">
			<p>{$projects.title}</p>
			<div class="bordered-desc">{$projects.innerdesc}</div>
			<div class="bordered-tech">{$projects.innertech}</div>
	</div>

	<div class="realised-projects-photos">
		{foreach from=$projects.image_file item=img}
		<div class="realised-projects-photos-item">
			<a href="{$img.original.file}"><img src="{$img.sm.file}" alt="{$projects.title}"></a>
		</div>
		{/foreach}
	</div>

	<div class="container">	
		<h2 class="topic">Видео о проекте:</h2>
		<iframe src="{$projects.video}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div>

</section>	
{/strip} 

