<!Doctype html>
<html>
    <head>
<title> Patient Registration </title>
<link rel="stylesheet" href="style.css">
<script src ="validation.js"defer></script>
 
</head>
<body>
   
    <div class ="form-container">
    <h2> Patient Registration Form </h2>
 
   
    <form id = "registrationform">
        <label> Full Name: </label>
        <input type = "text" id = "fullName" >
 
 
          <label> Age: </label>
        <input type = "number" id = "age" >
 
 
          <label> Phone Number : </label>
       
       <input type = "text" id = "phone" >
 
 
       
          <label> Email Address: </label>
       
       <input type = "email" id = "email" >
 
 
 
       
          <label> Insurance Provider: </label>
          <select id = "provider" >
            <option value = "">..Select Provider </option>
            <option value ="Health">Health</option>
             <option value = "Bank">Bank</option>
            <option value ="Company">Company</option>
</select>
 
 
           
<label> Policy Number: </label>
 
<input type = "text" id = " policyNumber" >
 
<label> Username: </label>
 
<input type = "text" id = "usernameNumber" >
 
<label> Password: </label>
 
<input type = "password" id = "password" >
 
<label> Confirm Password: </label>
 
<input type = "password" id = "confirmpassword" >
 
 
<button type ="submit">Register </button>
 
 
</form>
 
<p id = "errorMessage"> </p>
 
</div>
 
 
 
 
 
</body>
    </html>



