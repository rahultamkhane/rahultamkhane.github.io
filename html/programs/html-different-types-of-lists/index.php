<?php
require("../../../libs/config.php");
$title = "HTML program for demonstrate different types of lists | " . SITE_NAME;
$description = "HTML program for demonstrate different types of lists";
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
            <h1>HTML program for demonstrate different types of lists</h1>
            <p></p>
            <h3>HTML Code</h3>
            <p></p>
            <pre><code class="html">&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;Different types of lists&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;h3 align=&quot;center&quot;&gt;To illustrate different types of Lists Tags&lt;/h3&gt;
    &lt;hr color=&quot;red&quot;&gt;
    &lt;p&gt;An Unordered List:&lt;/p&gt;
    &lt;ul&gt;
        &lt;li&gt;Beetroot&lt;/li&gt;
        &lt;li&gt;Ginger&lt;/li&gt;
        &lt;li&gt;Potato&lt;/li&gt;
        &lt;li&gt;Radish&lt;/li&gt;
    &lt;/ul&gt;
    &lt;p&gt;An Ordered List:&lt;/p&gt;
    &lt;ol&gt;
        &lt;li&gt;Coffee&lt;/li&gt;
        &lt;li&gt;Tea&lt;/li&gt;
        &lt;ol type=&quot;a&quot;&gt;
            &lt;li&gt;Black Tea&lt;/li&gt;
            &lt;li&gt;Green Tea&lt;/li&gt;
            &lt;ol type=&quot;i&quot;&gt;
                &lt;li&gt;China&lt;/li&gt;
                &lt;li&gt;Africa&lt;/li&gt;
            &lt;/ol&gt;
        &lt;/ol&gt;
        &lt;li&gt;Milk&lt;/li&gt;
    &lt;/ol&gt;
    &lt;dl&gt;
        &lt;dt&gt;HTML&lt;/dt&gt;
        &lt;dd&gt;This stands for Hyper Text Markup Language&lt;/dd&gt;
        &lt;dt&gt;HTTP&lt;/dt&gt;
        &lt;dd&gt;This stands for Hyper Text Transfer Protocol&lt;/dd&gt;
    &lt;/dl&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre>
            <p></p>
            <p>&lt;/html&gt;</p>
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