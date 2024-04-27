<?php
require("../../../libs/config.php");
$title = "Develop an android application to calculate Factorial of a number using Activity Intents | " . SITE_NAME;
$description = "Develop an android application to calculate Factorial of a number using Activity Intents";
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
            <h1>Develop an android application to calculate Factorial of a number using Activity Intents</h1>
            <p></p>
            <p>In this tutorial we will create two screens. First screen will take one number input from the user. After clicking on the Factorial button, the second screen will open and it should display a factorial of the given number. </p>
            <h3>activity_main.xml</h3>
            <pre><code class="xml">&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;
&lt;LinearLayout xmlns:android=&quot;http://schemas.android.com/apk/res/android&quot;
    xmlns:app=&quot;http://schemas.android.com/apk/res-auto&quot;
    xmlns:tools=&quot;http://schemas.android.com/tools&quot;
    android:layout_width=&quot;match_parent&quot;
    android:layout_height=&quot;match_parent&quot;
    tools:context=&quot;.MainActivity&quot;
    android:orientation=&quot;vertical&quot;
    android:padding=&quot;20dp&quot;&gt;

    &lt;EditText android:id=&quot;@+id/etNumber&quot;
        android:layout_width=&quot;match_parent&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:hint=&quot;Enter the number&quot;
        android:inputType=&quot;number&quot;
        android:layout_marginTop=&quot;50dp&quot;/&gt;

    &lt;Button
        android:layout_width=&quot;match_parent&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:text=&quot;Factorial&quot;
        android:onClick=&quot;displayFactorial&quot;/&gt;

&lt;/LinearLayout&gt;
</code></pre>
            <h3>MainActivity.java</h3>
            <pre><code class="java">package com.example.factorialintent;
import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.EditText;

public class MainActivity extends AppCompatActivity {

    EditText etNumber;

    @Override
    protected void onCreate(Bundle savedInstanceState) {

        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        etNumber = findViewById(R.id.etNumber);
    }

    public void displayFactorial(View view) {

        Intent i = new Intent(MainActivity.this, FactorialActivity.class);
        i.putExtra(&quot;number&quot;, etNumber.getText().toString());
        startActivity(i);
    }
}
</code></pre>
            <h3>activity_factorial.xml</h3>
            <pre><code class="xml">&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;
&lt;RelativeLayout xmlns:android=&quot;http://schemas.android.com/apk/res/android&quot;
    xmlns:app=&quot;http://schemas.android.com/apk/res-auto&quot;
    xmlns:tools=&quot;http://schemas.android.com/tools&quot;
    android:layout_width=&quot;match_parent&quot;
    android:layout_height=&quot;match_parent&quot;
    tools:context=&quot;.FactorialActivity&quot;
    android:padding=&quot;20dp&quot;&gt;

    &lt;TextView android:id=&quot;@+id/tv&quot;
        android:layout_width=&quot;match_parent&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:text=&quot;Factorial of number is&quot;
        style=&quot;@style/TextAppearance.AppCompat.Large&quot;/&gt;

&lt;/RelativeLayout&gt;
</code></pre>
            <h3>FactorialActivity.java</h3>
            <pre><code class="java">package com.example.factorialintent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.widget.TextView;

public class FactorialActivity extends AppCompatActivity {

    TextView tv;

    @Override
    protected void onCreate(Bundle savedInstanceState) {

        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_factorial);

        Bundle b = getIntent().getExtras();

        int no = Integer.parseInt(b.getString(&quot;number&quot;));
        long f=1;

        for(int i=no; i&gt;0; i--)
        {
            f = f * i;
        }
        
        tv = findViewById(R.id.tv);
        tv.setText(&quot;Factorial of &quot; + no + &quot; is &quot; + f);
    }
}
</code></pre>
            <h3>OUTPUT</h3>

            <img alt="" src="images/image2.png" title="">
            <p></p>
            <p></p>
            <p></p>
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