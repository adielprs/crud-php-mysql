<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="botstrap/css/bootstrap.min.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
  
  <h2 class="text-center">Add users</h2>
  <form method="post" action="prosesTambahUser.php">
    <div class="card">
      <div class="row">
        <div class="col-2">
          <label for="exampleInputEmail1" class="form-label">Nama</label>
        </div>
        <div class="col-10">
          <input type="text" name="name" class="form-control" required><br>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="row">
        <div class="col-2">
          <label for="exampleInputEmail1" class="form-label">Email</label>
        </div>
        <div class="col-10">
          <input type="email" name="email" class="form-control" required><br>
        </div>
      </div>
    </div>

    <div class="tombol">
      <button class="btn btn-primary"><i class='bx bx-user'></i> Login</button>
      <a href="table.php" class="btn btn-danger"><i class='bx bx-arrow-back'></i> Kembali</a>
    </div>
  </form>
  <script src="botstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<style>
  .card {
        margin-top: 50px;
        margin-left: 250px;
        width: 900px;
    }
    .tombol
    {
        margin: 20px 0px 0px 250px;
    }
</style>