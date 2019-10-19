        <!--  Necessary scripts  -->

        <script type="text/javascript" src="<?= base_url('assets8/'); ?>assets/js/jquery-2.1.3.min.js"></script>
        <script type="text/javascript" src="<?= base_url('assets8/'); ?>assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?= base_url('assets8/'); ?>assets/js/owl.carousel.js"></script>
        <script type="text/javascript" src="<?= base_url('assets8/'); ?>assets/js/jquery.hoverdir.js"></script>


        <!-- script for portfolio section using hoverdirection -->
        <script type="text/javascript">
            $(function() {

                $('.portfolio-item > .item-image').each( function() { $(this).hoverdir({
                    hoverDelay : 75
                }); } );

            });
        </script>


        <!-- script for twitter-feed using owl carousel-->
        <script type="text/javascript">
            $(document).ready(function() {
 
                $("#twit").owlCarousel({
                 
                    navigation : true, // Show next and prev buttons
                    slideSpeed : 100,
                    paginationSpeed : 400,
                    navigationText : false,
                    singleItem: true,
                    autoPlay: true,
                    pagination: false
                });
 
            });
        </script>


        <!-- script for testimonial section using owl carousel -->
        <script type="text/javascript">
            $(document).ready(function() {
 
                $("#client-speech").owlCarousel({
                 
                    autoPlay: 5000, //Set AutoPlay to 3 seconds
                    stopOnHover: true,
                    singleItem:true
                });
 
            });
        </script>


    </body>