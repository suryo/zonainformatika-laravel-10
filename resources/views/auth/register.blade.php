<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h2>Register</h2>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
        </div>
        <div>
            <label for="role">Role</label>
            <select name="role" id="role">
                <option value="1">Super Admin</option>
                <option value="2">Admin</option>
                <option value="3">Tutor</option>
                <option value="3">User</option>
                
            </select>
        </div>
        <button type="submit">Register</button>
    </form>
</body>
</html>
