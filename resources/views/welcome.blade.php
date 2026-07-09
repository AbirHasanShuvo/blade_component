{{-- @php
    $fruits = ["one" => "Apple", "two" => "Mango", "three" => "Water-Melon", "four" => "Pine-Apple", "five" => "Dragon Frout"];
    $value = true;
@endphp

@includeWhen($value,'pages.header', ["names" => $fruits])
<h1>This is the home page</h1>
@include('pages.footer')
 --}}

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Practice</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial, Helvetica, sans-serif;
        }

        body{
            background:#f4f4f4;
        }

        nav{
            background:#222;
            padding:18px 40px;
        }

        nav a{
            color:#fff;
            text-decoration:none;
            margin-right:20px;
            font-size:18px;
            font-weight:bold;
        }

        nav a:hover{
            color:#00bcd4;
        }

        .container{
            width:80%;
            margin:30px auto;
        }

        section{
            background:#fff;
            padding:25px;
            margin-bottom:25px;
            border-radius:10px;
            box-shadow:0 4px 10px rgba(0,0,0,0.1);
        }

        h1{
            margin-bottom:15px;
            color:#333;
        }

        p{
            line-height:1.7;
            color:#555;
        }

        footer{
            background:#222;
            color:#fff;
            text-align:center;
            padding:20px;
            margin-top:30px;
        }
    </style>
</head>
<body>

    <!-- Navigation -->
    <nav>
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Posts</a>
    </nav>

    <div class="container">

        @include('pages.home')

        @include('pages.about')

        @include('pages.post')

    </div>

    <footer>
        <p>&copy; {{ date('Y') }} Laravel Practice Project. All rights reserved.</p>
    </footer>

</body>
</html>