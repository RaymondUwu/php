<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catering Service DB</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Admin Page</title>
</head>
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
        .table {
            margin-left: 350px;
            margin-top: 150px;
            align-items: center;
        }
        td, th {
            padding: 10px;
        }
        th {
            background-color: #D8DB2C;
            color: black;
        }
        td {
            background-color: lightgrey;
        }
        a {
            text-decoration: none;
            color: white;
            background-color: #27D976;
            border-radius: 5px;
            padding: 5px;
        }
        .link a{
            color: white;
            margin-right: 350px;
            background-color: transparent;
            padding: 5px;
            padding-left: 10px;
            padding-right: 10px;
            border-radius: 50px;
        }
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #4e5d94;
            color: white;
            text-align: center;
        }
        .delete {
            background-color: red;
            border: none;
            color: white;
            padding: 7px;
            font-family: 'Poppins';
            border-radius: 5px;
        }
        .text {
            color: black;
        }
        .text1 {
            color: wheat;
        }
    </style>
<body>
<div class="navigation">
        <div class="header">
            <h1><span class="text">CATERING </span>SERVICE</h1>
        </div>

        <div class="link">
            <a href="{{route('rentals.create')}}">Create new order</a>
        </div>
    </div>
    
    <div class="table">
        <table>
            <tr>
                <th>ID</th>
                <th>Account ID</th>
                <th>Service</th>
                <th>Addressess</th>
                <th>Contact Number</th>
                <th>Email Addres</th>
                <th>Account Name</th>
                <th>Option 1</th>
                <th>Option 2</th>
            </tr>
            @foreach($rentals as $rental)
            <tr>
                <td>{{$rental->id}}</td>
                <td>{{$rental->account_id}}</td>
                <td>{{$rental->property}}</td>
                <td>{{$rental->address}}</td>
                <td>{{$rental->contactnumber}}</td>
                <td>{{$rental->email}}</td>
                <td>{{$rental->account->fullname}}</td>
                <td>
                    <a href="{{route('rentals.edit', $rental->id) }}">Update</a>
                </td>
                <td>
                    <form method="post" action="{{route('rentals.destroy', $rental->id)}}">
                        @csrf
                        @method('delete')
                        <input type="submit" class="delete" value="Delete">
                    </form>
            </tr>
            @endforeach
            </table>
    </div>
    </body>
</html>
</body>
</html>