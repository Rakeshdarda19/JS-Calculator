<?php
  $server="localhost";
  $user="root";
  $password="";
  $db="calc";
  
  $con=mysqli_connect($server,$user,$password,$db);

 if(isset($_POST['submit'])){	
	$name=$_POST['name'];
	$class=$_POST['class'];
	$roll=$_POST['roll'];
	$tm=$_POST['tm'];
    $am=$_POST['am'];
    $grade=$_POST['grade'];
    $remark=$_POST['remark'];
	
	$insertuery="insert into calce(name,class,roll,tm,am,grade,remark) values('$name','$class',$roll,'$tm','$am','$grade','$remark')";
	$query=mysqli_query($con,$insertuery);
	
	if($query)
	{
		echo "successfully insert";
	}
	
	else{
		echo " not sucessfully insert";
	}
	
	
}

else{
	echo "not sucessfully"; 
}
?>