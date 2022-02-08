<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="description" content="">
    <title>Dashboard 1 - Bootstrap 4 </title>
    <?php include '../pages/inc/globals-top.php'; ?>
</head>

<body class="sidebar-collapse" id="top">
    <div class="se-pre-con" style="background-image: url('../dist/img/loading.svg');"></div>
    <script>
    $(window).load(function() {
        // Animate loader off screen
        $(".se-pre-con").fadeOut("slow");;
    });
    </script>
    <header class="bg-primary sticky">
        <!-- Navbar -->
        <?php include '../pages/inc/pages-header.php'; ?>
        <!-- End Navbar -->
    </header>
    <main role="main">

        <section id="tabs-cards" class="container wow fadeInUp noborder mt70">
            <div class="row row-offcanvas row-offcanvas-right">
                <div class="col-12">
                    <p class="float-right d-md-none">
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="offcanvas">Toggle nav</button>
                    </p>
                </div>
                <div class="col-3 sidebar-offcanvas" id="sidebar">
                    <div class="card">
                        <div class="row small mt10">
                            <table class="table-data">
                                <tbody>
                                    <tr>
                                        <td rowspan="3" class="avatar">
                                            <img src="../dist/img/avatar-small.jpg" class="avatar" />
                                        </td>
                                        <td colspan="2">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Jon L. Miragipan</td>
                                        <td>cont-6312</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="strong">Physician</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="row">
                            <span class="strong">Contact Information</span>
                        </div>
                        <div class="row small-txt mt10">
                            <div class="col-5">
                                Phone Number<br />
                                Email
                            </div>
                            <div class="col-7">215-985-9965<br />
                                drmjpramagan@gmail.com
                            </div>
                        </div>

                        <div class="album row">
                            <div class="col-3"><i class="fa fa-envelope"></i></div>
                            <div class="col-9">02:22/06.00</div>
                        </div>
                        <hr class="nomargin" />
                        <div class="row">
                            <span class="strong">Call Details</span>
                        </div>
                        <div class="row small-txt mt10">
                            <div class="col-5">Cell Program<br />
                                Product Name<br />
                                Office Contact<br />
                                Phone Number
                            </div>
                            <div class="col-7">FBPM Care Plan<br />
                                Frontierium (injection)<br />
                                Nurse Sara<br />
                                215-985-9965
                            </div>
                        </div>
                        <hr class="nomargin" />
                        <button class="btn btn-primary btn-sm w100">+ Add Task</button>
                        <button class="btn btn-secondary btn-sm w100">% Wrap Up</button>
                        <hr class="nomargin" />
                        <div class="row">
                            <span class="strong">Open Tasks</span>
                        </div>
                        <div class="row mt10">
                            <ul class="tight">
                                <li>Task1: Do this...</li>
                                <li>Task2: Do that...</li>
                                <li>Task3: Feed the dog and take a nap before 4pm when the kids will arrive with
                                    pizza...</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-9 border-left">
                    Contact Details table...
                </div>
            </div>
        </section>

    </main>

    <?php include '../pages/inc/footer.php'; ?>

    <script src="../lib/wow.min.js" type="text/javascript"></script>
    <script src="../lib/bootstrap-4.3.1.min.js" type="text/javascript"></script>

    <script>
    $(function() {
        $(".preloader").delay(1400).fadeOut();
    });
    $(window).load(function() {
        $('body').prepend('<a href="#" class="scroll-show"></a>');

        var amountScrolled = 200;

        $(window).scroll(function() {
            if ($(window).scrollTop() > amountScrolled) {
                $('a.scroll-show').fadeIn('slow');
            } else {
                $('a.scroll-show').fadeOut('slow');
            }
        });
    });

    var transparent = true;
    var fixedTop = false;
    var navbar_initialized,
        backgroundOrange = false,
        toggle_initialized = false;

    $(document).ready(function() {

        $navbar = $('.navbar[color-on-scroll]');
        scroll_distance = $navbar.attr('color-on-scroll') || 500;

        // Check if we have the class "navbar-color-on-scroll" then add the function to remove the class "navbar-transparent" into a plain color.

        if ($('.navbar[color-on-scroll]').length != 0) {
            initRufus.checkScrollForTransparentNavbar();
            $(window).on('scroll', initRufus.checkScrollForTransparentNavbar)
        }
        $('.form-control').on("focus", function() {
            $(this).parent('.input-group').addClass("input-group-focus");
        }).on("blur", function() {
            $(this).parent(".input-group").removeClass("input-group-focus");
        });
    });

    initRufus = {
        misc: {
            navbar_menu_visible: 0
        },
        checkScrollForTransparentNavbar: debounce(function() {
            if ($(document).scrollTop() > scroll_distance) {
                if (transparent) {
                    transparent = false;
                    $('.navbar[color-on-scroll]').removeClass('navbar-transparent');
                }
            } else {
                if (!transparent) {
                    transparent = true;
                    $('.navbar[color-on-scroll]').addClass('navbar-transparent');
                }
            }
        }, 17),
    }

    // Returns a function, that, as long as it continues to be invoked, will not
    // be triggered. The function will be called after it stops being called for
    // N milliseconds. If `immediate` is passed, trigger the function on the
    // leading edge, instead of the trailing.

    function debounce(func, wait, immediate) {
        var timeout;
        return function() {
            var context = this,
                args = arguments;
            clearTimeout(timeout);
            timeout = setTimeout(function() {
                timeout = null;
                if (!immediate) func.apply(context, args);
            }, wait);
            if (immediate && !timeout) func.apply(context, args);
        };
    }

    $(function() {
        'use strict'

        // $('table.table-sort').tablesort();
        // $('table').filterTable();
    });

    new WOW().init();
    </script>
</body>

</html>
