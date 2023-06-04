<?php

function getAllMangas()
{
    include 'controllers/database.php';

    $query = 'SELECT * FROM manga ORDER BY title ASC';
    $obj = $db->query($query);

    return $obj->fetchAll(PDO::FETCH_BOTH);
}

function getAllMangasWithContaint($containt)
{
    // Connexion à la base de données
    include "controllers/database.php";

    try {
        $query = "SELECT * FROM manga WHERE title like ?  ORDER BY title ASC";
        $obj = $db->prepare($query);

        $params = ["%$containt%"];

        if ($obj->execute($params)) {
            $manga = $obj->fetchAll(PDO::FETCH_BOTH);
            return $manga;
        }
        return false;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

function getByIsbn($isbn)
{
    // Connexion à la base de données
    include "controllers/database.php";

    try {
        $query = "SELECT * FROM manga WHERE isbn = :isbn";
        $obj = $db->prepare($query);

        $params = [':isbn' => $isbn];

        if ($obj->execute($params)) {
            $manga = $obj->fetchAll(PDO::FETCH_BOTH);
            return $manga;
        }
        return false;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

function add($isbn, $title, $author, $editor, $category, $image1, $image2, $image3, $image4, $image5, $tome_number, $released_date, $nbPages, $adviced_price, $theme1, $theme2, $stock)
{

    // Connexion à la base de données
    include "controllers/database.php";

    try {
        $query = "INSERT INTO `manga` (`isbn`, `title`, `author`, `editor`, `category`, `image1`, `image2`, `image3`, `image4`, `image5`, `tome_number`, `released_date`, `nbPages`, `adviced_price`, `theme1`, `theme2`, `stock`) VALUES (:isbn, :title, :author, :editor, :category, :image1, :image2, :image3, :image4, :image5, :tome_number, :released_date, :nbPages, :adviced_price, :theme1, :theme2, :stock);";

        $obj = $db->prepare($query);

        $params = [
            ':isbn'  => $isbn,
            ':title'  => $title,
            ':author'  => $author,
            ':editor'  => $editor,
            ':category'  => $category,
            ':image1'  => $image1,
            ':image2'  => $image2,
            ':image3'  => $image3,
            ':image4'  => $image4,
            ':image5'  => $image5,
            ':tome_number'  => $tome_number,
            ':released_date'  => $released_date,
            ':nbPages'  => $nbPages,
            ':adviced_price'  => $adviced_price,
            ':theme1'  => $theme1,
            ':theme2'  => $theme2,
            ':stock'  => $stock
        ];

        if ($obj->execute($params)) {
            return true;
        } else {
            return false;
        }
    } catch (PDOException $e) {
        var_dump($e->getMessage());
    }
}