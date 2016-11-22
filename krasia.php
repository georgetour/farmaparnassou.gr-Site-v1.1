<!DOCTYPE html>

<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include 'icon.php'?>
    <title>Φάρμα Παρνασσού - Κρασιά</title>

    <?php include 'stylesheets.php'?>

    <!--SEO-->
    <meta name="description" content="Κρασιά από τα αμπελοτόπια μικρών οινοποιών με σεβασμό στην αρχαία αμπελουργική παράδοση.">
    <meta name="keywords" content="φαρμα παρνασσου,farma parnassou,farmaparnassou,κρασι,κρασια,ελληνικα κρασια,αγιωριτικο,ροδιτης,cabernet,syrah,merlot,chardonnay,ασύρτικο">
    <meta name="author" content="Farma parnassou">

<body id="products-page">
<?php include_once("analyticstracking.php") ?>
<?php include 'top-bar.php'?>


<!--wrap the page content do not style this-->
<div id="page-content" style="left: 0px;" >
    <div class="container page-color">
        <article class="full-article">
            <div class="row">
                <h1  class="col-xs-12  product-category">Κρασιά</h1>
            </div>

            <section><!--Krasia section-->
                <div class="row product-row">
                    <div class="col-xs-12  col-lg-3"><!--Left or up column-->
                        <div class="product-name">
                            <div class="hook-img">
                                <div class="div-center" >
                                    <h3>Κρασιά</h3>
                                </div>
                            </div>
                            <img class="img-responsive product-image" src="images/krasi/krasi.jpg" alt="Κρασιά">
                        </div>
                    </div><!--End Left or up column-->
                    <div class="col-xs-12 col-lg-9 product-text "><!--Right column-->
                        <p>Στη Φάρμα Παρνασσού θα βρείτε ξεχωριστά ελληνικά κρασιά με προσωπικότητα και ευθύνη.
                        </p>

                        <p>Κρασιά από τα αμπελοτόπια μικρών οινοποιών με σεβασμό στην αρχαία αμπελουργική παράδοση.</p>
                        <p>Στη Φάρμα Παρνασσού στόχος είναι ο συνδυάσμός του καλού κρασιού με το καλό φαγητό και η δημιουργία μιας γευστικής ισορροπίας. η δημιουργία δηλαδή ενός γευστικού συνόλου στο οποίο τα δύο στοιχεία αλληλοσυμπληρώνονται αρμονικα και απολαυστικά.</p>
                        <p>Ποικιλίες όπως Αγιωργίτικο Νεμέας, Ροδίτης με Σαββατιανό, Cabernet, Syrah, Merlot, Chardonnay, Ασύρτικο.</p>

                    </div>
                </div>
            </section><!--End Zimarika section-->




        </article>
    </div><!--Full page container end-->
</div><!--End page content-->


<?php include 'footer.php'?>


<!--Jquery bootstrap scrips-->
<script  src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<script>
    $(document).ready(function () {


        //stick in the fixed 100% height behind the navbar but don't wrap it
        $('#slide-nav.navbar .container').append($('<div id="navbar-height-col"></div>'));

        // Enter your ids or classes
        var toggler = '.navbar-toggle';
        var pagewrapper = '#page-content';
        var navigationwrapper = '.navbar-header';
        var menuwidth = '100%'; // the menu inside the slide menu itself
        var slidewidth = '80%';
        var menuneg = '-100%';
        var slideneg = '-80%';
        var topicons = '#top-icons';


        $("#slide-nav").on("click", toggler, function () {

            var selected = $("#slide-nav").hasClass('slide-active');

            $('#slidemenu').stop().animate({
                left: selected ? menuneg : '0px'
            });

            $('#navbar-height-col').stop().animate({
                left: selected ? slideneg : '0px'
            });

            $(pagewrapper).stop().animate({
                left: selected ? '0px' : slidewidth
            });

            $(topicons).stop().animate({
                left: selected ? '0px' : slidewidth
            });

            $(navigationwrapper).stop().animate({
                left: selected ? '0px' : slidewidth
            });


            $(this).toggleClass('slide-active', !selected);
            $('#slidemenu').toggleClass('slide-active');


            $('#page-content,#top-icons, .navbar, body, .navbar-header').toggleClass('slide-active');


        });


        var selected = '#slidemenu, #page-content,#top-icons, body, .navbar, .navbar-header';


        $(window).on("resize", function () {

            if ($(window).width() > 767 && $('.navbar-toggle').is(':hidden')) {
                $(selected).removeClass('slide-active');
            }


        });

        //iPad specific fix
        $(toggler).on('click',function () {
            if ( ($(window).width() <= 1024) && ($(window).width() > 769 )){
                if($('body').hasClass('slide-active')){
                    $(toggler).css("margin-left","0px");
                }

                else if(!$('body').hasClass('slide-active')){
                    $(toggler).css("margin-left","45px");
                }
            }
        })

        //Active class
        $('#horizontal-menu li:nth-child(7) a').addClass("product-active");
        $('.footer').addClass("footer-absolute");
    });
</script>


</body>
</html>