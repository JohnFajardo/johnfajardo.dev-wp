
<!-- sidebar -->

<div class="top-menu w-100 d-lg-none pt-3 text-center mb-3 py-1">
        <a class="navbar-brand" href="<?php echo get_bloginfo('wpurl'); ?>/"><img src="<?php echo get_template_directory_uri(); ?>/images/profile.png" alt=""></a>
        <h3><a class="title" href="<?php echo get_bloginfo('wpurl'); ?>/">John Fajardo</a></h3>
        <ul class="mr-auto list-inline text-center">
            <li class="list-inline-item"><a href="<?php echo get_bloginfo('wpurl'); ?>/">Home</a></li>
            <li class="list-inline-item"><a href="resume.html">Resume</a></li>
            <li class="list-inline-item"><a href="projects.html">Projects</a></li>
            <li class="list-inline-item"><a href="mailto:fajardocj@gmail.com">Contact</a></li>
        </ul>
    </div>
        
    <div class="row h-100 ml-0 mr-0">
        <div class="col-lg-3 h-100 fixed-top d-lg-flex d-none align-items-center sidebar">
            <div class="sidebar-content">
                <a href="<?php echo get_bloginfo('wpurl'); ?>/"><img class="profile" src="<?php echo get_template_directory_uri(); ?>/images/profile.png" alt=""></a>
                <h3><a class="title" href="<?php echo get_bloginfo('wpurl'); ?>/">John Fajardo</a></h3>
                <p>Full stack web developer</p>
                <ul>
                    <li><a class="active" href="<?php echo get_bloginfo('wpurl'); ?>/">Home</a></li>
                    <li><a href="resume.html">Resume</a></li>
                    <li><a href="projects.html">Projects</a></li>
                    <li><a href="mailto:fajardocj@gmail.com">Contact</a></li>
                </ul>
            </div>
        </div>
        <?php dynamic_sidebar('custom_sidebar'); ?>
        <?php wp_nav_menu( array( 'theme_location' => 'Header Menu' ) ); ?>
        
    </div>


    <!-- sidebar -->