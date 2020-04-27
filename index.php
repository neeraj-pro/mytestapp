  <html>
      <head>
          <title>welcome</title>
      </head>
      <body>
<h1>Hello world welcome to openshift abc xyz</h1><br><br>

<a href="db_config.php" target="_blank">Click her to check DB connection now </a> <br><br>
<a href="create_table.php" target="_blank">Click her to create table now </a> <br><br>


<center>  
  <?php
  
               echo '<form action="" method="post">
                     <input style="width:50%;height:100px;" type="text" name="p1"  placeholder="Please Enter First Paragraph" /><br><br>
                     <input style="width:50%;height:100px;" type="text" name="p2"  placeholder="Please Enter First Paragraph" /><br><br>
                     <input style="width:50%;height:50px;color:green;" type="submit" name="submit"  value="Compare Text" />
                     </form>';
  
                if(isset($_POST["submit"])) {
                    
                     $para1 = $_POST["p1"];
                     $para2 = $_POST["p2"];
                    
                       $sim = similar_text($para1, $para2, $perc);
                       $per = round($perc, 2);
                       echo '<h1 style="font-size:65px;color:green;">';
                       echo  "similarity is :  $sim ($per %)";
                       echo '</h1>';
                       
                       
                     }
                    
                     

?>
</center>
     </body>
  </html>