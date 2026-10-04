<!DOCTYPE html>
<html>
<head>
    <title>Create New Task</title>
</head>
<body>

    <h1>Create New Task</h1>

    <hr>

    <?php if (session()->has('errors')): ?>
        <ul>
            <?php foreach (session('errors') as $error): ?>
                <li><?= esc($error) ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <form method="post" action="<?= site_url('/tasks/create') ?>">

        <?= csrf_field() ?>

        <label for="title">Task Title:</label><br>
        <input
            type="text"
            id="title"
            name="title"
            maxlength="150"
            value="<?= old('title') ?>"
            required
        >

        <br><br>

        <label for="task_date">Task Date:</label><br>
        <input
            type="date"
            id="task_date"
            name="task_date"
            value="<?= old('task_date') ?>"
            required
        >

        <br><br>

        <button type="submit">Create Task</button>

    </form>

    <br>

    <a href="<?= site_url('/tasks') ?>">Back to Task List</a>

</body>
</html>