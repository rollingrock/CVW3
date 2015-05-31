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

@include('partials.topnav');

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 col-sm-3 hidden-xs sidebar">
                <div class="prof_snapshot">
                    <div class="prof_avatar">
                        <img class="img-thumbnail" src="http://www.virtualcarrierwing3.com/vb4/image.php?u=3&dateline=1323269872"/>
                    </div>
                    <div class="prof_shapshot_content">
                        <ul>
                            <li>Wood</li>
                            <li>CAG</li>
                            <li>VFA-32</li>
                        </ul>
                    </div>
                </div>
                <div>
                    <ul class="nav nav-sidebar">
                        <li><a href="#">Profile</a></li>
                        <li><a href="#">Logbook</a></li>
                        <li><a href="#">Mission Planner</a></li>
                        <li><a href="#">Training</a></li>
                        <li><a href="#">Qualifications</a></li>
                        <li><a href="#">Squadron</a></li>
                        <li><a href="#">Campaigns and Awards</a></li>
                        <li><a href="#">Log Out</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-10 col-md-offset-2 col-sm-9 col-sm-offset-3 dashboard">
                <div class="row">
                    <div class="col-md-5">
                    <div class="panel panel-default">
                        <div class="panel-heading">About Me</div>
                            <table class="table">
                                <tr>
                                    <td>Name</td>
                                    <td>Mark Killen</td>
                                </tr>
                                <tr>
                                    <td>Nickname</td>
                                    <td>Wood</td>
                                </tr>
                                <tr>
                                    <td>Rank</td>
                                    <td>Captain</td>
                                </tr>
                                <tr>
                                    <td>Assigned Squadron</td>
                                    <td>VFA-32</td>
                                </tr>
                                <tr>
                                    <td>Join Date</td>
                                    <td>10-03-12</td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td>Active</td>
                                </tr>
                                <tr>
                                    <td>Hometown</td>
                                    <td>Winnipeg, Manitoba, Canada</td>
                                </tr>
                                <tr>
                                    <td>Vatsim ID</td>
                                    <td>1276005</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="panel panel-default">
                            <div class="panel-heading">Biography</div>
                            <div class="panel-body">
                                <p>Hi and welcome to Virtual Carrier Wing Three. I am the currently the Air Wing Commander (CAG) for the CVW-3. I hope you find that the group of people here at the Carrier Wing are dedicated to this incredible sim and hope you enjoy your stay.</p>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">Signature</div>
                            <div class="panel-body">
                                <img src="http://www.virtualcarrierwing3.com/vb4/image.php?u=3&type=sigpic&dateline=1322433091"><br/>
                                <img src="http://www.virtualcarrierwing3.com/vb4/phpvms/lib/signatures/CVW0002.png"><br/>
                                <img src="http://i229.photobucket.com/albums/ee227/mfkillen/proudtobecanadiantag8xp2sx.jpg"><br/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <div class="panel panel-default">
                            <div class="panel-heading">Statistics</div>
                            <table class="table">
                                <tr>
                                    <td>Total Posts</td>
                                    <td>2,555</td>
                                </tr>
                                <tr>
                                    <td>Last Activity</td>
                                    <td>5-30-15</td>
                                </tr>
                                <tr>
                                    <td>Total Flights</td>
                                    <td>9999</td>
                                </tr>
                                <tr>
                                    <td>Total Hours</td>
                                    <td>9999</td>
                                </tr>
                                <tr>
                                    <td>Last Flight</td>
                                    <td>5-30-15</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<div class="container-fluid footer">
    <footer>Virtual Carrier Wing Three is not associated with the US Navy. All material and media hosted on this site is copyright protected and may not be duplicated without the consent of Hollywood and RollingRock or the Virtual Carrier Wing Three.</footer>
</div>

<!-- Scripts -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
