<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!--Boostrap 5 CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Member</title>
</head>
<body>
    <div class="container">
        <div class="justify-content-center">
            <div class="col-10">
                <h1>Foto Entry Member</h1>
               <form action="insMember.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="11" class="form-label">ID</label>
                        <input type="text" class="form-control" id="id" name="tid" placeholder="ID" required>
                    </div>
                    <div class="mb-3">
                        <label for="12" class="form-label">Nama Member</label>
                        <input type="text" class="form-control" id="nama_member" name="tnama_member" placeholder="nama member" required>
                    </div>
                    <div class="mb-3">
                        <label for="13" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="temail" placeholder="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="14" class="form-label">Telp</label>
                        <input type="text" class="form-control" id="telp" name="ttelp" placeholder="telfon" required>
                    </div>
                    <div class="mb-3">
                        <label for="15" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="talamat" placeholder="alamat" required>
                    </div>
                    <div class="mb-3">
                        <label for="15" class="form-label">Kota</label>
                        <input type="text" class="form-control" id="kota" name="tkota" placeholder="kota" required>
                    </div>
                    <div class="mb-3">
                        <label for="15" class="form-label">Provinsi</label>
                        <input type="text" class="form-control" id="provinsi" name="tprovinsi" placeholder="provinsi" required>
                    </div>
                    <div class="mb-3">
                        <label for="15" class="form-label">Gender</label>
                        <input type="text" class="form-control" id="gender" name="tgender" placeholder="gender" required>
                    </div>
                    <div class="mb-3">
                        <label for="15" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="tusername" placeholder="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="15" class="form-label">Password</label>
                        <input type="text" class="form-control" id="password" name="tpassword" placeholder="password" required>
                    </div>
                    <div class="mb-3">
                        <label for="16" class="form-label">Foto</label>
                        <input type="file" class="form-control" id="ket" name="foto">
                    </div>
                  
                    <div class="mb-3">
                        <button class="btn btn-primary" type="submit">simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>