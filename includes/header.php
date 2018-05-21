<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->


    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- Add your site or application content here -->

    <nav class="navbar navbar-default" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">TicketMe</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="manager.php">Create an Event</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Help
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#">manage your event</a>
                        </li>
                        <li>
                            <a href="#">Booking a Ticket</a>
                        </li>
                        <li>
                            <a href="#">Promoting your event</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Log In</a>
                </li>
                <li>
                    <a data-toggle="modal" href='#modal-id'>Sign Up</a>
                    <div class="modal fade" id="modal-id">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="text-center">Become a member</h3>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <form action="includes/register.php" method="POST" class="form-horizontal" role="form">

                                        <div class="form-group">
                                            <label for="fName" class="col-sm-3 control-label">first name</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="fName" class="form-control" value="" required="required">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="lName" class="col-sm-3 control-label">last name</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="lName" class="form-control" value="" required="required">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="email" class="col-sm-3 control-label">Email</label>
                                            <div class="col-sm-8">
                                                <input type="email" name="email" class="form-control" value="" required="required">
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label for="pass" class="col-sm-3 control-label">password</label>
                                            <div class="col-sm-8">
                                                <input type="password" name="pass" class="form-control" required="required" placeholder="create a password">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-sm-8 col-sm-offset-3">
                                                <button type="submit" name="submit" class="btn btn-large btn-block btn-info">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </li>

            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>
