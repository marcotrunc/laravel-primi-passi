<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        ul {
            list-style-type: none;
        }

        li {
            display: inline;
        }

        li a {
            text-decoration: none;
            margin-right: 15px;
            border: 2px solid dodgerblue;
            background-color: dodgerblue;
            border-radius: 3px;
            padding: 8px 12px;
            color: white;
            cursor: pointer;
        }

        h1 {
            margin-left: 40px;
        }
    </style>
</head>

<body>
    <header>
        <h1>Hello World!</h1>
        <nav>
            <ul>
                @foreach ($menu as $option)
                <li><a href="{{ route($option['link']) }}">{{ $option['name'] }}</a></li>
                @endforeach
            </ul>
        </nav>
    </header>
</body>

</html>