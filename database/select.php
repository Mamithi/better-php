<?php
/**
 * Created by PhpStorm.
 * User: mamithi
 * Date: 1/3/18
 * Time: 1:03 PM
 */
try {
    # Create a database connection
    $conn = new PDO('mysql:host=localhost;dbname=recipes', 'root', 'root');

    # Query for one recipe
    $sql = 'SELECT recipes.name, recipes.description, categories.name as category
              FROM recipes
              INNER JOIN categories on categories.id = recipes.category_id
              WHERE recipes.chef = :chef
              AND categories.name = :category_name';

    # Preparing the query
    $stmt = $conn->prepare($sql);

    # Bind the chef value, we only want Lorna's recipes
    $stmt->bindValue(':chef', 'Lorna');
    $stmt->bindParam(':category_name', $category);

    # Starters
    $category = 'Starter';
    $stmt->execute();
    $starters = $stmt->fetchAll();

    # Pudding
    $category = 'Pudding';
    $stmt->execute();
    $pudding = $stmt->fetch();
} catch (PDOException $e) {
    echo "Database connection failed";
}

