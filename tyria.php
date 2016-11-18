<!DOCTYPE html>

<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Φάρμα Παρνασσού - Τυριά</title>

    <?php include 'stylesheets.php'?>

<body id="products-page">
<?php include 'top-bar.php'?>


<!--wrap the page content do not style this-->
<div id="page-content" style="left: 0px;" class="tyria">
    <div class="container page-color">
        <article class="full-article">
            <div class="row">
                <h1  class="col-xs-12  product-category">Γαλακτοκομικά προϊόντα</h1>
            </div>
            <section><!--Μοσχάρι section-->
                <div class="row product-row">
                    <div class="col-xs-12  col-lg-3"><!--Left or up column-->
                        <div class="product-name">
                            <div class="hook-img">
                                <div class="div-center" >
                                    <h3>Τυριά</h3>
                                </div>
                            </div>
                            <img class="img-responsive product-image" src="images/cheese/tyria.jpg" alt="Cheese">
                        </div>
                    </div><!--End Left or up column-->
                    <div class="col-xs-12 col-lg-9 product-text "><!--Right column-->
                        <p>Στο κρεοπωλείο μας θα βρείτε επιλεγμένες ποικιλίες Τυριών από μικρούς Έλληνες παραγωγούς.
                        </p>
                        <p>Οι συνεργάτες μας είναι μικρές γαλακτοκομικές επιχειρήσεις που βασικός τους στόχος είναι η παραγωγή άριστης ποιότητας και γεύσης τυριών.
                        </p>
                        <p>Tα μοναδικά σε γεύση τυριά του τόπου μας αντιστέκονται στο πέρασμα του χρόνου χάρη στο μεράκι των τυροκόμων.</p>
                        <p>Η ζωνταμή μυρωδιά του καλού φρέσκου γάλακτος αποτυπωνεται και δίνει προσωπικότητα στα τυριά μας.</p>
                        <ul>
                            <li>Αιγοπρόβια Φέτα και γίδινο τυρί από την Αριδαία</li>
                            <li>Γραβιέρα Ρεθύμνου. Γραβιέρα βουτυράτη και µε γλυκιά ισορροπία ανάµεσα στο γλυκό και το πικάντικο</li>
                            <li>Κρητική Ξινομυζήθρα</li>
                            <li>Ξερό Ανθότυρο, Νωπό Ανθότυρο, μοσχομυροδάτο γίδινο βούτυρο</li>
                            <li>Μυζήθρα Χωριάτικη</li>
                            <li>Γιαούρτια Γίδινα και Πρόβεια</li>
                            <li>Φορμαέλα Αράχωβας Παρνασσού, ημίσκληρο τυρί με πικάντικη γεύση και πλούσιο άρωμα</li>

                        </ul>

                    </div>
                </div>
            </section><!--End Μοσχάρι section-->


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
        $('#horizontal-menu li:nth-child(3) a').addClass("product-active");
        $('.footer').addClass("footer-absolute");

    });
</script>


</body>
</html>