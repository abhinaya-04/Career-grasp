<head>
    <!-- Meta tags and other head content -->

    <title> Career Grasp </title>

    <!-- CSS stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="css/s.css"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <!-- Header -->
    <header id="header" class="transparent-nav" style="position: fixed;background-color: rgb(120, 70, 167); top: 0;">
        <div class="container">

            <div class="navbar-header">
                <!-- Logo -->
                <div class="navbar-brand">
                    <a class="logo" href="main.php">Career Grasp</a>
                </div>
                <!-- /Logo -->

                <!-- Mobile toggle -->
                <button class="navbar-toggle">
                    <span></span>
                </button>
                <!-- /Mobile toggle -->
            </div>

            <?php
                // Check if the user is logged in, if not then redirect him to the login page
                if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true):
            ?>

            <!-- Navigation for not logged in users -->
            <nav id="nav">
                <ul class="main-menu nav navbar-nav navbar-right">
                    <li><a href="main.php">Home</a></li>
                    <li class="dropdown">
                        <a class="dropbtn" href="javascript:void(0)">Services <span>&#11167;</span></a>
                        <div class="dropdown-content">
                            <a href="">Career Prediction</a>
                            <a href="">Courses</a>
                            <a href="">Knowledge Network</a>
                        </div>
                    </li>
                    <li><a href="main.php#about">About Us</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li>
                        <a href="login.php">Login</a>
                    </li>
                    <li>
                        <a href="register.php">Register</a>
                    </li>
                </ul>
            </nav>
            <!-- /Navigation for not logged in users -->

            <?php else: ?>

            <!-- Navigation for logged in users -->
            <nav id="nav">
                <ul class="main-menu nav navbar-nav navbar-right">
                    <li><a href="main.php">Home</a></li>
                    <li class="dropdown">
                        <a class="dropbtn" href="javascript:void(0)">Services <span>&#11167;</span></i></a>
                        <div class="dropdown-content">
                            <a href="faq.php">Career Prediction</a>
                            <a href="courses.php">Courses</a>
                            <a href="blog.php">Knowledge Network</a>
                        </div>
                    </li>
                    <li><a href="main.php#about">About Us</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="logout.php">Log out</a></li>
                </ul>
            </nav>
            <!-- /Navigation for logged in users -->

            <?php endif; ?>

        </div>
    </header>
    <!-- /Header -->
</body>
