<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wagtail frontend</title>
    <style>
        body {
            font-family: 'Open Sans', serif;
            font-size: 1.1em;
            padding: 3em 0.5em;
        }

        h1 {
            font-size: 1.5em;
            font-family: 'Open Sans', serif;
        }

        h2 {
            font-size: 1.1em;
            margin: 4em 0 0.5em;
        }

        a, a:visited {
            font-weight: bold;
            color: #134571;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .standfirst {
            font-family: 'Roboto Mono', serif;
        }

        ul {
            margin: 0;
            padding: 0;
        }

        li {
            padding: 1.2em;
            background-color: #efefef;
            display: block;
            border: 1px solid #ccc;
            list-style-position: outside;
            list-style-type: square;
            font-size: 0.8em;
            color: #666;
            border-left: 6px solid #134571;
            margin-bottom: 4px;
        }

        li a, li a:visited {
            font-size: 1.4em;
            font-weight: bold;
            color: #134571;
        }

        span {
            display: inline-block;
            width: 45px;
            font-size: 1.4em;
            font-weight: bold;
            color: #222;
        }

        ul ul {
        }

        ul ul li {
            padding: 1em 0 1.5em 4.5em;
            font-size: 0.7em;
            border-top: 0;
            border-right: 1px solid #ccc;
            border-left: 6px solid #ccc;
            background-color: #fff;
            margin-top: -4px;
        }

        hr {
            margin: 3em 0 0.5em;
            border-bottom: 4px solid #999;
            height: 0;
            display: block;
        }

        @media screen and (min-width: 768px) {
            body {
                padding: 2em;
            }
        }
    </style>
</head>
<body>
<h1>Wagtail frontend</h1>
<p class="standfirst">This is a collection of HTML templates for front-end development of Etna.</p>

<h2>Page templates</h2>
<ul>
    <li>
        <span>1</span>
        <a href="collection-explorer/explore_the_collection.php">Explore the collection</a>
        <br>
        collection-explorer/explore_the_collection.php
    </li>
</ul>

</body>
</html>


