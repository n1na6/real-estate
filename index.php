
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="container" id="logIn"  >
      <h2 class="form-title">Login</h2>
      <form method="post" action="login.php" id="logIN">
        <div class="input-group">
         <input type="text" id="username" name="username" required>
         <label for="email">Username</label>
        </div>
        <div class="input-group">
          <input type="password" name="password" id="password" required >
          <label for="password">Password</label>
        </div>

        <button id="btn" type="submit">LogIn</button>
        <p id="error" class="hidden">Incorrect email or password</p>
     </form>
    </div> 

    <script>
     /*   
let validEmail = "e@gmail.com";
let validPassword = "123";


document.getElementById("logIN").addEventListener("submit", function (event) {
    event.preventDefault(); 

    
    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;

    
    if (email === validEmail && password === validPassword) {
        
        window.location.href = "admin-panel.html";
    } else {
        
        let errorElement = document.getElementById("error");
        errorElement.classList.remove("hidden");
        errorElement.textContent = "Incorrect email or password.";
    }
});*/

    </script>

</body>
</html>