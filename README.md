
# Task Manager - PHP MVC Web Application

A simple task management web application built with PHP following the MVC design pattern and modular monolith architecture. This project was developed as an exercise for a DevOps course.

## Table of Contents
- Features
- Technologies Used
- Project Structure
- Prerequisites
- Installation and Setup
- Database Configuration
- Usage
- Author

## Features
- Create a new task (title + description)
- View all existing tasks
- Update a task (modify title/description)
- Delete a task

## Technologies Used
- PHP (Core, no frameworks)
- MySQL / MariaDB (via phpMyAdmin)
- HTML / CSS (basic styling)
- PDO for database connection

## Project Structure
```
task-manager/
├── DB/
│   └── Task_DB.sql    
├── App/
│   ├── config.php
│   ├── style.css    
│   ├── task_Models/
|       └── db.php                
│   ├── task_Controllers/
│   │   ├── addTask.php           
│   │   ├── retrieveTask.php      
│   │   ├── updateTask.php        
│   │   └── deleteTask.php        
│   └── task_Views/
│       ├── index.php             
│       └── modifierTask.php                
└── README.md       
```

## Prerequisites
Make sure you have the following installed on your local machine:
- XAMPP (includes Apache, PHP, MariaDB/MySQL, phpMyAdmin)
- Any modern web browser

## Installation and Setup

### 1. Clone or download the project
Place the project folder (e.g., task-manager) inside the XAMPP htdocs directory:
C:\xampp\htdocs\task-manager\

### 2. Start XAMPP services
- Open XAMPP Control Panel
- Start Apache and MySQL (MariaDB)

### 3. Create the database
- Open your browser and go to: http://localhost/phpmyadmin
- Click on New to create a database
- Name it task_DB (or whatever you set in config.php)
- Select utf8_general_ci as collation
- Click Create

### 4. Import the database structure
- Inside phpMyAdmin, select your new database taskDB
- Click on the Import tab
- Choose the file task_DB.sql from the project folder
- Click Go at the bottom

This will create the Task table with the required columns (id, title, description).

### 5. Configure database connection
Open config.php and adjust the credentials if needed:

$_host = "localhost";
$_user = "root";
$_pwd = "";
$_dbname = "taskDB";

Default XAMPP settings: username root, password empty.

### 6. Run the application
Open your browser and go to:
http://localhost/task-manager/task_Views/index.php

## Usage
- Add a task: Fill in the title and description, click "Ajouter".
- View tasks: All tasks are displayed in a table.
- Delete a task: Click the "Supprimer" link next to a task.
- Edit a task: Click on an "Edit" link to open the modifier view.

## Author
This project was created as part of a DevOps course exercise in my university program.

## Notes
- The application uses PDO prepared statements to prevent SQL injection.
- The architecture follows a basic MVC pattern: Models handle data (db.php), Controllers contain business logic, Views display the UI.
- For production, additional security measures (e.g., input validation, XSS protection) would be required.

Enjoy managing your tasks.
