<!DOCTYPE html>
<html>
<head>
    <title>All Addresses</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        
        h1 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            border-radius: 10px !important;
        }

        
        
        th {
            background-color: #4c555f;
            color: #fff;
            text-align: left;
            padding: 8px;
            

        }
        
        td {
            border: 1px solid #ddd;
            padding: 8px;
        }
    </style>
</head>
<body>
    <h1>All Addresses</h1>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Phone Number</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($addresses as $address)
                <tr>
                    <td>{{ $address->name }}</td>
                    <td>{{ $address->phone_number }}</td>
                    <td>{{ $address->address }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
