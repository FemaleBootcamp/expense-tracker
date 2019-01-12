<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Expense Tracker') }}</title>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/momentjs/2.14.1/moment.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>


    <!-- <script type="text/javascript" src="/bower_components/jquery/jquery.min.js"></script>
 <script type="text/javascript" src="/bower_components/moment/min/moment.min.js"></script>
 <script type="text/javascript" src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
 <script type="text/javascript" src="/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
 <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css" />
 <link rel="stylesheet" href="/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" /> -->

    <!-- <link rel="stylesheet" href="include/overcast/jquery-ui-1.10.3.custom.css" />
<script type="text/javascript" src="include/jquery-ui-1.10.3.custom/js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="include/jquery-ui-1.10.3.custom/js/jquery-ui-1.10.3.custom.js"></script> -->

    <!-- <link href="Css/ui.css" rel="stylesheet" type="text/css" />

<script src="Jquery/jquery-1.6.2.min.js" type="text/javascript"></script>

<script src="Jquery/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script> -->

</head>
<body>
<div id="app">
    <nav class="navbar navbar-default navbar-expand-lg navbar-light" style="margin-bottom: 0;">
        <div class="navbar-header d-flex col">
            <a class="navbar-brand" href="{{ url('/') }}">Expense<b>Tracker</b></a>
        </div>

        <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
            <ul class="nav navbar-nav navbar-right ml-auto">
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
            </li>
            </ul>

        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
</div>
</body>

<script type="text/javascript">
  $(document).ready(function(){
    $('#datetimepicker6').datetimepicker({
      format: 'DD-MM-YYYY'
    });
    $('#datetimepicker7').datetimepicker({
      format: 'DD-MM-YYYY',
      useCurrent: false //Important! See issue #1075
    });
    // $("#datetimepicker6").on("dp.change", function (e) {
    //   $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
    // });
    $("#datetimepicker7").on("dp.change", function (e) {
      $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
    });
  });
</script>
</html>
