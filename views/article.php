<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
</head>

<body>
       <div class="container">
        <h1 class="logoname">Bad Company:BLOG</h1>
        <div class="article">
            <div>
                <h3><?=$article['title']?></h3>
                <em>Опубликовано: <?=$article['date']?></em>
                <p><?=$article['content']?></p>
            </div>

        </div>
<footer>
            <p>Bad Company:BLOG
                <br>Copyright &copy; 2016</p>
</footer>
</div>
</body>

</html>