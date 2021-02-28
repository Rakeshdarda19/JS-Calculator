<html>
	<head>
		<title>Add two integer numbers using JavaScript.</title>
        <link rel="stylesheet" href="style.css">
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <script type="text/javascript" src="file.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    </head>
    <body>
 
        <div class="container">
            <div class="page-header bg-dark">
                <h2 class='fas fa-graduation-cap' style='font-size:48px;color:blue'>SCHOOL RESULTS</h2>
              </div>
           <div class="row">
            <div class="col-sm-6" >
                 <div class="card1" >
            
                    <div class="card-body">
                        <h4 class="card-title">Result calculator</h4>


                        <table class="table table-striped">
                            <tr><td>Name : </td><td><input type="text"  class="textbox" id="txtName" ></td></tr>
                            <tr><td>Class: </td><td><input type="text"  class="textbox" id="txtClass" ></td></tr>
                            <tr><td>Roll: </td><td><input type="text"  class="textbox" id="txtroll" ></td></tr>
                            <tr><td>No of subject you enter marks:  </td><td><input type="text"  class="textbox" id="ns" ></td></tr>
                        </table>



                               
             
                                            <table class="table table-striped">
                                                <tr><td>SUBJECT 1 </td><td><input type="text"  class="textbox" id="textIn1" ></td></tr>
                                                <tr><td>SUBJECT 2 </td><td><input type="text" class="textbox"  id="textIn2"></td></tr>
                                                <tr><td>SUBJECT 3 </td><td><input type="text"  class="textbox" id="textIn3" ></td></tr>
                                                <tr><td>SUBJECT 4 </td><td><input type="text" class="textbox"  id="textIn4"></td></tr>
                                                <tr><td>SUBJECT 5 </td><td><input type="text"  class="textbox" id="textIn5" ></td></tr>
                                                <tr><td>SUBJECT 6 </td><td><input type="text" class="textbox"  id="textIn6"></td></tr>
                                                <tr><td>SUBJECT 7 </td><td><input type="text"  class="textbox" id="textIn7" ></td></tr>
                                                <tr><td>SUBJECT 8 </td><td><input type="text" class="textbox"  id="textIn8"></td></tr>
                                                <tr><td>SUBJECT 9 </td><td><input type="text"  class="textbox" id="textIn9" ></td></tr>
                                                <tr><td>SUBJECT 10 </td><td><input type="text" class="textbox"  id="textIn10"></td></tr>
                                                
                                                <tr><td></td><td><input type="button" class="btn btn-success" id="btnSum" value="Calculate" onClick="addTwoNumbers('textIn1','textIn2')"></td></tr>
                                                </table>



             
                           </div>
                       </div>
               </div>
            <div class="col-sm-6" >
                <div class="card2" >
            
                  <div class="card-body">
                     <h4 class="card-title">RESULTS</h4>

                             <form action=" " method="POST">
                                <table class="table table-striped">
                                    <tr><td>Name</td><td><input type="text"  name="name" id="txtStudentName" readonly></td></tr>
                                    <tr><td>Class</td><td><input type="text"  name="class" id="txtStudentClass" readonly></td></tr>
                                    <tr><td>Roll</td><td><input type="text"  name="roll" id="txtStudentRoll" readonly></td></tr>
                                
                                    <tr><td>Total Marks</td><td><input type="text"  name="tm" id="txtTotalMarks" readonly></td></tr>
                                    <tr><td>Average Marks</td><td><input type="text"  name="am" id="txtAvgMarks" readonly></td></tr>
                                    <tr><td>Grade</td><td><input type="text"   name="grade"id="txtGrade" readonly></td></tr>
                                    <tr><td>Remarks</td><td><input type="text"  name="remark" id="txtResult" readonly></td></tr>
                                
                                   <input type="button" id="btnSum" class="btn btn-danger"  value="PRINT PAGE" onClick=window.print() />
                                 <button name="submit"> save </button>
                                </table>
                                   </form>
                    </div>
                </div>
              </div>
             </div>
          </div>
          
          <br>
          
          
        </body>

</html>





<?php
   include 'dbcon.php';

 if(isset($_POST['submit'])){ 
  $name=$_POST['name'];
  $class=$_POST['class'];
  $roll=$_POST['roll'];
  $tm=$_POST['tm'];
    $am=$_POST['am'];
    $grade=$_POST['grade'];
    $remark=$_POST['remark'];
  
  $insertuery="insert into calc(name,class,roll,tm,am,grade,remark) values('$name','$class',$roll,'$tm','$am','$grade','$remark')";
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