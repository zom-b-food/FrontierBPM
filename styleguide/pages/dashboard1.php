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
    <main class="bg-white hero">
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
                            spacer
                        </li>
                        <li class="nav-item nav-link nojump active" data-toggle="tab" data-target="#dashboard-panel">
                            <i class="fa fa-tasks fa-2x"></i>&nbsp;Dashboard
                        </li>
                        <li class="nav-item nav-link nojump" data-toggle="tab" data-target="#work">
                            <i class="fa fa-line-chart fa-2x"></i> Work
                        </li>
                        <li class="nav-item nav-link nojump" data-toggle="tab" data-target="#reports">
                            <i class="fa fa-file-text fa-2x"></i> Reports
                        </li>
                        <li class="nav-item nav-link nojump" data-toggle="tab" data-target="#tools">
                            <i class="fa fa-object-ungroup fa-2x"></i> Tools
                        </li>
                        <li class="nav-item nav-link nojump" data-toggle="tab" data-target="#search">
                            <i class="fa fa-bullseye fa-2x"></i> Search
                        </li>
                        <li class="nav-item nav-link nojump dropdown">
                            <button class="btn btn-secondary top">+New</button>
                            <ul class="dropdown-content txt-black">
                                <li class="nav-item nav-link nojump" data-toggle="tab" data-target="#call">
                                    Phone Call
                                </li>
                                <li class="nav-item nav-link nojump" data-toggle="tab" data-target="#task">
                                    Task
                                </li>
                                <li class="nav-item nav-link nojump" data-toggle="tab" data-target="#contact">
                                    Contact
                                </li>
                            </ul>
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
        <div class="tab-content nopad">

            <!-- Tab panes -->

            <div class="tab-pane active" id="dashboard-panel" role="tabpanel">
                <div class="card narrow opacity">
                    <div class="card-body txt-black">
                        <div class="row">
                            <div class="col-6">
                                <h1>Welcome, Mark Heupel</h1>
                            </div>
                            <div class="col-2">
                                <div class="box">one - <i class="fa fa-envelope-o"></i></div>
                            </div>
                            <div class="col-2">
                                <div class="box">two - <i class="fa fa-star-o"></i></div>
                            </div>
                            <div class="col-2">
                                <div class="box">three - <i class="fa fa-file-o"></i></div>
                            </div>
                        </div>

                        <section class="container wow fadeInUp">
                            <div class="row">
                                <div class="col-6">
                                    <p>"Everywhere but in Valencia people are mowing lawns, planting fences, tuning
                                        engines, counting receipts, baking bread, hanging laundry, keeping the wheel
                                        turning. Tradition, not convention, holds us here in Valencia . In the
                                        valley, the wheel does not turn. We keep it still, anchor it in the beach,
                                        in the brackish water of Vero bay. Donec id elit non mi porta gravida at eget
                                        metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh,
                                        ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis
                                        euismod. Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.
                                        Donec sed odio dui.</p>
                                </div>
                                <div class="col-6">
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
                                </div>
                            </div>
                            <p>&nbsp;</p>
                            <div class="row">
                                <div class="col-3">
                                    <div class="album">
                                        <h2><i class="fa fa-clock-o fa-2x tertiary-color"></i>
                                            Widget 1</h2>
                                        <img src="../dist/img/w-red.png" />
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="album">
                                        <h2><i class="fa fa-signal fa-2x primary-color"></i>
                                            Widget 2</h2>
                                        <img src="../dist/img/w-yellow.png" />
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="album">
                                        <h2><i class="fa fa-check fa-2x accent-color"></i>
                                            Widget 3</h2>
                                        <img src="../dist/img/w-blue.png" />
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="album bg-primary">
                                        <h2>New Feature</h2>
                                        <p>Primary medical care for patients of all ages. Caring for you and helping you
                                            stay healthy with regular check-ups and education.</p>
                                        <ul class="ml20">
                                            <li>ABC Takes 1</li>
                                            <li>No FEES</li>
                                            <li>Besoin de Cloure</li>
                                            <li>Resources for Life</li>
                                        </ul>
                                        <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut
                                            fermentum massa justo sit amet risus.</p>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="work" role="tabpanel">
                <div class="card narrow opacity">
                    <div class="card-body txt-black">
                        <h1>Work</h1>
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
                                <div class="card">
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
                                <div class="card">
                                    <p>This is the My Team table... </p>
                                    <p></p>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="reports" role="tabpanel">
                <div class="card narrow opacity">
                    <div class="card-body txt-black">
                        <h1>Reports</h1>
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
                </div>
            </div>
            <div class="tab-pane" id="tools" role="tabpanel">
                <div class="card narrow opacity">
                    <div class="card-body txt-black">
                        <h1>Tools </h1>
                        <section class="container wow fadeInUp">
                            copy
                        </section>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="search" role="tabpanel">
                <div class="card narrow opacity">
                    <div class="card-body txt-black">
                        <h1>Search </h1>
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
                </div>
            </div>

            <div class="tab-pane" id="call" role="tabpanel">
                <div class="call-buttons bg-tertiary">
                    <ul class="list-inline">
                        <li class="list-inline-item">First item</li>
                        <li class="list-inline-item">Secound item</li>
                        <li class="list-inline-item">Third item</li>
                    </ul>
                </div>

                <div class="card narrow opacity">
                    <div class="card-body txt-black mt20">
                        <div class="row row-offcanvas row-offcanvas-right">
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
                                                    <td>Unknown Contact</td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" class="strong">&nbsp;</td>
                                                </tr>
                                            </tbody>
                                        </table>
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
                                            <li>Task3: Feed the dog and take a nap before 4pm when the kids will arrive
                                                with
                                                pizza...</li>
                                        </ul>
                                    </div>
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
                            </div>
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