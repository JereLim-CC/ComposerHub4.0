<!DOCTYPE html>
<html>
<head>
    <title>Task List</title>
</head>
<body>

<h1>Task List</h1>

<a href="/">Home</a> |
<a href="/tasks">Task List</a> |
<a href="/profile">Profile</a> |
<a href="/about">About</a>

<?php if (session()->get('isLoggedIn')): ?>
    | <a href="/tasks/new">New Task</a>
    | <a href="/logout">Logout</a>
<?php else: ?>
    | <a href="/login">Login</a>
<?php endif; ?>

<hr>

<?php if (session()->getFlashdata('success')): ?>
    <p><?= esc(session()->getFlashdata('success')) ?></p>
<?php endif; ?>

<?php if (session()->getFlashdata('error')): ?>
    <p><?= esc(session()->getFlashdata('error')) ?></p>
<?php endif; ?>

<?php if (empty($tasks)): ?>
    <p>No tasks available.</p>
<?php else: ?>

    <?php foreach ($tasks as $task): ?>

        <div>
            <h3><?= esc($task['title']) ?></h3>
            <p>Status: <?= esc($task['status']) ?></p>
            <p>Date: <?= esc($task['task_date']) ?></p>

            <?php if (session()->get('isLoggedIn')): ?>

                <a href="<?= site_url('tasks/edit/' . $task['id']) ?>">
                    Edit
                </a>

                <form
                    method="post"
                    action="<?= site_url('tasks/archive/' . $task['id']) ?>"
                    style="display: inline;"
                    onsubmit="return confirm('Archive this task?');"
                >
                    <?= csrf_field() ?>
                    <button type="submit">Archive</button>
                </form>

            <?php endif; ?>
        </div>

        <hr>

    <?php endforeach; ?>

<?php endif; ?>

</body>
</html>