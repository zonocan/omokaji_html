        <!-- <div id="bonus" class="content-wrapper bg-blue-section">
            <h2>
                <span>BONUS</span>
                <small>~ 限定ボーナス ~</small>
            </h2>  
            <div class="inner bonus-inner">
                <article>
                    <ul class="pc-d-fl">
                        <//?php 
                            $bonus_posts = array(
                                'post_type' => 'bonus',
                                'posts_per_page' => 6,
                                'order' => 'DESC', 
                            );       
                            $posts = get_posts($bonus_posts);   
                            if( $posts ):
                                foreach( $posts as $post):   

                                    get_template_part( 'template-parts/content', 'top-bonus' );
                                    // テンプレート
                                    endforeach; 
                                endif;
                            wp_reset_postdata();                            
                        ?>            
                    </ul>
                </article>
            </div>
        </div>  -->
        <!-- #bonus -->