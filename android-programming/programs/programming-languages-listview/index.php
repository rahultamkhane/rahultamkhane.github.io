<?php
require("../../../libs/config.php");
$title = "Develop an android application to display programming languages using Android ListView | " . SITE_NAME;
$description = "Develop an android application to display programming languages using Android ListView";
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
            <h1>Develop an android application to display programming languages using Android ListView</h1>
            <h3>activity_main.xml</h3>
            <pre><code class="xml">&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;
&lt;RelativeLayout xmlns:android=&quot;http://schemas.android.com/apk/res/android&quot;
    xmlns:app=&quot;http://schemas.android.com/apk/res-auto&quot;
    xmlns:tools=&quot;http://schemas.android.com/tools&quot;
    android:layout_width=&quot;match_parent&quot;
    android:layout_height=&quot;match_parent&quot;
    tools:context=&quot;.MainActivity&quot;&gt;

    &lt;ListView android:id=&quot;@+id/list_view&quot;
        android:layout_width=&quot;match_parent&quot;
        android:layout_height=&quot;match_parent&quot;/&gt;

&lt;/RelativeLayout&gt;
</code></pre>
            <h3>MainActivity.java</h3>
            <pre><code class="java">package com.example.programminglanguageslistview;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.ListView;
import android.widget.TextView;
import android.widget.Toast;
public class MainActivity extends AppCompatActivity {

    String programming_langs[] = {&quot;Android&quot;, &quot;Java&quot;, &quot;Php&quot;, &quot;Hadoop&quot;, &quot;Sap&quot;, &quot;Python&quot;, &quot;Ajax&quot;, &quot;C++&quot;, &quot;Ruby&quot;, &quot;Rails&quot;, &quot;.Net&quot;};
    ListView listView;

    @Override
    protected void onCreate(Bundle savedInstanceState) {

        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        listView = findViewById(R.id.list_view);

        ArrayAdapter&lt;String&gt; adapter = new ArrayAdapter&lt;String&gt;(this, android.R.layout.simple_list_item_1, programming_langs);
        listView.setAdapter(adapter);

        listView.setOnItemClickListener(new AdapterView.OnItemClickListener() {

            @Override
            public void onItemClick(AdapterView&lt;?&gt; parent, View view, int position, long id) {
              Toast.makeText(MainActivity.this, ((TextView)view).getText().toString(), Toast.LENGTH_SHORT).show();
            }
        });
    }
}
</code></pre>
            <p></p>
            <h3>&nbsp;OUTPUT</h3>

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