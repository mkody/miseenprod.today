<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Language" content="fr">
        <title><?php echo $html_title; ?></title>
        <link href="web/css/style.css" media="all" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container">
            <h1><?php echo $html_title; ?></h1>
            <div class="image-warp">
                <img title="" src="<?php echo $html_gif; ?>" />
            </div>
            <p><?php echo $html_message; ?></p>
            <div class="share">

            </div>
            <small><i><?php echo $html_notice; ?></i></small>
        </div>
    </body>
</html>