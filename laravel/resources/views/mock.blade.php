<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mockup</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
    <section id="splash_bg" class="splash_bg">

        @include('partials.topnav')

        <div id="header" class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <p class="header">Virtual Carrier Wing Three</p>
                </div>
                <div class="hidden-lg hidden-md col-sm-12 col-xs-12">
                    <p class="motto smaller"><i>"The Buck Stops Here"</i></p>
                </div>
                <div class="col-md-2 col-md-offset-1 col-sm-1 col-xs-1">
                    <a class="ghost_button" href="#"><strong>JOIN US</strong></a>
                </div>
                <div class="col-md-5 col-md-offset-1 hidden-sm hidden-xs">
                    <p class="motto"><i>"The Buck Stops Here"</i></p>
                </div>
            </div>
        </div>
    </section>

    <section id="welcome" class="welcome">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>Squadrons</h1>
                </div>
            </div>
            <div class="row">

            </div>

        </div>
    </section>


    @include('partials.footer')

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
