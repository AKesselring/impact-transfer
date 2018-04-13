
	<? $pll_current_language = pll_current_language(); ?>

<!-- 	<section class="newsletter">
		
		<h3><?php the_field('newsletter_headline', 'option'); ?></h3>

		<p><?php the_field('newsletter_intro', 'option'); ?></p>
			
		<a href="<?php the_field('newsletter_link', 'option'); ?>" class="btn">Sign up!</a>

	</section> -->


	<footer class="footer">

		<div class="footer-nav wrapper">

			<nav class="footer-nav-item footer-nav-menu">
				
				<h5><?php pll_e('Navigation'); ?></h5>

				<?php wp_nav_menu( array( 'theme_location' => 'footer', 'container' => '' ) ); ?>

			</nav>

			<?php if(have_rows('footer_downloads', 'option')): ?>
			<nav class="footer-nav-item footer-nav-downloads">
				
				<h5><?php pll_e('Downloads'); ?></h5>

				<ul class="menu">


						<?php while(the_repeater_field('footer_downloads', 'option')): ?>
								   	
					       <li class="menu-item">

					       		<a href="<?php the_sub_field('footer_downloads_file'); ?>"><? the_sub_field('footer_downloads_filename'); ?></a>
					          
					       </li>
					       
					    <?php endwhile; ?>

				</ul>

			</nav>
			<?php endif; ?>

			<?php if(have_rows('footer_jobs', 'option')): ?>
			<nav class="footer-nav-item footer-nav-jobs">
				
				<h5><?php pll_e('Job-Angebote'); ?></h5>

				<ul class="menu">


						<?php while(the_repeater_field('footer_jobs', 'option')): ?>
								   	
					       <li class="menu-item">

					       		<a href="<?php the_sub_field('footer_downloads_file'); ?>"><? the_sub_field('footer_downloads_filename'); ?></a>
					          
					       </li>
					       
					    <?php endwhile; ?>


				</ul>

			</nav>
			<?php endif; ?>

			<?php if(have_rows('footer_social_media', 'option')): ?>
			<nav class="footer-nav-item footer-nav-social">
				
				<h5><?php pll_e('Social'); ?></h5>

				<ul class="menu">

					<?php while(the_repeater_field('footer_social_media', 'option')): ?>
							   	
				       <li class="menu-item">

				       		<a href="<?php the_sub_field('footer_social_media_url'); ?>"><? $field = get_sub_field_object('footer_social_media_channel'); $value = get_sub_field('footer_social_media_channel'); $label = $field['choices'][ $value ]; echo $label; ?></a>
				          
				       </li>
				       
				    <?php endwhile; ?>

				</ul>

			</nav>
			<?php endif; ?>

			<nav class="footer-nav-item footer-nav-contact">
				
				<h5><?php pll_e('Contact'); ?></h5>

				<?php the_field('footer_contact', 'option'); ?>

			</nav>

			<a href="https://www.ashoka.org/" class="footer-logo">
				
				<svg xmlns="http://www.w3.org/2000/svg" version="1.1" id="Layer_1" x="0" y="0" width="841.89" height="595.28" viewBox="0 0 841.89 595.28" enable-background="new 0 0 841.89 595.28" xml:space="preserve" preserveAspectRatio="xMidYMin meet">
				  <path d="M266.46 566.44l-3.71-13.19 -3.71 13.19H266.46zM268.85 576.39h-12.14l-2.78 8.95h-11.34l14.12-45.48h14.72l14.26 45.49h-14.26L268.85 576.39z"/>
				  <path d="M316.05 569.82c1.2 4.05 4.25 5.51 8.29 5.51 1.79 0 5.37-0.26 5.37-2.78 0-2.78-3.51-3.31-5.57-3.71 -8.56-1.66-18.7-3.98-18.7-14.79 0-4.44 2.19-8.82 5.83-11.4 3.71-2.58 8.55-3.44 13.06-3.44 7.89 0 15.52 3.25 18.3 11.14l-11.54 3.51c-1.33-3.37-3.85-4.57-7.37-4.57 -1.85 0-4.51 0.53-4.51 2.91 0 2.39 3.32 2.85 5.04 3.25 4.31 0.86 8.88 1.59 12.86 3.65 4.45 2.39 6.77 6.63 6.77 11.6 0 10.95-10.87 15.32-20.29 15.32 -9.55 0-18.04-3.98-20.49-13.86L316.05 569.82z"/>
				  <polygon points="404.7 585.33 390.77 585.33 390.77 567.63 380.03 567.63 380.03 585.33 366.1 585.33 366.1 539.85 380.03 539.85 380.03 556.62 390.77 556.62 390.77 539.85 404.7 539.85 "/>
				  <path d="M440.89 562.79c0 4.38 0.46 12.8 6.83 12.8 6.37 0 6.83-8.42 6.83-12.79 0-4.44-0.66-13.33-6.83-13.33C441.55 549.46 440.89 558.35 440.89 562.79M469.47 562.72c0 12.94-7.96 23.28-21.75 23.28 -13.79 0-21.75-10.34-21.75-23.28 0-13.59 7.89-23.53 21.75-23.53C461.58 539.19 469.47 549.13 469.47 562.72"/>
				  <polygon points="516.41 585.33 508.59 568.16 503.81 574.79 503.81 585.33 490.69 585.33 490.69 539.85 503.81 539.85 503.81 558.61 516.41 539.85 528.94 539.85 517.47 556.49 531.72 585.33 "/>
				  <path d="M572.1 566.44l-3.71-13.19 -3.71 13.19H572.1zM574.49 576.39h-12.14l-2.78 8.95h-11.34l14.12-45.48h14.72l14.26 45.49H577.07L574.49 576.39z"/>
				  <path d="M657.78 208.39c-2.13 2.48-10.64 5.67-12.06 1.78 -1.42-3.9-5.32 6.03-9.22 3.9 -3.9-2.13-14.54-6.38-15.25-2.48 -0.71 3.91-4.97 7.45-6.74 5.32 -1.77-2.13-8.86-9.93-6.03-12.06 2.83-2.13 3.91-8.16-1.42-6.38 -5.32 1.77-4.26-9.58 0-11.71 2.73-1.36 3.91-2.84 6.39 1.06 2.48 3.9 6.03-0.71 6.03-3.54 0-2.84 2.48-6.74 4.97-6.74s9.94 2.83 12.77 7.45c2.84 4.61 4.26 12.41 8.51 13.48C649.98 199.52 659.91 205.91 657.78 208.39M601.38 214.07c-6.38-2.48-2.84 9.94-10.99 5.32 -8.16-4.61-8.51-6.74-8.87-11 -0.35-4.26-12.77-4.61-0.71-10.64 3.19-1.6 10.65-2.13 10.29 1.42 -0.35 3.49-9.94 5.98 0.71 6.74 9.94 0.71-6.03 4.97 14.9 3.55C609.56 209.26 607.77 216.56 601.38 214.07M581.52 243.87c-3.91 1.41-5.32 3.54-6.74 1.77 0 0 5.68-8.16 7.81-7.45C584.71 238.9 585.42 242.45 581.52 243.87M573.01 254.51c-4.61 4.97-3.55 7.45-1.77 10.64 1.77 3.2-10.64-6.03-4.61-14.19C568.32 248.66 577.61 249.54 573.01 254.51M563.07 199.17c-3.9-1.42-0.35-8.87 1.78-13.48 1.6-3.46 2.13-9.22 5.67-4.61 3.55 4.61 1.78 9.57-0.35 12.41C568.04 196.33 571.09 202.08 563.07 199.17M557.4 193.26c-2.49 0-4.52-1.8-4.52-4.02 0-2.22 2.03-4.02 4.52-4.02s4.52 1.8 4.52 4.02C561.91 191.45 559.89 193.26 557.4 193.26M557.04 265.15c-1.42 1.77-2.48-4.61-6.74-4.26 -4.26 0.36-8.86-1.77-6.38-6.38 0 0 7.45-2.48 10.29 1.78C557.04 260.54 558.46 263.37 557.04 265.15M542.86 191.72c-2.48 1.78-2.48-2.48-9.93 1.78 -7.45 4.26-7.81-1.42-6.39-3.9 2.76-4.82 4.61-6.38 8.87-6.38 4.26 0 12.41-3.55 13.84 3.19 1.42 6.74 8.78 15.52 5.32 16.68C546.04 205.91 545.33 189.95 542.86 191.72M533.54 311.13c-5.51-4.19 0.37-5.03 0.37-5.03s2.95 0.28 3.97 1.57C540.18 310.55 539.05 315.33 533.54 311.13M536.33 346.55c-2.64 1.9-8.46 1.36-5.24-3.01 3.23-4.38 5.89-0.04 5.89-0.04S537.51 345.69 536.33 346.55M524.76 301.33c-1.78-0.35-8.51-4.97-13.48-4.97 -4.97 0-8.51 3.2-9.57-1.41 -0.56-2.45 4.96-5.68 7.45-6.74 2.48-1.06 7.45-3.9 8.51-6.74 1.06-2.84 4.61-3.9 5.67 1.78 1.06 5.67 14.19 9.93 12.77 13.84C534.7 300.97 526.54 301.68 524.76 301.33M528.35 343.9c0 0-1.77 1.42-3.04 0.71 -2.85-1.59-4.83-7.1 0.51-6.03C531.15 339.65 528.35 343.9 528.35 343.9M517.67 312.33c-2.84-1.78-7.45-1.07-8.51 1.77 -1.07 2.84-5.33 6.39-8.87 2.48 -3.55-3.9-1.42-12.77 4.96-8.87 3.27 1.99 14.9-6.38 16.32-4.26C522.99 305.58 520.51 314.1 517.67 312.33M519.22 336.42c-0.31 3.26 0.25 6.26-2.25 4.29 -2.13-1.67-1.73-11.24 1.36-9.44S519.53 333.17 519.22 336.42M497.8 153.06c-4.97 3.19-7.09 2.84-9.57 2.48 -2.48-0.36-3.19 5.68-5.68 0.36 -1.09-2.34 9.22-6.03 12.77-6.03 3.55 0 6.39-6.03 8.51-2.84 2.13 3.2 2.13 9.94-1.42 13.13C496.71 165.28 501.39 150.76 497.8 153.06M484.22 301.52c-5.54-1.62-14.97 1.81-9.21-4.99 4.35-5.13 5.85-12.61 10.38-6.2C487.34 293.1 493.66 304.28 484.22 301.52M483.98 328.64c-3.55-0.35-9.25-8.32-7.45-8.52 3.2-0.35 6.74-2.48 9.22 0.36C488.23 323.32 487.52 329 483.98 328.64M469.43 345.67c-6.74 10.65-13.13 5.32-14.55 3.9 -1.42-1.41-6.38-11.35-0.7-15.25 3.52-2.42 3.9-9.58 9.58-4.96C469.43 333.96 476.17 335.03 469.43 345.67M442.11 289.98c3.12-2.91 0.36-8.51 7.09-3.9 6.75 4.61 4.61 10.29 1.78 10.64C448.14 297.08 436.8 294.95 442.11 289.98M433.96 280.4c-1.07-4.26-2.13-7.09 0-9.93 0.94-1.27 6.38-2.48 7.44-0.71 1.07 1.77 6.39 2.13 6.74 5.32 0.36 3.19-6.03 3.19-7.44 4.61C439.27 281.11 435.02 284.65 433.96 280.4M435.72 323.32c-4.96 3.55-10.64 6.75-13.47 3.19 -2.84-3.54-6.03-5.67-9.58-7.09 -3.54-1.42-2.48-11.35-1.06-12.42 1.82-1.36 5.67-1.77 8.87-1.42 3.19 0.36 12.77 0.71 15.96 7.1C439.63 319.06 440.7 319.77 435.72 323.32M399.19 269.76c-1.77-4.97 3.91-10.29 4.61-11.71 0.72-1.42 5.67-8.16 9.93-4.62 4.27 3.55-2.12 6.75-2.48 9.58 -0.35 2.84 3.9-1.06 6.39 8.87 2.48 9.93-6.96 4.31-9.58 7.09C402.74 284.65 400.97 274.73 399.19 269.76M395.69 190.57c-2.79-1.2-1.73-4.12-0.54-6.25 1.2-2.13 3.6-0.54 3.6-0.54 0.13 0.67 3.86 4.66 2.79 5.99S398.49 191.77 395.69 190.57M387.13 144.19c-3.9 0.71-4.96-6.03 0-6.38 4.97-0.36 7.45 8.16 7.09 9.22C393.26 149.92 391.03 143.48 387.13 144.19M392.45 178.59c0 4.97-1.42 8.16-4.26 8.16 -2.83 0-9.23 3.3-11.71 3.55 -3.54 0.36-0.35 1.42-5.68-2.48 -5.31-3.9-2.48-1.42 1.07-6.73 3.55-5.32 5.68-1.78 13.83-5.32C393.87 172.21 392.45 173.63 392.45 178.59M379.33 330.77c-2.84 0.36-8.16-5.67-11.36-5.32 -3.19 0.36-5.67 6.39-10.99 4.97 -5.32-1.42-8.52-5.68-8.16-9.58 0.35-3.91-3.19-6.39 0.35-9.22 3.24-2.58 8.51 7.45 12.42 3.9 3.9-3.55 7.45-2.84 11.35-2.84 3.91 0 17.74 2.13 17.02 8.16C389.26 326.87 382.17 330.42 379.33 330.77M344.92 283.24c-3.97-1.59-6.74-7.1 0.71-6.03 7.45 1.07 3.55 5.32 3.55 5.32S346.69 283.95 344.92 283.24M350.97 283.98c2.69-3.31 7.93 0.14 7.93 0.14 1.51 2.63 2.42 8.23-0.66 6.94S348.28 287.29 350.97 283.98M388.55 222.23c1.78 2.83 1.78 6.03-1.42 4.96 -3.19-1.07-4.96 1.07-7.45 1.78 -2.48 0.71-7.78-1.25-7.45-4.26C372.94 218.33 386.78 219.39 388.55 222.23M381.46 270.47c1.06 4.97-0.35 7.1-3.54 6.38 -3.19-0.71-4.26 3.9-10.28 4.61 -6.03 0.71-11.18-8.69-11.18-11.53 2.13-3.55 11.18-3.73 15.08-6.21C375.43 261.25 380.39 265.51 381.46 270.47M353.79 226.12c0.71-7.09 2.84-1.77 6.74 0 3.91 1.78 11.71 4.26 0.72 6.75C357.76 233.65 353.08 233.22 353.79 226.12M360.52 88.5c3.63-3.62 2.85 3.19 9.23 3.55 6.38 0.36 16.64 0.01 16.31 4.26 -0.71 9.22 13.9 7.1 13.48 11.71 -0.71 7.8-9.58 9.22-10.64 11.35 -1.06 2.13-8.16 0.71-7.45 8.16 0.72 7.45-5.67-1.25-6.74-4.26 -2.12-6.03 6.39-9.22 4.97-12.41 -1.41-3.19-7.09 5.67-10.28 2.13 -3.19-3.55-7.1-0.71-4.26-7.81 2.83-7.09 1.06-6.03-2.48-7.45C359.11 96.3 359.11 89.91 360.52 88.5M373.65 74.31c4.62 1.06 13.48 2.83 12.41 7.8 -1.06 4.97-4.61 6.38-6.38 2.84 -1.77-3.55-0.35-6.03-6.74-6.03 -6.38 0-7.45 1.42-7.45-1.42C365.5 75.26 369.05 73.25 373.65 74.31M409.13 129.29c-2.7 3.95-4.01 5.07-4.5 5.35 0.44 0.07 1.37 0.83 2.02 4.94 1.06 6.74-1.42 10.64-2.48 9.58 -1.06-1.07-6.74-4.25-6.38-9.93 0.36-5.68 6.39-9.22 1.07-10.29 -5.32-1.06-6.03 2.48-6.74-2.84 -0.43-3.24-0.36-4.61 7.45-4.26C407.35 122.2 413.73 122.55 409.13 129.29M415.87 189.95c5.67 4.26 6.74-2.83 9.22 0 2.48 2.84 1.07 7.1-2.13 8.52 -3.19 1.42-6.38-1.07-10.29-1.07s-3.9-0.71-3.54-2.83C409.48 192.46 410.19 185.69 415.87 189.95M421.54 121.84c2.84-3.9 1.07-7.1 6.03-6.03 4.97 1.06 3.55 8.87 3.2 11.71 -0.36 2.83-5.33 2.48-7.1 4.61 -1.77 2.13-4.61 2.13-5.32-0.71C417.65 128.64 418.7 125.75 421.54 121.84M432.89 209.45c-1.77 3.55-4.61 8.87-6.73 8.87 -2.13 0-2.84-3.9-6.03-5.68 -3.19-1.77-4.61 0-4.26-4.61 0.14-1.76 2.13-3.9 8.15-3.19C430.05 205.55 434.66 205.91 432.89 209.45M434.31 189.59c2.12 0.16 13.13 0.71 11.71 6.74 -1.42 6.03-4.62 7.1-7.45 7.1 -2.84 0-3.9-6.38-6.38-7.8C429.7 194.2 429.35 189.24 434.31 189.59M441.05 120.77c2.01-0.5-0.35-12.41 2.12-11.7 2.48 0.71 7.1 5.67 11.71 6.38 4.62 0.72 6.03 2.84 2.13 5.68 -3.9 2.83-5.31 3.19-5.67 6.74 -0.35 3.55-4.61 4.25-5.32 1.42 -0.71-2.84-2.84-5.32-4.97-2.48C438.92 129.65 433.96 122.55 441.05 120.77M454.88 217.97c-0.7 2.49-0.7 6.04-5.32 5.68 -4.61-0.36-13.84 3.19-4.97-6.38C446.67 215.03 455.59 215.49 454.88 217.97M465.18 177.18c3.54-1.77 4.6 9.22 1.41 9.58 -3.19 0.36-12.06 3.9-13.13 5.68 -1.06 1.77-5.67 1.41-5.67-0.36 0-8.51 4.97-4.26 7.45-4.26C457.72 187.82 461.63 178.95 465.18 177.18M466.94 159.44c2.13-1.42 13.13-2.84 12.42 0.71 -0.71 3.55-8.16 9.22-10.64 8.16C466.24 167.25 464.82 160.86 466.94 159.44M484.22 163.61c2.77-4.88 4.66-1.02 4.66-1.02s0.31 2.1-0.66 3.14C486.04 168.06 481.47 168.49 484.22 163.61M485.39 228.61c0 4.26-3.55 4.26-6.03 2.48 -2.48-1.78-4.97-6.38-11-5.68 -6.03 0.71-17.74 2.84-8.16-8.16 2.61-2.99 6.73-5.32 9.57-3.19 2.84 2.13 5.32 10.29 8.16 8.16C480.78 220.1 485.39 224.36 485.39 228.61M482.91 145.26c3.18 2.83-4.62 12.06-7.81 8.16C475.1 153.41 479.72 142.42 482.91 145.26M509.43 128.04c2.96 1.14 1.55 4.84-0.78 6.5 -2.33 1.66-4.87 1.19-4.87 1.19C501.2 131.36 506.47 126.92 509.43 128.04M509.86 94.18c-1.06-3.9 3.91-6.03 5.68-3.9 1.77 2.13 6.39 8.86 3.19 10.29 -3.19 1.42-9.93 8.51-13.12 5.32C502.58 102.86 510.92 98.08 509.86 94.18M528.31 131.78c2.13-1.77 6.39 0 1.42 2.13 -4.97 2.13 2.48 4.96 4.97 6.74 2.48 1.78 4.26 4.62 1.41 4.62 -2.83 0-5.67 3.19-9.22 3.9 -3.55 0.71-8.86-3.54-9.93-11.71C515.9 129.29 526.68 133.13 528.31 131.78M526.89 81.4c4.62-1.42 6.04 2.13 7.1 3.9 1.06 1.78-8.51 8.52-10.28 4.26C522.74 87.25 522.28 82.82 526.89 81.4M539.31 158.73c-1.42 1.77-8.86 1.42-10.65 3.91 -1.77 2.48-9.57 2.48-9.93 0.71 -0.35-1.78-1.77-3.19-0.71-4.62 1.2-1.61 12.77 1.07 14.9-1.77C535.05 154.12 540.72 156.96 539.31 158.73M535.05 126.81c0.36-1.42 4.61-3.55 4.26 0 -0.35 3.55-2.12 3.9-5.32 2.84C530.79 128.58 534.59 128.66 535.05 126.81M540.98 164.65c2.28-3.23 3.85-0.67 3.85-0.67s0.27 1.39-0.55 2.08C542.48 167.6 538.69 167.89 540.98 164.65M568.04 124.32c1.35-2.52 8.87-0.36 7.8 2.13 -1.06 2.48-1.06 9.22-4.61 4.61C567.68 126.45 565.2 129.65 568.04 124.32M578.75 185.89c2.28-3.24 3.86-0.68 3.86-0.68s0.26 1.4-0.55 2.09C580.26 188.84 576.47 189.12 578.75 185.89M582.58 128.58c2.56-1.66 6.03-7.45 4.61-1.42 -1.42 6.02 7.8 1.42 4.26 7.8 -3.54 6.39-6.39 6.74-6.39 5.67 0-1.06 4.61-6.03-1.06-7.45C578.33 131.78 575.49 133.19 582.58 128.58M594.53 137.81c2.29-3.24 3.86-0.68 3.86-0.68s0.26 1.4-0.56 2.09C596.03 140.76 592.25 141.05 594.53 137.81M599.54 195.9c0 0 0.26 1.4-0.55 2.09 -1.8 1.54-5.58 1.82-3.3-1.41C597.98 193.34 599.54 195.9 599.54 195.9M637.45 177.54c2.28-3.23 3.85-0.67 3.85-0.67s0.26 1.39-0.55 2.09C638.96 180.49 635.17 180.78 637.45 177.54M599.05 315.98c3.84-0.19 12.2-1.02 11.06 3.5s-8.28 3.6-8.28 3.6C598.95 321.23 595.21 316.18 599.05 315.98M614.51 293.17c1.5-1.71 5.68-2.48 7.45 0.36 1.77 2.83 3.19 3.19 5.67 3.19 2.49 0 2.49 3.2 1.07 6.03 -1.42 2.83 2.13 4.96-2.48 6.74 -4.61 1.77-3.55 6.39-7.1-0.35 -3.55-6.74 0-8.87-3.19-11.71C612.73 294.59 612.03 296.01 614.51 293.17M635.44 286.08c2.41-5.52 4.97-5.32 6.03-2.48s6.03 11.7 1.78 12.06c-4.26 0.36-2.49 7.45-6.74 4.26 -4.25-3.19-6.38-2.83-7.09-7.09C628.7 288.56 632.95 291.75 635.44 286.08M684.96 310.74c2.01 1.03 1.06 4.41-0.53 5.91 -1.59 1.51-3.31 1.09-3.31 1.09C679.37 313.76 682.94 309.71 684.96 310.74M335.35 315.16c-5.68-1.42-9.58-3.54-10.28-8.87 -0.72-5.32-7.1-12.41-5.68-14.54 1.42-2.13 3.2-2.84 3.9-4.26 1.57-3.14 4.97-6.74 7.81-1.78 2.84 4.97 7.1 7.45 7.45 11.36C338.89 300.97 341.02 316.58 335.35 315.16M318.32 333.61c-3.9 0.71-10.19-2.2-4.26-4.26 9.22-3.19 0-10.29-3.55-11.36 -3.54-1.06-9.57-1.06-11.71-5.67 -2.12-4.62-8.51 0.35-8.87 2.12 -0.36 1.77-2.48 6.39-6.38 5.67 -3.9-0.71-4.96 1.42-3.54-2.48 0.61-1.67 6.03-0.71 6.39-3.55 0.35-2.83 1.77-6.38 4.61-6.38 2.83 0 6.74-4.96 11-3.9 4.26 1.06 9.58 9.58 11.71 12.06 2.12 2.48 12.77 8.86 17.02 12.77 4.26 3.91 6.38 1.42 6.38 4.61C337.12 336.44 322.22 332.9 318.32 333.61M278.23 262.66c-1.77-4.25-1.42 3.91-4.26 2.48 -2.84-1.42-3.19-1.06-2.84-3.54 0.21-1.45 2.13-3.19 6.74-3.55 4.62-0.35 11 7.09 9.58 8.51C286.04 267.98 280.01 266.92 278.23 262.66M269.72 329c0.35 4.96-7.81 5.32-8.87 3.9 -1.24-1.66-2.13-7.1 1.42-10.65 3.55-3.54 14.9-4.96 14.19-2.48C275.75 322.25 269.37 324.03 269.72 329M259.08 249.18c0.36-1.77-3.19-6.38-1.07-8.16 1.93-1.6 10.65 3.55 7.45 6.03C262.27 249.54 258.73 250.96 259.08 249.18M256.59 260.18c-2.48-0.71-4.25-3.19-3.19-5.32 1.02-2.03 3.9-2.48 5.32 0C260.14 257.34 259.08 260.89 256.59 260.18M256.24 325.45c-4.97 6.39-9.22 5.32-5.68-1.06C252.29 321.28 261.21 319.06 256.24 325.45M255.53 339.28c-4.97 6.39-9.22 5.32-5.68-1.06C251.58 335.12 260.5 332.9 255.53 339.28M246.31 271.89c-1.41-2.49-0.71-4.97-0.71-4.97 4.62-2.13 8.51 3.55 7.1 6.39C251.27 276.15 247.73 274.37 246.31 271.89M250.56 158.37c-2.13-4.96-5.67-9.22-2.13-12.41 1.69-1.52 8.52 0 9.22 1.78 0.72 1.77 5.32 10.64 3.55 12.76C259.44 162.64 252.7 163.35 250.56 158.37M241.34 105.17c1.02-2.03 9.22 4.97 6.74 8.16C245.6 116.52 239.57 108.72 241.34 105.17M255.89 108.01c1.01-0.79 7.45-3.55 8.16-1.07 0.71 2.48 0.71 8.87-2.13 10.64 -2.83 1.78-5.67 3.55-7.09 0.71C253.4 115.45 250.92 111.91 255.89 108.01M256.59 85.3c2.72-1.63 5.68 1.07 8.52 0.72 2.84-0.36 6.38-6.03 11.71-5.32 5.32 0.71 8.51 5.67 4.25 9.22 0 0-4.61 6.03-8.86 6.39 -4.26 0.35-5.32 6.74-8.87 4.96 -3.54-1.77-2.12-7.8-5.67-8.16C254.11 92.75 254.82 86.37 256.59 85.3M279.3 250.96c-1.77 0.71-10.99 2.13-11.71-1.78 0.06 0.31 9.56-8.9 11.71-8.51C283.2 241.38 281.07 250.25 279.3 250.96M279.3 205.55c0 2.13 1.07 6.03-4.26 5.32 -5.32-0.71-9.57-2.13-9.22-5.32 0.36-3.19 3.91-4.26 7.1-4.26 3.19 0 7.09-5.67 8.86-3.19C283.55 200.59 279.3 203.43 279.3 205.55M290.65 141.35c1.42 4.26 3.55 4.96 0.35 8.51 -3.19 3.55 4.26 8.86-1.77 10.29 -6.03 1.42-7.45-6.03-12.77-6.38 -5.32-0.36-13.48-2.13-13.48-6.03 0-3.91-6.74-6.03-4.61-11.36 0.93-2.32 9.93 0.72 11.35-1.42 1.42-2.13 4.61-1.78 5.32 2.84 0.71 4.61 3.91 4.96 6.74 2.48C284.62 137.8 289.23 137.1 290.65 141.35M299.88 198.1c3.18-0.35 4.26-6.03 8.16-5.32 3.9 0.71 4.96-10.28 9.58-5.67 4.61 4.61-7.1 6.74-7.45 14.19 -0.35 7.45-9.22 5.68-10.65 2.84 -1.41-2.84-3.54-4.61-6.03-1.06 -2.48 3.55-8.86 4.61-7.09-0.35 1.77-4.97 1.77-6.39 1.77-6.39 0.71-2.13-2.84-6.03 1.06-6.74C293.13 188.88 296.68 198.46 299.88 198.1M297.39 158.73c2.3-3.44 9.22-1.77 13.48-1.42 4.26 0.36 4.62 5.32 2.13 7.45 -2.48 2.13-0.71 11.35-6.38 8.52C300.94 170.44 291.71 167.25 297.39 158.73M290.3 242.09c1.11-1.38 7.09 1.06 8.51 0.71 1.42-0.35 0.71 6.74-1.77 8.16 -2.48 1.42-7.45 2.48-7.45 0.35C289.58 249.18 288.88 243.87 290.3 242.09M292.07 302.75c0 3.19-6.38 2.48-7.45 0.36C284.62 303.11 292.07 299.56 292.07 302.75M291.36 290.69c0-6.03-8.16 3.91-5.32-6.38 0.68-2.47 4.96-0.71 7.45-5.32 2.48-4.61 4.97-3.9 8.51-1.42 3.55 2.48 8.87 6.03 7.45 8.87 -1.42 2.84 4.61 12.42 2.48 14.54 -2.13 2.13-11.35 0-12.77-3.19C297.74 294.59 291.36 296.72 291.36 290.69M319.69 219.98c0 0-2.58 9.79-6.75 7.49C308.78 225.16 315.88 219.47 319.69 219.98M323.28 214.43c2.13-1.42 6.75-4.97 7.1-2.49 0.35 2.49 0 4.97-1.78 7.81 -1.77 2.84-6.03 3.55-7.44 1.07C319.73 218.33 323.28 214.43 323.28 214.43M328.6 186.04c2.84-1.06 8.51-1.06 6.75 1.77 -1.77 2.84-5.32 9.22-8.16 6.03C324.35 190.66 328.6 186.04 328.6 186.04M236.02 259.47c-2.13 1.07-2.13-4.26-2.13-4.26C235.31 254.86 238.15 258.41 236.02 259.47M211.55 224.71c-3.9 2.48-17.74 6.03-18.09-3.19 -0.12-3.04 6.38-4.26 12.41-3.19C211.9 219.39 215.45 222.23 211.55 224.71M193.46 250.96c-1.77 4.61-4.62 6.74-7.45 4.26 -2.84-2.48-4.61-1.78-7.45-3.19 -2.84-1.42 3.9-4.26 3.2-6.03 -0.71-1.77 1.06-2.84 1.06-2.84 3.55-1.06 6.74 2.13 9.57 1.07C195.23 243.15 195.23 246.35 193.46 250.96M740.79 205.2c-1.06-6.03-7.45-10.64-14.54-2.13 -7.1 8.51-4.43 0.08-11.36 3.55 -7.8 3.9-9.22 1.42-15.25-3.19 -3.25-2.48-3.91-16.31-9.13-8.97 -7.37 10.36-5.33-4.98-8.6-6.28 -7.09-2.83-12.06 2.13-14.9 5.32 -2.83 3.2-12.77 1.77-17.02-5.68 -4.25-7.45 3.2-9.58 5.33-6.03 2.12 3.55 9.93-0.35 6.03-5.68 -3.9-5.32 14.19-7.44 20.92-9.93 6.74-2.48 0-6.38-5.67-6.03 -5.67 0.35-8.87 1.07-11.35-5.68 -2.48-6.73-5.32-4.96-6.74-3.54 -1.42 1.41-3.54 6.73-11.35 0.71 -7.8-6.03 2.83-9.22 6.39-6.03 3.54 3.19 5.32-8.87 11.35-8.51 6.03 0.35 14.54 3.54 20.57 3.19 6.03-0.36 9.58 3.9 2.48 4.97 -7.09 1.06-5.32 7.45-2.13 9.22 3.19 1.77 8.51-7.45 13.48-3.9 4.97 3.55 10.29-1.42 18.8 2.84 8.51 4.26 8.51 1.06 12.42-0.71 3.9-1.77 9.22-3.54 8.86-8.16 -0.35-4.61-9.22 0-13.48-8.16 -2.69-5.16-8.87-2.83-15.25-1.77 -6.38 1.07-9.57 7.45-12.06 2.49 -2.49-4.97 15.95-11.35 17.02-15.96 1.06-4.62-3.55 1.42-5.32-4.62 -1.77-6.03-5.68-4.25-11.36-3.9 -5.67 0.36-8.51-4.96-12.77-5.32 -4.26-0.35-7.45 7.45-14.9 7.1 -7.45-0.35-4.97-6.73-9.58-11.35 -4.62-4.61 1.07-11.35 5.32-2.48 4.26 8.86 5.68 4.61 9.58 2.13 3.91-2.48 7.81-6.38 14.55-0.35 6.74 6.03 5.67 1.07 9.93-1.07 4.26-2.13 5.32-6.73 2.48-6.73 -2.83 0-16.67-2.13-9.22-5.68 5.47-2.61 4.25-4.07 0.53-7.2 -2.55-2.15-5.38-1.19-4.78-4.16 0.28-1.33-4.16-6.18-7.4-5.57 -3.23 0.61-10.91 2.88-9.97-6.49 0.71-7.09-2.62-0.96-6.21-1.41 -3.58-0.46-6.73 7.27-8.69 0.35 -2.33-8.26-11.62 2.35-12.08 1.9 -0.76-0.72-1.73 6.03-6.08 5.44 -4.36-0.6-11.17 7.89-10.07 2.32 1.1-5.58-2.43 0.14-3.68 0.28 -6.39 0.71-14.55 4.96-2.49 13.12 12.06 8.16 0.36 7.45-6.74 9.22 -7.1 1.78-3.55 7.45-0.71 10.64 2.84 3.19-2.13 11.35-5.68 3.55 -3.54-7.81-5.67-3.19-10.28 0.36 -4.62 3.55-2.83-4.61-0.71-4.61 2.13 0 2.84 0.36 6.03-9.22 3.19-9.58-15.61-20.93-16.32-27.31 -0.71-6.39-4.61-11.71-8.51-8.52 -3.9 3.19-6.74 1.77-11-3.19 -4.26-4.96-5.68 2.84-8.16 2.13 -2.48-0.71-7.8-0.71-13.48 3.55 -14.85 11.14 3.91 8.86 6.75 12.06 6.41 7.21-1.78 9.94-5.68 5.32 -3.9-4.61-4.97-1.06-7.44-0.71 -2.48 0.35-6.03-1.78-8.51-4.26 -2.48-2.49-6.74-6.38-10.29-1.42 -3.54 4.96-7.44 2.48-14.19-4.26 -6.73-6.73-7.8-1.77-8.87 2.48 -1.06 4.26-9.93 3.55-12.77 4.26 -2.83 0.71-9.57 11-15.96-2.13 -6.38-13.12 5.68-13.48 13.48-11.71 7.8 1.77 1.77-10.28 12.77-9.58 11 0.72 3.56 2.84 13.83 6.39 10.3 3.55 5.33-6.74 13.13-6.03 7.8 0.71 3.55-5.68 13.84-11.71 6.09-3.57-8.87-8.87-16.67-7.09 -7.81 1.77-8.51-1.77-13.13-4.26 -4.61-2.48-10.29-3.19-14.19 0.71 -9.94 9.95-9.58 0.36-9.58-4.26 0-4.61-15.25-13.12-22.7-14.19 -7.45-1.07-20.58 13.12-24.48 8.51 -3.9-4.61-8.51-1.06-18.09 0 -9.58 1.07-4.97 4.61-0.35 8.52 4.61 3.9-2.84 4.26-6.74 3.54 -3.9-0.71-7.44 4.62 2.84 7.1 10.29 2.48 1.77 5.68-2.13 5.68s-9.57 3.55-15.25 10.64c-5.68 7.1-9.57 5.32-15.96 3.9 -6.38-1.42 0-14.19 3.55-13.47 3.55 0.71 13.84-5.68 11.35-12.42 -2.48-6.74-2.48-4.96 5.32-10.64 7.8-5.67 0-10.28-3.55-11.71 -3.55-1.42-9.93 6.38-13.48 2.13s-7.09-4.26-11.35-4.26 -3.79 7.23-9.23 2.13c-1.42-1.33-3.1-2.35-4.97-3.12 -1.87-0.78-5.19-3.66-6.11-1.66 -2.04 4.44-7.72-10.82-8.43 0.18 -0.19 3.02-3.9 1.07-5.32-0.71 -2.02-2.51-5.67 2.13-8.01 1.51 -4.14-1.11-6.59 3.09-8.67 2.4 -3.19-1.07-11.96-9.44-15.96-1.07 -3.9 8.16 6.38 2.84 5.32 8.16 -1.07 5.32 4.97 8.86 1.77 12.41s-15.25 5.68-23.05-0.35c-7.81-6.03-11.71 5.32-13.13 11.35 -1.42 6.03 11.35 4.62 13.13 8.17 1.77 3.54 14.89-2.48 23.77 1.41 8.86 3.91-7.45 3.55-8.16 6.75 -0.7 3.19 7.45-0.72 9.57 4.26 2.13 4.96 5.68 0 11.36 4.61 5.67 4.62 10.29 1.07 15.25-1.41 4.97-2.49 11.35 3.54 10.65 7.09 -0.71 3.55-4.62 2.48-7.81 6.03 -3.19 3.55-7.81-6.03-12.77 1.77 -4.96 7.81 9.58 0.36 11.71 4.97 2.13 4.61 6.74 3.9 7.81 5.67 1.07 1.78-7.45 7.45-12.41 9.94 -4.97 2.48-8.87 5.32-17.39 3.9 -8.51-1.42 4.26-12.42-6.39-13.48 -3.19-0.32-10.99-2.84-10.28-7.45 0.71-4.62-14.54-20.22-18.8-23.76 -4.26-3.55 1.07 13.84-4.97 13.48 -6.03-0.36-13.83-12.42-24.48-19.86 -5.02-3.52-10.28-1.07-14.86-2.67 -2.46-0.87-6.63 4.81-7.29 2.16 -2.68-10.85-5.87 2.99-7.64 1.57 -2.73-2.18-4.13 4.22-7.45 1.77 -2.71-1.99-3 4.49-3.54 9.94 -1.06 10.64-5.67 4.26-16.67 6.03 -11 1.77-11 13.84-10.28 18.09s-1.77 7.8-8.16 5.32c-6.39-2.48 0.36-7.8-5.32-9.93 -5.68-2.13-19.16 14.9-19.16 18.8 0 3.9 10.65-2.13 16.67 6.74 3.55 5.22 14.54-1.07 18.45 2.83 3.9 3.9 15.25-4.61 18.45-8.51 3.19-3.9 10.29-4.61 15.25-5.32 4.97-0.71 5.67 8.16 5.67 11 0 2.83 9.23 0.71 6.03 9.22 -1.35 3.57-5.33 2.83-20.22 3.9 -14.9 1.06 3.2 5.67 2.48 9.22 -0.71 3.55-13.84 2.13-17.39 6.38 -3.55 4.26 11.71 13.48 17.03 15.61 5.31 2.13 19.15-9.93 22.35-6.38 3.2 3.55 4.97 9.22 10.64 13.84 5.67 4.62 8.16 5.67 0 13.84 -8.16 8.16-21.29-2.13-21.29-2.13 -8.51-1.78-13.12-6.38-18.09 1.07 -3.07 4.61-1.42 11.35-5.68 14.54 -4.26 3.19-7.76-6.03-14.19-5.32 -11.97 1.33-11.44-9.84-17.03-11.71 -3.53-1.18-15.36 10.66-14.91-2.96 0.55-16.45-8.71 0.15-11.7-2.35 -6.65-5.59-11.44 7.45-14.59-1.61 -1.23-3.51-7.13 1.53-9.52 3.02 -5.68 3.55 0 14.19-6.03 14.55 -6.03 0.36-4.26 3.54-8.51 7.45 -4.26 3.9 0 8.51-2.49 10.29 -2.48 1.77-2.03 7.28-0.71 8.16 3.2 2.13 3.9-10.64 7.8-2.13 3.91 8.51-9.57 10.64-11.71 7.45 -2.12-3.19-4.96-12.42-7.09-3.19 -1.69 7.33-11 9.94-10.29 13.48 1.39 6.9 10.29 1.06 16.32-1.07 6.03-2.13 5.67 8.87 5.67 15.96 0 7.1 8.17 4.97 10.29 6.74 2.13 1.78 5.32 4.26 9.22 4.61 3.9 0.36 7.8-6.74 0.35-7.81 -7.45-1.06 0-6.38-8.51-5.67 -8.51 0.71-3.54-7.45-1.41-4.96 2.12 2.48 9.92 0.71 16.31 1.77 6.38 1.06 7.8 10.29 13.48 9.93 2.85-0.18 6.39-0.71 6.74 3.19 0.35 3.91-3.19 9.93-1.06 10.65 1.38 0.46 2.12-6.39 7.44-8.16 5.33-1.77 3.91 7.81 4.97 13.13 1.06 5.32-5.32 0.72-6.03 8.16 -0.71 7.45 3.91 4.61 7.81 1.77 10.65-7.74 7.45 4.97 13.13 5.68 10.71 1.34 8.15-6.74 14.54-8.16 6.39-1.42 9.93-3.54 13.12-6.38 3.2-2.84 9.58-3.54 15.61 2.13 6.03 5.68 8.16 6.74 12.77 4.61 6.15-2.84 4.96 4.97 2.48 7.81 -2.48 2.84-17.02 2.12-24.83 1.06 -7.8-1.06-13.47 6.03-9.57 6.74 3.9 0.71 9.57 4.26 4.96 6.39 -4.61 2.12-3.54 6.38-8.15 6.02 -4.61-0.35-9.58-10.64-14.9 1.42 -5.32 12.06 9.22 19.86 20.58 15.61s14.9-0.36 16.32 3.9c1.42 4.26 14.9 7.63 14.9 7.63 6.39 13.84-5.85 2.66-9.58 1.59 -3.73-1.06-7.98 7.46-15.96 6.39 -7.98-1.07-10.64 2.66-8.51 4.26 2.13 1.6 6.39 5.85 0 8.51 -6.38 2.66-3.19 10.11-6.38 13.3 -3.19 3.2-1.6 8.52 4.26 8.52s20.22-1.06 22.35 2.66c2.13 3.73 17.02 0 17.02 0 14.37 0-1.06 8.51 0.53 12.77 1.6 4.25 30.34-1.07 36.18 2.66 5.86 3.72-1.06 12.24 2.66 14.37 3.73 2.13 11.7-7.45 7.45-14.9 -4.25-7.45 2.66-4.26 1.06-11.17 -1.6-6.92 14.37-11.17 21.82-10.1 7.45 1.06 12.77-1.6 11.71 6.38 -1.07 7.98 7.98 1.6 12.24 3.19 4.26 1.6 4.26-5.85-0.53-9.05 -4.79-3.19 4.26-7.98 6.92-9.57 2.65-1.6-6.39-4.79 9.04-10.65 15.43-5.85 27.14 1.6 38.31 9.58 11.17 7.98 6.39 29.8 3.19 43.1 -3.19 13.31-9.6 22.07-13.3 28.74 -5.54 9.94-13.09 14.43-26.35 16.47 -106.29 9.27-146.58 38.86-146.58 38.86s80.34-34.58 220.81-34.58c103.9 0 207.97 34.59 207.97 34.59s-52.65-27.16-148.73-39.07c-5.06-3.52-5.73-4.97-6.38-7.9 -0.71-3.19-7.8-7.32-13.13-14.41 -5.31-7.09-3.9-18.09 0.36-27.66 4.26-9.58 7.45-24.48 16.68-28.38 9.21-3.9 6.73-8.87 9.21-11 2.48-2.12 8.17-8.16 11.36-1.06 3.2 7.1-4.61 0.36-10.64 5.32 -6.03 4.97 4.96 3.91 6.74 8.87 1.76 4.97 8.51 4.97 11.7 4.26 3.19-0.71 5.68 1.07 3.55 4.26 -2.13 3.19-3.9 4.96-2.84 8.87 1.06 3.9 7.45 2.84 11-0.71 3.55-3.55 2.13-4.26 5.68-1.07 3.55 3.19 2.83-3.55 7.8-4.96 4.97-1.42 2.85-3.19 4.61-6.03 1.78-2.84 6.74-2.48 9.58-0.35 2.84 2.13 0.71 8.52 2.48 3.91 1.78-4.61 6.03-0.71 6.03-0.71 4.61 5.67 5.68-2.84 11.7-1.78 10.53 1.86 9.58-1.06 14.9-3.18 5.32-2.13 5.67-3.55 8.87 2.12 3.19 5.68 2.83 3.55 12.77 3.91 9.94 0.35 17.39-11.35 20.57-15.61 3.2-4.26 6.74-3.91 3.91-13.13 -2.83-9.22-9.58 2.48-12.42-6.74 -2.83-9.22-10.64-2.48-13.12-9.57 -2.48-7.1 8.52-2.83 11.71-4.61 3.19-1.77 6.39 7.45 11 7.1 4.61-0.36 10.64 4.25 13.83 0.71 3.19-3.54-3.54-5.32-6.74-9.93 -3.19-4.61 4.61-4.61 7.81-1.77 3.19 2.84 4.61 1.42 10.99 1.77 6.39 0.36 8.51 8.16 11 5.32 2.48-2.83-4.96-4.61 2.48-9.58 7.45-4.96 7.1-0.71 13.49-0.35 6.38 0.35 7.09-9.57 9.58-14.54 2.48-4.97 1.41-7.1-3.19-9.22 -4.62-2.13-6.03 2.12-8.16-4.61 -2.12-6.74-6.03-7.81-10.64-6.03 -4.61 1.77-14.9-1.07-14.55-6.03 0.36-4.97-8.86-6.74-14.54-7.45 -5.67-0.71-11.35-1.07-12.42-6.03 -1.06-4.97-3.54-6.03-9.21-6.03 -5.68 0-7.45 1.77-11.71-3.9 -4.26-5.68-10.29-3.19-14.9 0.71 -4.61 3.9-2.13 8.16-7.45 9.58 -5.32 1.42-6.74-7.1-1.77-11 4.97-3.91 7.45-2.48 4.61-7.1 -2.84-4.61 0-3.19 2.48-7.8 2.48-4.61 7.45-1.42 7.81 3.9 0.35 5.32 8.87 2.83 12.77 2.48 3.9-0.35 9.22-2.48 9.94 2.13 0.71 4.61 5.32 3.2 12.77 0.35 7.45-2.83 15.25 6.03 18.09 6.75 2.84 0.71 1.77-4.62 6.03-8.87 3.31-3.29-3.18-1.77-4.96-7.09 -1.78-5.32 3.54-6.03 10.64-1.07 7.1 4.97 3.9 9.22 7.8 11 3.91 1.77 8.87 7.45 16.31 0 7.45-7.45 7.45-1.42 14.9-6.03 7.45-4.61 14.9 0 18.09-4.61 3.2-4.61 3.55-3.9 13.48 0 9.93 3.9 6.39-2.83 6.03-16.32 -0.35-13.48 5.67-7.45 5.67-12.41S741.85 211.23 740.79 205.2"/>
				</svg>

			</a>

		</div>

		

	</footer>

	<?php wp_footer(); ?>

	<?php global $blog_id; if( $blog_id == '1' ) { ?>
	<!-- Index -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-60521675-4', 'auto');
	  ga('send', 'pageview');

	</script>
	<? } ?>

	<?php global $blog_id; if( $blog_id == '2' ) { ?>
	<!-- Austria -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-60521675-1', 'auto');
	  ga('send', 'pageview');

	</script>
	<? } ?>

	<?php global $blog_id; if( $blog_id == '3' ) { ?>
	<!-- Hungary -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-60521675-7', 'auto');
	  ga('send', 'pageview');

	</script>
	<? } ?>

	<?php global $blog_id; if( $blog_id == '4' ) { ?>
	<!-- Poland -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-60521675-8', 'auto');
	  ga('send', 'pageview');

	</script>
	<? } ?>

	<?php global $blog_id; if( $blog_id == '5' ) { ?>
	<!-- Czech Republic -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-60521675-3', 'auto');
	  ga('send', 'pageview');

	</script>
	<? } ?>

	<?php global $blog_id; if( $blog_id == '6' ) { ?>
	<!-- Slovakia -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-60521675-6', 'auto');
	  ga('send', 'pageview');

	</script>
	<? } ?>

	<?php global $blog_id; if( $blog_id == '8' ) { ?>
	<!-- Romania -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-60521675-9', 'auto');
	  ga('send', 'pageview');

	</script>
	<? } ?>

	<?php global $blog_id; if( $blog_id == '9' ) { ?>
	<!-- Impact Transfer -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-60521675-10', 'auto');
	  ga('send', 'pageview');

	</script>
	<? } ?>

    <script>
        jQuery(document).ready(function($) {
            $('li.menu-item-has-children').append('<div class="menu-dropdown-btn"></div>');

            $('.menu-dropdown-btn').on('click', function() {
                if ( !$(this).hasClass('opend') ) {
                    $(this).addClass('opend');
                    $(this).parent().addClass('open-sm');
                } else {
                    $(this).removeClass('opend');
                    $(this).parent().removeClass('open-sm');
                }
            })
        })
    </script>

  </body>
</html>