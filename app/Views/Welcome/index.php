<!DOCTYPE html>
<html>
<head>
    <title>Tasks for Today</title>
</head>
<body>

<h1>Tasks for Today</h1>

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

<?php if (empty($tasks)): ?>
    <p>No tasks scheduled for today.</p>
<?php else: ?>

    <?php foreach ($tasks as $task): ?>

        <div>
            <h3><?= esc($task['title']) ?></h3>
            <p>Status: <?= esc($task['status']) ?></p>
            <p>Date: <?= esc($task['task_date']) ?></p>
        </div>

        <hr>

    <?php endforeach; ?>

<?php endif; ?>

</body>
</html>