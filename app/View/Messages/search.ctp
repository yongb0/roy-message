<?php

$key=$_GET['key'];
                $array = array();
                $querys = mysqli_connect("localhost","root","","demos");
                $query =mysqli_query($querys,"select * from cfg_demos where title LIKE '%{$key}%'");
                while($row=mysqli_fetch_assoc($query))
                {
                  $array[] = $row['title'];
                }
                print_r($array);
                echo json_encode($array);
                
                
?>

