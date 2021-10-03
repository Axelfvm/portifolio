<?php
include('./includes/config.php');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<nav>
    <a href="?profile"><div class="me"></div></a>
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