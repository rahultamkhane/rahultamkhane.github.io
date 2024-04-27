<?php
require("../../../libs/config.php");
$title = "Develop an android application to display all the data types in object-oriented programming using FrameLayout | " . SITE_NAME;
$description = "Develop an android application to display all the data types in object-oriented programming using FrameLayout";
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
            <h1>Develop an android application to display all the data types in object-oriented programming using FrameLayout</h1>
            <p></p>
            <h3>activity_main.xml</h3>
            <pre><code class="xml">&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;
&lt;FrameLayout xmlns:android=&quot;http://schemas.android.com/apk/res/android&quot;
    xmlns:tools=&quot;http://schemas.android.com/tools&quot;
    android:layout_width=&quot;match_parent&quot;
    android:layout_height=&quot;match_parent&quot;
    android:padding=&quot;20dp&quot;
    tools:context=&quot;.MainActivity&quot;&gt;
    
    &lt;TextView
        android:layout_width=&quot;wrap_content&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:layout_marginTop=&quot;20dp&quot;
        android:text=&quot;@string/string_data_types&quot;
        android:textStyle=&quot;bold&quot;
        style=&quot;@android:style/TextAppearance.Medium&quot;/&gt;

    &lt;TextView
        android:layout_width=&quot;wrap_content&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:layout_marginTop=&quot;50dp&quot;
        android:text=&quot;@string/string_int&quot;
        style=&quot;@android:style/TextAppearance.Large&quot; /&gt;

    &lt;TextView
        android:layout_width=&quot;wrap_content&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:layout_marginTop=&quot;75dp&quot;
        android:text=&quot;@string/string_float&quot;
        style=&quot;@android:style/TextAppearance.Large&quot; /&gt;

    &lt;TextView
        android:layout_width=&quot;wrap_content&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:layout_marginTop=&quot;100dp&quot;
        android:text=&quot;@string/string_char&quot;
        style=&quot;@android:style/TextAppearance.Large&quot;/&gt;

    &lt;TextView
        android:layout_width=&quot;wrap_content&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:layout_marginTop=&quot;125dp&quot;
        android:text=&quot;@string/string_double&quot;
        style=&quot;@android:style/TextAppearance.Large&quot;/&gt;

    &lt;TextView
        android:layout_width=&quot;wrap_content&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:layout_marginTop=&quot;150dp&quot;
        android:text=&quot;@string/string_void&quot;
        style=&quot;@android:style/TextAppearance.Large&quot;/&gt;

    &lt;TextView
        android:layout_width=&quot;wrap_content&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:layout_marginTop=&quot;175dp&quot;
        android:text=&quot;@string/string_boolean&quot;
        style=&quot;@android:style/TextAppearance.Large&quot;/&gt;
&lt;/FrameLayout&gt;
</code></pre>
            <h3>MainActivity.java</h3>
            <pre><code class="java">package com.example.framelayout;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
public class MainActivity extends AppCompatActivity {
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
    }
}
</code></pre>
            <h3>strings.xml</h3>
            <pre><code class="xml">&lt;resources&gt;
    &lt;string name=&quot;app_name&quot;&gt;FrameLayout&lt;/string&gt;
    &lt;string name=&quot;string_void&quot;&gt;void&lt;/string&gt;
    &lt;string name=&quot;string_boolean&quot;&gt;boolean&lt;/string&gt;
    &lt;string name=&quot;string_double&quot;&gt;double&lt;/string&gt;
    &lt;string name=&quot;string_char&quot;&gt;char&lt;/string&gt;
    &lt;string name=&quot;string_float&quot;&gt;float&lt;/string&gt;
    &lt;string name=&quot;string_int&quot;&gt;int&lt;/string&gt;
    &lt;string name=&quot;string_data_types&quot;&gt;Data types in Object-Oriented  Programming&lt;/string&gt;
&lt;/resources&gt;
</code></pre>
            <h3>OUTPUT</h3>

            <img alt="" src="images/image1.png" title="">
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