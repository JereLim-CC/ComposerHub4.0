<?php

namespace App\Controllers;

use App\Models\TaskModel;

class Tasks extends BaseController
{
    public function index()
    {
        $taskModel = new TaskModel();

        $tasks = $taskModel
            ->where('is_archived', 0)
            ->orderBy('task_date', 'ASC')
            ->findAll();

        return view('tasks/index', [
            'tasks' => $tasks
        ]);
    }

    public function new()
    {
        return view('tasks/new');
    }

    public function create()
    {
        $rules = [
            'title' => 'required|max_length[150]',
            'task_date' => 'required|valid_date[Y-m-d]'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        $taskModel = new TaskModel();

        $taskModel->insert([
            'title' => trim($this->request->getPost('title')),
            'status' => 'pending',
            'task_date' => $this->request->getPost('task_date'),
            'created_at' => date('Y-m-d H:i:s'),
            'is_archived' => 0
        ]);

        return redirect()->to('/tasks')
            ->with('success', 'Task created successfully.');
    }

    public function edit($id)
    {
        $taskModel = new TaskModel();

        $task = $taskModel
            ->where('is_archived', 0)
            ->find($id);

        if (!$task) {
            return redirect()->to('/tasks')
                ->with('error', 'Task not found.');
        }

        return view('tasks/edit', [
            'task' => $task
        ]);
    }

    public function update($id)
    {
        $taskModel = new TaskModel();

        $task = $taskModel
            ->where('is_archived', 0)
            ->find($id);

        if (!$task) {
            return redirect()->to('/tasks')
                ->with('error', 'Task not found.');
        }

        $rules = [
            'title' => 'required|max_length[150]',
            'task_date' => 'required|valid_date[Y-m-d]',
            'status' => 'required|in_list[pending,completed]'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        $taskModel->update($id, [
            'title' => trim($this->request->getPost('title')),
            'task_date' => $this->request->getPost('task_date'),
            'status' => $this->request->getPost('status')
        ]);

        return redirect()->to('/tasks')
            ->with('success', 'Task updated successfully.');
    }

    public function archive($id)
    {
        $taskModel = new TaskModel();

        $task = $taskModel
            ->where('is_archived', 0)
            ->find($id);

        if (!$task) {
            return redirect()->to('/tasks')
                ->with('error', 'Task not found.');
        }

        $taskModel->update($id, [
            'is_archived' => 1
        ]);

        return redirect()->to('/tasks')
            ->with('success', 'Task archived successfully.');
    }
}