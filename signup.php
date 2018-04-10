<?php
session_start();
include_once('dbconnect.php');
?>
<html>
    <head>
        <title>signup</title>
        <script src="js/jquery-3.2.1.js"></script>
        
         <style>
        body{
            color:black;
            background-color: chartreuse;
            
        }
        #div{
            margin:0 auto;
            text-align: center;
            margin-top: 200px;
         }
        #submit{
            color: black;
            background-color: aqua;
        }
        
        .form-control{
            width:50%;
            display: inline;
        }
        
        .label-control{
            margin-right:30px;
        }
    </style>
    </head>
    <body>
            <div id = "div">
<!--        <table id="table">-->
            <form method="post" class="form" action="accounts.php">
                <h1>
                    <div class="form-group">
                        <label >Username:</label>
                        <input type="text" name="username" required class="form-control"/>
                   </div>
                
                
                    <div class="form-group">
                        <label>Password:</label>
                        <input type="password" name="password" required class="form-control"/></div></h1>
                
                <div>
                    <input type="submit" name="submit" id="submit" />
                </div>
                    </form>
<!--        </table><br/>-->
        <p>Already have an account? log in <a href="index.php">here</a></p>
                  
           
            <h1>Hng Internship 4.0</h1>
           <h2> <?php
             echo date('d/m/y | h:m');
            ?></h2>
                </div>
            
   
 </body>
    
</html>