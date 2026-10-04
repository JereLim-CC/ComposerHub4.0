<!DOCTYPE html>
<html>
<head>
    <title>User Accounts</title>
</head>
<body>

    <h1>User Accounts</h1>

    <nav>
        <a href="/">Home</a> |
        <a href="/about">About</a> |
        <a href="/customers">Customer Accounts</a> |
        <a href="/users">User Accounts</a>
    </nav>

    <hr>

    <p>
        <a href="<?= site_url('/users/new') ?>">Add New User</a>
    </p>

    <hr>

    <?php foreach ($users as $user): ?>

        <div>
            <?php if (!empty($user['avatar'])): ?>

                <img
                    src="<?= base_url('uploads/avatars/' . $user['avatar']) ?>"
                    width="150"
                    height="150"
                    alt="Profile Picture"
                >

            <?php else: ?>

                <p>No profile picture</p>

            <?php endif; ?>

            <h3><?= esc($user['username']) ?></h3>
            <p>Full Name: <?= esc($user['full_name']) ?></p>

            <a href="<?= site_url('/users/edit/' . $user['id']) ?>">Edit</a>
        </div>

        <hr>

    <?php endforeach; ?>

</body>
</html>