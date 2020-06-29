<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="shortcut icon" href="media/favicon.ico?v=2" type="image/x-icon">
        
        <title>Welcome!</title>
    </head>
    <body onload="getColor(); setColor();" id="fullbody">
        <script src="/js/readCookies.js"></script>
        <script src="/js/darkmode.js"></script>
        <div id="container">
            <div id="content">
                <div id="header">
                c1tru5x - thats what I do.
                </div>
                <div id="navbar">
                    <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="dblogin.php">Database</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="about.php">About</a></li>
                    </ul>
                </div>
                <div id="main">
                <input id="button" class="w3-btn w3-grey w3-round floatright" type="submit" name="lightbutton" value="💡" onclick="darkmode()" style="width: 45px; height: 40px;"/>
                <h4>Hello there!</h4>    
                <p>
                        Welcome to my website! I use this website to develop my skills in coding.<br><br>
                        I want to progress in PHP and SQL (MySQLi). Also a blog is created where I write<br>
                        things I think a lot about or just random things.. :) <br>
                        We have a prog metal band aaaand when we have songs I OR we will post this here where I will be<br>
                        making a seperat tab for.<br>
                        Yeah so thats about what I do.<br><br>
                        -c1tru5x     
                    </p>
                </div>    
            </div>
            <div id="footer">
                Copyright &copy; 2020 Christian Schmidt.
            </div>
        </div>
    </body>
</html>