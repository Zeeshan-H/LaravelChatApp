<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Chat App</title>


    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script>
        var base_url = '{{ url("/") }}';
    </script>
</head>
<body>

    @yield('content')


<div id="chat-overlay" class="row"></div>

{{--<audio id="chat-alert-sound" style="display: none">--}}
{{--    <source src="{{ asset('sound/facebook_chat.mp3') }}" />--}}
{{--</audio>--}}
@yield('script')
</body>
</html>
