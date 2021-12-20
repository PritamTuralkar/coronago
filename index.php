<!DOCTYPE html>
<html>
<head>


	<title>coronago</title>

	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" type="text/css" href="bootstrap-4.0.0-dist/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="bootstrap-4.0.0-dist/css/bootstrap.css">

<link href="https://fonts.googleapis.com/css2?family=Mulish&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" />

<script type="text/javascript" src="bootstrap-4.0.0-dist/js/jquery-3.2.1.slim.min.js"></script>
<script type="text/javascript" src="bootstrap-4.0.0-dist/js/bootstrap.js"></script>
<script type="text/javascript" src="bootstrap-4.0.0-dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="bootstrap-4.0.0-dist/js/popper.min.js"></script>




<style type="text/css">
html {
  scroll-behavior: smooth;
}

.row{
	margin-right: 0!important;
	margin-left: 0!important;
}
 *{margin: 0; padding: 0; box-sizing: border-box; font-family: 'Mulish', sans-serif;

 }
/*.....................................navbar.....................................*/
 .nav_style{
 	background-color: #a29bfe !important ;

 }
.nav_style a{ color:white !important;}


/*................................................slider.................................*/

.margin_top{
	padding-top: 70px;
}

/*........main_header........... */

.main_header{
	height: 450px;
	width: 100%;
}
.rightside h1{

	font-size: 3rem;
}
.roted img{

	animation: rotation 3s linear infinite ;
}
@keyframes rotation{

	0%{transform: rotate(0);}
	100%{ transform: rotate(360deg); }
}


.leftside img{

	animation: scaling 5s linear infinite ;
}

@keyframes scaling{

	0%{transform: scale(.75);}
	20%{transform: scale(1);}
	40%{transform:scale(.75);}
	60%{transform: scale(1);}
	80%{transform: scale(.75);}
	100%{transform: scale(.75);}
	

}

/*..................About section.................*/


.sub_section{
	background-color:#F8F8F8;

}




#mybtn{

	display: none;
	position: fixed;
	bottom: 30px;
	right: 40px;
	z-index: 99;
	border:none;
	outline: none;
	background-color: #00A8FF;
	color: white;
	cursor: pointer;
	padding: 10px;
	border-radius: 10px;
}
#mybtn:hover{
     background:#606060  ;
}

@media(max-width: 768px){
   .main_header{height: 700px; text-align:center; }
    .main_header h1{
    	text-align:center;
    	padding: 0;
    	width: 100%;
    	font-size: 30px;
    }


}

/*..............................About us...................*/
.ourteam{
	background-color:#F8F8F8;
	padding: 100px 0px 60px;
	height: 700px;
	width: 100%;
}
.ourteam h1{

	font-size: 50px;
	font-weight: bold;
}
.ourteamset{
	margin-top: 60px;
}
/*............................footer..................................*/

.footer_style{
	background-color: #a29bfe!important;
}
.footer_style p{
	margin-bottom: 0!important;
}





@media(min-width: 992px){
   .carousel-caption h2{
	font-size: 50px ;
	font-weight: bold;
}
.carousel-caption p{
	font-size: 30px;
}

}
@media(min-width:768px)and(max-width:991px){

}
@media(min-width:575px)and(max-width:767px){



}
@media(min-width:480px)and(max-width:574px){



}




@media(max-width:579px){
.carousel-caption h1{
   font-size: 22px;

}
.carousel-caption h2{
	font-size: 20px ;
	font-weight: bold;
}

.carousel-caption p{
	font-size: 12px;
}


} 

@media(max-width:769px){

	.ourteam{
	height:1500px !important;
}
}

</style>

</head>
<body>

<!----------------------nav bar --------------------->



<nav class="navbar navbar-expand-sm navbar-dark bg-dark p-3 nav_style fixed-top">

<div class="container">
	<a href="index.php" class="navbar-brand"><b>COVID-19</b></a>

	<button class="navbar-toggler" data-toggle="collapse" data-target="#itemhide">
		<span class="navbar-toggler-icon"></span>
	</button>
    <div class="collapse navbar-collapse " id="itemhide" >
    <ul class="navbar-nav ml-auto" >
    	<li class="nav-item">
          <a href="#aboutid" class="nav-link">About</a>
        </li>	
        <li class="nav-item">
          <a href="#symptonsid"  class="nav-link">Symptoms</a>
        </li>
        <li class="nav-item">
          <a href="#preventionid"  class="nav-link">Prevention</a>
        </li>
        <li class="nav-item">
          <a href="#contactid"  class="nav-link">Contact</a>
        </li>	
         <li class="nav-item">
          <a href="#about_us"  class="nav-link">AboutUs</a>
        </li>	
        <li class="nav-item">
          <a href="NEWS.html"  class="nav-link"><b>NEWS</b></a>
        </li>
        <li class="nav-item">
          <a href="hospitalstatus.php"  class="nav-link"><b>HELP</b></a>
        </li>
        <li class="nav-item">
          <a href="map.html"  class="nav-link" style="background-color: #6762a3;"><b>LIVE.</b></a>
        </li>	

        
	</div>
		
    </ul>
</div>


</nav>



<!-- .........................................slider.............................. -->

 <div  id="carouselExampleIndicators" class="carousel slide  margin_top" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
     <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner" >
    <div class="carousel-item active ">
    	
     <img class="d-block w-100 " src="images/coronago.jpg" alt="First slide">
       <div class="carousel-caption">
        <h2>Follow Rules & Avoid Covid-19</h2>
        <p>stay alert stay safe</p>
       </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/coronago0k.jpg" alt="Second slide">
        <div class="carousel-caption ">
        <h2>Clean Hands Are Safe Hands</h2>
        <p>stay alert stay safe</p>
       </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/coronago1k.jpg" alt="Third slide">
        <div class="carousel-caption">
        <h2>Know About Covid-19</h2>
        <p>stay alert stay safe</p>
       </div>
    </div>
     <div class="carousel-item">
      <img class="d-block w-100" src="images/coronago2k.jpg" alt="forth slide">
        <div class="carousel-caption">
        <h2>War Against Covid-19</h2>
        <p>stay alert stay safe</p>
       </div>
    </div>
  </div>
  
</div> 
  









<div class="main_header">
	<div class="row h-100 w-100" >
		<div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 order-lg-1 order-2">
			<div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
				<img src="images/unity.png" width="300" height="300">
			</div>
              

		</div>

		<div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12  order-lg-2 order-1">
			<div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
				<h1>Let's Stay Safe & Fight Together Against Cor<span class="roted"><img src="images/covid2.png" width="100" height="100">
				</span>na Virus</h1>
			</div>

		</div>

	</div>


</div>

<!--------About section---------->
<div class="container-fluid sub_section pt-5 pb-5 mt-1"id="aboutid"> 

	<div class="section_header text-center mb-5 mt-4">
		<h1><b>About COVID - 19</b></h1>
	</div>
	<div class="row pt-5">
		<div class="col-lg-5 col-md-6 col-sm-6 col-12 pl-5">
			<img src="images/coronadetail.png" class="img-fluid">

		</div>

		<div class="col-lg-6 col-md-6 col-sm-6 col-12">
			<h2>What is COVID-19 (Corona-Virus)</h2>
			<p>COVID-19 is the infectious disease caused  by the most recently discovered coronavirus. This new virus and disease were unknown before the outbreak began in Wuhan, China, in December 2019  </p>
			<p>Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring special treatment.  Older people, and those with underlying medical problems like cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more likely to develop serious illness.</p>
		</div>
	</div>

</div>
<!-- ..................corona symptons ..............-->

<div class="container-fluid pt-5 pb-5 mt-1"id="symptonsid"> 

	<div class="section_header text-center mb-5 mt-4">
		<h1><b>Coronavirus Symptoms</b></h1>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
					<img src="images/cough.png" class="img-fluid" width="120" height="120">
                   <figcaption>Cough</figcaption>
				</figure>

			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
					<img src="images/runnynose1.png" class="img-fluid" width="90" height="90">
                    <figcaption>Runny nose</figcaption>
				</figure>

			</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
					<img src="images/fever.svg" class="img-fluid" width="120" height="110">
                    <figcaption>Fever</figcaption>
				</figure>

			</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
					<img src="images/cold.png" class="img-fluid" width="105" height="105">
                    <figcaption>Cold</figcaption>
				</figure>

			</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
					<img src="images/Tiredness.png" class="img-fluid" width="120" height="120">
                    <figcaption>Tiredness</figcaption>
				</figure>

			</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
					<img src="images/breathing.png" class="img-fluid" width="120" height="120">
                    <figcaption>Difficulty Breathing (Severe Cases)</figcaption>
				</figure>

			</div>
		</div>
		
	</div>
</div>


<!-- 6 Steps Prevention Against Coronavirus .............-->

<div class="container-fluid pt-5 pb-5 mt-1 sub_section"id="preventionid"> 

	<div class="section_header text-center mb-5 mt-4">
		<h1><b>6 Steps Prevention Against Coronavirus</b></h1>
	</div>

   <div class="container">
   	<div class="row">
   		<div class="col-lg-4 col-md-4 col-12 mt-5">
   			<div class="row">
   				<div class="col-lg-4 col-md-4 col-12">
   					<figure class="text-center">
					<img src="images/handwash.png" class="img-fluid" width="90" height="90">
                   
				</figure>
   				</div>
   				<div class="col-lg-8 col-md-8 col-12">
   					<p> Wash your hands regularly for 20 seconds, With soap and water or alcohol-based hand rub</p>
   				</div>
   			</div>
   			
   		</div>

   		<div class="col-lg-4 col-md-4 col-12 mt-5">
   			<div class="row">
   				<div class="col-lg-4 col-md-4 col-12">
   					<figure class="text-center">
					<img src="images/mask.png" class="img-fluid" width="90" height="90">
                   
				</figure>
   				</div>
   				<div class="col-lg-8 col-md-8 col-12">
   					<p> Cover your nose and mouth with a disposable tissue or flexed elbow when you cough or sneeze</p>
   				</div>
   			</div>
   			
   		</div>
   		<div class="col-lg-4 col-md-4 col-12 mt-5">
   			<div class="row">
   				<div class="col-lg-4 col-md-4 col-12">
   					<figure class="text-center">
					<img src="images/distance.png" class="img-fluid" width="90" height="90">
                   
				</figure>
   				</div>
   				<div class="col-lg-8 col-md-8 col-12">
   					<p> Avoid close contact(1 meter or 3 feet) with people who are unwell</p>
   				</div>
   			</div>
   			
   		</div>
   		<div class="col-lg-4 col-md-4 col-12 mt-5">
   			<div class="row">
   				<div class="col-lg-4 col-md-4 col-12">
   					<figure class="text-center">
					<img src="images/home.png" class="img-fluid" width="100" height="100">
                   
				</figure>
   				</div>
   				<div class="col-lg-8 col-md-8 col-12">
   					<p> Stay home and self-isolate from others in the household if you feel unwell</p>
   				</div>
   			</div>
   			
   		</div>
   		<div class="col-lg-4 col-md-4 col-12 mt-5">
   			<div class="row">
   				<div class="col-lg-4 col-md-4 col-12">
   					<figure class="text-center">
					<img src="images/tvnews.png" class="img-fluid" width="100" height="100">
                   
				</figure>
   				</div>
   				<div class="col-lg-8 col-md-8 col-12">
   					<p> Stay informed by watching news & follow the recommended practices</p>
   				</div>
   			</div>
   			
   		</div>
   		<div class="col-lg-4 col-md-4 col-12 mt-5">
   			<div class="row">
   				<div class="col-lg-4 col-md-4 col-12">
   					<figure class="text-center">
					<img src="images/seek.png" class="img-fluid" width="90" height="90">
                   
				</figure>
   				</div>
   				<div class="col-lg-8 col-md-8 col-12">
   					<p> If you have fever, cough and difficulty breathing, seek medical care early</p>
   				</div>
   			</div> 
   			
   		</div>

   	</div>
   	
   </div>

</div>


<!-- ........................Contact Us ASAP.................... -->
<div class="container-fluid pt-5 pb-5 mt-1 "id="contactid"> 

	<div class="section_header text-center mb-5 mt-4">
		<h1><b>Contact Us ASAP</b></h1>
	</div>

     <div class="container">
     	<div class="row">
     		<div class="col-lg-8 offset-lg-2 col-12">
<form action="" method="POST">
  <div class="form-group">
    <label>Username:</label>
    <input type="text" class="form-control" placeholder="name" name="username" autocomplete="off" required>
  </div>
   <div class="form-group">
    <label>Mobile no:</label>
    <input type="number" class="form-control" placeholder="mobile" name="mobile" autocomplete="off" required>
  </div>
  <div class="form-group">
    <label>Email:</label>
    <input type="email" class="form-control" placeholder="name@example.com" name="email"  required>
  </div>

  <div class="form-group">
  	<label> Select Symptoms:</label><br>
    <div class="custom-control custom-checkbox
    custom-control-inline text-capitalize">
    <input type="checkbox" class="custom-control-input" id="customcheckbox1" name="coronasym[]" value="cold">
    <label class="custom-control-label" for="customcheckbox1">Cold</label>
    	
    </div>
    <div class="custom-control custom-checkbox
    custom-control-inline text-capitalize">
    <input type="checkbox" class="custom-control-input" id="customcheckbox2" name="coronasym[]" value="fever">
    <label class="custom-control-label" for="customcheckbox2">Fever</label>
    	
    </div>
    <div class="custom-control custom-checkbox
    custom-control-inline text-capitalize">
    <input type="checkbox" class="custom-control-input" id="customcheckbox3" name="coronasym[]" value="breath">
    <label class="custom-control-label" for="customcheckbox3">Difficulty in Breath</label>
    	
    </div>
    <div class="custom-control custom-checkbox
    custom-control-inline text-capitalize">
    <input type="checkbox" class="custom-control-input" id="customcheckbox4" name="coronasym[]" value="weak">
    <label class="custom-control-label" for="customcheckbox4">Feeling Weak</label>
    	
    </div>
  </div>



  <div class="form-group">
    <label for="exampleFormControlTextarea1">Address:</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="msg"></textarea>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div>
</div>
</div>
</div>


<!-- ............................about us.....................................-->

<section class="ourteam" id="about_us">
<div class="container text-center">
	<h1>OUR AMAZING TEAM</h1>
		<p>great team great work</p>
	<div class="row ourteamset">
		<div class="col-lg-4 col-md-4 col-sm-10 col-12 d-block m-auto">
			<figure class="figure">
			<img src="images/sidhart.jpg" height="250px" width="250px" class="figure-img img-fluid rounded-circle">
			<figcaption>
				<h4>Siddharth Soni</h4>
				<p class="figure-caption">Web Designer</p>
			</figcaption>
			</figure>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-10 col-12 d-block m-auto">
			<figure class="figure">
			<img src="images/PritamTuralkar.jpg" height="250px" width="250px" class="figure-img img-fluid rounded-circle">
			<figcaption>
				<h4>Pritam Turalkar</h4>
				<p class="figure-caption">Head of Project</p>
				<p class="figure-caption">Web Designer/Developer</p>
			</figcaption>
			</figure>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-10 col-12 d-block m-auto">
			<figure class="figure">
			<img src="images/pratiku.jpg" height="250px" width="250px" class="figure-img img-fluid rounded-circle">
			<figcaption>
				<h4>Pratik Utekar</h4>
				<p class="figure-caption">Web Designer</p>
			</figcaption>
			</figure>
		</div>
	</div>
	

</div>
</div>

</section>
<!-- .............top cursor.............. -->

<div class="container scrolltop float-right pr-5">
	<i class="fa fa-arrow-up" onclick="topFunction()" id="mybtn"></i>
</div>


<!-- ......................footer......................... -->

<footer class="mt-5">
	<div class="footer_style text-white text-center container-fluid">
		<p>@copyright by pritam groups 2020-2021</p>
	</div>
</footer>


<script type="text/javascript">
mybutton=document.getElementById("mybtn");	

window.onscroll=function(){scrollFunction()};
function scrollFunction()
{
	if(document.body.scrollTop >100 || document.documentElement.scrollTop>100){
		mybutton.style.display="block";
	}else 
	{
		mybutton.style.display="none";
	}
}
function topFunction(){

	document.body.scrollTop =0 ;
	document.documentElement.scrollTop =0;
}
</script>
</body>
</html>


<?php

include 'dbcon.php';

if(isset($_POST['submit'])){

	$username=$_POST['username'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	$symp=$_POST['coronasym'];
	$msg=$_POST['msg'];
   
    $chk="";

	foreach ($symp as $chk1) {
		
		$chk .= $chk1.",";
	}

	$insertquery="insert into coronacase(username,	mobile,	email,	symp, address	)
	 values('$username','$mobile','$email','$chk','$msg') ";

	 $query=mysqli_query($con, $insertquery);

if($query){
    ?>
 <script type="text/javascript">alert("inserted successfuly");</script>

    <?php
}else{
?>
<script type="text/javascript">alert("insertion fail");</script>
<?php
}
}

?>