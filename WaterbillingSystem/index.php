<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Login Page </title>
    <style>
        Body {
            font-family: Calibri, Helvetica, sans-serif;
            background-image: url(https://cdn.mos.cms.futurecdn.net/KMetFQX5UXdhydvbBzUxDA-1200-80.jpg);
            background-size: 100%;
        }
        
        button {
            background-color: #e26411;
            width: 100px;
            color: rgb(24, 23, 22);
            padding: 15px;
            margin: 10px 0px;
            border: none;
            cursor: pointer;
            text-align: center;
            border-radius: 5px;
        }
        
        input[type=text],
        input[type=password] {
            width: 300px;
            margin: 8px 0;
            padding: 12px 20px;
            display: inline-block;
            border: 2px solid green;
            box-sizing: border-box;
        }
        
        button:hover {
            opacity: 0.7;
        }
        
        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            margin: 10px 5px;
            border-radius: 5px;
        }
        
        .container {
            padding: 25px;
            background-color: rgb(115, 201, 194);
            width: 400px;
            height: 250px;
            line-height: 80px;
            border-radius: 20px;
        }
        
        form {
            padding-top: 50px;
            padding-left: 50px;
        }
        
        h1 {
            padding-left: 100px;
            padding-top: 50px;
        }
    </style>
</head>

<body>

    <h1> User Login Form </h1>

    <form  method="post" action="process.php">
        <div class="container">
            <label>Username : </label>
            <input type="text" placeholder="Enter Username" name="Username" required><br>
            <label>Password : </label>
            <input type="password" placeholder="Enter Password" name="Pass" required><br>&nbsp;&nbsp;
            <button type="submit">Login</button>
        </div>
    </form>
    <?php if(isset($_GET['err'])){
	echo "<script>alert('Invalid Username or Pass')</script>";
	} ?>
</body>

</html>