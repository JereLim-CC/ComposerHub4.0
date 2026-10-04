<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

    <h1>Login</h1>

    <hr>

    <form method="post" action="<?= site_url('/login') ?>">

        <?= csrf_field() ?>

        <label for="username">Username:</label><br>
        <input
            type="text"
            name="username"
            value="<?= old('username') ?>"
        >

        <br><br>

        <label for="password">Password:</label><br>
        <input
            type="password"
            name="password"
        >

        <br><br>

        <button type="submit">Login</button>

    </form>

</body>
</html>