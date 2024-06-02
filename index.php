
<!DOCTYPE html>
<html>
<head>
    <title>PHP</title>
</head>
<body>

     <form method="GET">
        Company Name: <input type="text" name="company_name"><br><br>
        Salary      : <input type="number" name="number1"><br><br>

        <button type="submit" name="save">submit</button>

     </form>
    <?php
        if(isset($_GET['save'])){
            $com_name= $_GET["company_name"];
            $salary= $_GET["number1"];

            echo "Company Name = ".$com_name."<br>";
            echo "salary = ".$salary."<br>";


        }
    
 
?>
</body>
</html>


