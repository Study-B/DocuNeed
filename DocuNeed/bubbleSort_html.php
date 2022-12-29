<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>DocuNeed</title>
        <script src="https://kit.fontawesome.com/b8bbb7b6a5.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="index_style.css">
        <link rel="stylesheet" href="files_style.css">
    </head>
    <body>
        
        <a id="back" href="index_html.php"><i class="fa-solid fa-arrow-left"></i></a>
        <nav class="navbar">
            <div class="logo">
                <a href="index.php"><h1>DocuNeed</h1></a>
            </div>
            
            <div class="login_menu">
                <ul>
                        <a href="logout.php">Logout</a>
                </ul>
            </div>
        </nav>
        
        
        <div class="read">
            <div class="pdd">
                <div id="viewer"></div>
                <script type="text/javascript" src="https://cloudpdf.io/viewer.min.js"></script>
                <script>
                    const config = { 
                        documentId: 'de6058d0-0330-4e2c-95bb-a18aacb7b8c6',
                        darkMode: true, 
                        token: '' //add your server side generated security token or change your document permission to public
                    };
                    CloudPDF(config, document.getElementById('viewer')).then((instance) => {
                    });
                </script>
            </div>
            <div class="matte">
                <div class="info_mat">
                    <ul>
                        <div class="tle">
                            <li>
                                <label>Tittle:</label>
                                <h2>Bubble Sort - Sorting Algorithm - Data Structures and Algorithms</h2>
                            </li>
                        </div>
                    
                        <div id="aut">
                            <li>
                                <label>Posted By:</label>
                                <p><snap>DocuNeed</snap></p>
                            </li>
                            
                            <li>
                                <label>Author:</label>
                                <p><snap>Qusai<br>Sappari</snap></p>
                            </li>
                        </div>
                        
                        <div id="crs">
                            <li>
                                <label>Degree/Course:</label>
                                <p><snap>BS CpE - 2</snap></p>
                            </li>
                        
                            <li>
                                <label>Subject Code:</label>
                                <p><snap>CPE 121</snap></p>
                            </li>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </body>

</html>