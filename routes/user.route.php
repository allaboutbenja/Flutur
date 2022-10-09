<?php
    require '../core/bootstraper.php';
    require '../controllers/user.controller.php';
    $user = new UserController( $connectDB );

    /*
    *   Get Users
    */
    if(isset($_GET['getUsers'])){
        // $user->getUsers();
    }

    /*
    *   Get User By ID
    */
    if(isset($_GET['getUsersById'])){
        // $user->getUserById();
    }

    /*
    *   Put User
    */
    if(isset($_POST['putUser'])){
        // $user->putUser();
    }

    /*
    *   Delete User
    */
    if(isset($_POST['deleteUser'])){
        // $user->deleteUser();
    }

    /*
    *   Change User Admin
    */
    if(isset($_POST['changeUserAdmin'])){
        // $user->changeUserAdmin();
    }

    /*
    *   Change User Banned
    */
    if(isset($_POST['changeUserBanned'])){
        // $user->changeUserBanned();
    }

?>