<!--
    Nama : Muhammad Za'im Muzakki
    NIM : A11.2022.14023
    Kel : A11.4202
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Boostrap 5 CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login</title>
    <style>
        .center {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 600px;
        }
        .item {
            width: 40%;
            padding: 20px;
            border: 3px solid grey;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="center">
            <div class="item">
                <h2 class="text-center">Login Administrator</h2>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
                    <div class="mb-3">
                        <label class="form-label">User</label>
                        <input type="text" class="form-control" name="tuser" placeholder="user">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="tpass" placeholder="password">
                    </div>
                    <div class="mb-3 text-center">
                        <input type="submit" class="btn btn-primary" value="login">
                    </div>
                </form>
                <?php
                    session_start();
                    include "koneksi.php";

                    $username = "";
                    $password = "";
                    if(isset($_POST["tuser"])){
                        $user = $_POST["tuser"];
                        $pass = $_POST["tpass"];
                        $sql = "select * from user where username = '$user' and password = '$pass'";
                        $hasil = $conn->query($sql);
                        while ($rec=$hasil->fetch_assoc()){
                            $iduser = $rec["iduser"];
                            $username = $rec["username"];
                            $password = $rec["password"];
                        }
                        if($user == $username && $pass == $password){
                            $_SESSION["iduser"] = $iduser;
                            $_SESSION["username"] = $username;
                            header("location:dashboard.php");
                        } else {
                            if ($user != ""){
                                echo "<div style ='text-align:center;'>User Tidak Valid...</div>";
                            }
                        }
                    }
                ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>