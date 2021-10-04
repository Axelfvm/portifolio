<?php
include('./includes/config.php');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<nav class="desktop-nav">
    <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
    <a href="?page=profile"><div class="me"></div></a>
    <h2 style="color: #f44336;"><?= $nameDev ?></h2>
    <hr>
    <ul>
        <a href="index.php"><li><p>Home</p></li></a>
        <a href="<?= $github ?>" target="_blank"><li><p>GitHub</p></li></a>
        <a href="?page=about"><li><p>Sobre</p></li></a>
    </ul>
    <ul class="ulFinal" sytle="position: absolute; bottom: 0;">
        <a href="?page=login"><li>Login</li></a>
    </ul>


</nav>


<nav role="navigation" class="mobile-nav">
    <div id="menuToggle">
        <!--
        A fake / hidden checkbox is used as click reciever,
        so you can use the :checked selector on it.
        -->
        <input type="checkbox" />

        <!--
        Some spans to act as a hamburger.
        
        They are acting like a real hamburger,
        not that McDonalds stuff.
        -->
        <span></span>
        <span></span>
        <span></span>

        <!--
        Too bad the menu has to be inside of the button
        but hey, it's pure CSS magic.
        -->
        <ul id="menu">
            <a href="index.php"><li><p>Home</p></li></a>
            <a href="index.php?page=profile"><li>Perfil</li></a>
            <a href="<?= $github ?>" target="_blank"><li><p>GitHub</p></li></a>
            <a href="?page=about"><li><p>Sobre</p></li></a>
            <a href="?page=login"><li>Login</li></a>
        </ul>
    </div>
</nav>