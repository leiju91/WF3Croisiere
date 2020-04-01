<?php

/**
 * Retourne si le nom d'utilisateur OU l'adresse email existe.
 */
function isUserExists($username, $email)
{
    // SELECT * FROM user WHERE username = :username OR email = :email
    global $pdo;
    $request = $pdo->prepare('SELECT * FROM user WHERE username = :username OR email = :email');
    $request->bindValue(':username', $username);
    $request->bindValue(':email', $email);

    $request->execute();
    $result = $request->fetch(); // fetch car on a juste besoin d'une ligne

    return is_array($result);
}

/**
 * Ajoute un utilisateur
 * @return array
 */

function addUser($username, $email, $password)
{
    global $pdo;

    if (isUserExists($username, $email)) { // Si l'utilisateur existe on retourne une erreur
        return ['message' => "L'utilisateur existe déjà", 'type' => 'error'];
    }

    // cripter le mot de passe
    $password = password_hash($password, PASSWORD_DEFAULT);

    $request = $pdo->prepare('INSERT INTO user (username, email, password) VALUES (:username, :email, :password)');

    $request->bindValue(':username', $username);
    $request->bindValue(':email', $email);
    $request->bindValue(':password', $password);

    if (!$request->execute()) { // L'execution de la requête ne s'est pas bien déroulé
        var_dump($request->errorInfo()); // Affiche l'erreur explicite de pdo

        return ['message' => 'Une erreur est survenue', 'type' => 'error'];
    }

    return ['message' => 'Bienvenue', 'type' => 'success'];
}
if (empty($errors)) { // S'il n'y a pas d'erreur
    $result = addUser($username, $email, $password); // Ajoute l'utilisateur

    if ('success' == $result['type']) { // L'utilisateur à bien été ajouté
        header('Location: index.php');
    }

    $errors['global'] = $result['message'];
}

/*
/* connexion
*/

function login($username, $password)
{

    global $pdo;
    $request = $pdo->prepare('SELECT * FROM user where username=:username');
    $request->bindValue(':username', $username);
    $request->execute();

    $user = $request->fetch();

    if (!$user) {
        return ['message' => "l'utilisateur n'existe pas ", 'type' => 'error'];
    }
    if (password_verify($password, $user['password'])) {
        return ['message' => "mdp incorrecte ", 'type' => 'error'];
    }

    $_SESSION['user_id'] = $user['id'];
    $_SESSION['user_username'] = $user['username'];
    $_SESSION['user_admin'] = $user['admin'];

    return ['message' => 'Ravi de vous revoir $username'];
}

function logout()
{
    unset($_SESSION['user_id']);
    unset($_SESSION['user_username']);
    unset($_SESSION['user_admin']);
}
