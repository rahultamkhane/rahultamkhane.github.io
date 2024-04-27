<?php
require("../../../libs/config.php");
$title = "HTML program to create a static web page which defines all text formatting tags of HTML in tabular format | " . SITE_NAME;
$description = "HTML program to create a static web page which defines all text formatting tags of HTML in tabular format";
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
            <h1>HTML program to create a static web page which defines all text formatting tags of HTML in tabular format</h1>
            <p></p>
            <p></p>
            <h3>HTML Code</h3>
            <p></p>
            <pre><code class="html">&lt;html&gt;
&lt;body&gt;
    &lt;center&gt;
        &lt;table border=1&gt;
            &lt;caption align=&quot;top&quot;&gt;
                &lt;font size=&quot;+2&quot; color=&quot;red&quot;&gt;Text Formatting Tags&lt;/font&gt;
            &lt;/caption&gt;
            &lt;tr&gt;
                &lt;th&gt;HTML Tag&lt;/th&gt;
                &lt;th&gt;Output&lt;/th&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;normal text&lt;/td&gt;
                &lt;td&gt;hello world&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Font & its attributes&lt;/td&gt;
                &lt;td&gt;
                    &lt;FONT SIZE=&quot;+2&quot; COLOR=&quot;#RRGGBB&quot;&gt; hello world &lt;/FONT&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;&lt;B&gt;&lt;/td&gt;
                &lt;td&gt;&lt;B&gt; Bold &lt;/B&gt;&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;&lt;I&gt;&lt;/td&gt;
                &lt;td&gt;&lt;I&gt; Italic &lt;/I&gt;&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;&lt;U&gt;&lt;/td&gt;
                &lt;td&gt;&lt;U&gt; Underline &lt;/U&gt;&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;&lt;EM&gt;&lt;/td&gt;
                &lt;td&gt;&lt;EM&gt; Emphasis &lt;/EM&gt;&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;&lt;STRONG&gt;&lt;/td&gt;
                &lt;td&gt;&lt;STRONG&gt; STRONG &lt;/STRONG&gt;&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;&lt;TELETYPE&gt;&lt;/td&gt;
                &lt;td&gt;&lt;TT&gt; TELETYPE &lt;/TT&gt;&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;&lt;CITE&gt;&lt;/td&gt;
                &lt;td&gt;&lt;CITE&gt; Citation &lt;/CITE&gt;&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;&lt;STRIKE&gt;&lt;/td&gt;
                &lt;td&gt;&lt;STRIKE&gt; strike-through text &lt;/STRIKE&gt;&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;&lt;BIG&gt;&lt;/td&gt;
                &lt;td&gt;&lt;BIG&gt; text in a big font &lt;/BIG&gt;&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;&lt;SMALL&gt;&lt;/td&gt;
                &lt;td&gt;&lt;SMALL&gt; text in a small font &lt;SMALL&gt;&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;&lt;SUB&gt;&lt;/td&gt;
                &lt;td&gt;a&lt;SUB&gt; b &lt;/SUB&gt;&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;&lt;SUP&gt;&lt;/td&gt;
                &lt;td&gt;a&lt;SUP&gt; b&lt;/SUP&gt;&lt;/td&gt;
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