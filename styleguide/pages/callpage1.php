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
    <header class="mb100 bg-primary">
        <!-- Navbar -->
        <?php include '../pages/inc/pages-header.php'; ?>
        <!-- End Navbar -->
    </header>
    <main role="main">
        <section id="tabs-cards" class="container wow fadeInUp noborder">
            <div class="row row-offcanvas row-offcanvas-right">
                <div class="col-12">
                    <p class="float-right d-md-none">
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="offcanvas">Toggle nav</button>
                    </p>
                </div>
                <div class="col-3 sidebar-offcanvas" id="sidebar">
                    <div class="centered">
                        <ul class="no-bullet">
                            <li><a class="btn btn-primary" href="#" role="button">My Work</a></li>
                            <li><a class="btn btn-primary btn-active" href="#" role="button">Dashboard</a></li>
                            <li><a class="btn btn-primary" href="#" role="button">Reports</a></li>
                            <li><a class="btn btn-primary" href="#" role="button">Tools</a></li>
                            <li><a class="btn btn-primary" href="#" role="button">Tools</a></li>
                            <li> <a class="btn btn-primary" href="#" role="button">Pulse</a></li>
                            <li> <a class="btn btn-primary" href="#" role="button">Tags</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-9">
                    <h5>Search For Contact</h5>
                    <p>big form</p>
                    <p></p>
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

    // Change hash for page-reload because bs tabs jump
    $(".nav-tabs li.nojump").click(function() {
        $(".nav-tabs li.nojump").removeClass("active"), $(".nav-tabs li.nojump").removeClass("current"), $(this)
            .addClass("current")
    });

    new WOW().init();
    </script>
</body>

</html>