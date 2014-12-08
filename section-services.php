<div id="about_section" class="section" data-section="<?php echo sanitize_title( get_theme_option('about_label') ); ?>">
		
	<div id="about_section_botm_bg">
	
		<div class="section_inn">
			<a class="go_top" href="#home_section"></a>
			<div id="home_about_desc">
			
				<div id="home_about_desc_left">
				
					<h3 class="section_label">SERVICES</h3>
										
				</div><!-- end div #home_about_desc_left -->
				
				<div id="home_about_desc_right">

					<p><?php echo get_theme_option('about_intro'); ?></p>
					
					<div class="clr"></div>
					
				</div>
				
				<div class="clr"></div>
				
			</div>
			<!-- end div #home_about_desc -->
			
			
			<div id="home_about_listing">
				<ul>

					<li class="col_3">
						
						<!-- Column headline -->
						<h2>Веб-разработка</h2>
						
						<!-- Column subline -->
						<h3>123</h3>
						
						<!-- Column icon -->
						<img src="<?php echo ( get_theme_option('about_col_1_icon_custom') ? esc_url( get_theme_option('about_col_1_icon_custom') ) : get_stylesheet_directory_uri() . '/images/symbols/ico_' . get_theme_option('about_col_1_icon') . '.png' ); ?>" alt="" />
						
						<!-- Column content -->
						<div class="about_listing_txt">
							<?php echo apply_filters( 'haku_content', get_theme_option('about_col_1') ); ?>
						</div>
						
					</li>
				
					
					<!-- Column 3 -->
					<li class="col_3">
					
						<!-- Column headline -->
						<h2><?php echo retro_filter( get_theme_option('about_col_3_headline') ); ?></h2>
						
						<!-- Column subline -->
						<h3><?php echo retro_filter( get_theme_option('about_col_3_subline') ); ?></h3>
						
						<!-- Column icon -->
						<img src="<?php echo ( get_theme_option('about_col_3_icon_custom') ? esc_url( get_theme_option('about_col_3_icon_custom') ) : get_stylesheet_directory_uri() . '/images/symbols/ico_' . get_theme_option('about_col_3_icon') . '.png' ); ?>" alt="" />
						
						<!-- Column content -->
						<div class="about_listing_txt">
							<?php echo apply_filters( 'haku_content', get_theme_option('about_col_3') ); ?>
						</div>
						
					</li>
					<!-- end: Column 3 -->
					
					
					<!-- Column 4 -->
					<li class="col_3">
					
						<!-- Column headline -->
						<h2><?php echo retro_filter( get_theme_option('about_col_4_headline') ); ?></h2>
						
						<!-- Column subline -->
						<h3><?php echo retro_filter( get_theme_option('about_col_4_subline') ); ?></h3>
						
						<!-- Column icon -->
						<img src="<?php echo ( get_theme_option('about_col_4_icon_custom') ? esc_url( get_theme_option('about_col_4_icon_custom') ) : get_stylesheet_directory_uri() . '/images/symbols/ico_' . get_theme_option('about_col_4_icon') . '.png' ); ?>" alt="" />
						
						<!-- Column content -->
						<div class="about_listing_txt">
							<?php echo apply_filters( 'haku_content', get_theme_option('about_col_4') ); ?>
						</div>
						
					</li>
					
					
				</ul>
				
				<div class="clr"></div>
				
			</div>
			

						
			<div class="section_custom_content">
			

			</div>
			
			<div class="clr"></div>
	
			
		</div>
		
		<div class="clr"></div>
		
	</div>
	
	<div class="clr"></div>
	
</div>