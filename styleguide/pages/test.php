<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="description" content="">
    <title>test</title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-1.4.1.min.js"></script>

    <link rel="stylesheet" href="../lib/bootstrap-4.3.1.min.css" />

    <link rel="stylesheet" href="../dist/fonts/font-awesome/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../dist/css/bs-elements.min.css" />
    <link rel="stylesheet" href="../dist/css/components.min.css" />
    <style type="text/css">
    .dropdown-submenu {
        position: relative;
    }

    .dropdown-submenu .dropdown-menu {
        top: 0;
        left: 100%;
        margin-top: -1px;
    }
    </style>

</head>

<body>


    <main role="main">



        <div class="dropdown">
            <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Tutorials
                <span class="caret"></span></button>
            <ul class="dropdown-menu">
                <li><a tabindex="-1" href="#">HTML</a></li>
                <li><a tabindex="-1" href="#">CSS</a></li>
                <li class="dropdown-submenu">
                    <a class="test" tabindex="-1" href="#">New dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a tabindex="-1" href="#">2nd level dropdown</a></li>
                        <li><a tabindex="-1" href="#">2nd level dropdown</a></li>

                    </ul>
                </li>
            </ul>
        </div>


    </main>
    <script src="../lib/popper.min.js" type="text/javascript"></script>
    <script src="../lib/bootstrap-4.3.1.min.js" type="text/javascript"></script>

    <script src="../dist/js/bs-elements.min.js"></script>
    <script>
    $(document).ready(function() {
        $('.dropdown-submenu a.test').on("click", function(e) {
            $(this).next('ul').toggle();
            e.stopPropagation();
            e.preventDefault();
        });
    });
    </script>
</body>

</html>