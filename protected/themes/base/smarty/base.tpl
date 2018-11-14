{strip}
{include file="./components/meta.tpl"}
{include file="./components/header.tpl"}

{$_page.content}

{if $uri[0] == ''}
{include file="./components/mainpagebottom.tpl"}
{/if}

{include file="./components/footer.tpl"}
{include file="./components/scripts.tpl"}
{/strip}
                          