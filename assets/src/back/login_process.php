<?php
session_start();

include_once dirname(__FILE__, 1) . '/conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT id_utilisateur, mdp_univ FROM UTILISATEUR WHERE nom_utilisateur = :username");
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        if (password_verify($password, $user['mdp_univ'])) {
            $_SESSION['user_id'] = $user['id_utilisateur'];
            header("Location: /");
            exit();
        } else {
            echo "Mot de passe invalide.";
        }
    } else {
        echo "No user found with that username.";
    }
}
?>
