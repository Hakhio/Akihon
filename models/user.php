<?php

function signIn($email, $password)
{
    // Connexion à la base de données
    include "controllers/database.php";

    try {
        $query = "
        SELECT username, isadmin, email, password
        FROM user
        WHERE email = :email";

        $obj = $db->prepare($query);

        $params = [
            ':email' => $email,
        ];

        if ($obj->execute($params)) {
            $users = $obj->fetchAll();

            if (password_verify($password, $users[0]['password'])) {
                return $users[0];
            } else {
                return false;
            }
        } else {
        }
    } catch (PDOException $e) {
        // if ($e->getCode() == 23000) return response(false, 500, "DUPLICATE");
    }
}

function register($email, $password, $lastname, $firstname, $username, $street, $zipcode, $city, $phone)
{

    // Connexion à la base de données
    include "controllers/database.php";

    try {
        $query = "INSERT INTO user VALUES (NULL, :lastname, :firstname, :username, :email, :password, :phone, :street, :zipcode, :city, 0)";

        $obj = $db->prepare($query);

        $params = [
            ':lastname' => $lastname,
            ':firstname' => $firstname,
            ':username' => $username,
            ':email' => $email,
            ':password' => password_hash($password, PASSWORD_DEFAULT),
            ':phone' => $phone,
            ':street' => $street,
            ':zipcode' => $zipcode,
            ':city' => $city
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


function getUserByEmail($email)
{

    // Connexion à la base de données
    include "controllers/database.php";

    try {
        $query = "SELECT id FROM user WHERE email = :email";
        $obj = $db->prepare($query);

        $params = [':email' => $email];

        if ($obj->execute($params)) {
            $users = $obj->fetchAll();

            return !empty($users) ? true : false;
        }

        return false;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

function getUserByUsername($username)
{

    // Connexion à la base de données
    include "controllers/database.php";

    try {
        $query = "SELECT id FROM user WHERE username = :username";
        $obj = $db->prepare($query);

        $params = [':username' => $username];

        if ($obj->execute($params)) {
            $users = $obj->fetchAll();

            return !empty($users) ? true : false;
        }

        return false;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
