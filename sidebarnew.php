

<style type="text/css">
 @import url('https://fonts.googleapis.com/css?family=Arima+Madurai:100,200,300,400,500,700,800,900');
body {
	margin-top: 0px;
	font-size: 14px;
	font-family: 'Arima Madurai', cursive;
	background-color: #E5E9ED;
}
    body,html{
    height: 100%;
  }

  nav.sidebar, .main{
    -webkit-transition: margin 200ms ease-out;
      -moz-transition: margin 200ms ease-out;
      -o-transition: margin 200ms ease-out;
      transition: margin 200ms ease-out;
  }

  .main{
    padding: 10px 10px 0 10px;
  }

 @media (min-width: 765px) {

.main{
      position: absolute;
      width: calc(100% - 40px);
      margin-left: 40px;
      float: right;
    }

    nav.sidebar:hover + .main{
      margin-left: 200px;
    }

    nav.sidebar.navbar.sidebar>.container .navbar-brand, .navbar>.container-fluid .navbar-brand {
      margin-left: 0px;
    }

    nav.sidebar .navbar-brand, nav.sidebar .navbar-header{
      text-align: center;
      width: 100%;
      margin-left: 0px;
    }

    nav.sidebar a{
      padding-right: 13px;
    }

    nav.sidebar .navbar-nav > li:first-child{
      border-top: 1px #e5e5e5 solid;
    }

    nav.sidebar .navbar-nav > li{
      border-bottom: 1px #e5e5e5 solid;
    }

    nav.sidebar .navbar-nav .open .dropdown-menu {
      position: static;
      float: none;
      width: auto;
      margin-top: 0;
      background-color: transparent;
      border: 0;
      -webkit-box-shadow: none;
      box-shadow: none;
    }

    nav.sidebar .navbar-collapse, nav.sidebar .container-fluid{
      padding: 0 0px 0 0px;
    }

    .navbar-inverse .navbar-nav .open .dropdown-menu>li>a {
      color: #777;
    }

    nav.sidebar{
      width: 200px;
      height: 100%;
      margin-left: -160px;
      float: left;
      margin-bottom: 0px;
    }

    nav.sidebar li {
      width: 100%;
    }

    nav.sidebar:hover{
      margin-left: 0px;
    }

    .forAnimate{
      opacity: 0;
    }
    #navvbbar{
    position:absolute;
    }
  }

  @media (min-width: 3000px) {

    .main{
      width: calc(100% - 200px);
      margin-left: 200px;
    }

    nav.sidebar{
      margin-left: 0px;
      float: left;
    }

    nav.sidebar .forAnimate{
      opacity: 1;
    }
     #navvbbar{
    position:fixed;
    }
  }

  nav.sidebar .navbar-nav .open .dropdown-menu>li>a:hover, nav.sidebar .navbar-nav .open .dropdown-menu>li>a:focus {
    color: #CCC;
    background-color: transparent;
  }

  nav:hover .forAnimate{
    opacity: 1;
  }
  section{
    padding-left: 15px;
  }
 nav.sidebar .navbar-nav .open .dropdown-menu {
     position: static;
     float: none;
     width: auto;
     margin-top: 0;
     background-color: transparent;
     border: 0;
     -webkit-box-shadow: none;
     box-shadow: none;
 }
 .navbar-inverse .navbar-nav .open .dropdown-menu>li>a {
     color: #777;
 }
 .forAnimate{
     opacity: 0;
 }
 nav.sidebar .navbar-nav .open .dropdown-menu>li>a:hover, nav.sidebar .navbar-nav .open .dropdown-menu>li>a:focus {
     color: #CCC;
     background-color: transparent;
 }
 nav:hover .forAnimate{
     opacity: 1;
 }
 section{
     padding-left: 15px;
 }

 div.circle-avtar{
/* make it responsive */
max-width: 100%;
width:100%;
height:auto;
display:block;
padding-top:100%;
border-radius:50%;
background-position-y: center;
background-position-x: center;
background-repeat: no-repeat;
background-size: cover;
margin: 0 auto;
top: 0;
left: 0;
right: 0;
bottom: 0;
}

.profile-usertitle {
  text-align: center;
  margin-top: 20px;
}

.profile-usertitle-name {
  color: #5a7391;
  font-size: 16px;
  font-weight: 600;
  margin-bottom: 7px;
}

.profile-usertitle-job {
  text-transform: uppercase;
  color: #5b9bd1;
  font-size: 12px;
  font-weight: 600;
  margin-bottom: 15px;
}

.company_logo{
padding:20px 20px 20px 33px;
 border-style: solid;
background-color:#FFFFFF;
border-width:10px;
border-color:#A1CAF1;
}

.user_info{
border-style: solid;
background-color:#FFFFFF;
border-width:10px;
border-color:#A1CAF1;
}

.icon-bar{
color:#FFFFFF;
background-color:#FFFFFF;
}

#pickfrom {
    z-index: 100000;
}
#pickto {
    z-index: 100000;
}

.form-control dpicker{
 z-index: 1000000;
}

    </style>
<nav class="navbar navbar-primary sidebar" id="navvbbar" role="navigation" style="background-color:#A1CAF1;z-index:100000;">
    <div class="container-fluid" style="color:#000000;background-color:#A1CAF1;">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
                         <div class="company_logo">
               <center>

                        <img src="img/wanderlust.jpg" class="img-responsive">

               </center>
         </div>
               <hr style="margin:0px;">
                <div class="user_info">
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						USER
					</div>
					<div class="profile-usertitle-job">
						
					</div>
                </div>
        </div>
			<ul class="nav navbar-nav">
			<li class="active"><a href="user_profile">My CART<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
    
				<li class="active"><a href="adminpanel">DETAILS<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
									 
									 
									 
			 
			
				
				
			</ul>
		</div>
	</div>
</nav>

<script>

 $(window).load(loop_noti);
</script>
<script>
$(".zz2").on("click", function() {
    $(".zzz").css("color", "#337ab7");
})
</script>