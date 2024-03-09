<?php
include 'config.php';



$id=$_GET['id_rm'];
$sql="DELETE FROM rumahmakan,rating,menu WHERE rumahmakan.id_rm=$id and rating.id_rm=$id AND menu.id_rm=$id";
$query=mysqli_query($conn,$sql);
if($query){
	echo "<script language='JavaScript'>
  	  			(window.alert('Data User sudah dihapus'))a
  	  			</script>";
}
else{
		echo "<script language='JavaScript'>
  	  			(window.alert('Data User tidak dapat dihapus'))

  	  			</script>";
}
?>