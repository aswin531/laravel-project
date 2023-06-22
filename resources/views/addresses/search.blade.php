<head>
    <title>Search results</title>
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
        .button {
  display: inline-block;
  padding: 10px 16px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  text-decoration: none;
  font-weight: bold;
  text-align: center;
  white-space: nowrap;
}

.primary-button {
  background-color: #007bff;
  color: #fff;
}
    </style>
</head>

<form action="{{ route('SearchAddress') }}" method="GET">
    <input type="text" name="keyword" placeholder="Search by name" required>
    <button class="button primary-button" type="submit">Search</button>
</form>

@if (!$addresses->isEmpty())
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
@else
    <p>{{ $message }}</p>
@endif
