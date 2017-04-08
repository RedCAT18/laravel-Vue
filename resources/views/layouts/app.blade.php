<?php
/**
 * Created by PhpStorm.
 * User: RedCAT
 * Date: 2017-04-05
 * Time: 오후 10:15
 */
?>

        <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <!-- Styles -->
        <link href="/css/app.css" rel="stylesheet">


        <!-- Scripts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.16.0/axios.min.js"></script>
        <script>
            window.Laravel = <?php echo json_encode([
                    'csrfToken' => csrf_token(),
            ]); ?>
        </script>

    </head>
    <body class="main_bg">
        <div class="main_header">
            <div class="row no-margin no-padding">
                <div class="col-md-2 header_menu">
                    <span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span>
                    <span>{{$user->name}}</span>
                </div>
                <div class="col-md-2 pull-right header_menu_right">
                    <span class="glyphicon glyphicon-bell" aria-hidden="true"></span>
                    <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                </div>
            </div>
        </div>
        <div class="contents row">
        @yield('main')
        </div>
    </body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.2.6/vue.min.js"></script>
    <script src="/js/app.js"></script>
</html>
