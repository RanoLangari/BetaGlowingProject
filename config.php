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
    mysqli_query($conn, "INSERT INTO user VALUES('', '$Username','$email', '$Password','0')");

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
            if($row['role'] === '1')
            {
                $idUser = $row["id"];
                $_SESSION["admin"] = true;
                $_SESSION["id"] = $idUser;
                header("Location: ../index.php");
                exit;
            }
            else
            {
                $idUser = $row["id"];
                $_SESSION["user"] = true;
                $_SESSION["id"] = $idUser;
                header("Location: ../index.php");
                exit;
            }
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
    $gambarlama = $data["gambarlama"];

    //cek apakah user pilih gambar baru atau tidak
    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarlama;
    } else {
        $gambar = upload();
    }


    $query = "UPDATE user SET
                username = '$Username',
                email = '$email',
                gambar = '$gambar'
                WHERE id = $id
                ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);

}
 

function upload()
{

    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // cek apakah tidak ada gambar yang diupload
    if ($error === 4) {
        echo "<script>
                alert('pilih gambar terlebih dahulu');
            </script>";
        return false;
    }

    // cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png', 'gif'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
                alert('yang anda upload bukan gambar');
            </script>";
        return false;
    }

    // cek jika ukurannya terlalu besar
    if ($ukuranFile > 1000000) {
        echo "<script>
                alert('ukuran gambar terlalu besar');
            </script>";
        return false;
    }

    // lolos pengecekan, gambar siap diupload
    // generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, 'assets/img/profile/' . $namaFileBaru);

    return $namaFileBaru;
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