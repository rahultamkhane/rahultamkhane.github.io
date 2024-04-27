<?php
require("../../../libs/config.php");
$title = "Develop an android application to display total order placed | " . SITE_NAME;
$description = "Develop an android application to display three checkboxes and one button named 'Order' as shown below. Once you click on button it should toast different selected checkboxes along with items individual and total price";
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
            <h1>Develop an android application to display total order placed</h1>
            <p>Develop an android application to display three checkboxes and one button named &ldquo;Order&rdquo; as shown below. Once you click on button it should toast different selected checkboxes along with items individual and total price</p>
            <h3>activity_main.xml</h3>
            <pre><code class="xml">&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;
&lt;LinearLayout xmlns:android=&quot;http://schemas.android.com/apk/res/android&quot;
    xmlns:app=&quot;http://schemas.android.com/apk/res-auto&quot;
    xmlns:tools=&quot;http://schemas.android.com/tools&quot;
    android:layout_width=&quot;match_parent&quot;
    android:layout_height=&quot;match_parent&quot;
    android:orientation=&quot;vertical&quot;
    tools:context=&quot;.MainActivity&quot;&gt;

    &lt;CheckBox
        android:id=&quot;@+id/checkBox&quot;
        android:layout_width=&quot;wrap_content&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:layout_marginLeft=&quot;144dp&quot;
        android:layout_marginTop=&quot;68dp&quot;
        android:text=&quot;Pizza&quot;/&gt;

    &lt;CheckBox
        android:id=&quot;@+id/checkBox2&quot;
        android:layout_width=&quot;wrap_content&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:layout_marginLeft=&quot;144dp&quot;
        android:layout_marginTop=&quot;28dp&quot;
        android:text=&quot;Coffee&quot; /&gt;

    &lt;CheckBox
        android:id=&quot;@+id/checkBox3&quot;
        android:layout_width=&quot;wrap_content&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:layout_marginLeft=&quot;144dp&quot;
        android:layout_marginTop=&quot;28dp&quot;
        android:text=&quot;Burger&quot;/&gt;

    &lt;Button
        android:id=&quot;@+id/button&quot;
        android:layout_width=&quot;wrap_content&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:layout_marginLeft=&quot;144dp&quot;
        android:layout_marginTop=&quot;184dp&quot;
        android:text=&quot;Order&quot; /&gt;

&lt;/LinearLayout&gt;
</code></pre>
            <h3>MainActivity.java</h3>
            <pre><code class="java">package com.example.myapplication;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.CheckBox;
import android.widget.Toast;
public class MainActivity extends AppCompatActivity {

    CheckBox pizza,coffe,burger;
    Button buttonOrder;

    @Override
    protected void onCreate(Bundle savedInstanceState) {

        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        pizza=(CheckBox)findViewById(R.id.checkBox);
        coffe=(CheckBox)findViewById(R.id.checkBox2);
        burger=(CheckBox)findViewById(R.id.checkBox3);
        buttonOrder=(Button)findViewById(R.id.button);

        //Applying the Listener on the Button click
        buttonOrder.setOnClickListener(new View.OnClickListener(){

            @Override
            public void onClick(View view) {

                int totalamount = 0;
                StringBuilder result = new StringBuilder();
                result.append(&quot;Selected Items:&quot;);

                if(pizza.isChecked()){
                    result.append(&quot;\nPizza 100Rs&quot;);
                    totalamount += 100;
                }
                
                if(coffe.isChecked()){
                    result.append(&quot;\nCoffe 50Rs&quot;);
                    totalamount += 50;
                }

                if(burger.isChecked()){
                    result.append(&quot;\nBurger 120Rs&quot;);
                    totalamount += 120;
                }
                
                result.append(&quot;\nTotal: &quot;+totalamount+&quot;Rs&quot;);
                Toast.makeText(getApplicationContext(), result.toString(), Toast.LENGTH_LONG).show();
            }
        });
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