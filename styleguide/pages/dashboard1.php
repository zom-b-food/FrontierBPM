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
                                <!-- <li class="nav-item nav-link nojump" data-toggle="tab" data-target="#newContact">
                                    Contact
                                </li> -->
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
                        <li class="list-inline-item">Work</li>
                        <li class="list-inline-item">Call 1</li>
                        <li class="list-inline-item">Call 2</li>
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
                        <li class="list-inline-item">Call 1</li>
                        <li class="list-inline-item">Call 2</li>
                    </ul>
                </div>
                <div class="card narrow opacity">
                    <div class="dropdown">
                        <button class="btn btn-primary top"><i
                                class="fa fa-plus-square"></i>&nbsp;&nbsp;Actions</button>
                        <ul class="dropdown-content nobullet bg-primary">
                            <li><a class="nav-item nav-link nojump" href="#">Wrap Up</a></li>
                            <div class="dropdown-divider"></div>
                            <li data-toggle="tab" data-target="#update">
                                <a class="nav-item nav-link nojump" href="#">Update Contact Profile</a>
                            </li>
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
                                                <td class="bold-name txt-black">Unknown Contact</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="strong">&nbsp;</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <hr class="nomargin" />
                                    <h4 class="blue"><i class="fa fa-list-alt"></i>&nbsp;&nbsp;Conversation Summary</h4>
                                    <h6>Company</h6>
                                    <span class="indent">Gilead Co</span>
                                    <h6>Product Name</h6>
                                    <span class="indent">Frontierium (injection)</span>
                                    <h6>Program</h6>
                                    <span class="indent">FBPM Care Plan</span>
                                    <h6>Number Dialed</h6>
                                    <span class="indent">215-844-0254</span>
                                    <h6>Source</h6>
                                    <span class="indent">510-805-2019<br />
                                        tom@gmail.com</span>
                                    <hr class="nomargin" />
                                    <h4 class="blue"><i class="fa fa-th-list"></i>&nbsp;&nbsp;Open Tasks</h4>
                                    <!-- <ul class="tight">
                                        <li>Task1: Do this...</li>
                                        <li>Task2: Do that...</li>
                                        <li>Task3: Feed the dog and take a nap before 4pm when the kids will arrive
                                            with
                                            pizza...</li>
                                    </ul> -->
                                </div>
                            </div>
                            <div class="col-9 border-left">
                                <h2>New Conversation</h2>
                                <div class="card">
                                    <h5>Search for Contact</h5>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-search"></i>
                                        </span>
                                        <input type="text" class="form-control" placeholder="Enter Search Text">
                                    </div>
                                    <div class="input-group">
                                        <button class="btn btn-primary btn-sm">Search</button>
                                    </div>
                                    <hr class="nomargin" />
                                    <div class="input-group">
                                        <button class="btn btn-primary btn-sm">Create New Contact</button>
                                        <img src="../dist/img/bar.png" />
                                        <button class="btn btn-primary btn-sm">NPI Lookup</button>
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
            <div class="tab-pane" id="update" role="tabpanel">
                <div class="call-buttons bg-tertiary">
                    <ul class="list-inline">
                        <li class="list-inline-item">Work</li>
                        <li class="list-inline-item">Call 1</li>
                        <li class="list-inline-item">Call 2</li>
                    </ul>
                </div>
                <div class="card narrow opacity">
                    <div class="dropdown">
                        <button class="btn btn-primary top"><i
                                class="fa fa-plus-square"></i>&nbsp;&nbsp;Actions</button>
                        <ul class="dropdown-content nobullet bg-primary">
                            <li><a class="nav-item nav-link nojump" href="#">Wrap Up</a></li>
                            <div class="dropdown-divider"></div>
                            <li data-toggle="tab" data-target="#update">
                                <a class="nav-item nav-link nojump" href="#">Update Contact Profile</a>
                            </li>
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

                            <div class="dropdown-divider"></div>
                            <li><a class="nav-item nav-link nojump" href="#">Send SP Referal</a></li>
                        </ul>
                    </div>
                    <div class="card-body txt-black card-scroll">
                        <div class="row row-offcanvas row-offcanvas-right">
                            <div class="col-3 sidebar-offcanvas slidercard" id="sidebar">
                                <div class="card">
                                    <h2 class="blue bold-name">Contact Details</h2>
                                    <table class="table-data">
                                        <tbody>
                                            <tr>
                                                <td rowspan="3" class="avatar">
                                                    <img src="../dist/img/avatar-small.jpg" class="avatar" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="bold-name txt-black">Unknown Contact</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="strong">&nbsp;</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <hr class="nomargin" />
                                    <h4 class="blue"><i class="fa fa-list-alt"></i>&nbsp;&nbsp;Contact Details</h4>
                                    <h6>First Name:</h6>
                                    <span class="indent">Bart</span>
                                    <h6>Last Name:</h6>
                                    <span class="indent">Simpson</span>
                                    <h6>Customer Type:</h6>
                                    <span class="indent">Patient</span>
                                    <h6>Gender</h6>
                                    <span class="indent">Male</span>
                                    <h6>Primary Email:</h6>
                                    <span class="indent">bartJsimpson@gmail.com</span>


                                    <h6>Home Phone:</h6>
                                    <span class="indent">555-555-1212</span>
                                    <h6>Date of Birth:</h6>
                                    <span class="indent">10/31/1993</span>
                                    <h6>SSN Last Four:</h6>
                                    <span class="indent">1111</span>




                                    <hr class="nomargin" />
                                    <h4 class="blue"><i class="fa fa-th-list"></i>&nbsp;&nbsp;Patient Status</h4>
                                    <h6>Enrollment Status:</h6>
                                    <span class="indent">Yes</span>
                                    <h6>Benefit Status:</h6>
                                    <span class="indent">n/a</span>
                                    <h6>Therapy Stats:</h6>
                                    <span class="indent">2</span>
                                </div>
                            </div>
                            <div class="col-9 border-left">
                                <h2>Update Contact</h2>
                                <div class="bob">
                                    <form>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="fname">First Name:</label>
                                                    <input type="text" class="form-control" placeholder="first name"
                                                        id="fname">
                                                </div>
                                                <div class="form-group">
                                                    <label for="mn">Middle Name:</label>
                                                    <input type="text" class="form-control" placeholder="middle name"
                                                        id="mn">
                                                </div>
                                                <div class="form-group">
                                                    <label for="ln">Last Name:</label>
                                                    <input type="text" class="form-control" placeholder="last name"
                                                        id="ln">
                                                </div>
                                                <div class="form-group">
                                                    <label for="contact-type">Contact Type:</label>
                                                    <select name="contact-type" id="contact-type">
                                                        <option value="patient">Patient</option>
                                                        <option value="...">...</option>
                                                        <option value="...">...</option>
                                                        <option value="...">...</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="gender">Gender:</label>
                                                    <select name="gender" id="gender">
                                                        <option value="male">Male</option>
                                                        <option value="female">Female</option>
                                                        <option value="other">Other</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="language">Language:</label>
                                                    <select name="language" id="language">
                                                        <option value="English">English</option>
                                                        <option value="other">Other</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="pemail">Primary Email:</label>
                                                    <input type="email" class="form-control" placeholder="primary email"
                                                        id="pemail">
                                                </div>
                                                <div class="form-group">
                                                    <label for="semail">Secondary Email:</label>
                                                    <input type="email" class="form-control"
                                                        placeholder="secondary email" id="semail">
                                                </div>

                                                <div class="form-group">
                                                    <label for="pphone">Primary Phone Number:</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="primary phone number" id="pphone">
                                                </div>
                                                <div class="form-group">
                                                    <label for="sphone">Secondary Phone Number:</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="secondary phone number" id="sphone">
                                                </div>
                                                <div class="form-group">
                                                    <label for="conmethod">Preferred Contact Method:</label>
                                                    <select name="conmethod" id="conmethod">
                                                        <option value="ppfone">Primary Phone</option>
                                                        <option value="female">Primary Email</option>
                                                        <option value="other">Secondary Phone</option>
                                                        <option value="other">Secondary Email</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="dob">Date of Birth:</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="10/31/1999"
                                                            id="dob">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-calendar"></i>
                                                        </span>
                                                    </div>

                                                </div>
                                                <div class="form-group">
                                                    <label for="ssn">SSN Last Four:</label>
                                                    <input type="text" class="form-control" placeholder="1111" id="ssn">
                                                </div>
                                                <!-- <div class="form-group form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox"> Remember me
                                                    </label>
                                                </div> -->
                                                <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                                            </div>
                                            <div class="col-6">

                                                <div class="form-group">
                                                    <label for="address">Address:</label>
                                                    <input type="text" class="form-control" placeholder="Address"
                                                        id="address">
                                                </div>
                                                <div class="form-group">
                                                    <label for="pwd">Type:</label>
                                                    <select name="gender" id="gender">
                                                        <option value="ppfone">Home</option>
                                                        <option value="female">Office</option>
                                                        <option value="other">Cell</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="country">Country:</label>
                                                    <select name="country" id="country">
                                                        <option value="ppfone">United States</option>
                                                        <option value="female">Canada</option>

                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="city">City Name:</label>
                                                    <input type="text" class="form-control" placeholder="City"
                                                        id="city">
                                                </div>

                                                <label for="gender">State/Province/Territory:</label>
                                                <select name="gender" id="gender">
                                                    <option value="ppfone">New Jersey</option>
                                                    <option value="female">New York</option>

                                                </select>
                                                <div class="form-group">
                                                    <label for="pwd">Zip/Postal Code:</label>
                                                    <input type="text" class="form-control" placeholder="City" id="pwd">
                                                </div>
                                                <!-- <div class="form-group form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox"> Remember me
                                                    </label>
                                                </div> -->
                                                <div class="input-group">
                                                    <button class="btn btn-primary btn-sm">Remove Address</button>
                                                    <img src="../dist/img/bar.png" />
                                                    <button class="btn btn-primary btn-sm">Add Address</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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