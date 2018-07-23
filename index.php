<?php get_header(); ?>
<?php get_template_part("noibat"); ?>
<?php get_template_part("moinhat"); ?>
<?php get_template_part("sidebar"); ?>
        <section>
           <?php get_template_part("portfolio"); ?>

            <div id="about-us" class="wrap-inner">
                <div class="row about-title">
                    <h2 class="regular white">About us</h2>
                    <p class="regular white">Lorem ipsum dolr sit amet, consectetuer adipiscing elit</p>
                </div>
                <div class="row about-list-post">
                    <div class="col-xs-12 col-sm-12 col-md-4 about-post">
                        <div class="about-img"><img src="<?php bloginfo("template_directory") ?>/img/avata1.png"></div>
                        <div class="about-text">
                            <span>Melanie Doe</span>
                            <p class="italic">Project Manager</p>
                            <p class="regular text-left">Ut wisi enim ad minim veniam,quis nostrud exerci tation ullamcorper suscipit lobortis nislut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-4 about-post">
                        <div class="about-img"><img src="<?php bloginfo("template_directory") ?>/img/avata2.png"></div>
                        <div class="about-text">
                            <span>Jhonnie Doe</span>
                            <p class="italic">Graphic Designer</p>
                            <p class="regular text-left">Ut wisi enim ad minim veniam,quis nostrud exerci tation ullamcorper suscipit lobortis nislut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-4 about-post">
                        <div class="about-img"><img src="<?php bloginfo("template_directory") ?>/img/avata3.png"></div>
                        <div class="about-text">
                            <span>Daniel Doe</span>
                            <p class="italic">Web Designer</p>
                            <p class="regular text-left">Ut wisi enim ad minim veniam,quis nostrud exerci tation ullamcorper suscipit lobortis nislut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>

     <?php get_footer(); ?>   