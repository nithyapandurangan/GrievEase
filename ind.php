<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complaint Form</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<style>
    
    .mainform{
    margin: 50px 230px 50px 230px;
    padding: 2rem;
    border: 1px solid rgb(224,224,224) ;
    border-radius: 15px;
    box-shadow: 10px 7px 0 rgb(224,224,224);
    background-color: white;
    display: flex;
    }

    .header{
        font-size: 17px;
        font-family: candara;
        display: flex-end;
    }

    input[type=text], select, textarea {
    display: flex;
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

@media screen and (max-width: 680px) {
  .header, .mainform, input[type=submit] {
    margin: 0px 0px 0px 0px;
    
  }
}


</style>

<body style="background:rgb(173, 216, 230) 100%">
    <div class= "mainform">
    <form action="connect.php" method="post">


    <!--Header-->

    <div class = "header">
    <h1><b>Complaint Form</b></h1>
        <p>Please send us details about the issue you are facing. Our student grievance redressal cell will analyse your complaint and take the appropriate measures 
          in order that the reported situation will not occur at any other time in the future.</p>
          <hr/>
    </div>
    

    <br><br>
    <!-- Name-->

    <div class="form-group">
        <label for="fname"><b>First Name:</b></label>
        <input type="text" class="form-control" id="fname" placeholder="Enter first name" name="FirstName">
      </div>

     <br>

      <div class="form-group">
        <label for="lname"><b>Last Name:</b></label> 
        <input type="text" class="form-control" id="lname" placeholder="Enter last name" name="LastName">
      </div>
   
      <br>

    <!-- Phone number-->
    
    <div class="form-group">
        <label for="rollno"> <b>roll Number: </b> </label>
        <input type="text" id="rollno" class="form-control" placeholder="Enter 8 digit roll number" name = "rollNumber" >
      </div>
    
      <br>
    <!-- Select your area-->

      <label for="Select Your course"><b>Select Your department</b></label>
    <select id="area" name="Department" >
      <option value="----">----</option>
      <option value="AIDS">AIDS</option>
      <option value="CSE-IoT">CSE-IoT</option>
      <option value="B.COM">B.COM</option>
      <option value="B.COM(PA)">B.COM(PA)</option>
      <option value="CYBERSECURITY">CYBERSECURITY</option>
      <option value="ECONOMICS">ECONOMICS</option>
    </select>
     
    <br>
    <br>
    <!-- Category of complaint-->
    
    <div id="formsection">
        <label><b>What is the category of complain you are facing?</b></label>

        <p><input type="checkbox" name="Category" value="hostel messs food">mess food</p>
        <p><input type="checkbox" name="Category" value="Teachers">Academics</p>
        <p><input type="checkbox" name="Category" value="Bullying/ragging">Bullying/ragging</p>
        <p><input type="checkbox" name="Category" value="LMS">LMS issues</p>
        <p><input type="checkbox" name="Category" value="others">others</p>

      </div>
    

    <br>
    <!-- Complaint Details-->

    <label for="subject"><b>Complaint Details:</b></label>
    <textarea id="subject" name="Description" placeholder="Enter your complaint details......." style="height:200px"></textarea>
    <button type="submit" name="Submit">Submit</button>
 </form>
</body>
</html>