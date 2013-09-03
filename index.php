<html>
    <body>
    <h1> <?php echo "Hello PHP";?></h1>
         <br>
        <?php
            $conn = mysql_connect('CG3002-12-z.comp.nus.edu.sg', 'root', 'group12_sql') or die('Error cannot connect to MySQL');
            if ($conn)
                echo "Connected successfully to mysql";
            echo "<br>";

            $conn2 = mysql_select_db('testing');
            if ($conn2) echo "Connected successfully to database";
       ?>
   </body>
</html>
