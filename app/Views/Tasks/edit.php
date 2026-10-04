<!DOCTYPE html>
<html>
<head>
    <title>Edit Task</title>
</head>
<body>

    <h1>Edit Task</h1>

    <hr>

    <?php if (session()->has('errors')): ?>
        <ul>
            <?php foreach (session('errors') as $error): ?>
                <li><?= esc($error) ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <form method="post"
          action="<?= site_url('/tasks/update/' . $task['id']) ?>">

        <?= csrf_field() ?>

        <label for="title">Task Title:</label><br>
        <input
            type="text"
            id="title"
            name="title"
            maxlength="150"
            value="<?= old('title', $task['title']) ?>"
            required
        >

        <br><br>

        <label for="task_date">Task Date:</label><br>
        <input
            type="date"
            id="task_date"
            name="task_date"
            value="<?= old('task_date', $task['task_date']) ?>"
            required
        >

        <br><br>

        <label for="status">Status:</label><br>
        <select id="status" name="status" required>
            <option value="pending"
                <?= old('status', $task['status']) === 'pending' ? 'selected' : '' ?>>
                Pending
            </option>

            <option value="completed"
                <?= old('status', $task['status']) === 'completed' ? 'selected' : '' ?>>
                Completed
            </option>
        </select>

        <br><br>

        <button type="submit">Update Task</button>

    </form>

    <br>

    <a href="<?= site_url('/tasks') ?>">Back to Task List</a>

</body>
</html>