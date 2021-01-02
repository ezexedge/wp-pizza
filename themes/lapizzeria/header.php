<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?>
    <title>Document</title>
</head>
<body>
   <header class="site-header">
        <div class="logo">
                <a href="<?php echo esc_url(home_url('/'));?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="">
                </a>
        </div>
        <div class="informacion-header">
            <div class="redes-sociales">

            </div>
            <div class="direccion">
                <p>vedia mitre 2841</p>
                <p>telefono: 1323 </p>
            </div>
        </div>
    
   
   </header>