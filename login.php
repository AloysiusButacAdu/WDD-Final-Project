<html>
    <head>
        <title>Test Login Form</title>
		<style>
            #main {
                background: rgba(0, 255, 255,0.7);
                border-radius: 40px;
                margin: 10px auto 10px auto;
                padding: 40px;
                max-width: 50%;
                float: center;
                text-align: center;
                font-family: sans-serif;
				
			}
			body{
				 background-image: url("https://www.bworldonline.com/wp-content/uploads/2022/03/Adamson-University.jpg");
				 background-repeat: no-repeat;
				 background-size: cover;
				
			}
</style>
    </head>
    <body>
	<div id = "main">
        <form action = "connection.php" method = "post">
            <p>
                <label>Username:</label>
                <input type = "text" name = "username" />
            </p>
            <p>
                <label>Password:</label>
                <input type = "password" name = "password" />
            </p>
            <p>
                <input type = "submit" name = "Login" />
            </p>
        </form>
		</div>
    </body>
</html>
