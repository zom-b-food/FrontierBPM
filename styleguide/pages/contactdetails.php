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
            <h1>Contact Details</h1>
            <p>Lorum ipsum blada...</p>
        </section>
        <section id="tabs-cards" class="container wow fadeInUp noborder">
            <div class="row row-offcanvas row-offcanvas-right">
                <div class="col-12">
                    <p class="float-right d-md-none">
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="offcanvas">Toggle nav</button>
                    </p>
                </div>
                <div class="col-3 sidebar-offcanvas" id="sidebar">
                    <div class="box">
                        <p class="bottom-align"><img src="../dist/img/avatar-small.jpg" />&nbsp;<big>Unknown
                                Contact</big>
                        </p>
                    </div>
                </div>
                <div class="col-9 border-left">
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
                                <td>Dallas, TX</td>
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
                                <td>2007</td>
                                <td>Seattle, WA</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Van Benson Heinz</td>
                                <td>one</td>
                                <td>2001</td>
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
                                <td>Tyler Hayes</td>
                                <td>three</td>
                                <td>2008</td>
                                <td>Colorado Springs, CA</td>
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
                                <td>Carrie Buchanan</td>
                                <td>one</td>
                                <td>1999</td>
                                <td>San Diego, CA</td>
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
                                <td>Charles Grant</td>
                                <td>two</td>
                                <td>2009</td>
                                <td>Houston, TX</td>
                            </tr>
                            <tr>
                                <td>19</td>
                                <td>Carrie Buchanan</td>
                                <td>one</td>
                                <td>1999</td>
                                <td>San Diego, CA</td>
                            </tr>
                            <tr>
                                <td>20</td>
                                <td>Jack Frost</td>
                                <td>three</td>
                                <td>2013</td>
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
                    <hr />
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">Day</th>
                                            <th scope="col">Article Name</th>
                                            <th scope="col">Author</th>
                                            <th scope="col">Words</th>
                                            <th scope="col">Shares</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Bootstrap 4 CDN and Starter Template</td>
                                            <td>Cristina</td>
                                            <td>913</td>
                                            <td>2.846</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Bootstrap Grid 4 Tutorial and Examples</td>
                                            <td>Cristina</td>
                                            <td>1.434</td>
                                            <td>3.417</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td colspan="2">Bootstrap Flexbox Tutorial and Examples</td>
                                            <td>1.877</td>
                                            <td>1.234</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-12 col-lg-6">
                                <table class="table table-dark table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">Day</th>
                                            <th scope="col">Article Name</th>
                                            <th scope="col">Author</th>
                                            <th scope="col">Words</th>
                                            <th scope="col">Shares</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Bootstrap 4 CDN and Starter Template</td>
                                            <td>Cristina</td>
                                            <td>913</td>
                                            <td>2.846</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Bootstrap Grid 4 Tutorial and Examples</td>
                                            <td>Cristina</td>
                                            <td>1.434</td>
                                            <td>3.417</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td colspan="2">Bootstrap Flexbox Tutorial and Examples</td>
                                            <td>1.877</td>
                                            <td>1.234</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                    <p>ooo</p>
                </div>
            </div>
        </section>

    </main>

    <?php include '../pages/inc/footer.php'; ?>

    <script src="../lib/wow.min.js" type="text/javascript"></script>
    <script src="../lib/bootstrap-4.3.1.min.js" type="text/javascript"></script>
    <script src="../lib/jquery.filtertable.js" type="text/javascript"></script>
    <script src="../lib/tablesort.js" type="text/javascript"></script>
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

        $('table.table-sort').tablesort();
        $('table').filterTable();
    });

    new WOW().init();
    </script>
</body>

</html>
