<?php
/**
 * Created by PhpStorm.
 * User: mamithi
 * Date: 1/4/18
 * Time: 2:48 AM
 */
try {
    $conn = new PDO('mysql:host=localhost;dbname=recipes', 'root', 'root');
} catch (PDOException $e) {
    echo "Database connection failed";
    exit;
}

try {
    # Start the transaction
    $conn->beginTransaction();

    $conn->exec('UPDATE categories SET id = 17 WHERE name = "Pudding"');
    $conn->exec('UPDATE recipes SET category_id = 17 WHERE category_id = 3');

    # Done
    $conn->commit();
} catch (PDOException $e) {
    $conn->rollBack();
    echo "Something went wrong: " . $e->getMessage();
}

