<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>
       <div class="container">
        <h1 class="logoname">Bad Company:BLOG</h1>
        <div>
            <div>
                <?php foreach($articles as $a): ?>
                <div class="article">
                    <h3><a href="article.php?id=<?=$a['id']?>"><?=$a['title']?></a></h3>
                <em>Опубликовано: <?=$a['date']?></em>
                <p><?=$a['content']?></p>
            </div>
            <?php endforeach ?>
        </div>
<footer>
               <p>Bad Company:BLOG<br>Copyright &copy; 2016</p>
</footer>
</div>
</div>
</body>

</html>