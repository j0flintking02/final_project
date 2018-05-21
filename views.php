<?php 
   include('includes/header.php');
   include('includes/connection.inc.php');

//FECTING DATA FROM THE EVENTS AND THE MANAGER'S TABLES

        if (isset($_GET['id'])) {
            $id= mysqli_real_escape_string($conn, $_GET['id']);
            $sql = "SELECT * FROM events JOIN (manager_event JOIN manager ON
                        manager_event.managerID=manager.managerID)ON
                            events.eventID=manager_event.eventID WHERE
                                events.eventID ='$id'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);
            }
?>
<div class="container-fluid">
    <!-- BEGINNING OF THE HEADER SECTION -->
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <p class="thumbnail">
            <img src="img/pics/wide/<?php echo $row['eventImg'];?>" alt="Image">
        </p>
    </div>
</div>
<!-- ENDING OF THE HEADER SECTION -->

<!-- THE MIDDLE SECTION -->
<div class="container">

    <div class="row">
    <!-- BEGINNING OF THE INFOR-SECTION -->
        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">

            <div class="page-header">
                <h1 class="text-center">
                    <?php echo ucwords($row['eventName']);?>
                </h1>

            </div>
            <strong>by
                <?php echo $row['firstName'];?>
            </strong>
            <p>
                <?php echo $row['eventDescription'];?>

            </p>

            <p></p>
            <ol class="breadcrumb">
                <span>
                    <strong>Contact the organiser : </strong>
                </span>
                <li class="active">
                    <?php echo $row['managerEmail'];?>
                </li>
            </ol>

            <hr>

            <span class="badge">
                <?php echo $row['eventCategory'];?>
            </span>

        </div><!-- END OF THE INFOR-SECTION -->
            
        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
            <div class="thumbnail">

                <div class="caption">


                    <div class="container-fluid">
                        <form action="" method="POST" class="form-horizontal" role="form">
                            <div class="form-group">
                                <i>
                                    <strong>
                                        <?php echo $row['price'];?>
                                    </strong>/= per person</i>
                                <br>
                                <span id="stars" style="color: lightskyblue;">
                                    <?php for ($i=0; $i < 4; $i++) { 
                                    echo ' <i class="fas fa-star"></i> ';
                                }?>

                                </span>
                                <em>200</em>
                                <hr>

                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">First Name</div>
                                    <input type="text" name="firstName" class="form-control" required="required">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">Last Name</div>
                                    <input type="text" name="lastName" class="form-control" required="required">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">Email</div>
                                    <input type="email" name="email" class="form-control" required="required">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">people</div>
                                    <input type="number" name="people" id="people" class="form-control" min="1" required="required">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-10 col-sm-offset-1">
                                    <button type="submit" name="submit" class="btn btn-large btn-block btn-primary">Book</button>
                                    <p class="text-center">you won't be charged yet</p>
                                </div>
                            </div>
                            <hr>

                            <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                            </div>

                            <div class="col-xs-4 col-sm-4 col-md-12 col-lg-4">
                                <legend>payments</legend>
                                <i class="fas fa-credit-card fa-lg"></i>
                                <i class="fab fa-amazon-pay fa-lg "></i>
                                <i class="fas fa-money-bill-alt fa-lg"></i>
                            </div>
                            <?php

                            // POSTING TO THE DATABASE(TICKET AND TICKET_EVENT)

                            if (isset($_POST['submit'])) {
                                //VARIABLE FOR THE CUSTOMER'S TABLE
                                $firstName=mysqli_real_escape_string($conn, $_POST['firstName']);
                                $lastName=mysqli_real_escape_string($conn, $_POST['lastName']);
                                $email=mysqli_real_escape_string($conn, $_POST['email']);
                                
                                //VARIABLES FOR THE TICKETS TABLE
                                $var=md5(uniqid());
                                $price=$people*price;
                                $people==mysqli_real_escape_string($conn, $_POST['numberOfPeople']);
                                echo $var;
                            } else {
                                echo "you missed";
                            }




                            ?>
                        </form>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div><!-- END OF THE MIDDLE SECTION -->




<script src="js/vendor/modernizr-3.5.0.min.js"></script>
<script src="js/vendor/jquery-3.2.1.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>


</body>

</html>
