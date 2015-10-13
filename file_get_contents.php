<?php
$url = $_POST["url"];
//echo "this is the url from POST".$url;
//echo "<br>";
$urlHost =  parse_url($url, PHP_URL_HOST);
//echo "this is the url after PHP_URL_HOST";
//echo $urlHost;
$wgetcmd = "wget --convert-links --user-agent='Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2228.0 Safari/537.36' $url -O temp/$urlHost.html";
//exec ($wgetcmd);
system($wgetcmd);
//$image = "$urlHost.png";
$cmdwkhtmltoimage = "xvfb-run wkhtmltoimage $urlHost temp/$urlHost.png";
$cmdconverttopdf = "convert temp/$urlHost.png temp/$urlHost.pdf";
//exec($cmdwkhtmltoimage)
system($cmdwkhtmltoimage);
system($cmdconverttopdf);
//system($cmdwkhtmltopdf);
?>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other 
head content must come *after* these tags -->
 <title>HTML Snapshot Result</title> 
<!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]--> 
</head>
 <body> 
<div class="container">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.11.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
<p></p>
<br>
<a href="http://chaoman.dyndns.tv/temp/<?=$urlHost?>.html"> Get HTML </a>
<br>
<a href="http://chaoman.dyndns.tv/temp/<?=$urlHost?>.png"> Get PNG </a>
<br>
<a href="http://chaoman.dyndns.tv/temp/<?=$urlHost?>.pdf"> Get PDF </a>
</div>
</body>
</html>
