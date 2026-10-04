# ComposerHub4.0
TSA2 Auth and CRUD

## Overview

Tasks for Today is a web-based task management system developed using CodeIgniter 4, PHP, and MySQL. This project was developed for IT0049 – Web System Technologies as part of Technical Summative Assessment 2.

The system allows users to view daily tasks and manage task records through authentication.

## Features

* Public Welcome, Task List, Profile, and About pages
* User login and logout
* Create new tasks
* Edit and update existing tasks
* Validate required task titles and dates
* Archive tasks instead of permanently deleting them
* Hide archived tasks from the Welcome and Task List pages
* Restrict task management actions to logged-in users

## Files Only Need to Check

`app/`

```text
app/
├── Config/
│   ├── Filters.php
│   └── Routes.php
├── Controllers/
│   ├── Auth.php
│   ├── Tasks.php
│   └── Welcome.php
├── Filters/
│   └── AuthFilter.php
├── Models/
│   ├── TaskModel.php
│   └── UserModel.php
└── Views/
    ├── auth/
    │   └── login.php
    ├── tasks/
    │   ├── index.php
    │   ├── new.php
    │   └── edit.php
    └── welcome/
        └── index.php
```

**Database:** `tasks_today_db.sql`
