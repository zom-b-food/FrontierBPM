<!doctype html>
<html lang="en">
    <head>
        <?php include '../pages/inc/globals-top.php'; ?>
        <title>Bottom navbar example for Bootstrap</title>
    </head>
    <body class="sidebar-collapse">
        <?php include '../pages/inc/header.php'; ?>
        <main role="main">
            <div class="jumbotron mt-3">
                <h1>Bottom Navbar example</h1>
                <p>This example is a quick exercise to illustrate how the bottom navbar works.</p>
                <a class="btn btn-lg btn-primary" href="../../components/navbar/" role="button">View navbar
                    docs &raquo;</a>
            </div>
            <nav class="navbar fixed-bottom navbar-expand navbar-dark bg-dark">
                <a class="navbar-brand" href="#">Bottom navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">Disabled</a>
                        </li>
                        <li class="nav-item dropup">
                            <a class="nav-link dropdown-toggle" href="https://getbootstrap.com" id="dropdown10"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropup</a>

                            <div class="dropdown-menu" aria-labelledby="dropdown10">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </main>       
        <?php include '../pages/inc/footer.php'; ?>
        <?php include '../pages/inc/globals-bottom.php'; ?>
    </body>
</html>
