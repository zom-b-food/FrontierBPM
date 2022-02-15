<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="description" content="">
    <title>Dashboard 1 - Bootstrap 4 </title>
    <?php include '../pages/inc/globals-top.php'; ?>
    <style type="text/css">

    </style>
    <script type="text/javascript">
    $(document).ready(function() {
        $(".sliderbutton").click(function() {
            $(".slidercard").animate({
                width: "toggle"
            });
        });
    });
    </script>
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
                            <i class="fa fa-tasks"></i>&nbsp;Dashboard
                        </li>
                        <li class="nav-item nav-link nojump" data-toggle="tab" data-target="#work">
                            <i class="fa fa-line-chart"></i> Work
                        </li>
                        <li class="nav-item nav-link nojump" data-toggle="tab" data-target="#reports">
                            <i class="fa fa-file-text"></i> Reports
                        </li>
                        <li class="nav-item nav-link nojump" data-toggle="tab" data-target="#tools">
                            <i class="fa fa-object-ungroup"></i> Tools
                        </li>
                        <li class="nav-item nav-link nojump" data-toggle="tab" data-target="#search">
                            <i class="fa fa-bullseye"></i> Search
                        </li>
                        <li class="header-spacer">
                            spacer contains this text
                        </li>
                        <li class="nav-item nav-link nojump dropdown">
                            <button class="btn btn-secondary top">+New</button>
                            <ul class="dropdown-content txt-black">
                                <li class="nav-item nav-link nojump" data-toggle="tab" data-target="#call">
                                    Conversation
                                </li>
                                <!-- <li class="nav-item nav-link nojump" data-toggle="tab" data-target="#task">
                                    Task
                                </li> -->
                                <li class="nav-item nav-link nojump" data-toggle="tab" data-target="#newContact">
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
                <div class="call-buttons bg-tertiary">
                    <ul class="list-inline">
                        <li class="list-inline-item">My Work</li>
                        <li class="list-inline-item">2 Item</li>
                        <li class="list-inline-item">3 Item</li>
                    </ul>
                </div>
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
                            <div class="card">
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
                        </section>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="tools" role="tabpanel">
                <div class="card narrow opacity">
                    <div class="card-body txt-black">
                        <h1>Tools </h1>
                        <section class="container wow fadeInUp">
                            <div class="card">
                                copy
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="search" role="tabpanel">
                <div class="card narrow opacity">
                    <div class="card-body txt-black">
                        <h1>Search </h1>
                        <section class="container wow fadeInUp">
                            <div class="card">
                                search form
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="call" role="tabpanel">
                <div class="call-buttons bg-tertiary">
                    <ul class="list-inline">
                        <li class="list-inline-item">Work</li>
                        <li class="list-inline-item">2 Item</li>
                        <li class="list-inline-item">3 Item</li>
                    </ul>
                </div>

                <div class="card narrow opacity">
                    <div class="dropdown">
                        <button class="btn btn-primary top"><i
                                class="fa fa-plus-square"></i>&nbsp;&nbsp;Actions&nbsp;&nbsp;<i
                                class="fa fa-angle-double-right"></i></button>
                        <ul class="dropdown-content nobullet bg-primary">
                            <li><a class="nav-item nav-link nojump" href="#">Wrap Up</a></li>
                            <div class="dropdown-divider"></div>
                            <li><a class="nav-item nav-link nojump" href="#">Enroll Patient</a></li>
                            <li><a class="nav-item nav-link nojump" href="#">Manage Insurance</a></li>
                            <li><a class="nav-item nav-link nojump" href="#">Manage Prescriptions</a></li>
                            <div class="dropdown-divider"></div>
                            <li><a class="nav-item nav-link nojump" href="#">Benefit Investigation</a></li>
                            <li><a class="nav-item nav-link nojump" href="#">PAP Eligability</a></li>
                            <div class="dropdown-divider"></div>
                            <li><a class="nav-item nav-link nojump" href="#">Consent Management</a></li>
                            <li><a class="nav-item nav-link nojump" href="#">Manage Appointment</a></li>
                            <li><a class="nav-item nav-link nojump" href="#">Manage Care Team</a></li>
                            <li><a class="nav-item nav-link nojump" href="#">Manage Insurance</a></li>
                            <li><a class="nav-item nav-link nojump" href="#">Patient Survey</a></li>
                            <li><a class="nav-item nav-link nojump" href="#">Update Contact Profile</a></li>
                            <div class="dropdown-divider"></div>
                            <li><a class="nav-item nav-link nojump" href="#">Send SP Referal</a></li>
                        </ul>
                    </div>

                    <div class="card-body txt-black">

                        <div class="row row-offcanvas row-offcanvas-right">
                            <div class="col-3 sidebar-offcanvas slidercard" id="sidebar">
                                <div class="card">
                                    <h2 class="blue bold-name">Contact</h2>
                                    <table class="table-data">
                                        <tbody>
                                            <tr>
                                                <td rowspan="3" class="avatar">
                                                    <img src="../dist/img/avatar-small.jpg" class="avatar" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="bold-name txt-black">Jon L. Miragipan</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="strong">Physician</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <hr class="nomargin" />
                                    <h4 class="blue"><i class="fa fa-list-alt"></i>&nbsp;&nbsp;Conversation Summary</h4>
                                    <h6>Cell Program</h6>
                                    <span class="indent">FBPM Care Plan</span>
                                    <h6>Phone Number</h6>
                                    <span class="indent">215-844-0254</span>
                                    <h6>Product Name</h6>
                                    <span class="indent">Frontierium (injection)</span>
                                    <h6>Office Contact</h6>
                                    <span class="indent">Nurse Sara</span>
                                    <hr class="nomargin" />
                                    <h4 class="blue"><i class="fa fa-th-list"></i>&nbsp;&nbsp;Open Tasks</h4>
                                    <ul class="tight">
                                        <li>Task1: Do this...</li>
                                        <li>Task2: Do that...</li>
                                        <li>Task3: Feed the dog and take a nap before 4pm when the kids will arrive
                                            with
                                            pizza...</li>
                                    </ul>
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
                <button type="button" class="sliderbutton">
                    <i class="fa fa-exchange fa-2x"></i>
                    <br />&nbsp;Summary&nbsp;
                </button>
            </div>
            <div class="tab-pane" id="newContact" role="tabpanel">
                <div class="card narrow opacity">
                    <div class="card-body txt-black">
                        <h1>Create Contact </h1>
                        <section class="container wow fadeInUp">
                            <div class="card">
                                <form>

                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label for="name-f">First Name</label>
                                            <input type="text" class="form-control" name="fname" id="name-f"
                                                placeholder="Enter your first name." required>
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label for="name-l">Last name</label>
                                            <input type="text" class="form-control" name="lname" id="name-l"
                                                placeholder="Enter your last name." required>
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" name="email" id="email"
                                                placeholder="Enter your email." required>
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label for="address-1">Address Line-1</label>
                                            <input type="address" class="form-control" name="Locality" id="address-1"
                                                placeholder="Locality/House/Street no." required>
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label for="address-2">Address Line-2</label>
                                            <input type="address" class="form-control" name="address" id="address-2"
                                                placeholder="Village/City Name." required>
                                        </div>
                                        <div class="col-sm-4 form-group">
                                            <label for="State">State</label>
                                            <input type="address" class="form-control" name="State" id="State"
                                                placeholder="Enter your state name." required>
                                        </div>
                                        <div class="col-sm-2 form-group">
                                            <label for="zip">Postal-Code</label>
                                            <input type="zip" class="form-control" name="Zip" id="zip"
                                                placeholder="Postal-Code." required>
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label for="Country">Country</label>
                                            <select class="form-control custom-select browser-default">
                                                <option value="Afghanistan">Afghanistan</option>
                                                <option value="Åland Islands">Åland Islands</option>
                                                <option value="Albania">Albania</option>
                                                <option value="Algeria">Algeria</option>
                                                <option value="American Samoa">American Samoa</option>
                                                <option value="Andorra">Andorra</option>
                                                <option value="Angola">Angola</option>
                                                <option value="Anguilla">Anguilla</option>
                                                <option value="Antarctica">Antarctica</option>
                                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                <option value="Argentina">Argentina</option>
                                                <option value="Armenia">Armenia</option>
                                                <option value="Aruba">Aruba</option>
                                                <option value="Australia">Australia</option>
                                                <option value="Austria">Austria</option>
                                                <option value="Azerbaijan">Azerbaijan</option>
                                                <option value="Bahamas">Bahamas</option>
                                                <option value="Bahrain">Bahrain</option>
                                                <option value="Bangladesh">Bangladesh</option>
                                                <option value="Barbados">Barbados</option>
                                                <option value="Belarus">Belarus</option>
                                                <option value="Belgium">Belgium</option>
                                                <option value="Belize">Belize</option>
                                                <option value="Benin">Benin</option>
                                                <option value="Bermuda">Bermuda</option>
                                                <option value="Bhutan">Bhutan</option>
                                                <option value="Bolivia">Bolivia</option>
                                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                <option value="Botswana">Botswana</option>
                                                <option value="Bouvet Island">Bouvet Island</option>
                                                <option value="Brazil">Brazil</option>
                                                <option value="British Indian Ocean Territory">British Indian Ocean
                                                    Territory
                                                </option>
                                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                <option value="Bulgaria">Bulgaria</option>
                                                <option value="Burkina Faso">Burkina Faso</option>
                                                <option value="Burundi">Burundi</option>
                                                <option value="Cambodia">Cambodia</option>
                                                <option value="Cameroon">Cameroon</option>
                                                <option value="Canada">Canada</option>
                                                <option value="Cape Verde">Cape Verde</option>
                                                <option value="Cayman Islands">Cayman Islands</option>
                                                <option value="Central African Republic">Central African Republic
                                                </option>
                                                <option value="Chad">Chad</option>
                                                <option value="Chile">Chile</option>
                                                <option value="China">China</option>
                                                <option value="Christmas Island">Christmas Island</option>
                                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                <option value="Colombia">Colombia</option>
                                                <option value="Comoros">Comoros</option>
                                                <option value="Congo">Congo</option>
                                                <option value="Congo, The Democratic Republic of The">Congo, The
                                                    Democratic
                                                    Republic of The</option>
                                                <option value="Cook Islands">Cook Islands</option>
                                                <option value="Costa Rica">Costa Rica</option>
                                                <option value="Cote D'ivoire">Cote D'ivoire</option>
                                                <option value="Croatia">Croatia</option>
                                                <option value="Cuba">Cuba</option>
                                                <option value="Cyprus">Cyprus</option>
                                                <option value="Czech Republic">Czech Republic</option>
                                                <option value="Denmark">Denmark</option>
                                                <option value="Djibouti">Djibouti</option>
                                                <option value="Dominica">Dominica</option>
                                                <option value="Dominican Republic">Dominican Republic</option>
                                                <option value="Ecuador">Ecuador</option>
                                                <option value="Egypt">Egypt</option>
                                                <option value="El Salvador">El Salvador</option>
                                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                <option value="Eritrea">Eritrea</option>
                                                <option value="Estonia">Estonia</option>
                                                <option value="Ethiopia">Ethiopia</option>
                                                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)
                                                </option>
                                                <option value="Faroe Islands">Faroe Islands</option>
                                                <option value="Fiji">Fiji</option>
                                                <option value="Finland">Finland</option>
                                                <option value="France">France</option>
                                                <option value="French Guiana">French Guiana</option>
                                                <option value="French Polynesia">French Polynesia</option>
                                                <option value="French Southern Territories">French Southern Territories
                                                </option>
                                                <option value="Gabon">Gabon</option>
                                                <option value="Gambia">Gambia</option>
                                                <option value="Georgia">Georgia</option>
                                                <option value="Germany">Germany</option>
                                                <option value="Ghana">Ghana</option>
                                                <option value="Gibraltar">Gibraltar</option>
                                                <option value="Greece">Greece</option>
                                                <option value="Greenland">Greenland</option>
                                                <option value="Grenada">Grenada</option>
                                                <option value="Guadeloupe">Guadeloupe</option>
                                                <option value="Guam">Guam</option>
                                                <option value="Guatemala">Guatemala</option>
                                                <option value="Guernsey">Guernsey</option>
                                                <option value="Guinea">Guinea</option>
                                                <option value="Guinea-bissau">Guinea-bissau</option>
                                                <option value="Guyana">Guyana</option>
                                                <option value="Haiti">Haiti</option>
                                                <option value="Heard Island and Mcdonald Islands">Heard Island and
                                                    Mcdonald
                                                    Islands</option>
                                                <option value="Holy See (Vatican City State)">Holy See (Vatican City
                                                    State)
                                                </option>
                                                <option value="Honduras">Honduras</option>
                                                <option value="Hong Kong">Hong Kong</option>
                                                <option value="Hungary">Hungary</option>
                                                <option value="Iceland">Iceland</option>
                                                <option value="India">India</option>
                                                <option value="Indonesia">Indonesia</option>
                                                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of
                                                </option>
                                                <option value="Iraq">Iraq</option>
                                                <option value="Ireland">Ireland</option>
                                                <option value="Isle of Man">Isle of Man</option>
                                                <option value="Israel">Israel</option>
                                                <option value="Italy">Italy</option>
                                                <option value="Jamaica">Jamaica</option>
                                                <option value="Japan">Japan</option>
                                                <option value="Jersey">Jersey</option>
                                                <option value="Jordan">Jordan</option>
                                                <option value="Kazakhstan">Kazakhstan</option>
                                                <option value="Kenya">Kenya</option>
                                                <option value="Kiribati">Kiribati</option>
                                                <option value="Korea, Democratic People's Republic of">Korea, Democratic
                                                    People's Republic of</option>
                                                <option value="Korea, Republic of">Korea, Republic of</option>
                                                <option value="Kuwait">Kuwait</option>
                                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                <option value="Lao People's Democratic Republic">Lao People's Democratic
                                                    Republic</option>
                                                <option value="Latvia">Latvia</option>
                                                <option value="Lebanon">Lebanon</option>
                                                <option value="Lesotho">Lesotho</option>
                                                <option value="Liberia">Liberia</option>
                                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                                <option value="Liechtenstein">Liechtenstein</option>
                                                <option value="Lithuania">Lithuania</option>
                                                <option value="Luxembourg">Luxembourg</option>
                                                <option value="Macao">Macao</option>
                                                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia,
                                                    The Former
                                                    Yugoslav Republic of</option>
                                                <option value="Madagascar">Madagascar</option>
                                                <option value="Malawi">Malawi</option>
                                                <option value="Malaysia">Malaysia</option>
                                                <option value="Maldives">Maldives</option>
                                                <option value="Mali">Mali</option>
                                                <option value="Malta">Malta</option>
                                                <option value="Marshall Islands">Marshall Islands</option>
                                                <option value="Martinique">Martinique</option>
                                                <option value="Mauritania">Mauritania</option>
                                                <option value="Mauritius">Mauritius</option>
                                                <option value="Mayotte">Mayotte</option>
                                                <option value="Mexico">Mexico</option>
                                                <option value="Micronesia, Federated States of">Micronesia, Federated
                                                    States of
                                                </option>
                                                <option value="Moldova, Republic of">Moldova, Republic of</option>
                                                <option value="Monaco">Monaco</option>
                                                <option value="Mongolia">Mongolia</option>
                                                <option value="Montenegro">Montenegro</option>
                                                <option value="Montserrat">Montserrat</option>
                                                <option value="Morocco">Morocco</option>
                                                <option value="Mozambique">Mozambique</option>
                                                <option value="Myanmar">Myanmar</option>
                                                <option value="Namibia">Namibia</option>
                                                <option value="Nauru">Nauru</option>
                                                <option value="Nepal">Nepal</option>
                                                <option value="Netherlands">Netherlands</option>
                                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                <option value="New Caledonia">New Caledonia</option>
                                                <option value="New Zealand">New Zealand</option>
                                                <option value="Nicaragua">Nicaragua</option>
                                                <option value="Niger">Niger</option>
                                                <option value="Nigeria">Nigeria</option>
                                                <option value="Niue">Niue</option>
                                                <option value="Norfolk Island">Norfolk Island</option>
                                                <option value="Northern Mariana Islands">Northern Mariana Islands
                                                </option>
                                                <option value="Norway">Norway</option>
                                                <option value="Oman">Oman</option>
                                                <option value="Pakistan">Pakistan</option>
                                                <option value="Palau">Palau</option>
                                                <option value="Palestinian Territory, Occupied">Palestinian Territory,
                                                    Occupied
                                                </option>
                                                <option value="Panama">Panama</option>
                                                <option value="Papua New Guinea">Papua New Guinea</option>
                                                <option value="Paraguay">Paraguay</option>
                                                <option value="Peru">Peru</option>
                                                <option value="Philippines">Philippines</option>
                                                <option value="Pitcairn">Pitcairn</option>
                                                <option value="Poland">Poland</option>
                                                <option value="Portugal">Portugal</option>
                                                <option value="Puerto Rico">Puerto Rico</option>
                                                <option value="Qatar">Qatar</option>
                                                <option value="Reunion">Reunion</option>
                                                <option value="Romania">Romania</option>
                                                <option value="Russian Federation">Russian Federation</option>
                                                <option value="Rwanda">Rwanda</option>
                                                <option value="Saint Helena">Saint Helena</option>
                                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                <option value="Saint Lucia">Saint Lucia</option>
                                                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon
                                                </option>
                                                <option value="Saint Vincent and The Grenadines">Saint Vincent and The
                                                    Grenadines</option>
                                                <option value="Samoa">Samoa</option>
                                                <option value="San Marino">San Marino</option>
                                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                <option value="Saudi Arabia">Saudi Arabia</option>
                                                <option value="Senegal">Senegal</option>
                                                <option value="Serbia">Serbia</option>
                                                <option value="Seychelles">Seychelles</option>
                                                <option value="Sierra Leone">Sierra Leone</option>
                                                <option value="Singapore">Singapore</option>
                                                <option value="Slovakia">Slovakia</option>
                                                <option value="Slovenia">Slovenia</option>
                                                <option value="Solomon Islands">Solomon Islands</option>
                                                <option value="Somalia">Somalia</option>
                                                <option value="South Africa">South Africa</option>
                                                <option value="South Georgia and The South Sandwich Islands">South
                                                    Georgia and
                                                    The South Sandwich Islands</option>
                                                <option value="Spain">Spain</option>
                                                <option value="Sri Lanka">Sri Lanka</option>
                                                <option value="Sudan">Sudan</option>
                                                <option value="Suriname">Suriname</option>
                                                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                                <option value="Swaziland">Swaziland</option>
                                                <option value="Sweden">Sweden</option>
                                                <option value="Switzerland">Switzerland</option>
                                                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                <option value="Taiwan, Province of China">Taiwan, Province of China
                                                </option>
                                                <option value="Tajikistan">Tajikistan</option>
                                                <option value="Tanzania, United Republic of">Tanzania, United Republic
                                                    of
                                                </option>
                                                <option value="Thailand">Thailand</option>
                                                <option value="Timor-leste">Timor-leste</option>
                                                <option value="Togo">Togo</option>
                                                <option value="Tokelau">Tokelau</option>
                                                <option value="Tonga">Tonga</option>
                                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                <option value="Tunisia">Tunisia</option>
                                                <option value="Turkey">Turkey</option>
                                                <option value="Turkmenistan">Turkmenistan</option>
                                                <option value="Turks and Caicos Islands">Turks and Caicos Islands
                                                </option>
                                                <option value="Tuvalu">Tuvalu</option>
                                                <option value="Uganda">Uganda</option>
                                                <option value="Ukraine">Ukraine</option>
                                                <option value="United Arab Emirates">United Arab Emirates</option>
                                                <option value="United Kingdom">United Kingdom</option>
                                                <option value="United States">United States</option>
                                                <option value="United States Minor Outlying Islands">United States Minor
                                                    Outlying Islands</option>
                                                <option value="Uruguay">Uruguay</option>
                                                <option value="Uzbekistan">Uzbekistan</option>
                                                <option value="Vanuatu">Vanuatu</option>
                                                <option value="Venezuela">Venezuela</option>
                                                <option value="Viet Nam">Viet Nam</option>
                                                <option value="Virgin Islands, British">Virgin Islands, British</option>
                                                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                                <option value="Wallis and Futuna">Wallis and Futuna</option>
                                                <option value="Western Sahara">Western Sahara</option>
                                                <option value="Yemen">Yemen</option>
                                                <option value="Zambia">Zambia</option>
                                                <option value="Zimbabwe">Zimbabwe</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label for="Date">Date Of Birth</label>
                                            <input type="Date" name="dob" class="form-control" id="Date" placeholder=""
                                                required>
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label for="sex">Gender</label>
                                            <select id="sex" class="form-control browser-default custom-select">
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                                <option value="unspesified">Unspecified</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-2 form-group">
                                            <label for="cod">Country code</label>
                                            <select class="form-control browser-default custom-select">
                                                <option data-countryCode="US" value="1" selected>USA (+1)</option>
                                                <option data-countryCode="GB" value="44">UK (+44)</option>

                                                <option disabled="disabled">Other Countries</option>
                                                <option data-countryCode="DZ" value="213">Algeria (+213)</option>
                                                <option data-countryCode="AD" value="376">Andorra (+376)</option>
                                                <option data-countryCode="AO" value="244">Angola (+244)</option>
                                                <option data-countryCode="AI" value="1264">Anguilla (+1264)</option>
                                                <option data-countryCode="AG" value="1268">Antigua &amp; Barbuda (+1268)
                                                </option>
                                                <option data-countryCode="AR" value="54">Argentina (+54)</option>
                                                <option data-countryCode="AM" value="374">Armenia (+374)</option>
                                                <option data-countryCode="AW" value="297">Aruba (+297)</option>
                                                <option data-countryCode="AU" value="61">Australia (+61)</option>
                                                <option data-countryCode="AT" value="43">Austria (+43)</option>
                                                <option data-countryCode="AZ" value="994">Azerbaijan (+994)</option>
                                                <option data-countryCode="BS" value="1242">Bahamas (+1242)</option>
                                                <option data-countryCode="BH" value="973">Bahrain (+973)</option>
                                                <option data-countryCode="BD" value="880">Bangladesh (+880)</option>
                                                <option data-countryCode="BB" value="1246">Barbados (+1246)</option>
                                                <option data-countryCode="BY" value="375">Belarus (+375)</option>
                                                <option data-countryCode="BE" value="32">Belgium (+32)</option>
                                                <option data-countryCode="BZ" value="501">Belize (+501)</option>
                                                <option data-countryCode="BJ" value="229">Benin (+229)</option>
                                                <option data-countryCode="BM" value="1441">Bermuda (+1441)</option>
                                                <option data-countryCode="BT" value="975">Bhutan (+975)</option>
                                                <option data-countryCode="BO" value="591">Bolivia (+591)</option>
                                                <option data-countryCode="BA" value="387">Bosnia Herzegovina (+387)
                                                </option>
                                                <option data-countryCode="BW" value="267">Botswana (+267)</option>
                                                <option data-countryCode="BR" value="55">Brazil (+55)</option>
                                                <option data-countryCode="BN" value="673">Brunei (+673)</option>
                                                <option data-countryCode="BG" value="359">Bulgaria (+359)</option>
                                                <option data-countryCode="BF" value="226">Burkina Faso (+226)</option>
                                                <option data-countryCode="BI" value="257">Burundi (+257)</option>
                                                <option data-countryCode="KH" value="855">Cambodia (+855)</option>
                                                <option data-countryCode="CM" value="237">Cameroon (+237)</option>
                                                <option data-countryCode="CA" value="1">Canada (+1)</option>
                                                <option data-countryCode="CV" value="238">Cape Verde Islands (+238)
                                                </option>
                                                <option data-countryCode="KY" value="1345">Cayman Islands (+1345)
                                                </option>
                                                <option data-countryCode="CF" value="236">Central African Republic
                                                    (+236)
                                                </option>
                                                <option data-countryCode="CL" value="56">Chile (+56)</option>
                                                <option data-countryCode="CN" value="86">China (+86)</option>
                                                <option data-countryCode="CO" value="57">Colombia (+57)</option>
                                                <option data-countryCode="KM" value="269">Comoros (+269)</option>
                                                <option data-countryCode="CG" value="242">Congo (+242)</option>
                                                <option data-countryCode="CK" value="682">Cook Islands (+682)</option>
                                                <option data-countryCode="CR" value="506">Costa Rica (+506)</option>
                                                <option data-countryCode="HR" value="385">Croatia (+385)</option>
                                                <option data-countryCode="CU" value="53">Cuba (+53)</option>
                                                <option data-countryCode="CY" value="90">Cyprus - North (+90)</option>
                                                <option data-countryCode="CY" value="357">Cyprus - South (+357)</option>
                                                <option data-countryCode="CZ" value="420">Czech Republic (+420)</option>
                                                <option data-countryCode="DK" value="45">Denmark (+45)</option>
                                                <option data-countryCode="DJ" value="253">Djibouti (+253)</option>
                                                <option data-countryCode="DM" value="1809">Dominica (+1809)</option>
                                                <option data-countryCode="DO" value="1809">Dominican Republic (+1809)
                                                </option>
                                                <option data-countryCode="EC" value="593">Ecuador (+593)</option>
                                                <option data-countryCode="EG" value="20">Egypt (+20)</option>
                                                <option data-countryCode="SV" value="503">El Salvador (+503)</option>
                                                <option data-countryCode="GQ" value="240">Equatorial Guinea (+240)
                                                </option>
                                                <option data-countryCode="ER" value="291">Eritrea (+291)</option>
                                                <option data-countryCode="EE" value="372">Estonia (+372)</option>
                                                <option data-countryCode="ET" value="251">Ethiopia (+251)</option>
                                                <option data-countryCode="FK" value="500">Falkland Islands (+500)
                                                </option>
                                                <option data-countryCode="FO" value="298">Faroe Islands (+298)</option>
                                                <option data-countryCode="FJ" value="679">Fiji (+679)</option>
                                                <option data-countryCode="FI" value="358">Finland (+358)</option>
                                                <option data-countryCode="FR" value="33">France (+33)</option>
                                                <option data-countryCode="GF" value="594">French Guiana (+594)</option>
                                                <option data-countryCode="PF" value="689">French Polynesia (+689)
                                                </option>
                                                <option data-countryCode="GA" value="241">Gabon (+241)</option>
                                                <option data-countryCode="GM" value="220">Gambia (+220)</option>
                                                <option data-countryCode="GE" value="7880">Georgia (+7880)</option>
                                                <option data-countryCode="DE" value="49">Germany (+49)</option>
                                                <option data-countryCode="GH" value="233">Ghana (+233)</option>
                                                <option data-countryCode="GI" value="350">Gibraltar (+350)</option>
                                                <option data-countryCode="GR" value="30">Greece (+30)</option>
                                                <option data-countryCode="GL" value="299">Greenland (+299)</option>
                                                <option data-countryCode="GD" value="1473">Grenada (+1473)</option>
                                                <option data-countryCode="GP" value="590">Guadeloupe (+590)</option>
                                                <option data-countryCode="GU" value="671">Guam (+671)</option>
                                                <option data-countryCode="GT" value="502">Guatemala (+502)</option>
                                                <option data-countryCode="GN" value="224">Guinea (+224)</option>
                                                <option data-countryCode="GW" value="245">Guinea - Bissau (+245)
                                                </option>
                                                <option data-countryCode="GY" value="592">Guyana (+592)</option>
                                                <option data-countryCode="HT" value="509">Haiti (+509)</option>
                                                <option data-countryCode="HN" value="504">Honduras (+504)</option>
                                                <option data-countryCode="HK" value="852">Hong Kong (+852)</option>
                                                <option data-countryCode="HU" value="36">Hungary (+36)</option>
                                                <option data-countryCode="IS" value="354">Iceland (+354)</option>
                                                <option data-countryCode="IN" value="91">India (+91)</option>
                                                <option data-countryCode="ID" value="62">Indonesia (+62)</option>
                                                <option data-countryCode="IQ" value="964">Iraq (+964)</option>
                                                <option data-countryCode="IR" value="98">Iran (+98)</option>
                                                <option data-countryCode="IE" value="353">Ireland (+353)</option>
                                                <option data-countryCode="IL" value="972">Israel (+972)</option>
                                                <option data-countryCode="IT" value="39">Italy (+39)</option>
                                                <option data-countryCode="JM" value="1876">Jamaica (+1876)</option>
                                                <option data-countryCode="JP" value="81">Japan (+81)</option>
                                                <option data-countryCode="JO" value="962">Jordan (+962)</option>
                                                <option data-countryCode="KZ" value="7">Kazakhstan (+7)</option>
                                                <option data-countryCode="KE" value="254">Kenya (+254)</option>
                                                <option data-countryCode="KI" value="686">Kiribati (+686)</option>
                                                <option data-countryCode="KP" value="850">Korea - North (+850)</option>
                                                <option data-countryCode="KR" value="82">Korea - South (+82)</option>
                                                <option data-countryCode="KW" value="965">Kuwait (+965)</option>
                                                <option data-countryCode="KG" value="996">Kyrgyzstan (+996)</option>
                                                <option data-countryCode="LA" value="856">Laos (+856)</option>
                                                <option data-countryCode="LV" value="371">Latvia (+371)</option>
                                                <option data-countryCode="LB" value="961">Lebanon (+961)</option>
                                                <option data-countryCode="LS" value="266">Lesotho (+266)</option>
                                                <option data-countryCode="LR" value="231">Liberia (+231)</option>
                                                <option data-countryCode="LY" value="218">Libya (+218)</option>
                                                <option data-countryCode="LI" value="417">Liechtenstein (+417)</option>
                                                <option data-countryCode="LT" value="370">Lithuania (+370)</option>
                                                <option data-countryCode="LU" value="352">Luxembourg (+352)</option>
                                                <option data-countryCode="MO" value="853">Macao (+853)</option>
                                                <option data-countryCode="MK" value="389">Macedonia (+389)</option>
                                                <option data-countryCode="MG" value="261">Madagascar (+261)</option>
                                                <option data-countryCode="MW" value="265">Malawi (+265)</option>
                                                <option data-countryCode="MY" value="60">Malaysia (+60)</option>
                                                <option data-countryCode="MV" value="960">Maldives (+960)</option>
                                                <option data-countryCode="ML" value="223">Mali (+223)</option>
                                                <option data-countryCode="MT" value="356">Malta (+356)</option>
                                                <option data-countryCode="MH" value="692">Marshall Islands (+692)
                                                </option>
                                                <option data-countryCode="MQ" value="596">Martinique (+596)</option>
                                                <option data-countryCode="MR" value="222">Mauritania (+222)</option>
                                                <option data-countryCode="YT" value="269">Mayotte (+269)</option>
                                                <option data-countryCode="MX" value="52">Mexico (+52)</option>
                                                <option data-countryCode="FM" value="691">Micronesia (+691)</option>
                                                <option data-countryCode="MD" value="373">Moldova (+373)</option>
                                                <option data-countryCode="MC" value="377">Monaco (+377)</option>
                                                <option data-countryCode="MN" value="976">Mongolia (+976)</option>
                                                <option data-countryCode="MS" value="1664">Montserrat (+1664)</option>
                                                <option data-countryCode="MA" value="212">Morocco (+212)</option>
                                                <option data-countryCode="MZ" value="258">Mozambique (+258)</option>
                                                <option data-countryCode="MN" value="95">Myanmar (+95)</option>
                                                <option data-countryCode="NA" value="264">Namibia (+264)</option>
                                                <option data-countryCode="NR" value="674">Nauru (+674)</option>
                                                <option data-countryCode="NP" value="977">Nepal (+977)</option>
                                                <option data-countryCode="NL" value="31">Netherlands (+31)</option>
                                                <option data-countryCode="NC" value="687">New Caledonia (+687)</option>
                                                <option data-countryCode="NZ" value="64">New Zealand (+64)</option>
                                                <option data-countryCode="NI" value="505">Nicaragua (+505)</option>
                                                <option data-countryCode="NE" value="227">Niger (+227)</option>
                                                <option data-countryCode="NG" value="234">Nigeria (+234)</option>
                                                <option data-countryCode="NU" value="683">Niue (+683)</option>
                                                <option data-countryCode="NF" value="672">Norfolk Islands (+672)
                                                </option>
                                                <option data-countryCode="NP" value="670">Northern Marianas (+670)
                                                </option>
                                                <option data-countryCode="NO" value="47">Norway (+47)</option>
                                                <option data-countryCode="OM" value="968">Oman (+968)</option>
                                                <option data-countryCode="PK" value="92">Pakistan (+92)</option>
                                                <option data-countryCode="PW" value="680">Palau (+680)</option>
                                                <option data-countryCode="PA" value="507">Panama (+507)</option>
                                                <option data-countryCode="PG" value="675">Papua New Guinea (+675)
                                                </option>
                                                <option data-countryCode="PY" value="595">Paraguay (+595)</option>
                                                <option data-countryCode="PE" value="51">Peru (+51)</option>
                                                <option data-countryCode="PH" value="63">Philippines (+63)</option>
                                                <option data-countryCode="PL" value="48">Poland (+48)</option>
                                                <option data-countryCode="PT" value="351">Portugal (+351)</option>
                                                <option data-countryCode="PR" value="1787">Puerto Rico (+1787)</option>
                                                <option data-countryCode="QA" value="974">Qatar (+974)</option>
                                                <option data-countryCode="RE" value="262">Reunion (+262)</option>
                                                <option data-countryCode="RO" value="40">Romania (+40)</option>
                                                <option data-countryCode="RU" value="7">Russia (+7)</option>
                                                <option data-countryCode="RW" value="250">Rwanda (+250)</option>
                                                <option data-countryCode="SM" value="378">San Marino (+378)</option>
                                                <option data-countryCode="ST" value="239">Sao Tome &amp; Principe (+239)
                                                </option>
                                                <option data-countryCode="SA" value="966">Saudi Arabia (+966)</option>
                                                <option data-countryCode="SN" value="221">Senegal (+221)</option>
                                                <option data-countryCode="CS" value="381">Serbia (+381)</option>
                                                <option data-countryCode="SC" value="248">Seychelles (+248)</option>
                                                <option data-countryCode="SL" value="232">Sierra Leone (+232)</option>
                                                <option data-countryCode="SG" value="65">Singapore (+65)</option>
                                                <option data-countryCode="SK" value="421">Slovak Republic (+421)
                                                </option>
                                                <option data-countryCode="SI" value="386">Slovenia (+386)</option>
                                                <option data-countryCode="SB" value="677">Solomon Islands (+677)
                                                </option>
                                                <option data-countryCode="SO" value="252">Somalia (+252)</option>
                                                <option data-countryCode="ZA" value="27">South Africa (+27)</option>
                                                <option data-countryCode="ES" value="34">Spain (+34)</option>
                                                <option data-countryCode="LK" value="94">Sri Lanka (+94)</option>
                                                <option data-countryCode="SH" value="290">St. Helena (+290)</option>
                                                <option data-countryCode="KN" value="1869">St. Kitts (+1869)</option>
                                                <option data-countryCode="SC" value="1758">St. Lucia (+1758)</option>
                                                <option data-countryCode="SR" value="597">Suriname (+597)</option>
                                                <option data-countryCode="SD" value="249">Sudan (+249)</option>
                                                <option data-countryCode="SZ" value="268">Swaziland (+268)</option>
                                                <option data-countryCode="SE" value="46">Sweden (+46)</option>
                                                <option data-countryCode="CH" value="41">Switzerland (+41)</option>
                                                <option data-countryCode="SY" value="963">Syria (+963)</option>
                                                <option data-countryCode="TW" value="886">Taiwan (+886)</option>
                                                <option data-countryCode="TJ" value="992">Tajikistan (+992)</option>
                                                <option data-countryCode="TH" value="66">Thailand (+66)</option>
                                                <option data-countryCode="TG" value="228">Togo (+228)</option>
                                                <option data-countryCode="TO" value="676">Tonga (+676)</option>
                                                <option data-countryCode="TT" value="1868">Trinidad &amp; Tobago (+1868)
                                                </option>
                                                <option data-countryCode="TN" value="216">Tunisia (+216)</option>
                                                <option data-countryCode="TR" value="90">Turkey (+90)</option>
                                                <option data-countryCode="TM" value="993">Turkmenistan (+993)</option>
                                                <option data-countryCode="TC" value="1649">Turks &amp; Caicos Islands
                                                    (+1649)
                                                </option>
                                                <option data-countryCode="TV" value="688">Tuvalu (+688)</option>
                                                <option data-countryCode="UG" value="256">Uganda (+256)</option>
                                                <option data-countryCode="UA" value="380">Ukraine (+380)</option>
                                                <option data-countryCode="AE" value="971">United Arab Emirates (+971)
                                                </option>
                                                <option data-countryCode="UY" value="598">Uruguay (+598)</option>
                                                <option data-countryCode="UZ" value="998">Uzbekistan (+998)</option>
                                                <option data-countryCode="VU" value="678">Vanuatu (+678)</option>
                                                <option data-countryCode="VA" value="379">Vatican City (+379)</option>
                                                <option data-countryCode="VE" value="58">Venezuela (+58)</option>
                                                <option data-countryCode="VN" value="84">Vietnam (+84)</option>
                                                <option data-countryCode="VG" value="1">Virgin Islands - British (+1)
                                                </option>
                                                <option data-countryCode="VI" value="1">Virgin Islands - US (+1)
                                                </option>
                                                <option data-countryCode="WF" value="681">Wallis &amp; Futuna (+681)
                                                </option>
                                                <option data-countryCode="YE" value="969">Yemen (North)(+969)</option>
                                                <option data-countryCode="YE" value="967">Yemen (South)(+967)</option>
                                                <option data-countryCode="ZM" value="260">Zambia (+260)</option>
                                                <option data-countryCode="ZW" value="263">Zimbabwe (+263)</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-4 form-group">
                                            <label for="tel">Phone</label>
                                            <input type="tel" name="phone" class="form-control" id="tel"
                                                placeholder="Enter Your Contact Number." required>
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label for="pass">Password</label>
                                            <input type="Password" name="password" class="form-control" id="pass"
                                                placeholder="Enter your password." required>
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label for="pass2">Confirm Password</label>
                                            <input type="Password" name="cnf-password" class="form-control" id="pass2"
                                                placeholder="Re-enter your password." required>
                                        </div>
                                        <div class="col-sm-12">
                                            <input type="checkbox" class="form-check d-inline" id="chb" required><label
                                                for="chb" class="form-check-label">&nbsp;I accept all terms and
                                                conditions.
                                            </label>
                                        </div>

                                        <div class="col-sm-12 form-group mb-0">
                                            <button class="btn btn-primary float-right">Submit</button>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </section>
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