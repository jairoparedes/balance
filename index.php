<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Balance</title>
</head>
<body>
<?php
include_once 'includes/user.php';
include_once 'includes/user_session.php';
include_once 'includes/db.php';

$userSession = new UserSession();
$user = new User();

if(isset($_SESSION['user'])){
    //echo "hay sesion";
    $user->setUser($userSession->getCurrentUser());
    $_SESSION["userid"]=$user->getId();
    $_SESSION["objusuario"]=$user->getNombre();
    include 'vistas/home.php';

}else if(isset($_POST['username']) && isset($_POST['password'])){
    
    $userForm = $_POST['username'];
    $passForm = $_POST['password'];

    $user = new User();
    if($user->userExists($userForm, $passForm)){
        $userSession->setCurrentUser($userForm);
        $user->setUser($userForm);
        $_SESSION["userid"]=$user->getId();
        $_SESSION["newsession"]=$user->getId();
        $_SESSION["objusuario"]=$user->getNombre();
        include 'vistas/home.php';
    }else{
        $errorLogin = "Nombre de usuario y/o password incorrecto";
        include_once 'vistas/login.php';
    }
}else{
    include_once 'vistas/login.php';
}
?>
</body>
</html>