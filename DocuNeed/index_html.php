<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>DocuNeed</title>
        <script src="https://kit.fontawesome.com/b8bbb7b6a5.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="index_style.css">
    </head>
    <body>
        <nav class="navbar">
            <div class="logo">
                <a href="index_html.php"><h1>DocuNeed</h1></a>
            </div>
            
            <div class="login_menu">
                <ul>
                    <a href="logout.php">Logout</a>
                </ul>
            </div>
        </nav>
        
        <section class="head">
            <div class="hd_content">
                <div class="abt">
                    <h2>Hello, <?php echo $_SESSION['name']; ?></h2>
            
                    <p>
                        Here Are Some Available Resources<br>
                        We Have Accumulated<br>
                        <br>
                    </p>
                </div>
                
                <div class="ph1">
                    <img src="images/background.jpg">
                </div>
                
            </div>
            
        </section>
        
        <div class="resources">
            <div class="hd">
                <h3>Materials</h3>
            </div>
            <div class="files">
                <div class="rev">
                    <a href="bubbleSort_html.php">
                        <img id="pv" src="images/BUBBLESORT.png">
                        <ul>
                            <li>
                                <label>Title:</label>
                                <h4>Bubble Sort - Sorting Algorithm - Data Stractures and Algorithm</h4>
                            </li>

                            <li>
                                <label>Posted By:</label>   
                                <span>DocuNeed</span>
                            </li>
                        </ul>
                    </a>
                    
                    <a href="dsa_html.php">
                        <img id="pv" src="images/DSA.png">
                        <ul>
                            <li>
                                <label>Title:</label>
                                <h4>What is Data Stracture and Algorithm?</h4>
                            </li>

                            <li>
                                <label>Posted By:</label>   
                                <span>DocuNeed</span>
                            </li>
                        </ul>
                    </a>
                </div>
            </div>
        </div>
    </body>

</html>

<?php }?>