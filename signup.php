<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign In</title>
    <link  rel="stylesheet" href="./css/signup.css"/>
</head>
<body>
 
    <div class="container">
      <div class="wrapper">
       <div id = "form-signin">
         <h1> Sign In</h1>
         <form action="./Login.html">
         <p>Please fill in this form to create an account.</p>
         <hr>
         <p> <label for="email"><b>Email</b></label>
         <input type="text" placeholder="Enter Email" name="email" required></p>
              
         <p><label for="psw"><b>Password</b></label>
         <input type="password" placeholder="Enter Password" name="pws" required></p> 
              
         <p><label for="psw-repeat"><b>Repeat Password</b></label>
         <input type="password" placeholder="Repeat Password" name="psw-repeat" required></p> 
              
         <label>
         <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
         </label>
         <a href="index.html">
         <button type="button" class="cancelbtn">Cancel
         </button>
         </a>
         <button type="submit" class="signupbtn">Sign Up</button>
    
        </div>
      </div>
       </div>
      </div>
      </form>
</body>
</html>