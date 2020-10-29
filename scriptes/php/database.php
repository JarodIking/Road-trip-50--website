<?php 

 $con = new PDO ('mysql:host=localhost;dbname=website_mama', 'root' , 'Jarod6985!');
 $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


 $stmt = $con->prepare("SELECT * FROM test");
 $stmt->execute();

 $testdata = $stmt->fetchAll(PDO::FETCH_OBJ);

 //var_dump($testdata);
 


?>