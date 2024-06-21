<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Update Rental?</title>

    <style>
        body {
            margin: 0;
            font-family: 'Poppins';
            background-color: white;
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
            margin-left: 225px;
            color: white;
        }
        .container {
            margin: 5%;
            margin-left: 35%;
            margin-right: 45%;
            padding: 20px;
            background-color: #D8DB2C;
            border-radius: 10px;
        }
        .button{
            background-color: black;
            COLOR:white;
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
            <h1>UPDATE SERVICE</h1>
        </div>

        <div class="link">
            <a href="{{route('rentals.index')}}">Table</a>
        </div>
    </div>

<div class="container">
        <div class="registration-form">
        <form action="{{ route('rentals.update',$rental->id) }}" method="POST">
        @csrf
        @method('put')
        <div>

        <h2>Update</h2>
        <label>Property:</label>
        <input type="text" name="property" placeholder="Property" value="{{$rental->property}}"/>
        </div>

        <div>
        <label>Address:</label>
        <input type="text" name="address" placeholder="Address" value="{{$rental->address}}"/>
        </div>

        <div>
        <label>Contact Number:</label>
        <input type="text" name="contactnumber" placeholder="Contact Number" value="{{$rental->contactnumber}}"/>
        </div>

        <div>
        <label>Email:</label>
        <input type="text" name="email" placeholder="Email" value="{{$rental->email}}"/>
        </div>

        <select name="account_id" id="cars" class="select">
            @foreach($accounts as $account)
        <option value="{{$account->id}}" {{old('account_id', $account->id) == $account->id ? 'selected' : ''}}> {{$account->fullname}}</option>
            @endforeach
        </select><br><br>

        <div>
            <input type="submit" class="button" value="Update"/>
        </div>
    </form>
        </div>
    </div>
</body>
</html>