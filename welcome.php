<?php

$u="bahzad@gmail";
$p="golozz47";

if(isset($_POST['submit']))
 {
    
   if($_POST['user']==$u && $_POST['pass']==$p )
 {
     
   echo "welcomeeee";
     
 }  
   
  else
{
 echo "<script>location.href='index.php'</script>";

} 
   
}



?>
