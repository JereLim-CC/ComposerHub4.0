<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
</head>
<body>

<h1>Profile</h1>

<a href="/">Home</a> |
<a href="/tasks">Task List</a> |
<a href="/profile">Profile</a> |
<a href="/about">About</a>

<hr>

<h3><?= esc($user['username']) ?></h3>

<p>Full Name: <?= esc($user['full_name']) ?></p>
<p>Email: <?= esc($user['email']) ?></p>

</body>
</html>