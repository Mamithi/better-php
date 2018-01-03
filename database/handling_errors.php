<?php
/**
 * Created by PhpStorm.
 * User: mamithi
 * Date: 1/4/18
 * Time: 2:33 AM
 */

try {
    $conn = new PDO('mysql:host=localhost;dbname=recipes', 'root', 'root');
} catch (PDOException $e) {
    echo "Database connection failed";
    exit;
}

$sql = 'SELECT name, description, chef FROM recipes WHERE id=:recipe_id';

try {
    $stmt = $conn->prepare($sql);
    # Handling an error when preparing a query
    if ($stmt) {
        # Perform query
        $result = $stmt->execute(["recipe_id" => 1]);

        # Handling an error during executing
        if ($result) {
            $recipe = $stmt->fetch();
            print_r($recipe);
        } else {
            $error = $stmt->errorInfo();
            echo "Query failed with message: " . $error[2];
        }
    }
} catch (PDOException $e) {
    echo "A database problem has occured: " . $e->getMessage();
}