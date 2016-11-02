<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>EMRS</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/carousel.css')}}" rel="stylesheet">

    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">

    <link href="{{asset('css/main.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" integrity="sha384-2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">


	   <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">


    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/smoothscroll.js')}}"></script>
    <script src="{{asset('js/Chart.js')}}"></script>


  </head>

  <body data-spy="scroll" data-offset="o" data-target="#nav">


    <section id="work" name="work"></section>
  	<!--PORTFOLIO DESCRIPTION -->
  	<div class="container desc">
  		<div class="row">
  				<div class="col-lg-2 col-lg-offset-1">
  					<h5>PORTFOLIO</h5>
  				</div>
  				<div class="col-lg-6">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="5"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                  <div class="carousel-item active">
                    <img src="{{asset('img/emrs-home.png')}}" alt="Home screen">
                    <div class="carousel-caption">
                      <h3>Home</h3>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('img/emrs-health-history.jpg')}}" alt="Health History">
                    <div class="carousel-caption">
                      <h3>Health History</h3>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('img/emrs-physical-exam.png')}}" alt="Physical Exams">
                    <div class="carousel-caption">
                      <h3>Physical Exams</h3>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('img/emrs-sketch.png')}}" alt="Optic Sketch">
                    <div class="carousel-caption">
                      <h3>Optic Sketch</h3>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('img/emrs-surgical.png')}}" alt="Surgical Procedures">
                    <div class="carousel-caption">
                      <h3>Surgical Procedures</h3>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('img/emrs-documents.png')}}" alt="Documents">
                    <div class="carousel-caption">
                      <h3>Upload Documents</h3>
                    </div>
                  </div>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                  <span class="icon-prev" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                  <span class="icon-next" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
            </div>
  					<!--<p><img class="img-responsive" src="{{asset('img/port02.jpg')}}" alt=""></p>-->
  				</div>
  				<div class="col-lg-3">
  					<p>Electronic Medical Records System</p>
  				<p><more>Electronic record keeping system for clinics and hospitals.  Designated for third-word countries.  Engineered to support old and new computer systems alike.  Maintains a database of patients consisting of demographics, health history, physical examinations, vitals, surgical procedures, and documentation.<br/><br/>
  				</p>
  				</div>
  		</div><!--/.row -->
  		<br>
  		<br>
  	</div><!--/.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{asset('js/bootstrap.js')}}"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" integrity="sha384-VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU" crossorigin="anonymous"></script>
  </body>
</html>
