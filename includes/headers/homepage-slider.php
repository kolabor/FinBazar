<?php
$slider_cats = kaira_theme_option( 'kra-slider-categories' );

if( $slider_cats ) :

    $slider_query = new WP_Query( 'cat=' . $slider_cats . '&posts_per_page=-1&orderby=date&order=DESC' ); ?>

    <?php if ( $slider_query->have_posts() ) : ?>

        <div class="alba-home-slider-wrapper alba-home-slider-remove"<?php echo ( kaira_theme_option( 'kra-slider-auto-scroll' ) ) ? ' data-auto="4000"' : ' data-auto="false"'; ?><?php echo ( kaira_theme_option( 'kra-circular-slider' ) ) ? ' data-circular="true"' : ' data-circular="false"'; ?><?php echo ( kaira_theme_option( 'kra-infinite-slider' ) ) ? ' data-infinite="true"' : ' data-infinite="false"'; ?>>
            <div class="alba-home-slider-prev"><i class="fa fa-angle-left"></i></div>
            <div class="alba-home-slider-next"><i class="fa fa-angle-right"></i></div>
            
            <div class="alba-home-slider">
                
                <?php while ( $slider_query->have_posts() ) : $slider_query->the_post(); ?>
                
                    <?php if ( kaira_theme_option( 'kra-slider-links' ) ) : ?>
                        <a href="<?php the_permalink(); ?>" class="alba-home-slider-block">
                    <?php else: ?>
                        <div class="alba-home-slider-block">
                    <?php endif; ?>
                        
                        <?php if ( has_post_thumbnail() ) : ?>
                        
                            <?php the_post_thumbnail( 'full', array( 'class' => '' ) ); ?>
                            
                        <?php endif; ?>
                        
                        <h3>
                            <?php the_title(); ?>
                        </h3>
                        
                    <?php if ( kaira_theme_option( 'kra-slider-links' ) ) : ?>
                        </a>
                    <?php else: ?>
                        </div>
                    <?php endif; ?>
                
                <?php endwhile; ?>
                
            </div>
            
            <?php if ( kaira_theme_option( 'kra-enable-slider-pagination' ) ) : ?>
            <div class="alba-home-slider-pager"></div>
            <?php endif; ?>
        </div>
        
    <?php endif; wp_reset_query(); ?>

<?php else: ?>
    
    <div class="alba-home-slider-wrapper alba-home-slider-remove" data-auto="4000" data-circular="true" data-infinite="true">
        <div class="alba-home-slider-prev"><i class="fa fa-angle-left"></i></div>
        <div class="alba-home-slider-next"><i class="fa fa-angle-right"></i></div>
        
        <div class="alba-home-slider">
                
                <div class="alba-home-slider-block">
                    
                    <img src="<?php echo get_template_directory_uri() ?>/images/demo/222.jpeg" alt="<?php esc_attr_e('Demo Slide One', 'albar') ?>" />
                    <div class="slider-h">
                    <h3>
                        <?php _e( 'Споредба на пазарот', 'albar' ); ?>
                    </h3>
                    </div>
                    <div class="slider-p">
                    <p>
                        <?php _e( 'Ние сме најпогодни за нудење на независна и непристрасна споредба за осигурување на автомобили и за приозводи за домашно осигурубање ', 'albar' ); ?> 
                    </p>
                    </div>
                    <div class="slider-b">
                    <a class="bttn" href="http://vccw.test/finance/krediti">Повеќе</a>
                    </div>
                </div>
                
                <div class="alba-home-slider-block">
                    
                    <img src="<?php echo get_template_directory_uri() ?>/images/demo/55.jpg" alt="<?php esc_attr_e('Demo Slide Two', 'albar') ?>" />
                    <div class="slider-h">
                    <h3>
                        <?php _e( 'Тука е по лесно за вас', 'albar' ); ?>
                    </h3>
                    </div>
                    <div class="slider-p">
                    <p>
                        <?php _e( 'Tvoj izbor, Tvoja sloboda!! не станете исцрпени со пресметки, Ние го правиме тоа лесно за вас. Najdi najdobriot kredit tuka za tvoite potrebi.  Споредете ги  сите kreditni понуди на банки во Mакедонија.', 'albar'  ); ?> 
                    </p>
                    </div>
                    <div class="slider-b">
                    <a class="bttn" href="http://vccw.test/finance/krediti">Повеќе</a>
                    </div>
                </div>        

                <div class="alba-home-slider-block">
                    
                    <img src="<?php echo get_template_directory_uri() ?>/images/demo/travel.jpg" alt="<?php esc_attr_e('Demo Slide Three', 'albar') ?>" />
                    <div class="slider-h">
                    <h3>
                        <?php _e( 'Живот нема граници', 'albar' ); ?>
                    </h3>
                    </div>
                    <div class="slider-p">
                    <p>
                        <?php _e( 'Размислите за иднината.  Еден од најдобрите начини да заштедите пари е да поставите цел. Започнете со размислување за она што можеби сакате да го зачувате. Stedi i odberi gi tuka najsoodvetnite ponudi za vas. Споредете ги  tuka сите depozidni понуди на банки во Mакедонија', 'albar.', 'albar' ); ?> 
                    </p> 
                    </div>
                    <div class="slider-b">
                    <a class="bttn" href="http://vccw.test/finance/krediti">Повеќе</a>
                    </div>
                </div>
                
            
        </div>
        <div class="alba-home-slider-pager"></div>
    </div>

<?php endif; ?>