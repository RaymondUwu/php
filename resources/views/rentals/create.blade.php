<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Create new rental</title>

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
            color: black;
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
            color: #6AD79A;
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
        .text {
            color: black;
        }
        .select {
            width: 98%;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="navigation">
        <div class="header">
            <h1><span class="text">CATERING</span> SERVICE</h1>
        </div>

        <div class="link">
            <a href="{{route('accounts.index')}}">Table</a>
        </div>
    </div>

    <div class="container">
        <div class="registration-form">
        <form method="post" action="{{route('rentals.store')}}">
        @csrf
        @method('post')
        <div>

        <h2 align="center">Register</h2>
        <label>Service</label><br>
        <input type="text" class="field" name="property" placeholder="Enter Service"/><br><br>
        </div>

        <div>
        <label>Address</label><br>
        <input type="text" class="field" name="address" placeholder="Address"/><br><br>
        </div>

        <div>
        <label>Contact Number</label><br>
        <input type="text" class="field" name="contactnumber" placeholder="Contact Number"/><br><br>
        </div>

        <div>
        <label>Email</label><br>
        <input type="text" class="field" name="email" placeholder="Email"/><br><br>
        </div>
        
        <select name="account_id" id="cars" class="select">
            @foreach($accounts as $account)
        <option value="">Select Avvoun</option>
        <option value="{{$account->id}}"> {{$account->fullname}}</option>
            @endforeach
        </select><br><br>

        <div>
            <input type="submit" class="button" value="Create Cater"/>
        </div>
    </form>
        </div>
    </div>
</body>
</html>