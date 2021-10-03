<?php
include('./includes/config.php');
include('./includes/lib/class/verifi_page.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?= $title ?></title>
        <link href="includes/css/general.main.css" rel="stylesheet" type="text/css"/>
        <link href="includes/css/particle.main.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>

        <?php include('./includes/lib/page/nav.php'); ?>
        <div class="center">


            <div class="dat">
                <div class="content">


                    
                        <?php
                        if (isset($_GET['page'])) {
                            $pagCon = $_GET['page'];
                            $loadPage = '';
                            if ($pagCon == 'about') {
                                $loadPage = include ('./includes/lib/page/about.php');
                            } else if ($pagCon == 'login') {
                                $loadPage = include ('./includes/lib/page/login.php');
                            } else {
                                $loadPage = include ('./includes/lib/page/home.php');
                            }
                        } else {
                            $loadPage = include ('./includes/lib/page/home.php');
                        }
                        ?>
                 
                </div>
            </div>

        </div>

    </body>
    <script src="includes/js/particle.js" type="text/javascript"></script>
    <script src="includes/js/general.main.js" type="text/javascript"></script>
</html>