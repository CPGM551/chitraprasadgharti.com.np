<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>admin</title>
        <style>
                  *{
                    margin:0 auto;
                    margin-top:20px;
                    text-align:center;
                    }
                 body{
                    background-color: #07049e;
                 }
                 form{
                 width: 700px;
                 height:470px;
                 border-radius:10px;;
                 background-color:#0804b6;
                 
                      }
                 fieldset{
                 width: 600px;
                 height:400px;
                 font-size:35px;
                 font-weight:bold;
                 border-radius:10px;  
                 color:white;          
                  
                 }
                 h1{
                  color:red;
                 font-size:100px;
                 font-weight:bold;
                    }
                 h2{
                  color:white;
                 font-size:35px;
                 font-weight:bold;
                    }
                 h2 u{
                        color: red;
                    }

                    
                 h3{
                  color:white;
                 font-size:25px;
                 font-weight:bold;
                    }
                 input{
                  background-color:darkblue;
                  color:white;
                 font-size:25px;
                 font-weight:bold;
                 border-radius:5px;
                    }
                 input:hover{
                background-color: pink;
                  color:green;
                  
                    }
                    legend{
                        border: 2px solid white;
                        height: 45px;
                        width: 225px;
                        border-radius: 5px;

                    }
        </style>
</head>
<body>
<?php 
echo"<form>";
echo"<fieldset><legend><marquee behavour=slide, direction=down >Message Box</marquee></legend>";
echo "<h1>OOPS!!!</h1>";
echo"<h2><marquee behavior='alternate' direction='right'>-------<u>---------------ERROR 404---------------</u>-------</h2></marquee>";
echo"<h3>This page isn't available. Sorry about that.Try searching for something else.</h3></br>";

echo"<a href='http://www.chitraprasadgharti.com.np'><input type='button' value='Back to Home'></a>";
echo"</fieldset>";
echo"</form>";
?>
</body>
</html>				