<?php
$data = array(
    "title"=>"School of Net",
    "lin"=>"http://www.schoolofnet.com",
    "content"=>
    array(
        array(
            "title"=>"News 1",
            "resume"=>"Summary 1",
            "text"=>"Text 1"
        ),
        array(
            "title"=>"News 2",
            "resume"=>"Summary 2",
            "text"=>"Text 2"
        ),
        array(
            "title"=>"News 3",
            "resume"=>"Summary 3",
            "text"=>"Text 3"
        )
    )
);

?>

<html>
    <head>
        <title><?=$data['title']?></title>
    </head>
    <body>
        <h1><a href="<?=$data['link']?>"><?=$data['title']?></a></h1>
        <hr>
    <?php foreach ($data['content'] as $key => $value) :?>
        <h3><?=$value['title']?></h3>
        <strong>><?=$value['resume']?></strong>
        <p>><?=$value['text']?></p>
        <hr>
    <?php endforeach?>
</body>
</html>