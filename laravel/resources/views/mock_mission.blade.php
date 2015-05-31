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

@include('partials.topnav')

<div class="jumbotron banner">
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="airborne text-center"><strong><span class="glyphicon glyphicon-star"></span> Mission Planner <span class="glyphicon glyphicon-star"></span></strong></h1>
        </div>
    </div>

    <div role="tabpanel">

        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active">
                <a href="#Planner" aria-controls="planner" role="tab" data-toggle="tab">Planner</a>
            </li>
            <li role="presentation">
                <a href="#ActiveFlt" aria-controls="activeflt" role="tab" data-toggle="tab">Active Flight</a>
            </li>
            <li role="presentation">
                <a href="#Logbook" aria-controls="logbook" role="tab" data-toggle="tab">Log Book</a>
            </li>
        </ul>

        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="Planner">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="airborne">Planned Flights</h2>
                    </div>
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-condensed table-striped text-center">
                                <tr>
                                    <th class="text-center">Flight Number</th>
                                    <th class="text-center">Departure</th>
                                    <th class="text-center">Arrival</th>
                                    <th class="text-center">Callsign</th>
                                    <th class="text-center">Scheduled Date</th>
                                    <th class="text-center">Scheduled Time</th>
                                    <th class="text-center">Type</th>
                                    <th class="text-center">Route</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Delete</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>KNTU</td>
                                    <td>KNTU</td>
                                    <td>CANYON1</td>
                                    <td>5/31/15</td>
                                    <td>19:30</td>
                                    <td>Training</td>
                                    <td>KNTU YERIN5</td>
                                    <td><span class="label label-info text-center">PLANNED</span></td>
                                    <td class="text-center"><a href="#"><span class="glyphicon glyphicon-remove" style="color : red"></span></a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>KNTU</td>
                                    <td>KRNO</td>
                                    <td>CANYON1</td>
                                    <td>5/30/15</td>
                                    <td>19:30</td>
                                    <td>Training</td>
                                    <td>KNTU YERIN5 KRNO</td>
                                    <td><span class="label label-success">ACTIVE</span></td>
                                    <td><a href="#"><span class="glyphicon glyphicon-remove" style="color : red"></span></a></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button class="btn btn-success">Plan New Flight</button>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="ActiveFlt"></div>
            <div role="tabpanel" class="tab-pane" id="Logbook"></div>
        </div>

    </div>

</div>

@include('partials.footer')

<!-- Scripts -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
