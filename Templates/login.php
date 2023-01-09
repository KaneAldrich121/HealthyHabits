<link rel="stylesheet" href="CSS/login.css">

<body>
   <div class="LoginTotal">
      <div class="LoginHeader">
         <div class="login-main-text">
            <h1>Healthy Habits</h1>
            <h3>Login or Create an Account Here.</h3>
         </div>
      </div>
      <div class="LoginMain">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
               <form id = "LoginForm" action = "?command=login" method = "post">
                  <div class="LoginInput">
                     <label>Username: </label>
                     <input name = "Username" type="text" class="form-control" placeholder="Username" required>
                  </div>
                  <div class="LoginInput">
                     <label>Password: </label>
                     <input name = "Password" type="password" class="form-control" placeholder="Password" required>
                  </div>
                  <button type="submit" class="btn btn-black">Login</button>
                  <br>
                  <?php
                  if (isset($errorMessage)){
                     echo $errorMessage;
                  }
                  ?>
               </form>
            </div>
         </div>
      </div>
   </div>
</body>