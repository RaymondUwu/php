<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Create new account</title>

    <style>
        body {
            margin: 0;
            font-family: 'Poppins';
            font-size: small;
        }
        .navigation {
            margin: 0;
            justify-content: space-between;
            display: flex;
            align-items: center;
            background-color: #D8DB2C;
            font-size: x-large;
        }
        .header h1{
            margin-left: 350px;
            color: white;
        }
        .container {
            margin: 5%;
            margin-left: 18%;
            margin-right: 45%;
            padding: 20px;
            background-color: #D8DB2C;
            border-radius: 10px;
        }
        .button{
            background-color: black;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            color: white;
        }
        .link a {
            color: white;
            text-decoration: none;
            margin-right: 350px;
            background-color: transparent;
        }
        .text {
            color: black;
        }
        .container {
            color: white;
        }
        .container h2 {
            color: white;
        }
        .field {
            width: 96%;
            padding: 5px;
        }
        .button:hover {
            background-color: white;
            color: black;
        }
    </style>
</head>
<body>
    <div class="navigation">
        <div class="header">
            <h1><span class="text">ACCOUNT</span> REGISTER</h1>
        </div>

        <div class="link">
            <a href="{{route('accounts.index')}}">Table</a>
        </div>
    </div>

    <div class="container">
        <div class="registration-form">
        <form method="post" action="{{route('register.create')}}">
        @csrf
        @method('post')
        <div>

        <h2 align="center">Register</h2>
        <label>Enter Full Name</label><br>
        <input type="text" class="field" name="fullname" placeholder="Full Name"/><br><br>
        </div>

        <div>
        <label>Enter Contact Number</label><br>
        <input type="text" class="field" name="contactnumber" placeholder="Contact Number"/><br><br>
        </div>

        <div>
        <label>Enter Email</label><br>
        <input type="text" class="field" name="email" placeholder="Email"/><br><br>
        </div>

        <div>
        <label>Enter Username</label><br>
        <input type="text" class="field" name="username" placeholder="Username"/><br><br>
        </div>

        <div>
        <label>Enter Password</label><br>
        <input type="password" class="field" name="password" placeholder="Password"/><br><br>
        </div>

        <div>
            <input type="submit" class="button" value="Create Account"/>
        </div>
    </form>
        </div>
    </div>
</body>
</html>