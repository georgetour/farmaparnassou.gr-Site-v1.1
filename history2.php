<!DOCTYPE html>

<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script  src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script async src="scripts/index.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <link href="css/non-main-pages/non-main-pages.min.css" rel="stylesheet" type="text/css">

    <!--Font Awesome Icons-->
    <link href="css/font-awesome/font-awesome.min.css" rel="stylesheet" type="text/css">

    <title>JS Bin</title>

    <style>
        /* adjust body when menu is open */
        body.slide-active {
            overflow-x: hidden
        }
        /*first child of #page-content so it doesn't shift around*/
        .no-margin-top {
            margin-top: 0px!important
        }
        /*wrap the entire page content but not nav inside this div if not a fixed top, don't add any top padding */
        #page-content {
            position: relative;
            padding-top: 70px;
            left: 0;
        }
        #page-content.slide-active {
            padding-top: 0
        }
        /* put toggle bars on the left :: not using button */
        #slide-nav .navbar-toggle {
            cursor: pointer;
            position: relative;
            line-height: 0;
            float: left;
            margin: 0;
            width: 30px;
            height: 40px;
            padding: 10px 0 0 0;
            border: 0;
            background: transparent;
        }
        /* icon bar prettyup - optional */
        #slide-nav .navbar-toggle > .icon-bar {
            width: 100%;
            display: block;
            height: 3px;
            margin: 5px 0 0 0;
        }
        #slide-nav .navbar-toggle.slide-active .icon-bar {
            background: orange
        }
        .navbar-header {
            position: relative
        }
        /* un fix the navbar when active so that all the menu items are accessible */
        .navbar.navbar-fixed-top.slide-active {
            position: relative
        }
        /* screw writing importants and shit, just stick it in max width since these classes are not shared between sizes */
        @media (max-width:767px) {
            #slide-nav .container {
                margin: 0;
                padding: 0!important;
            }
            #slide-nav .navbar-header {
                margin: 0 auto;
                padding: 0 15px;
            }
            #slide-nav .navbar.slide-active {
                position: absolute;
                width: 80%;
                top: -1px;
                z-index: 1000;
            }
            #slide-nav #slidemenu {
                background: #f7f7f7;
                left: -100%;
                width: 80%;
                min-width: 0;
                position: absolute;
                padding-left: 0;
                z-index: 2;
                top: -8px;
                margin: 0;
            }
            #slide-nav #slidemenu .navbar-nav {
                min-width: 0;
                width: 100%;
                margin: 0;
            }
            #slide-nav #slidemenu .navbar-nav .dropdown-menu li a {
                min-width: 0;
                width: 80%;
                white-space: normal;
            }
            #slide-nav {
                border-top: 0
            }
            #slide-nav.navbar-inverse #slidemenu {
                background: #333
            }
            /* this is behind the navigation but the navigation is not inside it so that the navigation is accessible and scrolls*/
            #slide-nav #navbar-height-col {
                position: fixed;
                top: 0;
                height: 100%;
                width: 80%;
                left: -80%;
                
            }
            #slide-nav.navbar-inverse #navbar-height-col {
                background: #333;
                z-index: 1;
                border: 0;
            }
            #slide-nav .navbar-form {
                width: 100%;
                margin: 8px 0;
                text-align: center;
                overflow: hidden;
                /*fast clearfixer*/
            }
            #slide-nav .navbar-form .form-control {
                text-align: center
            }
            #slide-nav .navbar-form .btn {
                width: 100%
            }
        }
        @media (min-width:768px) {
            #page-content {
                left: 0!important
            }
            .navbar.navbar-fixed-top.slide-active {
                position: fixed
            }
            .navbar-header {
                left: 0!important
            }
        }

    </style>

<body class="">

<div class="navbar navbar-default static" role="navigation" id="slide-nav">
    <div class="container">
        <div class="navbar-header" style="left: 0px;">
            <a class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="navbar-brand" href="http://">Project name</a>
        </div>
        <div id="slidemenu" style="left: -100%;" class="">



            <ul class="nav navbar-nav">
                <li class="active"><a href="http://">Home</a></li>
                <li><a href="http://about">About</a></li>
                <li><a href="http://contact">Contact</a></li>
                <li class="dropdown"> <a href="http://" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="http://">Action</a></li>
                        <li><a href="http://">Another action</a></li>
                        <li><a href="http://">Something else here</a></li>
                        <li class="divider"></li>
                        <li class="dropdown-header">Nav header</li>
                        <li><a href="http://">Separated link</a></li>
                        <li><a href="http://">One more separated link</a></li>
                        <li><a href="http://">Action</a></li>
                        <li><a href="http://">Another action</a></li>
                        <li><a href="http://">Something else here</a></li>
                        <li class="divider"></li>
                        <li class="dropdown-header">Nav header</li>
                        <li><a href="http://">Separated link</a></li>
                        <li><a href="http://">One more separated link</a></li>
                        <li><a href="http://">Action</a></li>
                        <li><a href="http://">Another action</a></li>
                        <li><a href="http://">Something else here</a></li>
                        <li class="divider"></li>
                        <li class="dropdown-header">Nav header</li>
                        <li><a href="http://">Separated link test long title goes here</a></li>
                        <li><a href="http://">One more separated link</a></li>
                    </ul>
                </li>
            </ul>

        </div>
        <div id="navbar-height-col" style="left: -80%;"></div></div>
</div>


<!--wrap the page content do not style this-->
<div id="page-content" style="left: 0px;" class="">

    <div class="container">
        <!--Top Row with icons and navbar-->
        <div class="top-icons-nav">
            <address class="hours"><!--Address and social media icons start --->
                <ul class="social-icons">
                    <li>
                        <a class="badge social facebook" href="https://gr.linkedin.com/in/georgetourtsinakis" target="_blank">
                            <i class="fa fa-facebook fa-size"></i>
                        </a>
                    </li>
                    <li>
                        <a class="badge social twitter" href="https://gr.linkedin.com/in/georgetourtsinakis" target="_blank">
                            <i class="fa fa-twitter fa-size"></i>
                        </a>
                    </li>
                    <li>
                        <a class="badge social instagram" href="https://gr.linkedin.com/in/georgetourtsinakis" target="_blank">
                            <i class="fa fa-instagram fa-size"></i>
                        </a>
                    </li>
                    <li>
                        <a class="badge social pinterest" href="https://gr.linkedin.com/in/georgetourtsinakis" target="_blank">
                            <i class="fa fa-pinterest fa-size"></i>
                        </a>
                    </li>
                </ul>
                <div class="phone">
                    <div>Τηλέφωνο : 2104800090</div>
                </div>
            </address><!--Address and social media icons end--->
            <a class="logo-absolute" href="#"><img class="logo" src="images/logo.png"></a>

        </div>
        <h1 class="no-margin-top">Bootstrap starter template</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque non eleifend ligula. Etiam commodo fringilla est, eu tempus elit fringilla sed. Phasellus porttitor felis interdum elit porttitor, id maximus magna molestie. Praesent pellentesque purus lobortis placerat aliquet. Nullam venenatis tellus mauris, sed pharetra tortor ultricies sed. Mauris accumsan a tellus eget ullamcorper. Mauris cursus viverra neque, at tristique nisi mollis a.

            Phasellus ut ultrices sem, quis dapibus nisi. Aenean ac lacus tortor. Quisque pretium malesuada nibh, non ornare tellus dignissim nec. Etiam fringilla ligula id varius pretium. Curabitur magna quam, pulvinar eu leo in, hendrerit commodo tellus. Ut nec pulvinar leo. Donec ultricies hendrerit metus, a egestas lorem gravida at. Fusce dignissim turpis vel mollis faucibus.

            Morbi mollis consequat metus ornare molestie. Integer quis congue erat. Integer a felis finibus, viverra urna ornare, dictum dui. Cras ut sapien imperdiet, venenatis ligula sit amet, suscipit arcu. Sed sed vulputate arcu. Fusce et lectus vitae leo fringilla dignissim. Sed eu urna a metus pulvinar suscipit non non diam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam ut lacus diam. Aenean volutpat consectetur ante congue rhoncus. Nunc dapibus malesuada magna eu vulputate. Curabitur commodo neque in lectus tincidunt iaculis. Ut egestas vel mi et mollis.

            Integer ut lacinia justo. Sed luctus nibh id metus convallis aliquet. In rutrum varius lacus. Etiam sagittis commodo metus, non efficitur nibh aliquam ac. Sed pretium ac tellus in fermentum. Quisque et finibus elit. Nullam in aliquam nulla. Proin a metus nec risus lobortis dictum non at libero. Donec convallis in orci a rutrum.

            Aliquam a mi consequat, tempor nibh ac, maximus tortor. Nulla nec turpis varius, efficitur orci eu, lacinia diam. Etiam at suscipit ante. Quisque rutrum mauris eu nunc sagittis, sit amet malesuada ante fermentum. Donec fermentum vulputate ante, ac pretium ipsum sodales a. Maecenas est libero, rutrum ut euismod ut, lobortis euismod nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus. Maecenas fermentum in elit vitae viverra. In eu purus scelerisque, maximus tellus eu, viverra felis. Sed lobortis mattis magna non fermentum. Curabitur varius magna a neque facilisis, dictum pharetra neque feugiat. Nam sit amet velit et mi pharetra egestas eget id velit. Nam vestibulum suscipit sagittis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce cursus consectetur diam, eu mollis turpis rhoncus a. Aenean eget luctus nisl, eu suscipit tortor.</p>

</div>


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

            $(navigationwrapper).stop().animate({
                left: selected ? '0px' : slidewidth
            });


            $(this).toggleClass('slide-active', !selected);
            $('#slidemenu').toggleClass('slide-active');


            $('#page-content, .navbar, body, .navbar-header').toggleClass('slide-active');


        });


        var selected = '#slidemenu, #page-content, body, .navbar, .navbar-header';


        $(window).on("resize", function () {

            if ($(window).width() > 767 && $('.navbar-toggle').is(':hidden')) {
                $(selected).removeClass('slide-active');
            }


        });




    });
</script>




</body></html>