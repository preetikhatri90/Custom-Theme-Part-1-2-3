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
            <!-- ################################################################################################ -->
            <ul class="clear">
                <li class="active"><a href="index.html">Home</a></li>
                <li><a class="drop" href="#">Pages</a>
                <ul>
                    <li><a href="pages/gallery.html">Gallery</a></li>
                    <li><a href="pages/full-width.html">Full Width</a></li>
                    <li><a href="pages/sidebar-left.html">Sidebar Left</a></li>
                    <li><a href="pages/sidebar-right.html">Sidebar Right</a></li>
                    <li><a href="pages/basic-grid.html">Basic Grid</a></li>
                    <li><a href="pages/font-icons.html">Font Icons</a></li>
                </ul>
                </li>
                <li><a class="drop" href="#">Dropdown</a>
                <ul>
                    <li><a href="#">Level 2</a></li>
                    <li><a class="drop" href="#">Level 2 + Drop</a>
                    <ul>
                        <li><a href="#">Level 3</a></li>
                        <li><a href="#">Level 3</a></li>
                        <li><a href="#">Level 3</a></li>
                    </ul>
                    </li>
                    <li><a href="#">Level 2</a></li>
                </ul>
                </li>
                <li><a href="#">Link Text</a></li>
                <li><a href="#">Link Text</a></li>
                <li><a href="#">Link Text</a></li>
            </ul>
            <!-- ################################################################################################ -->
            </nav>
        </header>
    </div>
    <?php
    echo 'header new executed';
