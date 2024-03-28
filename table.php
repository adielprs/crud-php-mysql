<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>table</title>
  <link rel="stylesheet" href="botstrap/css/bootstrap.min.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-dark-subtle">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">TABLE USER</a>
      
      <form class="d-flex" role="search" action="ProsesCari.php" method="GET">
        <input class="form-control me-2" type="text" placeholder="Search" id="keyword" name="keyword" required>
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>

      <a href="viewTambahUser.php" class="btn btn-primary"><i class='bx bxs-user-plus'>Tambah User</i></a>
    </div>
  </nav>
  <div class="row my-5">
    <div class="col-md">
      <table id="example" class="table table-striped" style="width:100%" border="1">
        <thead>
          <tr>
            <th><i></i> ID</th>
            <th> <i class='bx bx-male-female'></i>Nama</th>
            <th><i class='bx bxl-gmail'></i> Email</th>
            <th>Opsi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          include 'koneksi.php';
          $query = "SELECT * FROM users";
          $result = mysqli_query($koneksi, $query);
          while ($row = mysqli_fetch_assoc($result)){
          ?>
            <tr>
              <td>
                  <?php echo $row['id']; ?>
                </td>
                <td>
                  <?php echo $row['name']; ?>
                </td>
                <td>
                  <?php echo $row['email']; ?>
                </td>
              <td>
                <a href="ViewEditUser.php?id=<?= $row['id']; ?>" class="btn btn-success"><i class='bx bxs-edit-alt'></i>Edit</a>
                <a href="hapusUser.php?hapus_id=<?= $row['id']; ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus User ini?')"><i class='bx bx-x'></i></i>Hapus</a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
  </div>

</html>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
</body>