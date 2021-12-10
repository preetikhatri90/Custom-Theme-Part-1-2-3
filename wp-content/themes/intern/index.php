
<?php
get_header();
?>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="bgded overlay" style="background-image:url('images/demo/backgrounds/01.png');">
        <div id="pageintro" class="hoc clear"> 
            <!-- ################################################################################################ -->
            <article>
            <h3 class="heading">Faucibus porttitor metus</h3>
            <p>In nibh nullam egestas velit laoreet nullam elementum ipsum pharetra suscipit leo augue pretium felis nisl vitae ipsum curabitur quis libero.</p>
            <footer><a class="btn" href="#">Tristique vehicula</a></footer>
            </article>
            <!-- ################################################################################################ -->
        </div>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="wrapper row3">
        <main class="hoc container clear"> 
            <!-- main body -->
            <!-- ################################################################################################ -->
            <section id="introblocks">
            <ul class="nospace group btmspace-80 elements elements-four">
                <li class="one_quarter">
                <article><a href="#"><i class="fas fa-hand-rock"></i></a>
                    <h6 class="heading">Feugiat fermentum</h6>
                    <p>Ac orci proin porttitor lacus eget mi pellentesque non.</p>
                </article>
                </li>
                <li class="one_quarter">
                <article><a href="#"><i class="fas fa-dove"></i></a>
                    <h6 class="heading">Malesuada accumsan</h6>
                    <p>Sapien sed metus congue sodales vivamus scelerisque.</p>
                </article>
                </li>
                <li class="one_quarter">
                <article><a href="#"><i class="fas fa-history"></i></a>
                    <h6 class="heading">Mauris placerat</h6>
                    <p>Et interdum vulputate purus nisl fringilla sapien quis.</p>
                </article>
                </li>
                <li class="one_quarter">
                <article><a href="#"><i class="fas fa-heartbeat"></i></a>
                    <h6 class="heading">Elementum rhoncus</h6>
                    <p>Sollicitudin dui mauris dui nunc lorem tortor pharetra.</p>
                </article>
                </li>
            </ul>
            </section>
            <!-- ################################################################################################ -->
            <section class="group shout">
            <figure class="one_half first"><img src="images/demo/546x356.png" alt="">
                <figcaption class="heading"><a href="#">Accumsan placerat</a></figcaption>
            </figure>
            <figure class="one_half"><img src="images/demo/546x356.png" alt="">
                <figcaption class="heading"><a href="#">Scelerisque etiam</a></figcaption>
            </figure>
            </section>
            <!-- ################################################################################################ -->
            <!-- / main body -->
            <div class="clear"></div>
        </main>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="bgded overlay light" style="background-image:url('images/demo/backgrounds/01.png');">
        <section id="services" class="hoc container clear"> 
            <!-- ################################################################################################ -->
            <div class="sectiontitle">
            <p class="nospace font-xs">Quis leo hendrerit lectus morbi</p>
            <h6 class="heading font-x2">News</h6>
            </div>
            <ul class="nospace group elements elements-three">
            <?php 
                    	$args= array(
                    	'post_type'=> 'news',
                    	'posts_per_page'=> 3

                    	);
                    	$the_query =new WP_Query($args);
                    	?>
                    	<?php if ($the_query->have_posts() ) : ?>
                    	<?php while ($the_query-> have_posts()): $the_query-> the_post();?>

            <li class="one_third">
                <article><a href="<?php the_permalink(); ?>"><i class="fas fa-hourglass-half"></i></a>
                <h6 class="heading"> <?php the_title(); ?></h6>
                <p> <?php the_content(); ?></p>
                </article>
            </li>
            <?php endwhile; ?>
                <?php endif; ?>
            </ul>
            <!-- ################################################################################################ -->
        </section>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="wrapper row3">
        <section class="hoc container clear"> 
            <!-- ################################################################################################ -->
            <div class="sectiontitle">
            <p class="nospace font-xs">Rutrum erat nec mollis augue mauris</p>
            <h6 class="heading font-x2">Ac pede phasellus commodo</h6>
            </div>
            <ul class="pr-charts nospace group center">
            <li class="pr-chart-ctrl" data-animate="false">
                <div class="pr-chart" data-percent="25"><i></i></div>
                <p>Porttitor</p>
            </li>
            <li class="pr-chart-ctrl" data-animate="false">
                <div class="pr-chart" data-percent="50"><i></i></div>
                <p>Condimentum</p>
            </li>
            <li class="pr-chart-ctrl" data-animate="false">
                <div class="pr-chart" data-percent="75"><i></i></div>
                <p>Sollicitudin</p>
            </li>
            <li class="pr-chart-ctrl" data-animate="false">
                <div class="pr-chart" data-percent="100"><i></i></div>
                <p>Venenatis</p>
            </li>
            </ul>
            <!-- ################################################################################################ -->
        </section>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="wrapper gradient">
        <div class="hoc container clear"> 
            <!-- ################################################################################################ -->
            <div class="sectiontitle">
            <p class="nospace font-xs">Purus ut mi sed velit urna ut</p>
            <h6 class="heading font-x2">Sapien posuere in iaculis</h6>
            </div>
            <ul class="nospace group team">
            <li class="one_third first">
                <figure><a class="imgover" href="#"><img src="images/demo/348x400.png" alt=""></a>
                <figcaption><strong>A. Doe</strong> <em>Euismod nec hendrerit</em></figcaption>
                </figure>
            </li>
            <li class="one_third">
                <figure><a class="imgover" href="#"><img src="images/demo/348x400.png" alt=""></a>
                <figcaption><strong>B. Doe</strong> <em>Vel velit aliquam massa</em></figcaption>
                </figure>
            </li>
            <li class="one_third">
                <figure><a class="imgover" href="#"><img src="images/demo/348x400.png" alt=""></a>
                <figcaption><strong>C. Doe</strong> <em>Vulputate aliquet purus</em></figcaption>
                </figure>
            </li>
            </ul>
            <!-- ################################################################################################ -->
        </div>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="wrapper coloured">
        <section id="testimonials" class="hoc container clear"> 
            <!-- ################################################################################################ -->
            <div class="sectiontitle">
            <p class="nospace font-xs">Maecenas ultrices faucibus felis</p>
            <h6 class="heading font-x2">Nunc lacus nulla luctus duis</h6>
            </div>
            <article class="one_half first">
            <figure class="clear"><img src="images/demo/100x100.png" alt="">
                <figcaption>
                <h6 class="heading">D. Doe</h6>
                <em>Adipiscing fusce eu velit</em></figcaption>
            </figure>
            <blockquote>Pulvinar tortor quis nisi in hac habitasse platea dictumst donec ac tellus fusce venenatis laoreet elit sed est tortor molestie in consectetuer fringilla suscipit ut odio ut ac.</blockquote>
            </article>
            <article class="one_half">
            <figure class="clear"><img src="images/demo/100x100.png" alt="">
                <figcaption>
                <h6 class="heading">E. Doe</h6>
                <em>Mauris erat aliquam leo</em></figcaption>
            </figure>
            <blockquote>Orci vitae dolor scelerisque blandit morbi eu dui sed volutpat etiam leo leo bibendum vel dictum sed sollicitudin a mi pellentesque ligula nulla facilisi sed bibendum ornare.</blockquote>
            </article>
            <!-- ################################################################################################ -->
        </section>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="wrapper row3">
        <section class="hoc container clear"> 
            <!-- ################################################################################################ -->
            <div class="sectiontitle">
            <p class="nospace font-xs">Lorem aenean nunc aenean sagittis</p>
            <h6 class="heading font-x2">Imperdiet massa maecenas</h6>
            </div>
            <ul id="latest" class="nospace group">
            <li class="one_third first">
                <article><a class="imgover" href="#"><img src="images/demo/348x261.png" alt=""></a>
                <ul class="nospace meta clear">
                    <li><i class="fas fa-user"></i> <a href="#">Admin</a></li>
                    <li><i class="fas fa-comments"></i> <a href="#">Comments (3)</a></li>
                </ul>
                <div class="excerpt">
                    <time datetime="2045-04-05T08:15+00:00">05 Apr 2045</time>
                    <p class="heading"><a href="#">Quam justo suscipit at blandit at blandit vitae tellus maecenas</a></p>
                </div>
                </article>
            </li>
            <li class="one_third">
                <article><a class="imgover" href="#"><img src="images/demo/348x261.png" alt=""></a>
                <ul class="nospace meta clear">
                    <li><i class="fas fa-user"></i> <a href="#">Admin</a></li>
                    <li><i class="fas fa-comments"></i> <a href="#">Comments (6)</a></li>
                </ul>
                <div class="excerpt">
                    <time datetime="2045-04-04T08:15+00:00">04 Apr 2045</time>
                    <p class="heading"><a href="#">Commodo mauris a semper posuere sem arcu cursus felis non cursus</a></p>
                </div>
                </article>
            </li>
            <li class="one_third">
                <article><a class="imgover" href="#"><img src="images/demo/348x261.png" alt=""></a>
                <ul class="nospace meta clear">
                    <li><i class="fas fa-user"></i> <a href="#">Admin</a></li>
                    <li><i class="fas fa-comments"></i> <a href="#">Comments (10)</a></li>
                </ul>
                <div class="excerpt">
                    <time datetime="2045-04-03T08:15+00:00">03 Apr 2045</time>
                    <p class="heading"><a href="#">Enim odio in odio suspendisse commodo suscipit nisi nam tellus</a></p>
                </div>
                </article>
            </li>
            </ul>
            <!-- ################################################################################################ -->
        </section>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="wrapper row2">
        <section id="ctdetails" class="hoc container clear"> 
            <!-- ################################################################################################ -->
            <div class="sectiontitle">
            <p class="nospace font-xs">Enim eleifend dignissim bibendum</p>
            <h6 class="heading font-x2">Id tristique id metus nulla</h6>
            </div>
            <figure class="one_half first">
            <ul class="nospace clear">
                <li class="block clear"><a href="#"><i class="fas fa-phone"></i></a> <span><strong>Give us a call:</strong> +00 (123) 456 7890</span></li>
                <li class="block clear"><a href="#"><i class="fas fa-envelope"></i></a> <span><strong>Send us a mail:</strong> support@domain.com</span></li>
                <li class="block clear"><a href="#"><i class="fas fa-map-marker-alt"></i></a> <span><strong>Come visit us:</strong> Directions to <a href="#">our location</a></span></li>
            </ul>
            </figure>
            <article class="one_half">
            <h6 class="heading">Purus nullam arcu integer</h6>
            <p class="nospace btmspace-15">Elementum nisi ac volutpat vestibulum enim mi tincidunt eros sed justo magna odio sed lacus ut non ante sit amet est luctus dictum ut dolor ac.</p>
            <form action="#" method="post">
                <fieldset>
                <legend>Newsletter:</legend>
                <input type="text" value="" placeholder="Name">
                <input type="text" value="" placeholder="Email">
                <button type="submit" value="submit">Submit</button>
                </fieldset>
            </form>
            </article>
            <!-- ################################################################################################ -->
        </section>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="bgded overlay row4" style="background-image:url('images/demo/backgrounds/01.png');">
    <?php
    get_footer();
