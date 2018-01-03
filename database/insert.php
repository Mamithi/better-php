<?php
/**
 * Created by PhpStorm.
 * User: mamithi
 * Date: 1/3/18
 * Time: 1:52 PM
 */

try {
    $conn = new PDO('mysql:host=localhost;dbname=recipes', 'root', 'root');

    # Insert the new recipe
    $sql = 'INSERT INTO recipes (name, category_id, description, chef, created_at)
            VALUES(:name, :category_id, :description, :chef, NOW())';

    $stmt = $conn->prepare($sql);

    # Perform query
    $stmt->execute([
        ':name'        => 'Weekday Risotto',
        ':category_id' => '3',
        ':description' => 'Creamy rice based dish, boosted by in-season ingredients.',
        ':chef'        => 'Lawrence Mamithi',
    ]);

    echo "New recipe id " . $conn->lastInsertId();
} catch (PDOException $e) {
    echo "Database connection failed";
}