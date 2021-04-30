<?php
function loginUser($connection, $username, $pwd){
    $uidExists = uidExists($connection, $username);
    if($uidExists === false){
        header("location: /badersleben/admin/login.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $uidExists["password"];
    $checkPwd = password_verify($pwd, $pwdHashed);
    if($checkPwd){
        session_start();
        $_SESSION["user_id"] = $uidExists["user_id"];
        header("location: /badersleben/admin/dashboard.php");
        exit();
    }else{
        header("location: /badersleben/admin/login.php?error=wronglogin");
        exit();
    }
};

function uidExists($connection, $username){
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $connection->stmt_init();
    if(!$stmt->prepare($sql)){
        header("location: /badersleben/admin/login.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    $resultData = mysqli_stmt_get_result($stmt);
    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }else{
        return false;
    }
    mysqli_stmt_close($stmt);
}