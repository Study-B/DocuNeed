<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="login_style.css">
</head>
<body>
    <section class="info">
        <div class="abt">
            <div class="content">
            <h2>DocuNeed</h2>
            
            <p>
                DocuNeed Encourages Sharing of Resources<br>
                Between Fellow Students to Help One Another<br>
                "The more we share the more we have"<br>
            </p>
                
            <p>
                Developed by the STUDY BUDDIES<br>
                With a Goal to Provide a Reliable Platform<br>
                For Learners Seeking Information<br>
            </p>
                
            <p>
                A Platform That Allow Students<br>
                Share Resources by Sharing Materials,<br>
                Discussion, and Timely Updates<br>
            </p>
            </div>
        </div>
     <form action="login.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Login</button>
          <a href="signup_html.php" class="ca">Create an account</a>
     </form>
    </section>
</body>
</html>