<!DOCTYPE html>

<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include 'icon.php'?>
    <title>Φάρμα Παρνασσού - Υπηρεσίες</title>

    <?php include 'stylesheets.php'?>

    <!--SEO-->
    <meta name="description" content="Κρασιά από τα αμπελοτόπια μικρών οινοποιών με σεβασμό στην αρχαία αμπελουργική παράδοση.">
    <meta name="keywords" content="φαρμα παρνασσου,farma parnassou,farmaparnassou,τροφοδοσια επιχειρησεων,τροφοδοσια εστιατοριων,τροφοδοσια μεζεδοπωλειων,τροφοδοσια σκαφων,τροφοδοσια ξενοδοχειων,catering">
    <meta name="author" content="Farma parnassou">

<body id="products-page">
<?php include_once("analyticstracking.php") ?>
<?php include 'top-bar.php'?>


<!--wrap the page content do not style this-->
<div id="page-content" style="left: 0px;" >
    <div class="container page-color">
        <article class="full-article">
            <div class="row">
                <h1  class="col-xs-12  product-category">Υπηρεσίες</h1>
            </div>

            <section><!--Krasia section-->
                <div class="row product-row">
                    <div class="col-xs-12  col-lg-3"><!--Left or up column-->
                        <div class="product-name">
                            <div class="hook-img">
                                <div class="div-center" >
                                    <h3>Υπηρεσίες</h3>
                                </div>
                            </div>
                            <img class="img-responsive product-image" src="images/ipiresies/forprofessionals-compressor.jpg" alt="Κρασιά">
                        </div>
                    </div><!--End Left or up column-->
                    <div class="col-xs-12 col-lg-9 product-text "><!--Right column-->
                        <p>Οι υπηρεσίες μας εκτείνονται και στο χώρο της τροφοδοσίας επιχειρήσεων όπως :
                        </p>
                        <ul>
                            <li>Εστιατόρια</li>
                            <li>Μεζεδοπωλεία</li>
                            <li>Σκάφοι / Yachts</li>
                            <li>Ξενοδοχεία</li>
                            <li>Catering</li>
                        </ul>

                        <p>Εστιατόρια : Το κρεοπωλείο μας «Φάρμα Παρνασσού» βρίσκεται κοντά στον επαγγελματία που επιθυμεί να προσφέρει στους πελάτες τους κάτι ιδιαίτερο, αυθεντικό και μοναδικό. Με αίσθημα ευθύνης σχεδιάζουμε και δημιουργούμε τις γευστικές προτάσεις για τα menu των εστιατορείων αφού πρώτα ακούσουμε προσεχτικά τις ανάγκες του καταστήματος.</p>
                        <p>Ταβέρνες : Αναλαμβάνουμε την εξυπηρέτηση μικρών σημείων εστίασης όπως ταβέρνες, μεζεδοπωλεία, κουτούκια με επιλεγμένα εξαιρετικής ποιότητας κρέατα και προϊόντα.</p>
                        <p>Σκάφοι / Yachts : Εξυπηρετούμε Σκάφοι και Yachts στην Μαρίνα Αθηνών, Μαρίνα Φλοίσβου και όπού αλλού μας προταθεί από τους παλάτες μας. Με ευθύνη και σιγουριά σχεδιάζουμε μαζί με τους chefs τα μενού που θα εξηπηρετούν στο κέραιο τις ανάγκες του πληρώματος αλλά και των επιβατών.</p>
                        <p>Ξενοδοχεία : Αναλαμβάνουμε την τροφοδοσία ξενοδοχειακών μονάδων σύμφωνα με τις ανάγκες των πελατών και των chefs.</p>
                        <p>Catering : Στον τομέα του catering ερχόμαστε με μοναδικές προτάσεις και γευστικές λύσεις που θα ικανοποιήσουν ακόμα και τους πιο απαιτητικούς ουρανίσκους. Με αγνα, αυθεντικά κρέατα και προϊόντα που χαρίζουν γευστικές απολαύσεις και μοναδικές γαστρονομικές εμπειρίες.</p>
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
        $('#slidemenu>ul.nav>li:nth-child(4)').addClass("active");;
    });
</script>


</body>
</html>