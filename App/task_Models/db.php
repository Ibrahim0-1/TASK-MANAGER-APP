<?php

require '../config.php';

class Task {
    private static $pdo;

    public function __construct()
    {
        if (self::$pdo == null){
        self::$pdo = Connexion::getPDO();
        }
    }


    # Extraction des tasks du table Task
    public function getTasks()
    {
        $req = "SELECT id, title, description FROM Task ;";
        $tasks = self::$pdo->query($req)->fetchAll();
        return $tasks;
    }

    public function addTask($title, $description)
    {
        $sql = "INSERT INTO Task (title, description) VALUES (?, ?)";
        $stmt = self::$pdo->prepare($sql);
        $stmt->execute([$title, $description]);
    }

    public function deleteTask($id)
    {
        $sql = "DELETE FROM Task WHERE id = ?";
        $stmt = self::$pdo->prepare($sql);
        $stmt->execute([$id]);
    }

    public function updateTask($id, $title, $description)
    {
        // Use prepared statement to avoid SQL injection
        $sql = "UPDATE Task SET title = ?, description = ? WHERE id = ?";
        $stmt = self::$pdo->prepare($sql);
        $stmt->execute([$title, $description, $id]);
    }
}


?>