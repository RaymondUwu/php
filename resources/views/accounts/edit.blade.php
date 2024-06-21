<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Update account?</title>

    <style>
        body {
            margin: 0;
            font-family: 'Poppins';
        }
        .navigation {
            margin: 0;
            justify-content: space-between;
            display: flex;
            align-items: center;
            background-color: #53B466;
        }
        .header h1{
            margin-left: 225px;
            color: white;
        }
        .container {
            margin: 5%;
            margin-left: 35%;
            margin-right: 45%;
            padding: 20px;
            background-color: #99aab5;
            border-radius: 10px;
        }
        .button{
            background-color: #7289da;
            border: none;
            padding: 10px;
            border-radius: 10px;
            cursor: pointer;

        }
        .link a {
            color: white;
            text-decoration: none;
            margin-right: 225px;
            background-color: transparent;
        }
    </style>
</head>
<body>
<div class="navigation">
        <div class="header">
            <h1>Update account</h1>
        </div>

        <div class="link">
            <a href="{{route('accounts.index')}}">Table</a>
        </div>
    </div>

<div class="container">
        <div class="registration-form">
        <form method="post" action="{{route('accounts.update', ['accounts' => $accounts])}}">
        @csrf
        @method('put')
        <div>

        <h2>Update</h2>
        <label>Full Name:</label>
        <input type="text" name="fullname" placeholder="fullname" value="{{$accounts->fullname}}"/>
        </div>

        <div>
        <label>Contact Number:</label>
        <input type="text" name="contactnumber" placeholder="contactnumber" value="{{$accounts->contactnumber}}"/>
        </div>

        <div>
        <label>Email:</label>
        <input type="text" name="email" placeholder="email" value="{{$accounts->email}}"/>
        </div>

        <div>
        <label>Username:</label>
        <input type="text" name="username" placeholder="username" value="{{$accounts->username}}"/>
        </div>

        <div>
        <label>Password:</label>
        <input type="password" name="password" placeholder="password" value="{{$accounts->password}}"/><br><br>
        </div>

        <div>
            <input type="submit" class="button" value="Update"/>
        </div>
    </form>
        </div>
    </div>
</body>
</html>