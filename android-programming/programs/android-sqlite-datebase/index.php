<?php
require("../../../libs/config.php");
$title = "Develop an android application to insert data in SQLite database and show the added records | " . SITE_NAME;
$description = "Develop an android application to insert data in SQLite database and show the added records";
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
            <h1>Develop an android application to insert data in SQLite database and show the added records </h1>
            <h3>AndroidManifest.xml</h3>
            <pre><code class="xml">&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;
&lt;manifest xmlns:android=&quot;http://schemas.android.com/apk/res/android&quot;
    package=&quot;com.example.sqlitedbapp&quot;&gt;
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
    xmlns:tools=&quot;http://schemas.android.com/tools&quot;
    android:layout_width=&quot;match_parent&quot;
    android:layout_height=&quot;match_parent&quot;
    tools:context=&quot;.MainActivity&quot;
    android:padding=&quot;20dp&quot;
    android:orientation=&quot;vertical&quot;&gt;

    &lt;EditText android:id=&quot;@+id/etRN&quot;
        android:layout_width=&quot;match_parent&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:hint=&quot;Enter roll no&quot; /&gt;

    &lt;EditText android:id=&quot;@+id/etName&quot;
        android:layout_width=&quot;match_parent&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:hint=&quot;Enter name&quot; /&gt;

    &lt;Button android:id=&quot;@+id/btnAddStudent&quot;
        android:layout_width=&quot;match_parent&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:text=&quot;Add Student&quot;
        android:onClick=&quot;addNewStudent&quot;/&gt;

    &lt;TextView android:id=&quot;@+id/tvInfo&quot;
        android:layout_width=&quot;match_parent&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:textSize=&quot;22sp&quot;
        android:padding=&quot;10dp&quot;/&gt;

&lt;/LinearLayout&gt;
</code></pre>
            <h3>MainActivity.java</h3>
            <pre><code class="java">package com.example.sqlitedbapp;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.EditText;
import android.widget.TextView;
import java.util.List;

public class MainActivity extends AppCompatActivity {

    DatabaseHelper databaseHelper;
    EditText etRN, etName;
    TextView tvInfo;

    @Override
    protected void onCreate(Bundle savedInstanceState) {

        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        etRN = findViewById(R.id.etRN);
        etName = findViewById(R.id.etName);
        tvInfo = findViewById(R.id.tvInfo);
        databaseHelper = new DatabaseHelper(MainActivity.this);
    }

    public void addNewStudent(View view) {

        int rn = Integer.parseInt(etRN.getText().toString());
        String name = etName.getText().toString();
        databaseHelper.addStudent(rn, name);
        displayAllStudents();
    }

    private void displayAllStudents() {

        List&lt;Student&gt; studentList = databaseHelper.allStudents();
        String data = &quot;&quot;;

        for(Student s : studentList) {
            data += s.getRollno() + &quot;, &quot; + s.getName() + &quot;\n&quot;;
        }
        tvInfo.setText(data);
    }
}
</code></pre>
            <h3>DatabaseHelper.java</h3>
            <pre><code class="java">package com.example.sqlitedbapp;
import android.content.ContentValues;
import android.content.Context;
import android.database.Cursor;
import android.database.sqlite.SQLiteDatabase;
import android.database.sqlite.SQLiteOpenHelper;
import java.io.File;
import java.util.ArrayList;
import java.util.List;

public class DatabaseHelper extends SQLiteOpenHelper {
  
    private static final int DATABASE_VERSION=1;
    private static final String DATABASE_NAME = &quot;mydb.db&quot;;
    private static final String TABLE_NAME = &quot;StudentData&quot;;
    private static final String COLUMN_ID = &quot;_id&quot;;
    private static final String COLUMN_ROLL_NO = &quot;RollNo&quot;;
    private static final String COLUMN_NAME = &quot;Name&quot;;

    public DatabaseHelper(Context context) {
        super(context, DATABASE_NAME, null, DATABASE_VERSION);
    }
    
    @Override
    public void onCreate(SQLiteDatabase db) {
        String query = &quot;CREATE TABLE &quot; + TABLE_NAME + &quot;( &quot; + COLUMN_ID + &quot; INTEGER PRIMARY KEY AUTOINCREMENT, &quot; + COLUMN_ROLL_NO + &quot; TEXT&quot;+&quot;, &quot; + COLUMN_NAME + &quot;);&quot;;
        try {
            db.execSQL(query);
        }
        catch(Exception e) {
            e.printStackTrace();
        }
    }

    @Override
    public void onUpgrade(SQLiteDatabase db, int oldVersion, int newVersion) {
        db.execSQL(&quot;DROP TABLE IF EXISTS &quot; + TABLE_NAME);
        onCreate(db);
    }

    public void addStudent(int rollno, String name) {
        ContentValues values = new ContentValues();
        SQLiteDatabase db = getWritableDatabase();
        values.put(COLUMN_ROLL_NO, rollno);
        values.put(COLUMN_NAME, name);
        db.insert(TABLE_NAME, null, values);
        db.close();
    }

    public List allStudents() {
        List&lt;Student&gt; list = new ArrayList&lt;Student&gt;();
        String query = &quot;SELECT DISTINCT &quot; + COLUMN_ROLL_NO + &quot;,&quot; + COLUMN_NAME + &quot; FROM &quot; + TABLE_NAME + &quot; ORDER BY &quot;+ COLUMN_ID;
        SQLiteDatabase db = getWritableDatabase();
        Cursor c = db.rawQuery(query, null);
        int rn;
        String n;

        while (c.moveToNext()) {
            rn = c.getInt(c.getColumnIndex(COLUMN_ROLL_NO));
            n = c.getString(c.getColumnIndex(COLUMN_NAME));
            list.add(new Student(rn, n));
        }
        db.close();
        return list;
    }

    public void delete(int rollno) {

        SQLiteDatabase db = getWritableDatabase();
        db.execSQL(&quot;DELETE FROM &quot; + TABLE_NAME + &quot; WHERE &quot; + COLUMN_ROLL_NO + &quot;=&quot; + rollno);
    }
}
</code></pre>
            <h3>Student.java</h3>
            <pre><code class="java">package com.example.sqlitedbapp;
public class Student {

    int rollno;
    String name;

    public Student(int rollno, String name) {
        this.rollno = rollno;
        this.name = name;
    }

    public int getRollno() {
        return rollno;
    }

    public void setRollno(int rollno) {
        this.rollno = rollno;
    }

    public String getName() {
        return name;
    }
    
    public void setName(String name) {
        this.name = name;
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