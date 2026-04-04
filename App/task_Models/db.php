<?php

require '../config.php';

class Task {
    private $pdo;

    public function __construct()
    {
        
        $this->pdo = Connexion::getPDO();
    }


    # Extraction des tasks du table Task
    public function getTasks()
    {
        $req = "SELECT id, title, description FROM Task ;";
        $tasks = $this->pdo->query($req)->fetchAll();
        return $tasks;
    }

    public function addTask($title, $description)
    {
        $sql = "INSERT INTO Task (title, description) VALUES (?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$title, $description]);
    }

    public function deleteTask($id)
    {
        $sql = "DELETE FROM Task WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
    }

    public function updateTask($id, $title, $description)
    {
        // Use prepared statement to avoid SQL injection
        $sql = "UPDATE Task SET title = ?, description = ? WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$title, $description, $id]);
    }
}


?>