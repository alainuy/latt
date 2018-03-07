<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
        <title>{{config('app.name')}}</title>
        {{--  <title>Ti<i class="fas fa-bolt"></i></span>To</title>  --}}

        
    </head>

    @include('include.navbar')


<body>



        <div class='container'>
            
            {{--  this is to include any error from validation or session errors  --}}
            @include('include.messages') 

            {{--  display the main content of the page --}}
            @yield('content')
        </div>

<script src="{{asset('js/app.js')}}"></script>
</body>


</html>