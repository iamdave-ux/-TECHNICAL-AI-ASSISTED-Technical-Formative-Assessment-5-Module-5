<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>POS App - Customers</title>
</head>
<body>
    <h1>Customer Accounts</h1>
    <nav>
        <a href="/">Home</a> | 
        <a href="/about">About</a> | 
        <a href="/customers">Customers</a> | 
        <a href="/users">Users</a>
    </nav>
    
    <table border="1" cellpadding="10" style="margin-top: 20px;">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>
        @foreach($customers as $customer)
        <tr>
            <td>{{ $customer['id'] }}</td>
            <td>{{ $customer['name'] }}</td>
            <td>{{ $customer['email'] }}</td>
            <td>{{ $customer['phone'] }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>