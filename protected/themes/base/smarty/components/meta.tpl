<!DOCTYPE html>
{strip}
<html lang="{$_page.lang}">
<head>
	{if $uri[0] == ''}
	<title>Кухни Альфа | Главная</title>
	{else} 
	<title>Реализованные Проекты</title>
	{/if}

	<meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

	{* type   = 'inline' *}

    <meta content="{$_page.robots}" name="robots">
    <meta content="{$_page.keywords}" name="keywords">
    <meta content="{$_page.description}" name="description" itemprop="description">
    <meta name="author" content="serhserhserh">

	{if isset($pagination.prev) && $pagination.prev !== ''}
		<link rel="prev" href="?page={$pagination.prev}">
	{/if}

	{if isset($pagination.next) && $pagination.next !== ''}
		<link rel="next" href="?page={$pagination.next}">
	{/if}
	<link href="https://fonts.googleapis.com/css?family=Oswald:300,500" rel="stylesheet">
	<link rel="home" href="/">
	<link rel="icon" type="image/x-icon" href="/img/icons/favicon.png">

	<!-- CSS -->
	<link type="text/css" rel="stylesheet" href="/css/normalize.css" >
	<link type="text/css" rel="stylesheet" href="/css/style.css" >
	<link type="text/css" rel="stylesheet" href="/css/1280.css" >
	<link type="text/css" rel="stylesheet" href="/css/1024.css" >
	<link type="text/css" rel="stylesheet" href="/css/768.css" >
	<link type="text/css" rel="stylesheet" href="/css/640.css" >
	<link type="text/css" rel="stylesheet" href="/css/480.css" >
	<link type="text/css" rel="stylesheet" href="/css/320.css" >
	<link type="text/css" rel="stylesheet" href="/css/small.css" >

    <link rel="stylesheet" type="text/css" href="/apps/libs/slick/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="/apps/libs/slick/slick/slick-theme.css" />
   	<link rel="stylesheet" href="/apps/libs/simplelightbox-master/dist/simplelightbox.min.css">
   	<link rel="stylesheet" href="/apps/libs/wowjs/css/libs/animate.css">
    
</head>
<body class="page-{$_page.system}">
{/strip}