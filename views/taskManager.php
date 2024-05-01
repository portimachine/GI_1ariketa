<?php
$conn = new PDO("mysql:host=localhost;dbname=todoList", "username", "password");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['action'] === 'add' && !empty($_POST['task'])) {
        $task = $_POST['task'];
        $stmt = $conn->prepare("INSERT INTO tasks (task) VALUES (:task)");
        $stmt->execute(['task' => $task]);
        echo "Task added";
    }
}
?>
