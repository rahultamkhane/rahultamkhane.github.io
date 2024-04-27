<?php
require("../../../libs/config.php");
$title = "Develop an android application to accept username and password from the end user using TextView and EditText | " . SITE_NAME;
$description = "Develop an android application to accept username and password from the end user using TextView and EditText";
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
            <h1>Develop an android application to accept username and password from the end user using TextView and EditText</h1>
            <p></p>
            <h3>activity_main.xml</h3>
            <pre><code class="xml">&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;
&lt;LinearLayout xmlns:android=&quot;http://schemas.android.com/apk/res/android&quot;
    xmlns:app=&quot;http://schemas.android.com/apk/res-auto&quot;
    xmlns:tools=&quot;http://schemas.android.com/tools&quot;
    android:layout_width=&quot;match_parent&quot;
    android:layout_height=&quot;match_parent&quot;
    android:gravity=&quot;center_vertical&quot;
    android:orientation=&quot;vertical&quot;
    tools:context=&quot;.MainActivity&quot;
    android:padding=&quot;10dp&quot;&gt;

    &lt;TextView
        android:layout_width=&quot;wrap_content&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:text=&quot;Enter Username&quot;
        style=&quot;@android:style/TextAppearance.Large&quot;/&gt;

    &lt;EditText
        android:id=&quot;@+id/etUsername&quot;
        android:layout_width=&quot;match_parent&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:ems=&quot;10&quot;
        android:inputType=&quot;text&quot;
        style=&quot;@android:style/TextAppearance.Large&quot; /&gt;

    &lt;TextView
        android:layout_width=&quot;wrap_content&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:text=&quot;Enter Password&quot;
        android:layout_marginTop=&quot;10dp&quot;
        style=&quot;@android:style/TextAppearance.Large&quot; /&gt;

    &lt;EditText
        android:id=&quot;@+id/etPassword&quot;
        android:layout_width=&quot;match_parent&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:ems=&quot;10&quot;
        android:inputType=&quot;textPassword&quot;
        style=&quot;@android:style/TextAppearance.Large&quot; /&gt;

    &lt;Button android:id=&quot;@+id/btnLogin&quot;
        android:layout_width=&quot;wrap_content&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:text=&quot;Login&quot;
        android:layout_gravity=&quot;right&quot;
        android:layout_marginTop=&quot;20dp&quot;
        style=&quot;@android:style/TextAppearance.Large&quot;/&gt;
&lt;/LinearLayout&gt;
</code></pre>
            <h3>MainActivity.java</h3>
            <pre><code class="java">package com.example.userloginapp;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity {

    EditText etUsername, etPassword;
    Button btnLogin;

    @Override
    protected void onCreate(Bundle savedInstanceState) {

        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        etUsername = findViewById(R.id.etUsername);
        etPassword = findViewById(R.id.etPassword);
        btnLogin = findViewById(R.id.btnLogin);

        btnLogin.setOnClickListener(new View.OnClickListener() {

            @Override
            public void onClick(View v) {

                String uname = etUsername.getText().toString();
                String pwd = etPassword.getText().toString();
                
                if(uname.equals(&quot;admin&quot;) && pwd.equals(&quot;123&quot;)) {
                    Toast.makeText(getApplicationContext(), &quot;Login Successful&quot;, Toast.LENGTH_SHORT).show();
                }
                else {
                    Toast.makeText(getApplicationContext(), &quot;Login Unsuccessful&quot;, Toast.LENGTH_SHORT).show();
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