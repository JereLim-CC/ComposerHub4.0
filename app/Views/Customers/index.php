<!DOCTYPE html>
<html>
<head>
    <title>Customer Accounts</title>
</head>
<body>

    <h1>Customer Accounts</h1>

    <a href="<?= site_url('/logout') ?>">Logout</a>

    <nav>
        <a href="/">Home</a> |
        <a href="/about">About</a> |
        <a href="/customers">Customer Accounts</a> |
        <a href="/users">User Accounts</a>
    </nav>

    <hr>

    <p>
        <a href="<?= site_url('/customers/new') ?>">Add New Customer</a>
    </p>

    <hr>

    <?php foreach ($customers as $customer): ?>

        <div>
            <h3><?= esc($customer['full_name']) ?></h3>
            <p>Email: <?= esc($customer['email']) ?></p>
            <p>Phone: <?= esc($customer['phone']) ?></p>

            <a href="<?= site_url('/customers/edit/' . $customer['id']) ?>">Edit</a>
        </div>

        <hr>

    <?php endforeach; ?>

</body>
</html>