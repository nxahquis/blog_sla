<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        
        <!--Fonts google -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
        
        <!--Css w3 school -->
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">       
        <!--Css da aplicação -->
        <link rel="stylesheet" href="/css/style.css">
        <script src="/js/script.js"></script>


    </head>
    <body>
        <br>
        <div class="w3-container">
            <div class="w3-row w3-xlarge w3-light-gray ">
                <div class="w3-col l3 m6 s4 "><a href="#" class="w3-bar-item w3-button w3-hover-pink"><i class="fa fa-home"></i></a></div>
                <div class="w3-col l7 m3 s4 w3-center"><div><p></p></div></div>
                <div class="w3-col l2 m3 s4 w3-center">
                    <a href="/post/create" class="w3-bar-item w3-button w3-hover-pink"><i class="fa fa-pencil-square-o"></i></a>
                    <a href="/post/create" class="w3-bar-item w3-button w3-hover-pink"><i class="fa fa-user-circle-o"></i></a>
                    <a href="#" class="w3-bar-item w3-button w3-hover-pink"><i class="fa fa-sign-in"></i></a>
                </div>
            </div>
        </div>
        <main>
            @if (session('msg'))
                <p class="w3-panel w3-green">{{session('msg')}}</p>
            @endif
            @yield('content')
        </main>
        <footer>
            <p>HDC Events &copy; 2022</p>
        </footer>
    </body>
</html>
