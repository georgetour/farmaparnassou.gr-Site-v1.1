<!DOCTYPE html>

<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include 'icon.php'?>
    <title>Φάρμα Παρνασσού - Μέλι</title>

    <?php include 'stylesheets.php'?>

    <!--SEO-->
    <meta name="description" content="Κρασιά από τα αμπελοτόπια μικρών οινοποιών με σεβασμό στην αρχαία αμπελουργική παράδοση.">
    <meta name="keywords" content="φαρμα παρνασσου,farma parnassou,farmaparnassou,μελι,μελι θαυματουργο,βιολογικο μελι,μελι ελατος,ελληνικο μελι,μελι ανοιξιατικο,μελι θυμαρι,μελι θυμαρισιο,μελι πιστοποιημενο">
    <meta name="author" content="Farma parnassou">

<body id="products-page">
<?php include_once("analyticstracking.php") ?>
<?php include 'top-bar.php'?>


<!--wrap the page content do not style this-->
<div id="page-content" style="left: 0px;" >
    <div class="container page-color">
        <article class="full-article">
            <div class="row">
                <h1  class="col-xs-12  product-category">Μέλι – Το θαυματουργό</h1>
            </div>

            <section><!--Saltses section-->
                <div class="row product-row">
                    <div class="col-xs-12  col-lg-3"><!--Left or up column-->
                        <div class="product-name">
                            <div class="hook-img">
                                <div class="div-center" >
                                    <h3>Μέλι</h3>
                                </div>
                            </div>
                            <img class="img-responsive product-image" src="images/meli/meli-compressor.jpg" alt="Μέλι">
                        </div>
                    </div><!--End Left or up column-->
                    <div class="col-xs-12 col-lg-9 product-text "><!--Right column-->
                        <p>Η αξία του ήταν αναγνωρισμένη από την αρχαιότητα. Για τους αρχαίους Έλληνες το μέλι αποτελούσε είδος κατανάλωσης, αλλά και προσφοράς στους θεούς, προκειμένου να εξασφαλιστεί η εύνοιά τους. Λόγω της πλούσιας χλωρίδας, το ελληνικό μέλι ποιοτικά και γευστικά συγκαταλέγεται στα καλύτερα παγκοσμίως.
                        </p>

                        <p>Βιολογικό Μέλι Ερείκης με την χαρακτηριστική γεμάτη γεύση με αρωματικές νότες πικρής καραμέλας, έντονο άρωμα λουλουδιών Ερείκης και ένα ιδιαίτερο κοκκινόχαλκο χρώμα που μετατρέπεται σε ένα υπέροχο χρώμα καραμέλας.</p>
                        <p>Βιολογικό Μέλι Ανοιξιάτικο & Θυμάρι από την Ρόδο. Ένα μέλι από άνθη κωνοφόρα με ιδιαίτερο άρωμα. Δεν έχει γίνει καμιά επέμβαση στην κυψέλη και στις κηρήθρες, Πιστοποιημένο απο το Υπουργείο Γεωργίας</p>
                        <p>Μέλι Έλατος Βοιωτίας. Αγνό, ανόθευτο και ανεπεξέργαστο μέλι, πυκνής υφής από τα έλατα του Παρνασσό </p>

                    </div>
                </div>
            </section><!--End Saltses section-->




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
        $('#horizontal-menu li:nth-child(11) a').addClass("product-active");
        $('.footer').addClass("footer-absolute");
    });
</script>


</body>
</html>