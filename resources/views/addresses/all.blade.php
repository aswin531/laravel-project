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
        
        .edit-button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 4px 8px;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
        }
        .btn {
        display: inline-block;
        padding: 10px 20px;
        font-size: 14px;
        font-weight: bold;
        text-align: center;
        text-decoration: none;
        border-radius: 4px;
        cursor: pointer;
        }

        .btn-danger {
        background-color: #dc3545;
        color: #fff;
        border: none;
        }

        .btn-danger:hover {
        background-color: #c82333;
}

    </style>
</head>
<body>
<a class="btn edit-button" href="{{ route('home') }}">Go back</a>
    <h1>All Addresses</h1>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Phone Number</th>
                <th>Address</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($addresses as $address)
                <tr>
                    <td>{{ $address->name }}</td>
                    <td>{{ $address->phone_number }}</td>
                    <td>{{ $address->address }}</td>
                    <td>
                        <form action="{{ route('DeleteAddress', $address) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure you want to delete this address?')">Delete</button>
                        </form>
                        <br>
                        <a href="{{ route('EditAddress', $address) }}" class="btn edit-button">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
