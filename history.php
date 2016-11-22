<!DOCTYPE html>

<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include 'icon.php'?>
    <title>Φάρμα Παρνασσού - Η ιστορία μας</title>

    <?php include 'stylesheets.php'?>

    <!--SEO-->
    <meta name="description" content="H οικογένεια Μιχάλη ξεκίνησε το 2010 στο Νέο Φάληρο το νέο τους κρεοπωλείο «Φάρμα Παρνασσού» έχοντας ώς παρακαταθήκη το καλύτερο χασάπικο της Λιβαδειάς.">
    <meta name="keywords" content="φαρμα παρνασσου,farma parnassou,farmaparnassou,κρεατα,Νεο Φαληρο,κρεατα Νεο Φαληρο,ελληνικα προϊοντα,ελληνικα κρεατα,κρεοπωλειο,κρεοπωλειο Νεο Φαληρο,κρεοπωλειο Πειραιας,κρεατα Πειραιας,κρεας,kreas,φαρμα,ελληνικο κρεοπωλειο,διατροφη,ιστορια φαρμας παρνασσου,history farmaparnassou,Constantinos Michalis,George Michalis">
    <meta name="author" content="Farma parnassou">

<body id="history">
<?php include_once("analyticstracking.php") ?>
<!--Top bar with social media icons and navbar-->
<?php include 'top-bar.php'?>


<!--wrap the page content do not style this-->
<div id="page-content" style="left: 0px;" class="">
    <div class="container">
        <article class="full-article">
            <div class="col-xs-12 col-lg-9 article-with-opacity"><!--Left column-->
                <h1>Η ιστορία μας</h1>
                <p>Ο Γιώργος και Ο Κωνσταντίνος από πολύ μικροί έδιναν τον
                    καλύτερο εαυτό τους στην χασαποταβέρνα που λειτουργούσε ο παππούς Νικολής απο το 1923.
                    ο παππούς Νικολής έδωσε την σκυτάλη της επιχείρησης στον γιό του Γιώργο,
                    ο παππούς Γιώργος με την σειρά του στον γιό του Νίκο και αυτός με τη σειρά του στα παιδιά του Γιώργο και Κωνσταντίνο.
                    Τα παιδιά παράλληλα με την ενασχόληση τους με την οικογενειακή επιχείρηση μελέτησαν, σπούδασαν,
                    μορφώθηκαν και ταξίδεψαν αρκετά. Ο Γιώργος σπούδασε οικονομικά στο Πάντειο Πανεπιστήμιο και μεταπτυχιακά στο Λονδίνο.
                    Ο Κωνσταντίνος φοίτησε στο Οικονομικό Πανεπιστήμιο Πειραιά, Βιομηχανική Διοίκηση και ακολούθησε μεταπτυχιακά στα Logistics και στη διαχείριση της εφοδιαστική αλυσίδα.
                </p>
                <p>
                    Αυτό που πάντα υπήρχε μέσα τους ήταν η μυρωδιά του καλού κρέατος,
                    η καλη & αγνή πρώτη ύλη και το επιχειρηματικό δαιμόνιο.
                    Πολύ γρήγορα ανακάλυψαν τι είναι αυτό που λείπει από την καθημερινότητα στην αγορά της Αθήνας και μαζί ξεκίνησαν το Κρεοπωλείο τους «Φάρμα Παρνασσού».
                </p>
                <p>
                    Πράγματι,
                    η οικογένεια Μιχάλη ξεκίνησε το 2010 στο Νέο Φάληρο το νέο τους κρεοπωλείο «Φάρμα Παρνασσού» έχοντας ώς παρακαταθήκη το καλύτερο χασάπικο της Λιβαδειάς που λειτουργούσε από το 1923,
                    την αγάπη για «σωστή» και «ποιοτική» διατροφή και τον σεβασμό στον πελάτη.
                </p>

            </div>

            <div class="col-xs-12 col-lg-3 "><!--Right column-->
                 <img class="image-figure img-responsive" src="images/history/granpa-with-kids3-compressor.jpg" alt="Παππούς Νίκος με Γιώργο και Κώστα " >
            </div>
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





        });



        //Active class
        $('#slidemenu>ul.nav>li:nth-child(1)').addClass("active");



    });
</script>


</body>
</html>