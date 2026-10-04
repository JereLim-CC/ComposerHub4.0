<!DOCTYPE html>
<html>
<head>
    <title>Edit Customer</title>
</head>
<body>

    <h1>Edit Customer</h1>

    <nav>
        <a href="/">Home</a> |
        <a href="/customers">Customer Accounts</a> |
        <a href="/users">User Accounts</a>
    </nav>

    <hr>

    <form method="post" action="<?= site_url('/customers/update/' . $customer['id']) ?>">

        <?= csrf_field() ?>

        <label for="full_name">Full Name:</label><br>
        <input
            type="text"
            name="full_name"
            value="<?= old('full_name', $customer['full_name']) ?>"
        >

        <br><br>

        <label for="email">Email:</label><br>
        <input
            type="email"
            name="email"
            value="<?= old('email', $customer['email']) ?>"
        >

        <br><br>

        <label for="phone">Phone:</label><br>
        <input
            type="text"
            name="phone"
            value="<?= old('phone', $customer['phone']) ?>"
        >

        <br><br>

        <button type="submit">Update Customer</button>
        <a href="<?= site_url('/customers') ?>">Cancel</a>

    </form>

</body>
</html>