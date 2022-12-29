<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="signup_style.css">
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
        <form action="signup-check.php" method="post">
     	<h2>SIGN UP</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Name</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"><br>
          <?php }?>

          <label>User Name</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"><br>
          <?php }?>


     	<label>Password</label>
     	<input type="password" 
                 name="password" 
                 placeholder="Password"><br>

          <label>Re Password</label>
          <input type="password" 
                 name="re_password" 
                 placeholder="Re_Password"><br>

     	<button type="submit">Sign Up</button>
          <a href="login_html.php" class="ca">Already have an account?</a>
        </form>
    </section>
</body>
</html>