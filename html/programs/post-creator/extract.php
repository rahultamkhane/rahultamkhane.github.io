<?php

$line = file_get_contents("a.html");
//preg_replace($pattern, $replacement, $string);
$line = preg_replace("/\<html\>.*\<\/head\>/", "", $line);
$line = preg_replace("/\<\/body\>\<\/html\>/", "", $line);
$line = preg_replace("/<[p](.*?[^?])?>/", "<p>", $line);
$line = preg_replace("/<[s](.*?[^?])?>/", "", $line);
$line = preg_replace("/<[l](.*?[^?])?>/", "<li>", $line);
$line = preg_replace("/<[u](.*?[^?])?>/", "<ul>", $line);
$line = preg_replace("/<[o](.*?[^?])?>/", "<ol>", $line);
$line = preg_replace("/\<\/span\>/", "", $line);
$line = preg_replace("/\<p\>Laboratory Objective:\<\/p\>/", "<h2>Laboratory Objective:</h2>", $line);
$line = preg_replace("/\<p\>Sample Programs\<\/p\>/", "<h2>Sample Programs</h2>", $line);
//$line = preg_replace("/\<\/span\>\r\n/", "", $line);

$contents = "<!DOCTYPE html>"."\n";
$contents = $contents . "<html lang=\"en\">"."\n";
$contents = $contents . "<head>"."\n";
$contents = $contents . "  <title>Bootstrap Example</title>"."\n";
$contents = $contents . "  <meta charset=\"utf-8\">"."\n";
$contents = $contents . "  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">"."\n";
$contents = $contents . "  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css\">"."\n";
$contents = $contents . "  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>"."\n";
$contents = $contents . "  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js\"></script>"."\n";
$contents = $contents . "</head>"."\n";
$contents = $contents . "<body>"."\n";
$contents = $contents . "<div class=\"container\">"."\n";
$contents = $contents . "  <div class=\"row\">"."\n";
$contents = $contents . "    "."\n".$line;    // Writing contents
$contents = $contents . "</div>"."\n";
$contents = $contents . "</div>"."\n";
$contents = $contents . "</body>"."\n";
$contents = $contents . "</html>"."\n";
//file_put_contents("index.html", $line);
file_put_contents("index.php", $contents);

header("Location: index.php");
?>