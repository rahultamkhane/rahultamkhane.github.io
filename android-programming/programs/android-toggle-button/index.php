<?php
require("../../../libs/config.php");
$title = "Develop an application to create a toggle button to display ON / OFF Bluetooth on the display screen | " . SITE_NAME;
$description = "Develop an application to create a toggle button to display ON / OFF Bluetooth on the display screen";
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
            <h1>Develop an application to create a toggle button to display ON / OFF Bluetooth on the display screen</h1>
            <h3>activity_main.xml</h3>
            <pre><code class="xml">&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;
&lt;RelativeLayout xmlns:android=&quot;http://schemas.android.com/apk/res/android&quot;
    xmlns:app=&quot;http://schemas.android.com/apk/res-auto&quot;
    xmlns:tools=&quot;http://schemas.android.com/tools&quot;
    android:layout_width=&quot;match_parent&quot;
    android:layout_height=&quot;match_parent&quot;
    tools:context=&quot;.MainActivity&quot;
    android:padding=&quot;20dp&quot;&gt;

    &lt;ToggleButton
        android:id=&quot;@+id/toggleButton&quot;
        android:layout_width=&quot;wrap_content&quot;
        android:layout_height=&quot;50dp&quot;
        android:text=&quot;ToggleButton&quot;
        android:textOn=&quot;ON&quot;
        android:textOff=&quot;OFF&quot;
        android:textSize=&quot;20sp&quot;
        android:layout_centerInParent=&quot;true&quot;/&gt;

    &lt;TextView android:id=&quot;@+id/textView&quot;
        android:layout_width=&quot;match_parent&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:layout_below=&quot;@id/toggleButton&quot;
        android:text=&quot;Bluetooth is OFF&quot;
        android:gravity=&quot;center_horizontal&quot;
        android:layout_marginTop=&quot;20dp&quot;
        android:textSize=&quot;20sp&quot;
        android:textColor=&quot;@color/colorAccent&quot;/&gt;

&lt;/RelativeLayout&gt;
</code></pre>
            <h3>MainActivity.java</h3>
            <pre><code class="java">package com.example.togglebuttonbluetooth;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.widget.CompoundButton;
import android.widget.TextView;
import android.widget.ToggleButton;

public class MainActivity extends AppCompatActivity {

    ToggleButton toggleButton;
    TextView textView;

    @Override
    protected void onCreate(Bundle savedInstanceState) {

        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        toggleButton = findViewById(R.id.toggleButton);
        textView = findViewById(R.id.textView);

        toggleButton.setOnCheckedChangeListener(new CompoundButton.OnCheckedChangeListener() {

            @Override
            public void onCheckedChanged(CompoundButton buttonView, boolean isChecked) {

                if(isChecked)
                {
                    textView.setText(&quot;Bluetooth is &quot; + toggleButton.getTextOn());
                }
                else
                {
                    textView.setText(&quot;Bluetooth is &quot; + toggleButton.getTextOff());
                }
            }
        });
    }
}
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