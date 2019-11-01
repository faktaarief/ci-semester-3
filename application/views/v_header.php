<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome Spotify</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>bootstrap/css/layout.css">
</head>
<body>
<div id="wrapper">
    <header>
        <hgroup>
            <h1>Selamat Datang di Musik Spotify</h1>
            <h3>Dengarkan Stlye Musikmu Disini</h3>
</hgroup>
<nav>
    <ul>
        <li>
            <a href="<?php echo base_url().'index.php/web'?>">Home</a>
        </li>
        <li>
        <a href="<?php echo base_url().'index.php/welcomespotify'?>">Logout</a>
        </li>
    </ul>
</nav>
<div class="clear"></div>
</header>