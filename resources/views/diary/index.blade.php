<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/diarypage.css">
    <link rel="stylesheet" type="text/css" href="/css/trix.css">
    <script type="text/javascript" src="/js/trix.js"></script>
    <title>Welcome!</title>
    <style>
        trix-toolbar [data-trix-button-group="file-tools"]{
            display: none;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="/home">Home</a></li>
                <li><a href="/diarypage">Create Diary</a></li>
                <li><a href="/logout">Logout</a></li>
            </ul>
        </nav>
    </header>

    <div class="trix-container">
        <form action="/diary" method="post">
            @csrf
                <label for="title">Title </label>
                <input type="text" name="title" id="">
                <input id="content" type="hidden" name="content">
                <trix-editor input="content"></trix-editor>

                <button type="submit">Save</button>
        </form>
        </div>

</body>
</html>
