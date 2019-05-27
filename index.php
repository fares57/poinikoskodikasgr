<?php
$data = file_get_contents("./law.json");
$articles = json_decode($data);
// echo $articles[1]->Text;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">
    <meta name="robots" content="noindex" />
    <title>Ποινικός Κώδικας</title>
</head>
<body>
<a href="#" class="scroll-top">&#x261D</a>
<?php foreach($articles as $arr){
    ?><div class="wrap-collapsible">
    <input type="checkbox" id="<?php echo 'collapsible'.$arr->Article;?>" class="toggle">
    <label for="<?php echo 'collapsible'.$arr->Article;?>" class="lbl-toggle"><?php echo 'Αρθρο '.$arr->Article;?></label>
    <div class="collapsible-content">
        <div class="content-inner">
            <p><?php echo $arr->Text;?></p>
        </div>
    </div>
</div><?php
};?>


</body>
</html>