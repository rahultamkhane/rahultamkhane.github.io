<?php
require("../../../libs/config.php");
$title = "HTML program to create a static webpage using table tags | " . SITE_NAME;
$description = "HTML program to create a static webpage using table tags";
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
            <h1>HTML program to create a static webpage using table tags</h1>
            <p></p>
            <h3>HTML Code</h3>
            <p></p>
            <pre><code class="html">&lt;html&gt;
&lt;body&gt;
    &lt;table border=&quot;1&quot; cellpadding=&quot;2&quot;&gt;
        &lt;caption ALIGN=&quot;Top&quot;&gt;&lt;b&gt;Specification Table with Hours and Marks&lt;/caption&gt;
        &lt;tr&gt;
            &lt;TH ROWSPAN=&quot;2&quot;&gt;Unit No.&lt;/TH&gt;
            &lt;TH ROWSPAN=&quot;2&quot;&gt;Unit Title&lt;/TH&gt;
            &lt;TH ROWSPAN=&quot;2&quot;&gt;Teaching Hours&lt;/TH&gt;
            &lt;TH Colspan=&quot;4&quot;&gt;Distribution of Theory Marks&lt;/TH&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td&gt;R Level &lt;/td&gt;
            &lt;td&gt;U Level &lt;/td&gt;
            &lt;td&gt;A Level &lt;/td&gt;
            &lt;td&gt;Total Marks &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td&gt;
                &lt;center&gt;I
            &lt;/td&gt;
            &lt;td&gt;Introduction to Internet Technology&lt;/td&gt;
            &lt;td&gt;
                &lt;center&gt;2
            &lt;/td&gt;
            &lt;td&gt;
                &lt;center&gt;4
            &lt;/td&gt;
            &lt;td&gt;
                &lt;center&gt;4
            &lt;/td&gt;
            &lt;td&gt;
                &lt;center&gt;0
            &lt;/td&gt;
            &lt;td&gt;
                &lt;center&gt;8
            &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td&gt;
                &lt;center&gt;II
            &lt;/td&gt;
            &lt;td&gt;Basics of HTML & CSS&lt;/td&gt;
            &lt;td&gt;
                &lt;center&gt;6
            &lt;/td&gt;
            &lt;td&gt;
                &lt;center&gt;0
            &lt;/td&gt;
            &lt;td&gt;
                &lt;center&gt;2
            &lt;/td&gt;
            &lt;td&gt;
                &lt;center&gt;6
            &lt;/td&gt;
            &lt;td&gt;
                &lt;center&gt;8
            &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td&gt;
                &lt;center&gt;III
            &lt;/td&gt;
            &lt;td&gt;Active Server Pages 3.0&lt;/td&gt;
            &lt;td&gt;
                &lt;center&gt;6
            &lt;/td&gt;
            &lt;td&gt;
                &lt;center&gt;4
            &lt;/td&gt;
            &lt;td&gt;
                &lt;center&gt;8
            &lt;/td&gt;
            &lt;td&gt;
                &lt;center&gt;0
            &lt;/td&gt;
            &lt;td&gt;
                &lt;center&gt;12
            &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td&gt;
                &lt;center&gt;IV
            &lt;/td&gt;
            &lt;td&gt;Server Side Coding with VBScript and XML&lt;/td&gt;
            &lt;td&gt;
                &lt;center&gt;8
            &lt;/td&gt;
            &lt;td&gt;
                &lt;center&gt;2
            &lt;/td&gt;
            &lt;td&gt;
                &lt;center&gt;4
            &lt;/td&gt;
            &lt;td&gt;
                &lt;center&gt;8
            &lt;/td&gt;
            &lt;td&gt;
                &lt;center&gt;14
            &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td&gt;
                &lt;center&gt;V
            &lt;/td&gt;
            &lt;td&gt;ASP Objects & Components&lt;/td&gt;
            &lt;td&gt;
                &lt;center&gt;10
            &lt;/td&gt;
            &lt;td&gt;
                &lt;center&gt;4
            &lt;/td&gt;
            &lt;td&gt;
                &lt;center&gt;4
            &lt;/td&gt;
            &lt;td&gt;
                &lt;center&gt;6
            &lt;/td&gt;
            &lt;td&gt;
                &lt;center&gt;14
            &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td&gt;
                &lt;center&gt;VI
            &lt;/td&gt;
            &lt;td&gt;Accessing database with ASP & ADO&lt;/td&gt;
            &lt;td&gt;
                &lt;center&gt;10
            &lt;/td&gt;
            &lt;td&gt;
                &lt;center&gt;4
            &lt;/td&gt;
            &lt;td&gt;
                &lt;center&gt;4
            &lt;/td&gt;
            &lt;td&gt;
                &lt;center&gt;6
            &lt;/td&gt;
            &lt;td&gt;
                &lt;center&gt;14
            &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td&gt; &lt;/td&gt;
            &lt;td&gt;
                &lt;center&gt;&lt;b&gt;Total
            &lt;/td&gt;
            &lt;td&gt;
                &lt;center&gt;&lt;b&gt;42
            &lt;/td&gt;
            &lt;td&gt;
                &lt;center&gt;&lt;b&gt;18
            &lt;/td&gt;
            &lt;td&gt;
                &lt;center&gt;&lt;b&gt;26
            &lt;/td&gt;
            &lt;td&gt;
                &lt;center&gt;&lt;b&gt;26
            &lt;/td&gt;
            &lt;td&gt;
                &lt;center&gt;&lt;b&gt;70
            &lt;/td&gt;
        &lt;/tr&gt;
    &lt;/table&gt;
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