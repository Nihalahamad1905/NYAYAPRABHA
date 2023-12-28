<?php session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['login'])==0)
  { 
header('location:index.php');
}
else ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Nyayaprabha | Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <script src="assets/js/chart-master/Chart.js"></script>



    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
  
  <section id="container" >
<?php include("includes/header.php");?>
<?php include("includes/sidebar.php");?>
      <section id="main-content">
          <section class="wrapper">
	<br>
      
                  <div class="grid grid-cols-3">
                  <div class="w-[300px] rounded-md border">
        <img
          src="https://innovationinpolitics.eu/wp-content/uploads/2021/11/AdobeStock_390677178-1024x699.jpeg"
          alt="Laptop"
          class="h-[200px] w-full rounded-md object-cover"
        /><?php 
                   
        $rt = mysqli_query($bd, "SELECT * FROM tblcomplaints where userId='".$_SESSION['id']."' and status is null");
        $num1 = mysqli_num_rows($rt);
        ?>
        <div class="p-4">
          <h3 class="text-3xl font-semibold"><?php echo htmlentities($num1);?></h3>
          <p class="mt-3 text-xl text-gray-600"><?php echo htmlentities($num1);?>
            Complaints Filed
          </p>
          
        </div>
      </div>
      


                    
                        <div class="w-[300px] rounded-md border">
        <img
          src="https://images.herzindagi.info/image/2023/Jan/Right-Against-Being-Stalked.jpg"
          alt="Laptop"
          class="h-[200px] w-full rounded-md object-cover"
        /><?php 
        $status="in Process";                   
      $rt = mysqli_query($bd, "SELECT * FROM tblcomplaints where userId='".$_SESSION['id']."' and  status='$status'");
      $num1 = mysqli_num_rows($rt);
      {?>
        <div class="p-4">
          <h3 class="text-3xl font-semibold"><?php echo htmlentities($num1);?></h3>
          <p class="mt-3 text-xl text-gray-600"><?php echo htmlentities($num1);?> 
            Complaints pending
          </p>
          
        </div>
      </div>
      

      <div class="w-[300px] rounded-md border">
        <img
          src="https://media.licdn.com/dms/image/C5112AQHrH6Hz2Nr5RQ/article-cover_image-shrink_720_1280/0/1546240943778?e=2147483647&v=beta&t=gQaZW3t4p-U8yh2RcQeeuxiFr_9nScXu0yHb3t2dM0s"
          alt="Laptop"
          class="h-[200px] w-full rounded-md object-cover"><?php 
          $status="closed";                   
        $rt = mysqli_query($bd, "SELECT * FROM tblcomplaints where userId='".$_SESSION['id']."' and  status='$status'");
        $num1 = mysqli_num_rows($rt);
        {?>
        <div class="p-4">
          <h3 class="text-3xl font-semibold"><?php echo htmlentities($num1);?></h3>
          <p class="mt-3 text-xl text-gray-600"><?php echo htmlentities($num1);?> 
            Complaints Processed Sucessfull
          </p>
          
        </div>

<?php }?>
                  	
                  	
                  	</div><!-- /row mt -->	
                  
                      
                     
                    				
				
				
          </section>
      </section>
<?php include("includes/footer.php");?>
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="assets/js/sparkline-chart.js"></script>    
	<script src="assets/js/zabuto_calendar.js"></script>	
  </body>
</html>
<?php } ?>
