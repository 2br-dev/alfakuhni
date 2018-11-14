{strip}
<section itemscope itemtype="http://schema.org/Organization" class='navigation navigation-footer'>
	<span itemprop="name" style="display: none">Альфа Кухни</span>
    <div class="navigation-container container">
        {if $uri[0] == ''}
        <a class="navigation-logo-small" href="#top"><img src="/img/icons/logo.png" alt="Альфа Кухни"></a>
        <a href="#top" class="navigation-logo"><img style="transform: translateY(15px); margin-top: -10px" src="/img/logo.jpg" alt="Альфа Кухни"></a>
        {else}
        <a class="navigation-logo-small" href="/"><img src="/img/icons/logo.png" alt="Альфа Кухни"></a>
        <a href="/" class="navigation-logo"><img style="transform: translateY(15px); margin-top: -10px" src="/img/logo.jpg" alt="Альфа Кухни"></a>
        {/if}
        <p class="navigation-text">Комплексные решения по организации кухонного пространства</p>
        <div class="navigation-social">
            <a href="https://www.youtube.com/channel/UC6niqmKGGTzyq9fTOCAgiKQ">
            <span class="navigation-social-youtube"></span>
            </a>
            <a href="https://www.instagram.com/kuhnialfa/">
            <span class="navigation-social-instagram"></span>
            </a>
        </div>
        <div class="navigation-contacts" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
            <a href="tel:+79180741974" class="link"><span itemprop="telephone">+7-918-074-19-74</span></a>
            <p><span itemprop="addressLocality">г. Краснодар</span>, <span itemprop="streetAddress">ул. Дачная, 268</span></p>
        </div>
    </div>
</section>
{/strip}
