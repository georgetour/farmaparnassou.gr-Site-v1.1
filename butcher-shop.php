<!DOCTYPE html>

<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Φάρμα Παρνασσού - Το κρεοπωλείο μας</title>

    <!--Bootstrap-->
    <link  href="css/bootstrap.min.css" rel="stylesheet" type="text/css" >

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script async src="scripts/index.js"></script>

    <!--Custom style-->
    <link href="css/non-main-pages/non-main-pages.css" rel="stylesheet" type="text/css">

    <!--Font Awesome Icons-->
    <link href="css/font-awesome/font-awesome.min.css" rel="stylesheet" type="text/css">

<body id="butcher-shop-page">
<?php include 'top-bar.php'?>


<!--wrap the page content do not style this-->
<div id="page-content" style="left: 0px;" class="">
    <div class="container">
        <article class="full-article">


            <div class="col-xs-12 col-lg-offset-8 col-lg-4 col-l iPad-portrait-left iPad-portrait-right  article-with-opacity"><!--Right column-->
                <h1>Το κρεοπωλείο μας</h1>
                <p>Στην «Φάρμα Παρνασσού» θα βρείτε κρέατα ταυτόσημα με την ζωή του
                    ελληνικού χωριού που αντικατοπτρίζουν τα έθιμα και τις αξίες που είναι συνυφασμένες με την απλή ζωη του
                    ελληνικού χωριού.
                </p>
                <p>Στο κρεοπωλείο μας Φάρμα Παρνασσού θα βρείτε κρέατα και προϊόντα ταυτόσημα με τη ζωή του Ελληνικού χωριού.
                </p>
                <p class="emphasis">Εδώ, η ξεχωριστή γεύση από το καλοσιτεμένο μοσχάρι,
                    το χωριάτικο χοιρινό, τον αλανιάρη κόκορα,
                    το άγριο κατσικάκι και το απάλο στην γεύση αρνάκι ξυπνούν πολύτιμες αναμνήσεις.
                    
                </p>


            </div>
        </article>
    </div><!--Full page container end-->
</div><!--End page content-->


<footer class="footer ">
    <div class="container">
        <div class="col-xs-12 col-lg-3">Τηλέφωνο : 2104830060</div>
        <div class="col-xs-12 col-lg-3">Διεύθυνση : Καραισκάκη 6 & Ειρήνης 33</div>
        <div class="col-xs-12 col-lg-3">Περιοχή : Νέο Φάληρο, Πειραιάς</div>
        <div class="col-xs-12 col-lg-3">email : farmaparnassou@yahoo.gr</div>
        <div  class="col-xs-12 col-lg-12 footer-rights">farmaparnassou.gr 2013-2016 All rights reserved <br>Created by George Tourtsinakis </div>

    </div>
</footer>


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
        $('#slidemenu ul.nav li:nth-child(2)').addClass("active");




    });
</script>


</body>
</html>