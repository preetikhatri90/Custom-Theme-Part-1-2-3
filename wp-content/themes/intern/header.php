<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<?php wp_head();?>
<body id="top">
    <!-- ################################################################################################ -->
    <div class="wrapper row1">
        <header id="header" class="hoc clear">
            <div id="logo" class="fl_left"> 
            <!-- ################################################################################################ -->
            <h1 class="logoname"><a href="index.html">Chill<span>a</span>id</a></h1>
            <!-- ################################################################################################ -->
            </div>
            <nav id="mainav" class="fl_right"> 
                <?php
                // echo "test";
     
            wp_nav_menu([
                'theme_location' => 'primary', 
                'menu_class' => 'clear', 
                // 'echo' => false,
                 'container'=>false
                
                ]);
            




?>
















            <!-- ################################################################################################ -->
            </nav>
        </header>
    </div>
    <?php
   
