

    function addTwoNumbers(){
        var x=document.getElementById("textIn1").value;
        var y=document.getElementById("textIn2").value;
        var a=document.getElementById("textIn3").value;
        var b=document.getElementById("textIn4").value;
        var c=document.getElementById("textIn5").value;
        var d=document.getElementById("textIn6").value;
        var e=document.getElementById("textIn7").value;
        var f=document.getElementById("textIn8").value;
        var g=document.getElementById("textIn9").value;
        var h=document.getElementById("textIn10").value;
        var z=document.getElementById("ns").value;
        
        var totalMarks=0;
        var per=0;
        var grade = "";
        var result = "";
        
        totalMarks=(Number(x)+Number(y)+Number(a)+Number(b)+Number(c)+Number(d)+Number(e)+Number(f)+Number(g)+Number(h));
        per=totalMarks/(Number(z));
        switch(
            
                
                    //usage of ternary operator inside switch

                    (per > 60 && per <= 100) ? 1 : 
                    (per > 50 && per < 60) ? 2 : 
                    (per > 40 && per < 50) ? 3 : 
                    (per > 0 && per < 40) ? 4 : 0
                  )
                    
                    {
                        case 1 :grade = "A";result="First Class";break;
                        case 2 :grade = "B"; result="Second Class";break;
                        case 3 :grade = "C"; result="Third Class";break;
                        case 4 :grade = "D"; result="Fail";break;
                    }
        
                    document.getElementById('txtStudentName').value = document.getElementById('txtName').value;
            document.getElementById('txtStudentClass').value = document.getElementById('txtClass').value;
            document.getElementById('txtStudentRoll').value = document.getElementById('txtroll').value;
            document.getElementById('txtTotalMarks').value = totalMarks;
            document.getElementById('txtAvgMarks').value = per;
            document.getElementById('txtGrade').value = grade;
            document.getElementById('txtResult').value = result;
    }
