<?php
/*Template Name: Home*/
get_header();
$about_us_section = get_field('about_us');
$how_it_works_section = get_field('how_it_works');
$our_services_section = get_field('our_services');
$industries_section = get_field('industries');
$video_section = get_field('video_section');
$testimonials_section = get_field('testimonials');
$our_blog_section = get_field('our_blog');
$contact_section = get_field('contact');

$header = get_field('header_items');
?>

    <div class="site-blocks-cover overlay" style="background-image: url('<?php echo $header['bg_header']; ?>');" data-stellar-background-ratio="0.5" id="section-home">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-md-8">
                    <h1 class="text-white font-weight-light text-uppercase font-weight-bold"><?php echo $header['title_text']; ?></h1>
                    <p class="mb-5"><?php echo $header['title_text_small']; ?></p>
                    <?php
                    if($header['button_center_header_title'])
                    {
                        echo '<p><a href="'.$header['button_center_header_link'].'" class="btn btn-primary py-3 px-5 text-white">'.$header['button_center_header_title'].'</a>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section" id="section-about">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-5 ml-auto mb-5 order-md-2">
                    <img src="<?php echo $about_us_section['image']; ?>" alt="Image" class="img-fluid rounded">
                </div>
                <div class="col-md-6 order-md-1">
                    <div class="text-left pb-1 border-primary mb-4">
                        <h2 class="text-primary"><?php echo $about_us_section['title']; ?></h2>
                    </div>
                    <?php echo $about_us_section['content']; ?>
                </div>

            </div>
        </div>
    </div>

    <div class="site-section bg-image overlay" style="background-image: url(<?php echo $how_it_works_section['background']; ?>);" id="section-how-it-works">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center border-primary">
                    <h2 class="font-weight-light text-primary"><?php echo $how_it_works_section['title']; ?></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                    <div class="how-it-work-item">
                        <span class="number">1</span>
                        <div class="how-it-work-body">
                            <h2><?php echo $how_it_works_section['title_content_1']; ?></h2>
                            <p class="mb-5"><?php echo $how_it_works_section['content_1']; ?></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                    <div class="how-it-work-item">
                        <span class="number">2</span>
                        <div class="how-it-work-body">
                            <h2><?php echo $how_it_works_section['title_content_2']; ?></h2>
                            <p class="mb-5"><?php echo $how_it_works_section['content_2']; ?></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                    <div class="how-it-work-item">
                        <span class="number">3</span>
                        <div class="how-it-work-body">
                            <h2><?php echo $how_it_works_section['title_content_3']; ?></h2>
                            <p class="mb-5"><?php echo $how_it_works_section['content_3']; ?></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="site-section border-bottom" id="section-our-team">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center border-primary">
                    <h2 class="font-weight-light text-primary">Our Team</h2>
                </div>
            </div>

            <div class="row">
                <?php
                $args = array(
                    'post_type' => 'people',
                    'order' => 'DESC',
                );
                $people = new WP_Query( $args );
                if ($people->have_posts()) {
                    while ( $people->have_posts() ) {

                        $people->the_post();
                        ?>
                        <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 mt-3">
                        <div class="person">
                            <?php the_post_thumbnail('', ['class' => 'img-fluid rounded mb-5 w-75 rounded-circle']); ?>
                            <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                            <p class="position text-muted"><?php the_excerpt(); ?></p>
                            <p class="mb-4"><?php the_content(); ?></p>
                            <ul class="ul-social-circle">
                                <li><a href="#"><span class="icon-facebook"></span></a></li>
                                <li><a href="#"><span class="icon-twitter"></span></a></li>
                                <li><a href="#"><span class="icon-linkedin"></span></a></li>
                                <li><a href="#"><span class="icon-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>

                <?php
                    }
                }
                wp_reset_postdata();
                ?>
            </div>

        </div>
    </div>
    <div class="site-section bg-light" id="section-services">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center border-primary">
                    <h2 class="mb-0 text-primary"><?php echo $our_services_section['title']; ?></h2>
                    <p class="color-black-opacity-5"><?php echo $our_services_section['subtitle']; ?></p>
                </div>
            </div>
            <div class="row align-items-stretch">
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                    <div class="unit-4 d-flex">
                        <div class="unit-4-icon mr-4"><span class="text-primary <?php echo $our_services_section['ico_1']; ?>"></span></div>
                        <div>
                            <h3><?php echo $our_services_section['title_1']; ?></h3>
                            <p><?php echo $our_services_section['content_1']; ?></p>
                            <p><a href="#">Learn More</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                    <div class="unit-4 d-flex">
                        <div class="unit-4-icon mr-4"><span class="text-primary <?php echo $our_services_section['ico_2']; ?>"></span></div>
                        <div>
                            <h3><?php echo $our_services_section['title_2']; ?></h3>
                            <p><?php echo $our_services_section['content_2']; ?></p>
                            <p><a href="#">Learn More</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                    <div class="unit-4 d-flex">
                        <div class="unit-4-icon mr-4"><span class="text-primary <?php echo $our_services_section['ico_3']; ?>"></span></div>
                        <div>
                            <h3><?php echo $our_services_section['title_3']; ?></h3>
                            <p><?php echo $our_services_section['content_3']; ?></p>
                            <p><a href="#">Learn More</a></p>
                        </div>
                    </div>
                </div>
                 <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                    <div class="unit-4 d-flex">
                        <div class="unit-4-icon mr-4"><span class="text-primary <?php echo $our_services_section['ico_4']; ?>"></span></div>
                        <div>
                            <h3><?php echo $our_services_section['title_4']; ?></h3>
                            <p><?php echo $our_services_section['content_4']; ?></p>
                            <p><a href="#">Learn More</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                    <div class="unit-4 d-flex">
                        <div class="unit-4-icon mr-4"><span class="text-primary <?php echo $our_services_section['ico_5']; ?>"></span></div>
                        <div>
                            <h3><?php echo $our_services_section['title_5']; ?></h3>
                            <p><?php echo $our_services_section['content_5']; ?></p>
                            <p><a href="#">Learn More</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                    <div class="unit-4 d-flex">
                        <div class="unit-4-icon mr-4"><span class="text-primary <?php echo $our_services_section['ico_6']; ?>"></span></div>
                        <div>
                            <h3><?php echo $our_services_section['title_6']; ?></h3>
                            <p><?php echo $our_services_section['content_6']; ?></p>
                            <p><a href="#">Learn More</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-section block-13" id="section-industries">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center border-primary">
                    <h2 class="mb-0 text-primary"><?php echo $industries_section['title']; ?></h2>
                    <p class="color-black-opacity-5"><?php echo $industries_section['subtitle']; ?></p>
                </div>
            </div>
        </div>

        <?php
        $url = "https://jsonplaceholder.typicode.com/photos";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, $url);
        $result = curl_exec($ch);
        curl_close($ch);

        //var_dump(json_decode($result, true));
        $r = json_decode($result,true);

        ?>
        <div class="owl-carousel nonloop-block-13" id="industries">
            <?php for($i=0; $i<5; $i++): $item = rand(1, count($r)); ?>
            <div>
                <a href="#" class="unit-1 text-center">
                    <img src="<?php echo $r[$item]["thumbnailUrl"]; ?>" alt="Image" class="img-fluid">
                    <div class="unit-1-text">
                        <h3 class="unit-1-heading"><?php $r[$item]["title"]; ?></h3>
                    </div>
                </a>
            </div>
            <?php endfor; ?>
        </div>
    </div>

    <div class="site-blocks-cover overlay inner-page-cover" style="background-image: url(<?php echo $video_section['background']; ?>); background-attachment: fixed;">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">

                <div class="col-md-7">
                    <a href="<?php echo $video_section['video_link'] ?>" class="play-single-big mb-4 d-inline-block popup-vimeo"><span class="icon-play"></span></a>
                    <h2 class="text-white font-weight-light mb-5 h1"><?php echo $video_section['title']; ?></h2>

                </div>
            </div>
        </div>
    </div>

    <div class="site-section border-bottom">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center border-primary">
                    <h2 class="font-weight-light text-primary"><?php echo $testimonials_section['title']; ?></h2>
                </div>
            </div>

            <div class="slide-one-item home-slider owl-carousel">
                <?php
                $args = array(
                    'post_type' => 'people',
                    'order' => 'DESC',
                );
                $people = new WP_Query($args);
                if($people->have_posts()) {
                    while ($people->have_posts()) {
                        $people->the_post();
                ?>
                    <div>
                        <div class="testimonial">
                            <figure class="mb-4">
                                <?php the_post_thumbnail('', ['class' => 'img-fluid mb-3']); ?>
                            </figure>
                            <blockquote>
                                <p><?php the_content(); ?></p>
                                <p class="author"> &mdash; <?php the_title(); ?></p>
                            </blockquote>
                        </div>
                    </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>

    <div class="site-section" id="section-blog">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center border-primary">
                    <h2 class="font-weight-light text-primary"><?php echo $our_blog_section['title']; ?></h2>
                    <p class="color-black-opacity-5"><?php echo $our_blog_section['subtitle']; ?></p>
                </div>
            </div>

            <div class="row mb-5 align-items-stretch">
            <?php
            global $post;
            $args = array( 'posts_per_page' => 3 );
            $lastposts = get_posts( $args );
            foreach ( $lastposts as $post ) : setup_postdata( $post ); ?>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                        <div class="h-entry">
                            <?php the_post_thumbnail('', ['class' => 'img-fluid w-50']); ?>
                            <h2 class="font-size-regular"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <div class="meta mb-4">by <?php the_author(); ?> <span class="mx-2">&bullet;</span> <?php echo get_the_date(); ?> <span class="mx-2">&bullet;</span> <?php the_category(' '); ?></div>
                            <p><?php the_content(); ?></p>
                        </div>
                    </div>
            <?php endforeach;
            wp_reset_postdata();
            ?>
            </div>
            <?php if($our_blog_section['button_all_posts_checker'] == true): ?>
            <div class="row">
                <div class="col-12 text-center">
                    <p class="mb-0"><a href="<?php echo $our_blog_section['url_button_all_posts']; ?>" class="btn btn-primary py-3 px-5 text-white"><?php echo $our_blog_section['title_button_all_posts']; ?></a></p>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>

    <div class="site-section bg-light" id="section-contact">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center border-primary">
                    <h2 id="con" class="font-weight-light text-primary"><?php echo $contact_section['title']; ?></h2>
                    <p class="color-black-opacity-5"><?php echo $contact_section['subtitle']; ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7 mb-5">
                    <form class="p-5 bg-white" method="post">
                        <div class="row form-group">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <label class="text-black" for="fname">First Name</label>
                                <input type="text" id="fname" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label class="text-black" for="lname">Last Name</label>
                                <input type="text" id="lname" class="form-control">
                            </div>
                        </div>

                        <div class="row form-group">

                            <div class="col-md-12">
                                <label class="text-black" for="email">Email</label>
                                <input type="email" id="email" class="form-control">
                            </div>
                        </div>

                        <div class="row form-group">

                            <div class="col-md-12">
                                <label class="text-black" for="subject">Subject</label>
                                <input type="subject" id="subject" class="form-control">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="message">Message</label>
                                <textarea name="message" id="message" cols="30" rows="7" class="form-control"></textarea>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="button" value="Send Message" class="btn btn-primary py-2 px-4 text-white" id="submit">
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-md-5">
                    <div class="p-4 mb-3 bg-white">
                        <p class="mb-0 font-weight-bold"><?php echo $contact_section['address_title']; ?></p>
                        <p class="mb-4"><?php echo $contact_section['address_content']; ?></p>

                        <p class="mb-0 font-weight-bold"><?php echo $contact_section['phone_title']; ?></p>
                        <p class="mb-4"><?php echo $contact_section['phone_content']; ?></p>

                        <p class="mb-0 font-weight-bold"><?php echo $contact_section['email_title']; ?></p>
                        <p class="mb-0"><?php echo $contact_section['email_content']; ?></p>
                    </div>
                    <div class="p-4 mb-3 bg-white">
                        <h3 class="h5 text-black mb-3"><?php echo $contact_section['more_info_title']; ?></h3>
                        <p><?php echo $contact_section['more_info_content']; ?></p>
                        <?php if($contact_section['more_info_check_button'] == true): ?>
                            <p><a href="<?php echo $contact_section['more_info_button_link'] ?>" class="btn btn-primary px-4 py-2 text-white"><?php echo $contact_section['more_info_button_title'] ?></a></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>


