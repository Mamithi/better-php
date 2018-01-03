<?php
/**
 * Created by PhpStorm.
 * User: mamithi
 * Date: 1/4/18
 * Time: 2:25 AM
 */

try {
    $conn = new PDO('mysql:host=localhost;dbname=recipes', 'root', 'root');
    $stmt = $conn->prepare('DELETE FROM categories WHERE name = :name');

    # Delete the record
    $stmt->execute([':name' => 'Starter']);
    echo $stmt->rowCount(). ' row(s) deleted';

} catch (PDOException $e) {
    echo "Database connection failed";
}

