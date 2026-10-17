<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>POS App - Users</title>
</head>
<body>
    <h1>User Accounts</h1>
    <nav>
        <a href="/">Home</a> | 
        <a href="/about">About</a> | 
        <a href="/customers">Customers</a> | 
        <a href="/users">Users</a>
    </nav>
    
    <table border="1" cellpadding="10" style="margin-top: 20px;">
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Role</th>
            <th>Status</th>
        </tr>
        @foreach($users as $user)
        <tr>
            <td>{{ $user['id'] }}</td>
            <td>{{ $user['username'] }}</td>
            <td>{{ $user['role'] }}</td>
            <td>{{ $user['status'] }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>