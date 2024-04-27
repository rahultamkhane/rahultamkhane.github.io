<?php
require("../../../libs/config.php");
$title = "Develop an android application to demonstrate Android Life Cycle methods  | " . SITE_NAME;
$description = "Develop an android application to demonstrate Android Life Cycle methods ";
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
            <h1>Develop an android application to demonstrate Android Life Cycle methods </h1>
            <h3>activity_main.xml</h3>
            <pre><code class="xml">&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;
&lt;RelativeLayout xmlns:android=&quot;http://schemas.android.com/apk/res/android&quot;
    xmlns:app=&quot;http://schemas.android.com/apk/res-auto&quot;
    xmlns:tools=&quot;http://schemas.android.com/tools&quot;
    android:layout_width=&quot;match_parent&quot;
    android:layout_height=&quot;match_parent&quot;
    tools:context=&quot;.MainActivity&quot;&gt;

    &lt;TextView
        android:layout_width=&quot;wrap_content&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:text=&quot;Hello World!&quot; /&gt;

&lt;/RelativeLayout&gt;
</code></pre>
            <h3>MainActivity.java</h3>
            <pre><code class="java">package com.example.activitylifecycle;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.util.Log;

public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {

        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        Log.d(&quot;MainActivity&quot;, &quot;onCreate() called&quot;);
    }

    @Override
    protected void onStart() {

        super.onStart();
        Log.d(&quot;MainActivity&quot;, &quot;onStart() called&quot;);
    }

    @Override
    protected void onResume() {

        super.onResume();
        Log.d(&quot;MainActivity&quot;, &quot;onResume() called&quot;);
    }

    @Override
    protected void onRestart() {

        super.onRestart();
        Log.d(&quot;MainActivity&quot;, &quot;onRestart() called&quot;);
    }

    @Override
    protected void onPause() {

        super.onPause();
        Log.d(&quot;MainActivity&quot;, &quot;onPause() called&quot;);
    }

    @Override
    protected void onStop() {

        super.onStop();
        Log.d(&quot;MainActivity&quot;, &quot;onStop() called&quot;);
    }

    @Override
    protected void onDestroy() {
      
        super.onDestroy();
        Log.d(&quot;MainActivity&quot;, &quot;onDestroy() called&quot;);
    }
}
</code></pre>
            <h3>OUTPUT</h3>

            <img alt="" src="images/image1.png" title="">
            <p></p>
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