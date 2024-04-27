<?php
require("../../../libs/config.php");
$title = "HTML program to link an external page of different web sites and link the web page to mail address | " . SITE_NAME;
$description = "HTML program to link an external page of different web sites and link the web page to mail address";
include($_SERVER['DOCUMENT_ROOT'] . SITE_DIR . "include/header.php");
?>

<?php
include($_SERVER['DOCUMENT_ROOT'] . SITE_DIR . "include/navbar.php");
?>

<div class="container">
  <div class="row">

    <?php
    include($_SERVER['DOCUMENT_ROOT'] . SITE_DIR . "include/leftbar.php");
    ?>

    <div class="col-sm-8 pl-5 pt-4">
      <div class="container">
        <div class="mydiv">

          <body>
            <h1>HTML program to link an external page of different web sites and link the web page to mail address</h1>
            <p></p>
            <p></p>
            <p>HTML program to link an external page of different web sites like yahoo.com or google.com using URL and also link the web page to your mail address. Apply tags to change colors of </p>
            <p>links.</p>
            <p></p>
            <h3>HTML Code</h3>
            <p></p>
            <pre><code class="html">&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;Link external websites&lt;/title&gt;
    &lt;style&gt;
        a:link {
            color: red;
        }
        a:visited {
            color: green;
        }
        a:hover {
            color: pink;
        }
        a:active {
            color: black;
        }
    &lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;h3&gt;Select the Search Engine&lt;/h3&gt;
    &lt;a href=&quot;https://www.google.com&quot; target=&quot;_blank&quot;&gt;Google&lt;/a&gt;&lt;br&gt;
    &lt;a href=&quot;https://www.yahoo.com&quot; target=&quot;_blank&quot;&gt;Yahoo&lt;/a&gt;&lt;br&gt;
    Any queries? &lt;a href=&quot;mailto:helpme@gmail.com?subject=Query&body=Enter your query here&quot;&gt;Click here&lt;/a&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre>
            <p></p>
            <h3>OUTPUT</h3>
            <p></p>

            <img alt="" src="images/image1.png" title="">
            <p></p>
            <p></p>
        </div> <!-- /mydiv -->
      </div> <!-- /container -->
    </div> <!-- /col-sm-8 -->

    <?php
    include($_SERVER['DOCUMENT_ROOT'] . SITE_DIR . "include/rightbar.php");
    ?>

  </div> <!-- /row -->

</div> <!-- /container -->
<?php
include($_SERVER['DOCUMENT_ROOT'] . SITE_DIR . "include/footer.php");
?>