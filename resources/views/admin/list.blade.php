<!DOCTYPE html>
<html>
<head>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td, #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even){background-color: #f2f2f2;}

        #customers tr:hover {background-color: #ddd;}

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }
    </style>
</head>
<body>

<h1>Books table</h1>

<table id="customers">
    <tr>
        <th>Name</th>
        <th>Price</th>
        <th>Thumbnail</th>
    </tr>
    @foreach($furniture as $furn)
    <tr>
        <td>{{$furn->name}}</td>
        <td>{{$furn->price}}</td>
        <td><img width="70px" src="{{$furn->thumbnail}}" alt=""></td>
    </tr>
    @endforeach
</table>

</body>
</html>


