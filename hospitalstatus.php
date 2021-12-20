

<!DOCTYPE html>
<html>
<head>
	<title>hospital information</title>


	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

 <link rel="stylesheet" type="text/css" href="bootstrap-4.0.0-dist/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="bootstrap-4.0.0-dist/css/bootstrap.css">


<link href="https://fonts.googleapis.com/css2?family=Mulish&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" />

<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">

<script type="text/javascript" src="bootstrap-4.0.0-dist/js/jquery-3.2.1.slim.min.js"></script>
<script type="text/javascript" src="bootstrap-4.0.0-dist/js/bootstrap.js"></script>
<script type="text/javascript" src="bootstrap-4.0.0-dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="bootstrap-4.0.0-dist/js/popper.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>


<style type="text/css">
	/*table{
		border-collapse:collapse;
		width:50%;
		color:red;
		font-family: monospace;
		font-size: 25px;
		text-align: left;

	}
	th{
		background-color: #588c7e;
		color: white;
	}
    tr:nth-child(even){
        background-color:#f2f2f2 ;
        width: 100%;
    }*/


        * {
    
    font-family: 'Mulish', sans-serif;
}
    body
{
    background-color: white;
}



#custom {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;

  
  margin-top: fixed;

}


#custom td, #custom th {
  border: 1px solid #ddd;
  padding: 8px;
}

#custom tr:nth-child(even){background-color: #f2f2f2;}

#custom tr:hover {background-color: #ddd;}

#custom th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;

}

/*.....................................navbar.....................................*/
 .nav_style{
 	background-color: #a29bfe !important ;


 }
.nav_style a{ color:white !important;}



/*............................footer..................................*/

.footer_style{
    background-color: #a29bfe!important;
    width: 100% !important;

}
.footer_style p{
    margin-bottom: 0!important;
    text-align: center;
}


/*......................scrolltop button...................................................*/
#mybtn:hover{
     background:#606060  ;
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

 /*-------------------------------------------graph  --------------------------------------*/

.highcharts-figure, .highcharts-data-table table {
    min-width: 360px; 
    max-width: 800px;
    margin: 1em auto;
}

.highcharts-data-table table {
	font-family: Verdana, sans-serif;
	border-collapse: collapse;
	border: 1px solid #EBEBEB;
	margin: 10px auto;
	text-align: center;
	width: 100%;
	max-width: 500px;
}
.highcharts-data-table caption {
    padding: 1em 0;
    font-size: 1.2em;
    color: #555;
}
.highcharts-data-table th {
	font-weight: 600;
    padding: 0.5em;
}
.highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
    padding: 0.5em;
}
.highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
    background: #f8f8f8;
}
.highcharts-data-table tr:hover {
    background: #f1f7ff;
}




/*
.chart{

	margin: 30px auto;
	width: 1300px;
	height: 450px;

}

#chart_wrap{
	
	padding-bottom: 40%;
	height: 0;
    
	top: 0;
	left: 0;
}

#curve_chart{
	
	top: 0;
	left: 0;
	width: 100%;
	height: 500px;
}
*/




@media(max-width:1650px){
    #chart_wrap{
		padding-bottom: 5%;
	
    
	top: 0;
	left: 0;
}
#curve_chart{
	
	   width: 100%;
	   height: 500px;

    }



}


@media(max-width:280px){
    #chart_wrap{
		padding-bottom: 5%;
	
    
	top: 0;
	left: 0;
}
#curve_chart{
	
	   width: 100%;
	   height: 500px;

    }



}








@media(max-width:360px){

  #curve_chart{
	
	   width: 100%;
	   height: 500px;

    }
    .conte{
          padding-top:0%;

    }


}

@media(max-width:420px){
 #chart_wrap{
		padding-bottom: 5%;
	
    
	top: 0;
	left: 0;
}
#curve_chart{
	
	   width: 100%;
	   height: 500px;

    }


}

}

@media(max-width:580px){
   #chart_wrap{
		padding-bottom: 5%;
	
    
	top: 0;
	left: 0;
}
#curve_chart{
	
	   width: 100%;
	   height: 500px;

    }



}




@media(max-width:780px){
  #chart_wrap{
		padding-bottom: 5%;
	
    
	top: 0;
	left: 0;
}
#curve_chart{
	
	   width: 100%;
	   height: 500px;

    }

}

@media(max-width:1024px){
     #chart_wrap{
		padding-bottom: 5%;
	
    
	top: 0;
	left: 0;
}
#curve_chart{
	
	   width: 100%;
	   height: 500px;

    }

}

</style>












 	
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        
    	


      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['month', 'Bed Availability', 'Ventilator','Test cost'],
          
          <?php
               include 'dbcon.php';
              $query="select * from chart";
              $res=mysqli_query($con,$query);

              while($data=mysqli_fetch_array($res)){


                $month=$data['month'];
                $vacancy=$data['total_vacancy'];
                $ventilator=$data['total_ventilator'];
                $cost=$data['cost'];
              ?>
              
              ['<?php echo $month;?>',<?php echo $vacancy;?>,<?php echo $ventilator; ?>,<?php echo $cost;?>], 

              <?php
              }   
              ?>
         
          ]);
       

        var options = {


          title: 'Total Bed Availability, Ventilator, Test cost per month in [2020] Jan to Nov',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }

       $(window).resize(function(){
        drawChart1();
        drawChart2();
    });
    
    </script>






















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
          <a href="index.php#aboutid" class="nav-link">About</a>
        </li>	
        <li class="nav-item">
          <a href="index.php#symptonsid"  class="nav-link">Symptoms</a>
        </li>
        <li class="nav-item">
          <a href="index.php#preventionid"  class="nav-link">Prevention</a>
        </li>
        <li class="nav-item">
          <a href="index.php#contactid"  class="nav-link">Contact</a>
        </li>	
         <li class="nav-item">
          <a href="index.php#about_us"  class="nav-link">AboutUs</a>
        </li>	
        <li class="nav-item">
          <a href="index.php#NEWS.html"  class="nav-link"><b>NEWS</b></a>
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


<br>
<br>
<br>
<br>

<div class="container">
  
  
  <h1 class="display-4"></h1>
  <h3 style="color: #6762a3;"><b>List of COVID-19 Hospitals and Asymptomatic Centers, Monthly Status</b></h3>
</div>
<!-------------------------------- graph  ----------------------------------------   -->


<div id="chart_wrap">
 <div id="curve_chart" class="chart"></div>

</div>
 
 <br>
 <br>
 <br>
 <br>

<!-- -----------------------------------------table-------------------------------------------------------------- -->
<div class="conte" style="overflow-x:auto; ">
<div class="container" >
<table id="custom"> 
	
	<tr>
		<th>No.</th>
		<th>Hospital</th>
		<th>Hospital Add</th>
		<th>Bed Availability</th>
		<th>Ventilator</th>
		<th>Test cost</th>
		
	</tr>
	<?php
    
       include 'dbcon.php';

       // $con = mysqli_connect("localhost", "root","","coronadb");

       $sql= "SELECT id, hospital_name, hospital_add, vacancy, ventilator, cost from hospitalinfo";



       $result = $con-> query($sql);

       if($result-> num_rows > 0){
         
         while ($row = $result-> fetch_assoc()) {


         	echo "<tr><td>".$row["id"]."</td><td>".$row["hospital_name"]."</td><td>".$row["hospital_add"]."</td><td>".$row["vacancy"]."</td><td>".$row["ventilator"]."</td><td>".$row["cost"]."</td></tr>";

         	
         	
         }
           echo "</table>";

       }
       else
       {
       	echo "0 result";
       }

       $con-> close();

	?>
</table>
</div>
</div>
 

<!-- ......................footer......................... -->

<footer class="mt-5">
    <div class="footer_style text-white text-center container-fluid">
        <p>@copyright by pritam groups 2020-2021</p>
    </div>
</footer>
  <!-- .............top cursor.............. -->

<div class="container scrolltop float-right pr-5">
    <i class="fa fa-arrow-up" onclick="topFunction()" id="mybtn"></i>
</div>




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