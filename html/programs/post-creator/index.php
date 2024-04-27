<?php
$folder_list = explode("\n", file_get_contents("folder-list.txt"));

for($x=0; $x < count($folder_list); $x++)
{
  $folder = "../".trim($folder_list[$x]);
  $file_name = $folder."/a.html";
  $line = file_get_contents($file_name);
  //preg_replace($pattern, $replacement, $string);
  $line = preg_replace("/\<html\>.*\<\/head\>/", "", $line);
  $line = preg_replace("/\<\/body\>\<\/html\>/", "", $line);
  $line = preg_replace("/<body(.*?[^?])?>/", "<body>", $line);
  $line = preg_replace("/<[p](.*?[^?])?>/", "<p>", $line);
  $line = preg_replace("/<[s](.*?[^?])?>/", "", $line);
  $line = preg_replace("/<[l](.*?[^?])?>/", "<li>", $line);
  $line = preg_replace("/<[u](.*?[^?])?>/", "<ul>", $line);
  $line = preg_replace("/<[o](.*?[^?])?>/", "<ol>", $line);
  $line = preg_replace("/<h1(.*?[^?])?>/", "<h1>", $line);
  $line = preg_replace("/<h2(.*?[^?])?>/", "<h2>", $line);
  $line = preg_replace("/<h3(.*?[^?])?>/", "<h3>", $line);
  $line = preg_replace("/<h4(.*?[^?])?>/", "<h4>", $line);
  $line = preg_replace("/<h5(.*?[^?])?>/", "<h5>", $line);
  $line = preg_replace("/<h6(.*?[^?])?>/", "<h6>", $line);
  $line = preg_replace("/style=(.*?[^?])?\;\"/", "", $line);
  $line = preg_replace("/<p><img(.*?[^?])?\<\/p\>/", "\n\r<img $1\n", $line);
  $line = preg_replace("/\<\/span\>/", "", $line);
  $line = preg_replace("/\<p\>Laboratory Objective:\<\/p\>/", "<h2>Laboratory Objective:</h2>", $line);
  $line = preg_replace("/\<p\>Sample Programs\<\/p\>/", "<h2>Sample Programs</h2>", $line);
  $line = preg_replace("/rahultamkhane/", "example", $line);
  //$line = preg_replace("/\<\/span\>\r\n/", "", $line);

  $template = file_get_contents("blog-template.txt","r");
  //echo $template;
  $template = str_replace('$content$', $line, $template);
  //mkdir("post/", 0755, true);
  file_put_contents($folder."/index.php", $template);
  //echo "<h1>Post created successfully !!!</h1>";
  //header("Location: index.php");
  echo "Post created => ".$folder_list[$x]."<br>";
}
echo "<h1>$x posts created successfully !!!</h1>";
?>