<?php
require("../../../libs/config.php");
$title = "Develop an android application to validate User login | " . SITE_NAME;
$description = "Develop an android application to validate User login";
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
            <h1>Develop an android application to validate User login</h1>
            <p></p>
            <p>In this tutorial, we will create the login form with necessary validations like length of username and password, empty text fields, count of unsuccessful login attempts. And will display the login successful/Unsuccessful toast message</p>
            <h3>AndroidManifest.xml</h3>
            <pre><code class="xml">&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;
&lt;manifest xmlns:android=&quot;http://schemas.android.com/apk/res/android&quot;
    package=&quot;com.example.loginvalidateapp&quot;&gt;
    &lt;application
        android:allowBackup=&quot;true&quot;
        android:icon=&quot;@mipmap/ic_launcher&quot;
        android:label=&quot;@string/app_name&quot;
        android:roundIcon=&quot;@mipmap/ic_launcher_round&quot;
        android:supportsRtl=&quot;true&quot;
        android:theme=&quot;@style/AppTheme&quot;&gt;

        &lt;activity android:name=&quot;.MainActivity&quot;&gt;
            &lt;intent-filter&gt;
                &lt;action android:name=&quot;android.intent.action.MAIN&quot; /&gt;
                &lt;category android:name=&quot;android.intent.category.LAUNCHER&quot; /&gt;
            &lt;/intent-filter&gt;
        &lt;/activity&gt;
    &lt;/application&gt;
&lt;/manifest&gt;
</code></pre>
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

    &lt;TextView
        android:layout_width=&quot;match_parent&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:text=&quot;Login Form&quot;
        android:layout_marginTop=&quot;100dp&quot;
        android:textSize=&quot;35sp&quot;
        android:textColor=&quot;@color/colorAccent&quot;
        android:gravity=&quot;center_horizontal&quot;/&gt;

    &lt;TextView
        android:layout_width=&quot;match_parent&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:text=&quot;Username&quot;
        android:layout_marginTop=&quot;100dp&quot;
        android:textSize=&quot;20sp&quot;/&gt;

    &lt;EditText android:id=&quot;@+id/etUsername&quot;
        android:layout_width=&quot;match_parent&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:inputType=&quot;text&quot;
        android:textSize=&quot;20sp&quot;/&gt;

    &lt;TextView
        android:layout_width=&quot;match_parent&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:text=&quot;Password&quot;
        android:textSize=&quot;20sp&quot;/&gt;

    &lt;EditText android:id=&quot;@+id/etPassword&quot;
        android:layout_width=&quot;match_parent&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:inputType=&quot;textPassword&quot;
        android:textSize=&quot;20sp&quot;/&gt;

    &lt;Button
        android:layout_width=&quot;wrap_content&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:text=&quot;Login&quot;
        android:layout_gravity=&quot;center_horizontal&quot;
        android:layout_marginTop=&quot;50dp&quot;
        android:onClick=&quot;login&quot; /&gt;

&lt;/LinearLayout&gt;
</code></pre>
            <h3>MainActivity.java</h3>
            <pre><code class="java">package com.example.loginvalidateapp;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.EditText;
import android.widget.TextView;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity {

    EditText etUsername,etPassword;

    @Override
    protected void onCreate(Bundle savedInstanceState) {

        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        etUsername = findViewById(R.id.etUsername);
        etPassword = findViewById(R.id.etPassword);
    }

    public void login(View view) {
        String msg = validateUser();
        Toast.makeText(MainActivity.this, msg, Toast.LENGTH_SHORT).show();
    }

    private String validateUser() {
        String uname = etUsername.getText().toString();
        String pwd = etPassword.getText().toString();
       
        if(uname.length() != 5 || pwd.length() != 5) {
            return &quot;Username and password must have 5 characters&quot;;
        }

        if(uname.equals(&quot;&quot;) || pwd.equals(&quot;&quot;)) {
            return &quot;Plz enter both username and password&quot;;
        }

        if(uname.equals(&quot;admin&quot;) && pwd.equals(&quot;12345&quot;)) {
            return &quot;Login Successful&quot;;
        }
        else {
            return &quot;Login Unuccessful&quot;;
        }
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