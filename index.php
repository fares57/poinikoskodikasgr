<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-141389804-1"></script>
<script async src="./script.js"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-141389804-1');
</script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="style.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">
    <title>Ποινικός Κώδικας</title>
    <meta name="keywords" content="Ποινικός Κώδικας"/>
    <meta name="description" content="Ο ελληνικός Ποινικός Κώδικας με όλα τα άρθρα που καλύπτει το γενικό μέρος και όλα τα εγκλήματα"/>
    <meta name="subject" content="Ποινικός Κώδικας">
    <meta name="copyright"content="G.Koutivas L.I.T.">
    <meta name="language" content="EL">
    <meta name="robots" content="index,follow" />
    <meta name="topic" content="Νομοθεσία">
    <meta name="summary" content="Ολόκληρο το κείμενο του Ποινικού Κώδικα της Ελλάδας">
    <meta name="Classification" content="Business">
    <meta name="author" content="Giannis Koutivas, i.koutivas@gmail.com">
    <meta name="designer" content="Giannis Koutivas">
    <meta name="reply-to" content="email@hotmail.com">
    <meta name="owner" content="Giannis Koutivas - Γιάννης Κουτίβας">
    <meta name="url" content="http://poinikoskodikas.gr/">
    <meta name="coverage" content="Worldwide">
    <meta name="distribution" content="Global">
    <meta name="rating" content="General"> 
    
</head>
<body>
<?php
$data = file_get_contents("./law.json");
$articles = json_decode($data);
// echo $articles[1]->Text;
?>
<h1 style="text-align: center;">Ποινικός Κώδικας</h1>
<a href="#" class="scroll-top">&#x261D</a>
<input type="tel" name="articlenum" id="articlenum" size="3" maxlength="3" placeholder="ΑΡΘΡΟ">
<!-- <a href="#" id='thebutton'>&#x1F50D</a> -->


<?php foreach($articles as $arr){
    ?><div class="wrap-collapsible" id="<?php echo 'pk'.$arr->Article;?>">
    <input type="checkbox" id="<?php echo 'collapsible'.$arr->Article;?>" class="toggle">
    <label for="<?php echo 'collapsible'.$arr->Article;?>" class="lbl-toggle"><h2 style="display:inline;">
        <?php echo 'Αρθρο '.$arr->Article;?>
    </h2></label>
    <div class="collapsible-content">
        <div class="content-inner">
            <p><?php echo $arr->Text;?></p>
        </div>
    </div>
</div><?php
};?>


</body>
</html>