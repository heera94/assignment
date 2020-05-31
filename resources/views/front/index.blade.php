<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="{{ url('assets/css/heroic-features.css') }}" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>Shows</title>
</head>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">Shows</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                
                <li class="nav-item dropdown">
                    <a class="nav-item nav-link dropdown-toggle mr-md-2" href="#" id="bd-versions"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user"></i> {{ auth()->check() ? auth()->user()->name : 'Account' }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="bd-versions">
                        @if (!auth()->check())
                            <a class="dropdown-item " href="{{  url('/admin/login') }}">Sign In</a>
                            <a class="dropdown-item" href="{{  url('/admin/register') }}">Sign Up</a>
                       
                        @endif
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
<br>
<br>
<br>
<br>

                   
                   


                </div>
            </div>
        </div>


        <!-- Bootstrap Javascript -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
        </script>

</body>
<script>
    $('.carousel').carousel({
        interval: 3000
    })

    //Item Count 
    $(document).ready(function () {
        $('.minus').click(function () {
            var $input = $(this).parent().find('input');
            var count = parseFloat($input.val()) - 0.5;
            count = count < 1 ? 1 : count;
            $input.val(count);
            $input.change();
            return false;
        });
        $('.plus').click(function () {
            var $input = $(this).parent().find('input');
            $input.val(parseFloat($input.val()) + 0.5);
            $input.change();
            return false;
        });
    });

    //Item Count addons
    $(document).ready(function () {
        $('#minus3').click(function () {
            var $input = $(this).parent().find('input');
            var count = parseFloat($input.val()) - 0.5;
            // count = count < 1 ? 1 : count;
            $input.val(count);
            $input.change();
            return false;
        });
        $('#plus3').click(function () {
            var $input = $(this).parent().find('input');
            $input.val(parseFloat($input.val()) + 0.5);
            $input.change();
            return false;
        });
    });

    //Item Count addons
    $(document).ready(function () {
        $('.minus2').click(function () {
            var $input = $(this).parent().find('input');
            var count = parseFloat($input.val()) - 0.5;
            count = count < 0 ? 0 : count;
            $input.val(count);
            $input.change();
            return false;
        });
        $('.plus2').click(function () {
            var $input = $(this).parent().find('input');
            $input.val(parseFloat($input.val()) + 0.5);
            $input.change();
            return false;
        });
    });
</script>

</html>