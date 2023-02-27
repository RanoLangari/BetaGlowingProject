<?php

$conn = mysqli_connect("localhost","root","","sib");
session_start();

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function registrasi($data)
{
    global $conn;
    $email = $data["email"];
    $Username = strtolower(stripslashes($data["username"]));
    $Password = mysqli_real_escape_string($conn, $data["pass"]);
    $Password2 = mysqli_real_escape_string($conn, $data["pass2"]);

    // cek Username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$Username'");

    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('Username sudah terdaftar');
            </script>";
        return false;
    }

    // cek konfirmasi Password
    if ($Password !== $Password2) {
        echo "<script>
                alert('konfirmasi Password tidak sesuai');
            </script>";
        return false;
    }

    // enkripsi Password
    $Password = Password_hash($Password, PASSWORD_DEFAULT);

    // tambahkan user baru ke database
    mysqli_query($conn, "INSERT INTO user VALUES('', '$Username','$email', '$Password')");

    return mysqli_affected_rows($conn);
}

function Login($data)
{
    global $conn;
    $Username = $data["username"];
    $Password = $data["pass"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$Username'");

    // cek Username
    if (mysqli_num_rows($result) === 1) {

        // cek Password
        $row = mysqli_fetch_assoc($result);
        if (Password_verify($Password, $row["pass"])) {

            $idUser = $row["id"];
            $_SESSION["login"] = true;
            $_SESSION["id"] = $idUser;
            header("Location: ../index.php");
            exit;
        }
    }

    $error = true;

    return $error;
}

function ubahdata($data)
{
    global $conn;
    $id = $data["id"];
    $Username = $data["username"];
    $email = $data["email"];

    $query = "UPDATE user 
                SET
                username = '$Username',
                email = '$email'
                WHERE id = $id
                ";
     mysqli_query($conn, $query);

     return mysqli_affected_rows($conn);
}

function UbahPassword($data)
{
    global $conn;
    $id = $data["id"];
    $oldPass = $data["oldPass"];
    $pass = $data["newPass"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE id = '$id'");
    $row = mysqli_fetch_assoc($result);
    $password = $row["pass"];
    if(password_verify($oldPass,$password))
    {
        $password = password_hash($pass, PASSWORD_DEFAULT);
        $query = "UPDATE user 
                SET
                pass = '$password'
                WHERE id = $id
                ";
        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }
    echo "<script>
                alert('Password lama tidak sesuai');
            </script>";
        return false;



}

?>