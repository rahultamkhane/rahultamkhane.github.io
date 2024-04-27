<?php
require("../../../libs/config.php");
$title = "HTML program to display flags of different countries using image tag | " . SITE_NAME;
$description = "HTML program to display flags of different countries using image tag";
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
            <h1>HTML program to display flags of different countries using image tag</h1>
            <p></p>
            <h3>HTML Code</h3>
            <p></p>
            <pre><code class="html">&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;Flags&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;h1&gt;Flags of Countries&lt;/h1&gt;
    &lt;p&gt;&lt;img src=&quot;images/india.jpg&quot; alt=&quot;Sorry this Image cannot be displayed.&quot; width=&quot;100px&quot; align=&quot;center&quot;
            hspace=&quot;10px&quot; vspace=&quot;10px&quot; /&gt;&lt;b&gt;INDIA&lt;/b&gt;&lt;/p&gt;
    &lt;p&gt;&lt;img src=&quot;images/us.jpg&quot; alt=&quot;Sorry this Image cannot be displayed.&quot; width=&quot;100px&quot; align=&quot;center&quot; hspace=&quot;10px&quot;
            vspace=&quot;10px&quot; /&gt;&lt;b&gt;US&lt;/b&gt;&lt;/p&gt;
    &lt;p&gt;&lt;img src=&quot;images/china.png&quot; alt=&quot;Sorry this Image cannot be displayed.&quot; width=&quot;100px&quot; align=&quot;center&quot;
            hspace=&quot;10px&quot; vspace=&quot;10px&quot; /&gt;&lt;b&gt;CHINA&lt;/b&gt;&lt;/p&gt;
    &lt;p&gt;&lt;img src=&quot;images/australia.png&quot; alt=&quot;Sorry this Image cannot be displayed.&quot; width=&quot;100px&quot; align=&quot;center&quot;
            hspace=&quot;10px&quot; vspace=&quot;10px&quot; /&gt;&lt;b&gt;AUSTRALIA&lt;/b&gt;&lt;/p&gt;
    &lt;p&gt;&lt;img src=&quot;images/france.png&quot; alt=&quot;Sorry this Image cannot be displayed.&quot; width=&quot;100px&quot; align=&quot;center&quot;
            hspace=&quot;10px&quot; vspace=&quot;10px&quot; /&gt;&lt;b&gt;FRANCE&lt;/b&gt;&lt;/p&gt;
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