<!DOCTYPE html>
<html>
<head>
    <title>Address Book</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .container {
            max-width: 600px; /* Increase the maximum width */
            margin: 0 auto;
            padding: 40px; /* Add padding to increase space around the container */
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 8px;
            font-weight: bold;
            color: #333;
        }

        input[type="text"] {
            padding: 10px;
            margin: 5px 2px 5px 2px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button[type="submit"] {
            padding: 8px 16px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .success-message {
            margin-top: 16px;
            padding: 8px;
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Address Book</h1>

        @if (session('success'))
            <div class="success-message">{{ session('success') }}</div>
        @endif

        <form action="/addresses" method="POST">
            @csrf

            <label for="name">Name:</label>
            <input type="text" name="name" required>

            <label for="phone_number">Phone Number:</label>
            <input type="text" name="phone_number" required>

            <label for="address">Address:</label>
            <input type="text" name="address" required>

            <button type="submit">Add Address</button>
        </form>
    </div>
</body>
</html>
