        <!-- <div class="content-wrapper bg-white-section">
            <div id="guide" class="inner guid-inner">
                <h2>
                    <span>GUIDE</span>
                    <small>~始め方ガイド~</small>
                </h2>  
                <article class="guide-contents pc-d-fl">
                    <//?php 
                        //     $guide_posts = array(
                        //         'post_type' => 'guide',
                        //         'posts_per_page' => 6,
                        //         'order' => 'DESC', 
                        //     );       
                        //     $posts = get_posts($guide_posts);   
                        //     if( $posts ):
                        //         foreach( $posts as $post): 

                        //             get_template_part( 'template-parts/content', 'top-guide' );
                        //             // テンプレート

                        //         endforeach; 
                        //     endif;
                        // wp_reset_postdata();                            
                    ?>    
                </article>   
                
                <a href="https://online-casino.media/guide/" target="_blank" class="btn section-btn-red d-fl">
                    <span>始め方ガイドはこちら</span>
                    <img src="<//?php echo get_template_directory_uri(); ?>/asset/arrow-right-solid-white.svg" alt="arrow">
                </a>

            </div>
   

            <div id="event" class="inner event-inner">
                <h2>
                    <span>EVENT</span>
                    <small>~イベント情報~</small>
                </h2>     
                <article class="event-contents pc-d-fl">
                    <//?php 
                        $event_posts = array(
                                'post_type' => 'event',
                                'posts_per_page' => 6,
                                'order' => 'DESC', 
                            );       
                            $posts = get_posts($event_posts);   
                            if( $posts ):
                                foreach( $posts as $post): 

                                    get_template_part( 'template-parts/content', 'top-event' );
                                    // テンプレート
                                endforeach; 
                            endif;
                        wp_reset_postdata();                            
                    ?> 
                </article>  
                
                <a href="https://online-casino.media/event/" target="_blank" class="btn section-btn-red d-fl">
                    <span>イベント情報はこちら</span>
                    <img src="<//?php echo get_template_directory_uri(); ?>/asset/arrow-right-solid-white.svg" alt="arrow">
                </a>
            </div>
        </div>         -->