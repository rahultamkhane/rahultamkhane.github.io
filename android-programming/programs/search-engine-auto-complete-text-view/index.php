<?php
require("../../../libs/config.php");
$title = "Develop an android application to create a first display screen of any search engine using AutoCompleteTextView | " . SITE_NAME;
$description = "Develop an android application to create a first display screen of any search engine using AutoCompleteTextView";
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
            <h1>Develop an android application to create a first display screen of any search engine using AutoCompleteTextView</h1>
            <p></p>
            <h3>activity_main.xml</h3>
            <pre><code class="xml">&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;
&lt;RelativeLayout xmlns:android=&quot;http://schemas.android.com/apk/res/android&quot;
    xmlns:app=&quot;http://schemas.android.com/apk/res-auto&quot;
    xmlns:tools=&quot;http://schemas.android.com/tools&quot;
    android:layout_width=&quot;match_parent&quot;
    android:layout_height=&quot;match_parent&quot;
    tools:context=&quot;.MainActivity&quot;
    android:padding=&quot;20dp&quot;&gt;

    &lt;TextView android:id=&quot;@+id/textView&quot;
        android:layout_width=&quot;match_parent&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:text=&quot;Showing AutoCompleteTextView for Serach Engine&quot;
        android:gravity=&quot;center&quot;
        android:layout_marginTop=&quot;50dp&quot;
        android:textSize=&quot;20sp&quot;/&gt;

    &lt;AutoCompleteTextView android:id=&quot;@+id/auto_complete&quot;
        android:layout_width=&quot;match_parent&quot;
        android:layout_height=&quot;50dp&quot;
        android:textSize=&quot;20sp&quot;
        android:hint=&quot;Enter here&quot;
        android:layout_below=&quot;@id/textView&quot;
        android:layout_marginTop=&quot;30dp&quot;/&gt;
&lt;/RelativeLayout&gt;
</code></pre>
            <h3>MainActivity.java</h3>
            <pre><code class="java">package com.example.searchengineautoctextview;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.widget.ArrayAdapter;
import android.widget.AutoCompleteTextView;

public class MainActivity extends AppCompatActivity {

    AutoCompleteTextView autotextview;
    String search_engines[] = {&quot;Yahoo&quot;, &quot;Google&quot;, &quot;MSN&quot;, &quot;Bing&quot;, &quot;Wiki&quot;};

    @Override
    protected void onCreate(Bundle savedInstanceState) {

        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        autotextview = findViewById(R.id.auto_complete);
        ArrayAdapter&lt;String&gt; adapter = new ArrayAdapter&lt;String&gt;(this, android.R.layout.simple_list_item_1,  search_engines);
        autotextview.setThreshold(1);
        autotextview.setAdapter(adapter);
    }
}
</code></pre>
            <h3>&nbsp;OUTPUT</h3>

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