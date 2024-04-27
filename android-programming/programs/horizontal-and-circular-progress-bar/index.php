<?php
require("../../../libs/config.php");
$title = "Develop an android application to display horizontal and circular progress bar | " . SITE_NAME;
$description = "Develop an android application to display horizontal and circular progress bar";
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
            <h1>Develop an android application to display horizontal and circular progress bar</h1>
            <h3>activity_main.xml</h3>
            <pre><code class="xml">&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;
&lt;RelativeLayout xmlns:android=&quot;http://schemas.android.com/apk/res/android&quot;
    xmlns:app=&quot;http://schemas.android.com/apk/res-auto&quot;
    xmlns:tools=&quot;http://schemas.android.com/tools&quot;
    android:layout_width=&quot;match_parent&quot;
    android:layout_height=&quot;match_parent&quot;
    tools:context=&quot;.MainActivity&quot;&gt;

    &lt;ProgressBar
        android:id=&quot;@+id/progressBar&quot;
        style=&quot;?android:attr/progressBarStyleHorizontal&quot;
        android:layout_width=&quot;wrap_content&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:layout_alignParentLeft=&quot;true&quot;
        android:layout_alignParentTop=&quot;true&quot;
        android:layout_marginLeft=&quot;23dp&quot;
        android:layout_marginTop=&quot;20dp&quot;
        android:indeterminate=&quot;false&quot;
        android:max=&quot;100&quot;
        android:minHeight=&quot;50dp&quot;
        android:minWidth=&quot;200dp&quot;
        android:progress=&quot;1&quot; /&gt;

    &lt;ProgressBar
        android:id=&quot;@+id/progressBar_cyclic&quot;
        android:layout_width=&quot;wrap_content&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:minHeight=&quot;50dp&quot;
        android:minWidth=&quot;50dp&quot;
        android:layout_centerVertical=&quot;true&quot;
        android:layout_centerHorizontal=&quot;true&quot; /&gt;

    &lt;TextView
        android:id=&quot;@+id/textView&quot;
        android:layout_width=&quot;wrap_content&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:layout_alignLeft=&quot;@+id/progressBar&quot;
        android:layout_below=&quot;@+id/progressBar&quot;/&gt;

&lt;/RelativeLayout&gt;
</code></pre>
            <h3>MainActivity.java</h3>
            <pre><code class="java">package com.example.circularprogressbar;
import android.os.Handler;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.widget.ProgressBar;
import android.widget.TextView;

public class MainActivity extends AppCompatActivity {

    private ProgressBar progressBar;
    private int progressStatus = 0;
    private TextView textView;
    private Handler handler = new Handler();

    @Override
    protected void onCreate(Bundle savedInstanceState) {

        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        progressBar = (ProgressBar) findViewById(R.id.progressBar);
        textView = (TextView) findViewById(R.id.textView);

        // Start long running operation in a background thread
        new Thread(new Runnable() {

            public void run() {

                while (progressStatus &lt; 100) {

                    progressStatus += 1;
                    // Update the progress bar and display the
                    //current value in the text view

                    handler.post(new Runnable() {
                      
                        public void run() {

                            progressBar.setProgress(progressStatus);
                        textView.setText(progressStatus+&quot;/&quot;+progressBar.getMax());
                        }
                    });

                    try {
                        Thread.sleep(200);
                    } 
                    catch (InterruptedException e) {
                        e.printStackTrace();
                    }
                }
            }
        }).start();
    }
}
</code></pre>
            <h3>OUTPUT</h3>

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