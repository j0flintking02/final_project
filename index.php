<?php 
    include('includes/header.php');
    include('includes/connection.inc.php');
    ?>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

        <div id="carousel-id" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel-id" data-slide-to="0" class=""></li>
                <li data-target="#carousel-id" data-slide-to="1" class=""></li>
                <li data-target="#carousel-id" data-slide-to="2" class="active"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item">
                    <img alt="First slide" src="img/slider2.png">
                </div>
                <div class="item">
                    <img alt="Second slide" src="img/slider.png">
                </div>
                <div class="item active">
                    <img alt="Third slide" src="img/slider3.png">
                </div>
            </div>
            <a class="left carousel-control" href="#carousel-id" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-id" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>

    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
        <?php 
            if (isset($_POST['submit'])) {
                echo $_POST['search'];
            }
        
        
        
        
       ?>
            <form action="" method="post">
                    <div class="input-group col-md-12">
                        <input type="text" name="search" class="form-control input-lg" placeholder="Search for an event"/>
                        <span class="input-group-btn">
                            <button class="btn btn-info btn-lg" type="submit" name="submit">
                                <i class="glyphicon glyphicon-search"></i>
                            </button>
                        </span>
                    </div>
            </form>
        </div>
    </div>
</div>

<!-- main content starts here -->

<div class="row">
    <div class="container" id="middle-section">
        <div class="page-header text-center">
            <h1>Featured Events</h1>
        </div>
        <h3>Showing Events within and around you....</h3>
        <?php
            $sql = 'SELECT * FROM events;';
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result)>0) {
                while ($row=mysqli_fetch_array($result)) {
        ?>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="content-center">
                    <img src="img/pics/thumbnail/<?php echo $row['eventImg'];?>" class="img-responsive img-rounded center-content" alt="Image" width="350px" height="250px">
                    <h3 class="text-center">
                        <?php   echo $row['eventName'];?>
                    </h3>
                    <p class="text-center">
                        <?php
                            for ($i=0; $i < 4; $i++) { 
                                echo ' <i class="fas fa-star"></i> ';
                        }?>
                            <i>290</i>
                            <br>
                            <b> People going :</b>29
                            <b>Slots left :</b>200
                    </p>

                    <a href=<?php echo "'views.php?id={$row['eventID']}';"?>>
                        <p class="event text-center">
                            <?php echo $row['eventDate'];?>
                            <i class="fas fa-calendar-alt    "></i>
                        </p>
                    </a>
                </div>
            </div>
            <?php
        }
    }?>
    </div>
</div>


<script src="js/vendor/modernizr-3.5.0.min.js"></script>
<script src="js/vendor/jquery-3.2.1.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>


</body>

</html>
