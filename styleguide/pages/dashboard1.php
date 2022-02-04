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
    <main class="bg-white">
        <header class="bg-primary sticky">
            <!-- Navbar -->
            <div class="row">
                <div class="col-1">
                    <ul class="nav nav-tabs nav-tabs-primary">
                        <li>
                            <a href="javascript:history.back()"><img class="top-logo" src="../dist/img/logo.jpg" /></a>
                        </li>
                    </ul>
                </div>
                <div class="col-10" id="main-tabs">
                    <ul class="nav nav-tabs nav-tabs-primary">
                        <li class="header-spacer">
                            optional spacer
                        </li>
                        <li class="nav-item nav-link nojump active" data-toggle="tab" data-target="#dashboard-panel">
                            <i class="now-ui-icons objects_umbrella-13"></i> Dashboard
                        </li>
                        <li class="nav-item nav-link nojump" data-toggle="tab" data-target="#work">
                            <i class="now-ui-icons business_bulb-63"></i> My Work
                        </li>
                        <li class="nav-item nav-link nojump" data-toggle="tab" data-target="#reports">
                            <i class="now-ui-icons objects_key-25"></i> Reports
                        </li>
                        <li class="nav-item nav-link nojump" data-toggle="tab" data-target="#tools">
                            <i class="now-ui-icons ui-2_settings-90"></i> Tools
                        </li>
                        <li class="nav-item nav-link nojump" data-toggle="tab" data-target="#search">
                            <i class="now-ui-icons location_world"></i> Search
                        </li>
                        <li class="nav-item nav-link nojump">
                            <div class="dropdown">
                                <button class="btn btn-secondary top">+New</button>
                                <div class="dropdown-content">
                                    <a href="searchforcontact.php">Phone Call</a>
                                    <a href="#">Task</a>
                                    <a href="#">Contact</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-1">
                    <ul class="nav nav-tabs nav-tabs-primary">
                        <li class="nav-item">
                            <a class="nav-link" href="https://github.com/zom-b-food" target="_blank">
                                <i class="fa fa-user"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://github.com/zom-b-food" target="_blank">
                                <i class="fa fa-cog"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <div class="card narrow mt100">
            <div class="card-body txt-black">
                <!-- Tab panes -->
                <div class="tab-content nopad">
                    <div class="tab-pane active" id="dashboard-panel" role="tabpanel">
                        <h2>Dashboard</h2>
                        <section class="container wow fadeInUp">
                            <p>"Everywhere but in Valencia people are mowing lawns, planting fences, tuning
                                engines, counting receipts, baking bread, hanging laundry, keeping the wheel
                                turning. Tradition, not convention, holds us here in Valencia . In the
                                valley, the wheel does not turn. We keep it still, anchor it in the beach,
                                in the brackish water of Vero bay. </p>
                            <h3>Possum</h3>
                            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac
                                cursus
                                commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet
                                risus. Donec id elit non mi porta gravida at eget metus. Fusce dapibus,
                                tellus
                                ac cursus
                                commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet
                                risus. Etiam
                                porta sem malesuada magna mollis euismod. Donec sed odio dui. Etiam
                                porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                        </section>
                    </div>
                    <div class="tab-pane" id="work" role="tabpanel">
                        <h2>My Work</h2>
                        <section class="container wow fadeInUp">
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
                        </section>

                        <section class="container wow fadeInUp noborder">
                            <div class=row">
                                <a href="#" class="big">My Work</a>
                                <a href="#" class="big" style="float:right">My Completed Work</a>
                                <div class="form-group">
                                    <input type="text" value="" placeholder="Search" class="form-control">
                                </div>
                                <div class="box">
                                    <p>This is the My Completed Work table... </p>
                                    <p></p>
                                </div>
                            </div>
                            <hr />
                            <div class=row">
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
                        </section>
                    </div>
                    <div class="tab-pane" id="reports" role="tabpanel">
                        <h2>Reports</h2>
                        <section class="container wow fadeInUp">
                            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac
                                cursus
                                commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet
                                risus. Donec id elit non mi porta gravida at eget metus. Fusce dapibus,
                                tellus
                                ac cursus
                                commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet
                                risus. Etiam
                                porta sem malesuada magna mollis euismod. Donec sed odio dui. Etiam
                                porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                        </section>
                    </div>
                    <div class="tab-pane" id="tools" role="tabpanel">
                        <h2>Tools </h2>
                        <section class="container wow fadeInUp">
                            copy
                        </section>
                    </div>
                    <div class="tab-pane" id="search" role="tabpanel">
                        <h2>Search </h2>
                        <section class="container wow fadeInUp">
                            <table class="table-sort">
                                <thead>
                                    <tr>
                                        <th class="table-sort" scope="col" title="President Number">#</th>
                                        <th class="table-sort" scope="col">Participant</th>
                                        <th class="table-sort" scope="col">Sessions</th>
                                        <th class="table-sort" scope="col">Activation Year</th>
                                        <th class="table-sort" scope="col">Facility</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>George Martin</td>
                                        <td>two</td>
                                        <td>2014</td>
                                        <td>Montpelier, VT</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Adam Benson</td>
                                        <td>one</td>
                                        <td>1997</td>
                                        <td>Baltimore, MD</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Thomas Maxwell</td>
                                        <td>two</td>
                                        <td>2011</td>
                                        <td>Dallas, TX</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>James Harte</td>
                                        <td>two</td>
                                        <td>2017</td>
                                        <td>Houston, TX</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>James Latham</td>
                                        <td>two</td>
                                        <td>2012</td>
                                        <td>San Francisco, CA</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Quincy Peebles</td>
                                        <td>one</td>
                                        <td>2009</td>
                                        <td>San Francisco, CA</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Andrew Taylor</td>
                                        <td>two</td>
                                        <td>2017</td>
                                        <td>Seattle, WA</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Van Benson Heinz</td>
                                        <td>one</td>
                                        <td>2011</td>
                                        <td>Modesto, CA</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Henry Stevens</td>
                                        <td>three</td>
                                        <td>2011</td>
                                        <td>Sacramento, CA</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>Yuezhi Gao</td>
                                        <td>three</td>
                                        <td>2008</td>
                                        <td>Stockton, CA</td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>Kim Chaiseman</td>
                                        <td>one</td>
                                        <td>2009</td>
                                        <td>Seattle, WA</td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>Zachary Penmore</td>
                                        <td>three</td>
                                        <td>2014</td>
                                        <td>Tacoma, WA</td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td>Amy Fillmore</td>
                                        <td>three</td>
                                        <td>2016</td>
                                        <td>Albany, NY</td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td>Franklin Nixon Jr</td>
                                        <td>one</td>
                                        <td>2017</td>
                                        <td>Miami, FL</td>
                                    </tr>
                                    <tr>
                                        <td>15</td>
                                        <td>Toshi Lee</td>
                                        <td>one</td>
                                        <td>2016</td>
                                        <td>Phoenix, AZ</td>
                                    </tr>
                                    <tr>
                                        <td>16</td>
                                        <td>Tyler McMann</td>
                                        <td>three</td>
                                        <td>2013</td>
                                        <td>Baltimore, MD</td>
                                    </tr>
                                    <tr>
                                        <td>17</td>
                                        <td>Andrew Wilson</td>
                                        <td>three</td>
                                        <td>2014</td>
                                        <td>Colorado Springs, CO</td>
                                    </tr>
                                    <tr>
                                        <td>18</td>
                                        <td>Taylor Swift</td>
                                        <td>two</td>
                                        <td>2009</td>
                                        <td>Tamlin, TN</td>
                                    </tr>
                                    <tr>
                                        <td>19</td>
                                        <td>Stan Greenburg</td>
                                        <td>one</td>
                                        <td>2011</td>
                                        <td>Eugene, OR</td>
                                    </tr>
                                    <tr>
                                        <td>20</td>
                                        <td>Brandon Frobisher</td>
                                        <td>three</td>
                                        <td>2020</td>
                                        <td>Smithfield, VA</td>
                                    </tr>
                                    <tr>
                                        <td>21</td>
                                        <td>Timothy Hoffstra</td>
                                        <td>one</td>
                                        <td>2004</td>
                                        <td>San Diego, CA</td>
                                    </tr>
                                    <tr>
                                        <td>22</td>
                                        <td>George Allen</td>
                                        <td>three</td>
                                        <td>2013</td>
                                        <td>Smallville, MD</td>
                                    </tr>
                                    <tr>
                                        <td>23</td>
                                        <td>Benjamin Ceresta</td>
                                        <td>three</td>
                                        <td>2014</td>
                                        <td>Noristown, PA</td>
                                    </tr>
                                    <tr>
                                        <td>24</td>
                                        <td>Davila Portuna</td>
                                        <td>two</td>
                                        <td>2019</td>
                                        <td>Seattle, WA</td>
                                    </tr>
                                    <tr>
                                        <td>25</td>
                                        <td>Gemma Butler</td>
                                        <td>one</td>
                                        <td>2018</td>
                                        <td>Marin, CA</td>
                                    </tr>
                                    <tr>
                                        <td>26</td>
                                        <td>Jack Dane</td>
                                        <td>three</td>
                                        <td>2020</td>
                                        <td>Denver, CO</td>
                                    </tr>

                                </tbody>
                            </table>
                            <div class="row">
                                <div class="col-12">
                                    <ul class="pagination justify-content-end">
                                        <li class="page-item">
                                            <a class="page-link arrow" href="#/" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#/">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#/">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#/">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link arrow" href="#/" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="tab-pane" id="add" role="tabpanel">
                        <p> add + </p>
                    </div>

                </div>
            </div>
        </div>

        </div>

        <!-- End Navbar -->
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

    $(function() {
        'use strict'

        $('table.table-sort').tablesort();
        $('table').filterTable();
    });


    new WOW().init();
    </script>
</body>

</html>