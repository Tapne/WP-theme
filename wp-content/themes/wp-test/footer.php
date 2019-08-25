<?php
$first_column_section = get_field('first_column');
$second_column_section = get_field('second_column');
$third_column_section = get_field('third_column');
$fourth_column_section = get_field('fourth_column');
?>
<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-5 mr-auto">
                        <h2 class="footer-heading mb-4"><?php echo $first_column_section['title']; ?></h2>
                        <p><?php echo $first_column_section['content']; ?></p>
                    </div>

                    <div class="col-md-3">
                        <h2 class="footer-heading mb-4"><?php echo $second_column_section['title']; ?></h2>
                        <?php
                        wp_nav_menu([
                            'theme_location' => 'primary',
                            'container' =>  'ul',
                            'echo' => true,
                            'menu_class' => 'list-unstyled',
                            'items_wrap' => '<ul class="%2$s">%3$s</ul>',
                            'depth' => 1,
                        ]);
                        ?>
                    </div>
                    <div class="col-md-3">
                        <h2 class="footer-heading mb-4"><?php echo $third_column_section['title']; ?></h2>
                        <?php if($third_column_section['facebook_check'] == true): ?>
                        <a href="<?php echo $third_column_section['facebook_link'] ?>" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                        <?php endif; ?>
                        <?php if($third_column_section['twitter_check'] == true): ?>
                        <a href="<?php echo $third_column_section['twitter_link'] ?>" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                        <?php endif; ?>
                        <?php if($third_column_section['instagram_check'] == true): ?>
                        <a href="<?php echo $third_column_section['instagram_link'] ?>" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                        <?php endif; ?>
                        <?php if($third_column_section['linkedin_check'] == true): ?>
                        <a href="<?php echo $third_column_section['linkedin_link'] ?>" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <h2 class="footer-heading mb-4"><?php echo $fourth_column_section['title']; ?></h2>
                <form method="post">
                    <div class="input-group mb-3">
                        <input id="newsletter_email" type="text" class="form-control border-secondary text-white bg-transparent" placeholder="<?php echo $fourth_column_section['input_text']; ?>" aria-label="Enter Email" aria-describedby="button-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary text-white" type="button" id="button-addon2"><?php echo $fourth_column_section['button_text']; ?></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
            <div class="col-md-12">
                <div class="border-top pt-5">
                    <p>
                        <small class="block">&copy; <script>document.write(new Date().getFullYear());</script> Logis Free Template. All Rights Reserved. <br> Designed &amp; Developed by <a href="https://free-template.co/" target="_blank">Free-Template.co</a></small>
                    </p>
                </div>
            </div>

        </div>
    </div>
</footer>
<script>
    //CONTACT US
    $(document).ready(function() {
        $('input#submit').on('click', function() {
            $.ajax({
                type: 'post',
                url: 'wp-admin/admin-ajax.php?action=single_post',
                data: {
                    fname: $('#fname').val(),
                    lname: $('#lname').val(),
                    subject: $('#subject').val(),
                    email: $('#email').val(),
                    message: $('#message').val(),
                },
                success: function(data) {
                    alert("Wysłano pomyślnie!");
                }
            });
        });
    });

    //INDUSTRIES
    $(document).ready(function() {

        $('.nonloop-block-13').owlCarousel({
            jsonPath : "https://jsonplaceholder.typicode.com/photos",
            jsonSuccess : customDataSuccess
        });
        function customDataSuccess(data){
            var content = "";
            for(var i in data["items"]){

                var img = data["items"][i].img;
                var alt = data["items"][i].alt;

                content += "<img src=\"" +img+ "\" alt=\"" +alt+ "\">"
            }
            $('.nonloop-block-13').html(content);
        }

    });

    //newsletter
    $(document).ready(function() {
        $('button#button-addon2').on('click', function() {
            $.ajax({
                type: 'post',
                url: 'wp-admin/admin-ajax.php?action=newsletter',
                data: {
                    email: $('#newsletter_email').val(),
                },
                success: function(data) {
                    alert("Zapisano pomyślnie!");
                }
            });
        });
    });
</script>
<!-- </div> -->
<?php wp_footer(); ?>
</body>
</html>