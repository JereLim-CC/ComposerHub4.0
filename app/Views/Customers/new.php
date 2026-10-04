<!DOCTYPE html>
<html>
<head>
    <title>New Customer</title>
</head>
<body>

    <h1>New Customer</h1>

    <nav>
        <a href="/">Home</a> |
        <a href="/customers">Customer Accounts</a> |
        <a href="/users">User Accounts</a>
    </nav>

    <hr>

    <form method="post" action="<?= site_url('/customers') ?>">

        <?= csrf_field() ?>

        <label for="full_name">Full Name:</label><br>
        <input
            type="text"
            name="full_name"
            value="<?= old('full_name') ?>"
        >

        <?php if (session()->getFlashdata('errors')): ?>
        <?= session()->getFlashdata('errors')['full_name'] ?? '' ?>
        <?php endif; ?>

        <br><br>

        <label for="email">Email:</label><br>
        <input
            type="email"
            name="email"
            value="<?= old('email') ?>"
        >

        <?php if (session()->getFlashdata('errors')): ?>
        <?= session()->getFlashdata('errors')['email'] ?? '' ?>
        <?php endif; ?>

        <br><br>

        <label for="phone">Phone:</label><br>
        <input
            type="text"
            name="phone"
            value="<?= old('phone') ?>"
        >

        <br><br>

        <button type="submit">Add Customer</button>
        <a href="<?= site_url('/customers') ?>">Cancel</a>

    </form>

</body>
</html>