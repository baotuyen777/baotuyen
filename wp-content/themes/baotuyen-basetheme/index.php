<?php
/**
 * Template Name: Home
 */
get_header();
?>
<div class="container container-box">
    <div class="article-container">
        <div class="row">
            <div class="col-md-8">
                <div class="main section" id="main">
                    <div class="widget Blog" data-version="1" id="Blog1">
                        <div class="blog-posts hfeed">
                            <div class="date-outer">
                                <!--<h2 class="date-header"><span>Friday, February 27, 2015</span></h2>-->
                                <div class="date-posts">
                                    <?php
                                    if (have_posts()):while (have_posts()): the_post();
                                            ?>
                                            <div class="post-outer">
                                                <div class="post-start row">
                                                    <h2 class="post-home-title post-main-home-title"> 
                                                        <a href="<?php the_permalink()?>" title="<?php the_title() ?>"> <?php the_title() ?> </a> </h2>
                                                    <div class="post-header-home"> <span> <abbr class="published" title="2015-02-27T21:50:00-08:00"> February 27, 2015 </abbr> </span> </div>
                                                    <div class="homapge-thumb">
                                                        <div class="post hentry" itemprop="blogPost" itemscope="itemscope" itemtype="http://schema.org/BlogPosting">
                                                            <div id="summary7727664333473891930">
                                                                <div><a href="<?php the_permalink()?>"><span class="img-post-span">
                                                                            <img class="image-home-pop img-responsive" src="http://1.bp.blogspot.com/-2jn1lf9PfmI/VofwVhP4AmI/AAAAAAAADKY/DoZGnNEBGXM/w250-h160-c/winter-wonderland-1082511_640.jpg"></span></a>
                                                                </div>
                                                                <div> <?php echo wp_trim_words(get_the_content(),55)?></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                        endwhile;
                                    endif;
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="row">
                                <div class="blog-pager" id="blog-pager">
                                    <a class="home-link btn btn-danger" href="http://why-news-blogger-template.blogspot.com/"> <i class="fa fa-home"></i> </a> <span id="blog-pager-older-link"> <a class="blog-pager-older-link btn btn-danger" href="http://why-news-blogger-template.blogspot.com/search?updated-max=2015-02-27T20:37:00-08:00&amp;max-results=7" id="Blog1_blog-pager-older-link" title="Older Posts"> <i class="fa fa-long-arrow-right"></i> </a> </span> </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="blog-feeds">
                            <div class="feed-links"> Subscribe to: <a class="feed-link" href="http://why-news-blogger-template.blogspot.com/feeds/posts/default" target="_blank" type="application/atom+xml">Posts (Atom)</a> </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-4 hide-home-sidebar">
                <?php get_sidebar() ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>