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
    <header class="bg-primary">
        <!-- Navbar -->
        <?php include '../pages/inc/pages-header.php'; ?>
        <!-- End Navbar -->
    </header>
    <main role="main">
        <section id="top" class="container noborder">
            <h1>Welcome to Your Dashboard</h1>
            <p>Lorum ipsum blada...</p>
        </section>
        <section id="tabs-cards" class="container wow fadeInUp noborder">
            <div class="row row-offcanvas row-offcanvas-right">
                <div class="col-12">
                    <p class="float-right d-md-none">
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="offcanvas">Toggle nav</button>
                    </p>
                </div>

                <div class="col-12" id="main-tabs"">
                    <div class=" card nopad">
                    <ul class="nav nav-tabs nav-tabs-primary">
                        <li class="nav-item nav-link nojump active" data-toggle="tab" data-target="#dashboard">
                            <i class="now-ui-icons objects_umbrella-13"></i> Dashboard
                        </li>
                        <li class="nav-item nav-link nojump" data-toggle="tab" data-target="#work">
                            <i class="now-ui-icons shopping_cart-simple"></i> My Work
                        </li>
                        <li class="nav-item nav-link nojump" data-toggle="tab" data-target="#reports">
                            <i class="now-ui-icons shopping_shop"></i> Reports
                        </li>
                        <li class="nav-item nav-link nojump" data-toggle="tab" data-target="#tools">
                            <i class="now-ui-icons ui-2_settings-90"></i> Tools
                        </li>
                        <li class="nav-item nav-link nojump" data-toggle="tab" data-target="#pulse">
                            <i class="now-ui-icons ui-2_settings-90"></i> Pulse
                        </li>
                        <li class="nav-item nav-link nojump" data-toggle="tab" data-target="#tags">
                            <i class="now-ui-icons ui-2_settings-90"></i> Tags
                        </li>
                    </ul>
                    <div class="card-body fixedHeight">
                        <!-- Tab panes -->
                        <div class="tab-content nopad">
                            <div class="tab-pane active" id="dashboard" role="tabpanel">
                                <p>"Everywhere but in Valencia people are mowing lawns, planting fences, tuning
                                    engines, counting receipts, baking bread, hanging laundry, keeping the wheel
                                    turning. Tradition, not convention, holds us here in Valencia . In the
                                    valley, the wheel does not turn. We keep it still, anchor it in the beach,
                                    in the brackish water of Vero bay. </p>
                                <h3>Possum</h3>
                                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus
                                    commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet
                                    risus. Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus
                                    ac cursus
                                    commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet
                                    risus. Etiam
                                    porta sem malesuada magna mollis euismod. Donec sed odio dui. Etiam
                                    porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                            </div>
                            <div class="tab-pane" id="work" role="tabpanel">
                                <p> I could watch them glide inches above the sea...inches above the seatop at
                                    unfathomable speeds. The littleness of the bird, defiant and inimitable
                                    against the rushing backdrop is equally unfathomable, yet the little bird
                                    dismisses it without a sense of ego or bravado. Mass and energy, sprinting
                                    elements of wind and water exist outside the wheel where ambition and
                                    progress is overruled by freedom and instinct. </p>
                                <h3>Tater</h3>
                                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus
                                    commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet
                                    risus. Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus
                                    ac cursus
                                    commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet
                                    risus. Etiam
                                    porta sem malesuada magna mollis euismod. Donec sed odio dui. Etiam
                                    porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                            </div>
                            <div class="tab-pane" id="reports" role="tabpanel">
                                <p>I could watch these little birds dance like ice-skating companions whose
                                    familiar touches have been practiced to extinction. I could observe this
                                    foreplay of physics, the mating of balance and gravity that is today, at
                                    this precise moment, more dynamic than ever. And then suddenly comes the
                                    peace. </p>
                                <h3>Sofia</h3>
                                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus
                                    commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet
                                    risus. Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus
                                    ac cursus
                                    commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet
                                    risus. Etiam
                                    porta sem malesuada magna mollis euismod. Donec sed odio dui. Etiam
                                    porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                            </div>
                            <div class="tab-pane" id="tools" role="tabpanel">
                                <p>I could watch these little birds dance like ice-skating companions whose
                                    familiar touches have been practiced to extinction. I could observe this
                                    foreplay of physics, the mating of balance and gravity that is today, at
                                    this precise moment, more dynamic than ever. And then suddenly comes the
                                    peace. </p>
                                <h3>Sofia</h3>
                                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus
                                    commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet
                                    risus. Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus
                                    ac cursus
                                    commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet
                                    risus. Etiam
                                    porta sem malesuada magna mollis euismod. Donec sed odio dui. Etiam
                                    porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                            </div>
                            <div class="tab-pane" id="pulse" role="tabpanel">
                                <p> It is like a rest in a musical score when the chorus and the orchestra stops
                                    for a beat or two and nothing plays but the space: the silent part that
                                    comes at the end of a foreign film before the credits when it is quiet and
                                    the last scene freezes upon the screen. I could see and hear that today on
                                    Tower Hill if I chose to. It is the last scene when serenity takes over and
                                    the recapitulation finally and really does surrender."
                                </p>
                                <h3>Chatbot</h3>
                                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus
                                    commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet
                                    risus. Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus
                                    ac cursus
                                    commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet
                                    risus. Etiam
                                    porta sem malesuada magna mollis euismod. Donec sed odio dui. Etiam
                                    porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                            </div>
                            <div class="tab-pane" id="tags" role="tabpanel">
                                <p> It is like a rest in a musical score when the chorus and the orchestra stops
                                    for a beat or two and nothing plays but the space: the silent part that
                                    comes at the end of a foreign film before the credits when it is quiet and
                                    the last scene freezes upon the screen. I could see and hear that today on
                                    Tower Hill if I chose to. It is the last scene when serenity takes over and
                                    the recapitulation finally and really does surrender."
                                </p>
                                <h3>Chatbot</h3>
                                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus
                                    commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet
                                    risus. Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus
                                    ac cursus
                                    commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet
                                    risus. Etiam
                                    porta sem malesuada magna mollis euismod. Donec sed odio dui. Etiam
                                    porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <section class="container wow fadeInUp">
            <div class="card">
                <h3>My Work</h3>
                <div class="row">
                    <div class="col-6">
                        <h5>CSR Performance - AHT</h5>
                        <p>Graph</p>
                        <p></p>
                    </div>
                    <div class="col-6">
                        <h5>Case Volume</h5>
                        <p>Graph </p>
                        <p></p>
                    </div>
                </div>
            </div>
        </section>
        <section class="container wow fadeInUp noborder">
            <div class="row">
                <div class="col-6">
                    <a href="#" class="big">My Work</a>
                    <a href="#" class="big" style="float:right">My Completed Work</a>
                    <div class="form-group">
                        <input type="text" value="" placeholder="Search" class="form-control">
                    </div>
                    <div class="box">
                        <p>This is the My Work table...</p>
                        <p></p>
                    </div>
                </div>
                <div class="col-6">
                    <a href="#" class="big">My Team</a>
                    <a href="#" class="big" style="float:right">Team Workbasket</a>
                    <div class="form-group">
                        <input type="text" value="" placeholder="Search" class="form-control">
                    </div>
                    <div class="box">
                        <p>This is the My Team table... </p>
                        <p></p>
                    </div>
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