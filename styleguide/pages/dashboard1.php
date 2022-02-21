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
                    <div class="card-body txt-black card-scroll">
                        <div class="row">
                            <div class="col-6">
                                <h1>Welcome, Mark Heupel</h1>
                            </div>
                            <div class="col-2">
                                <!-- <div class="box">one - <i class="fa fa-envelope-o"></i></div> -->
                            </div>
                            <div class="col-2">
                                <!-- <div class="box">two - <i class="fa fa-star-o"></i></div> -->
                            </div>
                            <div class="col-2">
                                <!-- <div class="box">three - <i class="fa fa-file-o"></i></div> -->
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
                                            <li>Master Key</li>
                                            <li>Resources for Life</li>
                                        </ul>
                                        <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut
                                            fermentum. Celak magrana molina tu esta pica drastoria mishpat ke lama.
                                            Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac
                                            cursus commodo, tortor mauris condimentum.</p>
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
                                    <span>Gilead Co</span>
                                    <h6>Product Name</h6>
                                    <span>Frontierium (injection)</span>
                                    <h6>Program</h6>
                                    <span>FBPM Care Plan</span>
                                    <h6>Number Dialed</h6>
                                    <span>215-844-0254</span>
                                    <h6>Source</h6>
                                    <span>510-805-2019<br />
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
                                        <button class="btn btn-primary btn-sm" data-toggle="tab"
                                            data-target="#details">Submit</button>
                                    </div>
                                    <hr class=" nomargin" />
                                    <div class="input-group">
                                        <button class="btn btn-primary btn-sm" data-toggle="tab"
                                            data-target="#create">Create New Contact</button>
                                        <img src="../dist/img/bar.png" />
                                        <button class="btn btn-primary btn-sm">NPI Lookup</button>
                                    </div>
                                    <div class="album short">
                                        <p>
                                            First Name: <span class="bold">Bart</span><br />
                                            Last Name: <span class="bold">Simpson</span><br />
                                            Gender: <span class="bold allcaps">male</span><br />
                                            Date of Birth: <span class="bold">2021-12-14</span><br />
                                            Email: <span class="bold">bart@simpson.com</span><br />
                                            Contact ID: <span class="bold">C-123456</span><br />
                                        </p>
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
            <div class="tab-pane" id="details" role="tabpanel">
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
                            <li data-toggle="tab" data-target="#wrapup"><a class="nav-item nav-link nojump"
                                    href="#">Wrap Up</a></li>
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
                                    <h2 class="blue bold-name">Conversation Summary</h2>
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
                                    <span>Bart</span>
                                    <h6>Last Name:</h6>
                                    <span>Simpson</span>
                                    <h6>Customer Type:</h6>
                                    <span>Patient</span>
                                    <h6>Gender</h6>
                                    <span>Male</span>
                                    <h6>Primary Email:</h6>
                                    <span>bartJsimpson@gmail.com</span>
                                    <h6>Home Phone:</h6>
                                    <span>555-555-1212</span>
                                    <h6>Date of Birth:</h6>
                                    <span>10/31/1993</span>
                                    <h6>SSN Last Four:</h6>
                                    <span>1111</span>
                                    <hr class="nomargin" />
                                    <h4 class="blue"><i class="fa fa-th-list"></i>&nbsp;&nbsp;Patient Status</h4>
                                    <h6>Enrollment Status:</h6>
                                    <span>Yes</span>
                                    <h6>Benefit Status:</h6>
                                    <span>n/a</span>
                                    <h6>Therapy Stats:</h6>
                                    <span>2</span>
                                </div>
                            </div>
                            <div class="col-9 border-left">
                                <h2>Contact Details</h2>
                                <div class="bob">
                                    <ul id="tabsJustified" class="nav nav-tabs">
                                        <li class="nav-item-hz"><a href="#" data-target="#dets" data-toggle="tab"
                                                class="nav-link square active">Contact
                                                Details</a></li>
                                        <li class="nav-item-hz"><a href="#" data-target="#careplan" data-toggle="tab"
                                                class="nav-link square">Care Plan</a></li>
                                        <li class="nav-item-hz"><a href="#" data-target="#clinical" data-toggle="tab"
                                                class="nav-link square">Clinical</a></li>
                                        <li class="nav-item-hz"><a href="#" data-target="#att" data-toggle="tab"
                                                class="nav-link square">Attachments</a></li>
                                    </ul>
                                    <div class="card">
                                        <div id="tabsJustifiedContent" class="tab-content nopad">
                                            <div id="dets" class="tab-pane fade active show">
                                                <div class="row">
                                                    <div class="col-5">
                                                        <div class="row tight">
                                                            <h5>Contact Details</h5>
                                                        </div>
                                                        <p>First Given Name: <span class="bold">Bart</span><br />
                                                            Surname/Family Name: <span class="bold">Simpson</span><br />
                                                            Customer Type: <span
                                                                class="bold allcaps">patient</span><br />
                                                            Gender: <span class="bold allcaps">male</span><br />
                                                            Primary Email: <span
                                                                class="bold">bart@simpson.com</span><br />
                                                            Primary Phone: <span class="bold">555-888-4545</span><br />
                                                            Secondary Phone: <span
                                                                class="bold">154-985-9898</span><br />
                                                            Date of Birth: <span class="bold">2021-12-26</span><br />
                                                            SSN Last Four: <span class="bold">1111</span><br />
                                                        </p>
                                                        <hr class="nomargin" />
                                                        <h5>Patient Status</h5>
                                                        <p>
                                                            Enrollment Status: <span
                                                                class="badge green-bg">Enrolled</span><br />
                                                            Benefit Status: <span
                                                                class="badge green-bg">Approved</span><br />
                                                            Therapy Status: <span class="badge yellow-bg">Pending</span>
                                                        </p>
                                                    </div>
                                                    <div class="col-7">
                                                        <h5>Addresses</h5>
                                                        <div class="album">
                                                            <table>
                                                                <tr>
                                                                    <th>Primary</th>
                                                                    <th>Type</th>
                                                                    <th>Address</th>
                                                                </tr>
                                                                <tr>
                                                                    <td><i class="fa fa-check"></i></td>
                                                                    <td class="allcaps">home</td>
                                                                    <td>101 Main Street, Columbus, OH 45874</td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="careplan" class="tab-pane fade">
                                                <div class="row tight">
                                                    <h5>Care Plan</h5>
                                                </div>
                                            </div>
                                            <div id="clinical" class="tab-pane fade">
                                                <div class="row tight">
                                                    <h5>Clinical</h5>
                                                </div>
                                            </div>
                                            <div id="att" class="tab-pane fade">
                                                <div class="row tight">
                                                    <h5>Attachments</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                            <li data-toggle="tab" data-target="#wrapup"><a class="nav-item nav-link nojump"
                                    href="#">Wrap Up</a></li>
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
                                    <h2 class="blue bold-name">Conversation Summary</h2>
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
                                    <span>Bart</span>
                                    <h6>Last Name:</h6>
                                    <span>Simpson</span>
                                    <h6>Customer Type:</h6>
                                    <span>Patient</span>
                                    <h6>Gender</h6>
                                    <span>Male</span>
                                    <h6>Primary Email:</h6>
                                    <span>bartJsimpson@gmail.com</span>
                                    <h6>Home Phone:</h6>
                                    <span>555-555-1212</span>
                                    <h6>Date of Birth:</h6>
                                    <span>10/31/1993</span>
                                    <h6>SSN Last Four:</h6>
                                    <span>1111</span>
                                    <hr class="nomargin" />
                                    <h4 class="blue"><i class="fa fa-th-list"></i>&nbsp;&nbsp;Patient Status</h4>
                                    <h6>Enrollment Status:</h6>
                                    <span>Yes</span>
                                    <h6>Benefit Status:</h6>
                                    <span>n/a</span>
                                    <h6>Therapy Stats:</h6>
                                    <span>2</span>
                                </div>
                            </div>
                            <div class="col-9 border-left">
                                <h2>Update Contact</h2>

                                <div class="bob">
                                    <form>
                                        <div class="row">
                                            <div class="col-6">
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
                                                    <label for="fname">First Name / Given Name:</label>
                                                    <input type="text" class="form-control" placeholder="first name"
                                                        id="fname">
                                                </div>
                                                <div class="form-group">
                                                    <label for="mn">Middle Name / Add't Given Name:</label>
                                                    <input type="text" class="form-control" placeholder="middle name"
                                                        id="mn">
                                                </div>
                                                <div class="form-group">
                                                    <label for="ln">Surname / Family Name:</label>
                                                    <input type="text" class="form-control" placeholder="last name"
                                                        id="ln">
                                                </div>
                                                <div class="form-group">
                                                    <label for="ln">Alias / Nickname:</label>
                                                    <input type="text" class="form-control" placeholder="last name"
                                                        id="ln">
                                                </div>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <div class="form-group">
                                                            <label for="pre">Name Prefix:</label>
                                                            <input type="text" class="form-control" placeholder="mrs"
                                                                id="pre">
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-group">
                                                            <label for="suf">Name Sufix:</label>
                                                            <input type="text" class="form-control" placeholder="III"
                                                                id="suf">
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-group">
                                                            <label for="dob">Date of Birth:</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control"
                                                                    placeholder="10/31/1999" id="dob">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-calendar"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group mt20">
                                                    <label for="license">Is Contact Deceased:</label>
                                                    <div class="form-check-inline">
                                                        <label class="form-check-label">&nbsp;
                                                            <input type="radio" class="form-check-input"
                                                                name="optradio">Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check-inline">
                                                        <label class="form-check-label">&nbsp;
                                                            <input type="radio" class="form-check-input"
                                                                name="optradio">No
                                                        </label>
                                                    </div>
                                                </div>
                                                <hr class="nomargin" />
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="gender">Gender:</label>
                                                            <select name="gender" id="gender">
                                                                <option value="male">Male</option>
                                                                <option value="female">Female</option>
                                                                <option value="other">Other</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="language">Language:</label>
                                                            <select name="language" id="language">
                                                                <option value="English">English</option>
                                                                <option value="other">Other</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <fieldset>
                                                    <legend>Email<i class="fa fa-plus-square-o ml15 pointer"
                                                            data-toggle="modal"
                                                            data-target="#email-secondary-update"></i>
                                                    </legend>
                                                    <div class="form-group">
                                                        <label for="pemail">Primary Email:</label>
                                                        <input type="email" class="form-control"
                                                            placeholder="primary email" id="pemail">
                                                    </div>
                                                </fieldset>

                                                <fieldset>
                                                    <legend>Phone Number<i class="fa fa-plus-square-o ml15 pointer"
                                                            data-toggle="modal"
                                                            data-target="#phone-secondary-update"></i>
                                                    </legend>
                                                    <div class="form-group">
                                                        <label for="pphone">Primary Phone Number:</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="primary phone number" id="pphone">
                                                    </div>
                                                </fieldset>

                                                <div class="form-group">
                                                    <label for="conmethod">Preferred Contact Method:</label>
                                                    <select name="conmethod" id="conmethod">
                                                        <option value="ppfone">Primary Phone</option>
                                                        <option value="female">Primary Email</option>
                                                        <option value="other">Additional Phone</option>
                                                        <option value="other">Additional Email</option>
                                                    </select>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="ssn">SSN Last Four:</label>
                                                            <input type="text" class="form-control" placeholder="1111"
                                                                id="ssn">
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="status">Enrollment Status:</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Enrollment Status" id="status">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="officeCon">Office Contact Name:</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Office Contact Name" id="officeCon">
                                                </div>
                                                <div class="form-group">
                                                    <label for="facility">Organization Facility:</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Organization Facility" id="facility">
                                                </div>
                                                <!-- <div class="form-group form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox"> Remember me
                                                    </label>
                                                </div> -->

                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="pwd">Address Use:</label>
                                                    <select name="gender" id="gender">
                                                        <option value="ppfone">Home</option>
                                                        <option value="female">Office</option>
                                                        <option value="other">Disney World</option>
                                                    </select>
                                                </div>

                                                <fieldset>
                                                    <legend>Address<i class="fa fa-plus-square-o ml15 pointer"
                                                            data-toggle="modal"
                                                            data-target="#address-secondary-update"></i>
                                                    </legend>
                                                    <div class="form-group">
                                                        <label for="address">Primary Address Line 1:</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Address Line 1" id="address1">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="address">Primary Address Line 2:</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Address Line 2" id="address2">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="address">Primary Address Line 3:</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Address Line 3" id="address3">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="city">City / Municipality:</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="City / Municipality" id="city">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="county">County / District:</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="County / District" id="county">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="state">State / Province / Territory:</label>
                                                        <select name="gender" id="state">
                                                            <option value="ppfone">New Jersey</option>
                                                            <option value="female">New York</option>
                                                        </select>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label for="zip">Zip / Postal Code:</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Zip / Postal Code" id="zip">
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label for="country">Country:</label>
                                                                <select name="country" id="country">
                                                                    <option value="ppfone">United States</option>
                                                                    <option value="female">Canada</option>

                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </fieldset>

                                                <div class="form-group">
                                                    <label for="program">Program:</label>
                                                    <input type="text" class="form-control" placeholder="Program"
                                                        id="program">
                                                </div>
                                                <div class="form-group">
                                                    <label for="product">Product Name:</label>
                                                    <input type="text" class="form-control" placeholder="Product Name"
                                                        id="product">
                                                </div>
                                                <div class="form-group">
                                                    <label for="provider">Provider Type / Specialty:</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Provider Type / Specialty" id="provider">
                                                </div>


                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="npi">NPI Number:</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="NPI Number" id="npi">
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="tax">Tax ID:</label>
                                                            <input type="text" class="form-control" placeholder="Tax ID"
                                                                id="tax">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="license">State License Number:</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="State License Number" id="license">
                                                </div>
                                                <div class="form-group">
                                                    <label for="stateLic">State Licensed:</label>
                                                    <select name="stateLic" id="stateLic">
                                                        <option value="ppfone">New Jersey</option>
                                                        <option value="female">New York</option>
                                                    </select>
                                                </div>

                                                <!-- <div class="form-group form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox"> Remember me
                                                    </label>
                                                </div> -->
                                                <div class="row">
                                                    <div class="input-group buttons">
                                                        <button type="button" class="btn btn-default btn-sm"
                                                            style="">Cancel</button>&nbsp;<img
                                                            src="../dist/img/bar.png" />
                                                        <button type="submit" class="btn btn-primary btn-sm"
                                                            style="">Submit</button>
                                                    </div>
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
            <div class="tab-pane" id="create" role="tabpanel">
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
                            <li data-toggle="tab" data-target="#wrapup"><a class="nav-item nav-link nojump"
                                    href="#">Wrap Up</a></li>
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
                                    <h2 class="blue bold-name">Conversation Summary</h2>
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
                                    <span>Bart</span>
                                    <h6>Last Name:</h6>
                                    <span>Simpson</span>
                                    <h6>Customer Type:</h6>
                                    <span>Patient</span>
                                    <h6>Gender</h6>
                                    <span>Male</span>
                                    <h6>Primary Email:</h6>
                                    <span>bartJsimpson@gmail.com</span>
                                    <h6>Home Phone:</h6>
                                    <span>555-555-1212</span>
                                    <h6>Date of Birth:</h6>
                                    <span>10/31/1993</span>
                                    <h6>SSN Last Four:</h6>
                                    <span>1111</span>
                                    <hr class="nomargin" />
                                    <h4 class="blue"><i class="fa fa-th-list"></i>&nbsp;&nbsp;Patient Status</h4>
                                    <h6>Enrollment Status:</h6>
                                    <span>Yes</span>
                                    <h6>Benefit Status:</h6>
                                    <span>n/a</span>
                                    <h6>Therapy Stats:</h6>
                                    <span>2</span>
                                </div>
                            </div>
                            <div class="col-9 border-left">
                                <h2>Create Contact</h2>

                                <div class="bob">
                                    <form>
                                        <div class="row">
                                            <div class="col-6">
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
                                                    <label for="fname">First Name / Given Name:</label>
                                                    <input type="text" class="form-control" placeholder="first name"
                                                        id="fname">
                                                </div>
                                                <div class="form-group">
                                                    <label for="mn">Middle Name / Add't Given Name:</label>
                                                    <input type="text" class="form-control" placeholder="middle name"
                                                        id="mn">
                                                </div>
                                                <div class="form-group">
                                                    <label for="ln">Surname / Family Name:</label>
                                                    <input type="text" class="form-control" placeholder="last name"
                                                        id="ln">
                                                </div>
                                                <div class="form-group">
                                                    <label for="ln">Alias / Nickname:</label>
                                                    <input type="text" class="form-control" placeholder="last name"
                                                        id="ln">
                                                </div>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <div class="form-group">
                                                            <label for="pre">Name Prefix:</label>
                                                            <input type="text" class="form-control" placeholder="mrs"
                                                                id="pre">
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-group">
                                                            <label for="suf">Name Sufix:</label>
                                                            <input type="text" class="form-control" placeholder="III"
                                                                id="suf">
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-group">
                                                            <label for="dob">Date of Birth:</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control"
                                                                    placeholder="10/31/1999" id="dob">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-calendar"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr class="nomargin" />
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="gender">Gender:</label>
                                                            <select name="gender" id="gender">
                                                                <option value="male">Male</option>
                                                                <option value="female">Female</option>
                                                                <option value="other">Other</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="language">Language:</label>
                                                            <select name="language" id="language">
                                                                <option value="English">English</option>
                                                                <option value="other">Other</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <fieldset>
                                                    <legend>Email<i class="fa fa-plus-square-o ml15 pointer"
                                                            data-toggle="modal" data-target="#email-secondary"></i>
                                                    </legend>
                                                    <div class="form-group">
                                                        <label for="pemail">Primary Email:</label>
                                                        <input type="email" class="form-control"
                                                            placeholder="primary email" id="pemail">
                                                    </div>
                                                </fieldset>
                                                <fieldset>
                                                    <legend>Phone Number<i class="fa fa-plus-square-o ml15 pointer"
                                                            data-toggle="modal" data-target="#phone-secondary"></i>
                                                    </legend>
                                                    <div class="form-group">
                                                        <label for="pphone">Primary Phone Number:</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="primary phone number" id="pphone">
                                                    </div>
                                                </fieldset>
                                                <div class="form-group">
                                                    <label for="conmethod">Preferred Contact Method:</label>
                                                    <select name="conmethod" id="conmethod">
                                                        <option value="ppfone">Primary Phone</option>
                                                        <option value="female">Primary Email</option>
                                                        <option value="other">Additional Phone</option>
                                                        <option value="other">Additional Email</option>
                                                    </select>
                                                </div>

                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="ssn">SSN Last Four:</label>
                                                            <input type="text" class="form-control" placeholder="1111"
                                                                id="ssn">
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="status">Enrollment Status:</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Enrollment Status" id="status">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="officeCon">Office Contact Name:</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Office Contact Name" id="officeCon">
                                                </div>
                                                <div class="form-group">
                                                    <label for="facility">Organization Facility:</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Organization Facility" id="facility">
                                                </div>
                                                <!-- <div class="form-group form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox"> Remember me
                                                    </label>
                                                </div> -->

                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="addressType">Address Use:</label>
                                                    <select name="addressType" id="addressType">
                                                        <option value="ppfone">Home</option>
                                                        <option value="female">Office</option>
                                                        <option value="other">Disney World</option>
                                                    </select>
                                                </div>
                                                <fieldset>
                                                    <legend>Address<i class="fa fa-plus-square-o ml15 pointer"
                                                            data-toggle="modal" data-target="#address-secondary"></i>
                                                    </legend>
                                                    <div class="form-group">
                                                        <label for="address">Primary Address Line 1:</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Address Line 1" id="address1">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="address">Primary Address Line 2:</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Address Line 2" id="address2">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="address">Primary Address Line 3:</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Address Line 3" id="address3">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="city">City / Municipality:</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="City / Municipality" id="city">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="county">County / District:</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="County / District" id="county">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="state">State / Province / Territory:</label>
                                                        <select name="state" id="state">
                                                            <option value="ppfone">New Jersey</option>
                                                            <option value="female">New York</option>
                                                        </select>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label for="zip">Zip / Postal Code:</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Zip / Postal Code" id="zip">
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label for="country">Country:</label>
                                                                <select name="country" id="country">
                                                                    <option value="ppfone">United States</option>
                                                                    <option value="female">Canada</option>

                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <div class="form-group">
                                                    <label for="program">Program:</label>
                                                    <input type="text" class="form-control" placeholder="Program"
                                                        id="program">
                                                </div>
                                                <div class="form-group">
                                                    <label for="product">Product Name:</label>
                                                    <input type="text" class="form-control" placeholder="Product Name"
                                                        id="product">
                                                </div>
                                                <div class="form-group">
                                                    <label for="provider">Provider Type / Specialty:</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Provider Type / Specialty" id="provider">
                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="npi">NPI Number:</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="NPI Number" id="npi">
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="tax">Tax ID:</label>
                                                            <input type="text" class="form-control" placeholder="Tax ID"
                                                                id="tax">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="license">State License Number:</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="State License Number" id="license">
                                                </div>
                                                <div class="form-group">
                                                    <label for="stateLic">State Licensed:</label>
                                                    <select name="stateLic" id="stateLic">
                                                        <option value="ppfone">New Jersey</option>
                                                        <option value="female">New York</option>
                                                    </select>
                                                </div>

                                                <!-- <div class="form-group form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox"> Remember me
                                                    </label>
                                                </div> -->
                                                <div class="row">
                                                    <div class="input-group buttons">
                                                        <button type="button" class="btn btn-default btn-sm"
                                                            style="">Cancel</button>&nbsp;<img
                                                            src="../dist/img/bar.png" />
                                                        <button type="submit" class="btn btn-primary btn-sm"
                                                            style="">Submit</button>
                                                    </div>
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

            <div class="tab-pane" id="wrapup" role="tabpanel">
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
                            <li data-toggle="tab" data-target="#wrapup"><a class="nav-item nav-link nojump"
                                    href="#">Wrap Up</a></li>
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
                                    <h2 class="blue bold-name">Conversation Summary</h2>
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
                                    <span>Bart</span>
                                    <h6>Last Name:</h6>
                                    <span>Simpson</span>
                                    <h6>Customer Type:</h6>
                                    <span>Patient</span>
                                    <h6>Gender</h6>
                                    <span>Male</span>
                                    <h6>Primary Email:</h6>
                                    <span>bartJsimpson@gmail.com</span>
                                    <h6>Home Phone:</h6>
                                    <span>555-555-1212</span>
                                    <h6>Date of Birth:</h6>
                                    <span>10/31/1993</span>
                                    <h6>SSN Last Four:</h6>
                                    <span>1111</span>
                                    <hr class="nomargin" />
                                    <h4 class="blue"><i class="fa fa-th-list"></i>&nbsp;&nbsp;Patient Status</h4>
                                    <h6>Enrollment Status:</h6>
                                    <span>Yes</span>
                                    <h6>Benefit Status:</h6>
                                    <span>n/a</span>
                                    <h6>Therapy Stats:</h6>
                                    <span>2</span>
                                </div>
                            </div>
                            <div class="col-9 border-left">
                                <h2>Wrap Up</h2>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="reason">Reason for Interaction:</label>
                                            <select name="reason" id="state">
                                                <option value="ppfone">Phone Call</option>
                                                <option value="female">---</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="note">Interaction Notes:</label>
                                            <textarea class="textarea" id="note">Enter text here...</textarea>
                                        </div>
                                        <div class="row">
                                            <div class="input-group buttons">
                                                <button type="button" class="btn btn-default btn-sm"
                                                    style="">Cancel</button>&nbsp;<img src="../dist/img/bar.png" />
                                                <button type="submit" class="btn btn-primary btn-sm"
                                                    style="">Submit</button>
                                            </div>
                                        </div>
                                        <div class="box">
                                            <i class="fa fa-pencil-square-o"></i>&nbsp;No posts yet
                                        </div>
                                    </div>
                                </div>
                                <hr />
                                <div class="bob">
                                    <ul id="tabsJustified" class="nav nav-tabs">
                                        <li class="nav-item-hz"><a href="#" data-target="#dets" data-toggle="tab"
                                                class="nav-link square active">Contact
                                                Details</a></li>
                                        <li class="nav-item-hz"><a href="#" data-target="#careplan" data-toggle="tab"
                                                class="nav-link square">Care Plan</a></li>
                                        <li class="nav-item-hz"><a href="#" data-target="#clinical" data-toggle="tab"
                                                class="nav-link square">Clinical</a></li>
                                        <li class="nav-item-hz"><a href="#" data-target="#att" data-toggle="tab"
                                                class="nav-link square">Attachments</a></li>
                                    </ul>
                                    <div class="card">
                                        <div id="tabsJustifiedContent" class="tab-content nopad">
                                            <div id="dets" class="tab-pane fade active show">
                                                <div class="row">
                                                    <div class="col-5">
                                                        <div class="row tight">
                                                            <h5>Contact Details</h5>
                                                        </div>
                                                        <p>First Given Name: <span class="bold">Bart</span><br />
                                                            Surname/Family Name: <span class="bold">Simpson</span><br />
                                                            Customer Type: <span
                                                                class="bold allcaps">patient</span><br />
                                                            Gender: <span class="bold allcaps">male</span><br />
                                                            Primary Email: <span
                                                                class="bold">bart@simpson.com</span><br />
                                                            Primary Phone: <span class="bold">555-888-4545</span><br />
                                                            Additional Phone: <span
                                                                class="bold">154-985-9898</span><br />
                                                            Date of Birth: <span class="bold">2021-12-26</span><br />
                                                            SSN Last Four: <span class="bold">1111</span><br />
                                                        </p>
                                                        <hr class="nomargin" />
                                                        <h5>Patient Status</h5>
                                                        <p>
                                                            Enrollment Status: <span
                                                                class="badge green-bg">Enrolled</span><br />
                                                            Benefit Status: <span
                                                                class="badge green-bg">Approved</span><br />
                                                            Therapy Status: <span class="badge yellow-bg">Pending</span>
                                                        </p>
                                                    </div>
                                                    <div class="col-7">
                                                        <h5>Addresses</h5>
                                                        <div class="album">
                                                            <table>
                                                                <tr>
                                                                    <th>Primary</th>
                                                                    <th>Type</th>
                                                                    <th>Address</th>
                                                                </tr>
                                                                <tr>
                                                                    <td><i class="fa fa-check"></i></td>
                                                                    <td class="allcaps">home</td>
                                                                    <td>101 Main Street, Columbus, OH 45874</td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="careplan" class="tab-pane fade">
                                                <div class="row tight">
                                                    <h5>Care Plan</h5>
                                                </div>
                                            </div>
                                            <div id="clinical" class="tab-pane fade">
                                                <div class="row tight">
                                                    <h5>Clinical</h5>
                                                </div>
                                            </div>
                                            <div id="att" class="tab-pane fade">
                                                <div class="row tight">
                                                    <h5>Attachments</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main>
    <!-- Mini Modal -->
    <div class="modal fade modal-mini" id="address-secondary-update" tabindex="-1" role="dialog"
        aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Add/Update Additional Address</h5>
                </div>

                <div class="modal-body">
                    <div class="form-group">
                        <label for="saddress1">Additional Address Line
                            1:</label>
                        <input type="text" class="form-control" placeholder="Additional Address Line 1" id="saddress1">
                    </div>
                    <div class="form-group">
                        <label for="saddress2">Additional Address Line
                            2:</label>
                        <input type="text" class="form-control" placeholder="Additional Address Line 2" id="saddress2">
                    </div>
                    <div class="form-group">
                        <label for="saddress3">Additional Address Line
                            3:</label>
                        <input type="text" class="form-control" placeholder="Additional Address Line 3" id="saddress3">
                    </div>
                    <div class="form-group">
                        <label for="city">City / Municipality:</label>
                        <input type="text" class="form-control" placeholder="City / Municipality" id="city">
                    </div>
                    <div class="form-group">
                        <label for="county">County / District:</label>
                        <input type="text" class="form-control" placeholder="County / District" id="county">
                    </div>
                    <div class="form-group">
                        <label for="state">State / Province /
                            Territory:</label>
                        <select name="state" id="state">
                            <option value="ppfone">New Jersey</option>
                            <option value="female">New York</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="zip">Zip / Postal Code:</label>
                                <input type="text" class="form-control" placeholder="Zip / Postal Code" id="zip">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="country">Country:</label>
                                <select name="country" id="country">
                                    <option value="ppfone">United States
                                    </option>
                                    <option value="female">Canada</option>

                                </select>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-primary">Add</button>
                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!--  End Modal -->
    <!-- Mini Modal -->
    <div class="modal fade modal-mini" id="email-secondary-update" tabindex="-1" role="dialog"
        aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Add/Update Additional Email</h5>
                </div>

                <div class="modal-body">
                    <div class="form-group">
                        <label for="semail">Additional Email:</label>
                        <input type="text" class="form-control" placeholder="Additional Email" id="semail">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-primary">Add</button>
                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!--  End Modal -->
    <!-- Mini Modal -->
    <div class="modal fade modal-mini" id="phone-secondary-update" tabindex="-1" role="dialog"
        aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Add/Update Additional phone</h5>
                </div>

                <div class="modal-body">
                    <div class="form-group">
                        <label for="sphone">Additional phone:</label>
                        <input type="text" class="form-control" placeholder="Additional phone" id="sphone">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-primary">Add</button>
                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!--  End Modal -->
    <!-- Mini Modal -->
    <div class="modal fade modal-mini" id="address-secondary" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Add Additional Address</h5>
                </div>

                <div class="modal-body">
                    <div class="form-group">
                        <label for="saddress1">Additional Address Line
                            1:</label>
                        <input type="text" class="form-control" placeholder="Additional Address Line 1" id="saddress1">
                    </div>
                    <div class="form-group">
                        <label for="saddress2">Additional Address Line
                            2:</label>
                        <input type="text" class="form-control" placeholder="Additional Address Line 2" id="saddress2">
                    </div>
                    <div class="form-group">
                        <label for="saddress3">Additional Address Line
                            3:</label>
                        <input type="text" class="form-control" placeholder="Additional Address Line 3" id="saddress3">
                    </div>
                    <div class="form-group">
                        <label for="city">City / Municipality:</label>
                        <input type="text" class="form-control" placeholder="City / Municipality" id="city">
                    </div>
                    <div class="form-group">
                        <label for="county">County / District:</label>
                        <input type="text" class="form-control" placeholder="County / District" id="county">
                    </div>
                    <div class="form-group">
                        <label for="state">State / Province /
                            Territory:</label>
                        <select name="state" id="state">
                            <option value="ppfone">New Jersey</option>
                            <option value="female">New York</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="zip">Zip / Postal Code:</label>
                                <input type="text" class="form-control" placeholder="Zip / Postal Code" id="zip">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="country">Country:</label>
                                <select name="country" id="country">
                                    <option value="ppfone">United States
                                    </option>
                                    <option value="female">Canada</option>

                                </select>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-primary">Add</button>
                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!--  End Modal -->
    <!-- Mini Modal -->
    <div class="modal fade modal-mini" id="email-secondary" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Add Additional Email</h5>
                </div>

                <div class="modal-body">
                    <div class="form-group">
                        <label for="semail">Additional Email:</label>
                        <input type="text" class="form-control" placeholder="Additional Email" id="semail">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-primary">Add</button>
                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!--  End Modal -->
    <!-- Mini Modal -->
    <div class="modal fade modal-mini" id="phone-secondary" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Add Additional phone</h5>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="sphone">Additional phone:</label>
                        <input type="text" class="form-control" placeholder="Additional phone" id="sphone">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-primary">Add</button>
                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!--  End Modal -->
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