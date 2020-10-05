<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
          <!-- data store database -->
    
    <form method="POST" >
    <fieldset align="center">
      <label>Enter Your Name :-</label>
        <input type="text" name="username" required placeholder="Username"><br><br>
      <label>Enter Your E-Mail :-</label>  
        <input type="email" name="email" required placeholder="Enter Your Email"><br><br>
      <label>Enter Your Contact :-</label>  
        <input type="tel" name="contact"  required placeholder="Contact Detail"><br><br>
      <label>Select Date Of Birth :-</label>  
        <input type="date" name="DOB"  required placeholder="Birthday"><br><br>
        <input type="submit" name="submitBtn">
        </fieldset>    
    </form>
    <?php
    //host,userName ,Password,Dbname
    $con = mysqli_connect('localhost', "root", "", "master_class_b2");
        if ($con) {
          echo "database connected";<break></break>
            }else{
              echo "database Not connect";
          }
        
       if (isset($_POST['submitBtn'])) 
       {
             $name = $_POST['username'];
             $email = $_POST['email'];
             $contact = $_POST['contact'];
             $DOB = $_POST['DOB'];
                  $query = "INSERT INTO `student`(name,email,contactNo,DOBirth) VALUES ('$name','$email',$contact,$DOB)";
             $save = mysqli_query($con,$query); 
             if ($save) {
                echo "Data save ";
             }else{
              echo "Data Not save ";
            }

      }

    $query = "SELECT * FROM `student`";
    $s = mysqli_query($con,$query); 
    foreach ($s as $key => $value) {
     //  print_r( $value );
    echo "my name ".$value['name']." email is ".$value['email']." and contact no. is".$value['contactNo']." and date of birth is".$value['DOBirth']."<br>";
    }

    ?>
</body>

</html>