<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>i-system</title>
        <link rel="shortcut icon" href="{{ URL::asset('favicon.ico') }}" type="image/x-icon" />
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href='http://fonts.googleapis.com/css?family=Aladin&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Raleway:300" rel="stylesheet">
        <!-- Latest compiled and minified CSS -->
        <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="{{ URL::asset('font/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet" type="text/css">
    </head>
    <body data-spy="scroll" data-target=".navbar">

        <nav class="navbar navbar-fixed-top">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="glyphicon glyphicon-list navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand js-navbarBrand" href="#">

                    </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="navbar-nav">
                        <li class="link"><a class="menu" data-section="first" href="/newProducer" >Create producer<span class="sr-only">(current)</span></a></li>
                        <li class="link"><a class="menu" data-section="about" href="/allProducers" >Get all producers</a></li>
                    </ul>
                    <ul class="navbar-nav navbar-right">
                        <li><a href="" target="_blank"><i class="fa fa-facebook-square fa-2x nav-right"></i></a></li>
                        <li><a href="" target="_blank"><i class="fa fa-youtube-square fa-2x nav-right" aria-hidden="true"></i></a></li>
                        <li><a href="" target="_blank"><i class="fa fa-instagram fa-2x nav-right" aria-hidden="true"></i></a></li>
                        <li><a href="" target="_blank"><i class="fa fa-soundcloud fa-2x nav-right" aria-hidden="true"></i></a></li></li>
                    </ul>
                </div><!-- /.navbar-collapse -->

            </div><!-- /.container-fluid -->
        </nav>

        @yield('content')

        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js"></script>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <script src="{{ URL::asset('js/script.js') }}"></script>


    </body>
</html>
