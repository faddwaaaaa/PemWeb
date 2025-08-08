<?php
require "../public/functions.php";
$query = "SELECT * FROM siswa";
$result = mysqli_query($conn, $query);

$rows = [];
while($row = mysqli_fetch_assoc($result)){
    $rows[] = $row;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Nilai</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0">📘 Daftar Nilai TKA Matematika</h2>
        <a href="../data/tambah.php" class="btn btn-primary">Tambah Data</a>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover align-middle shadow-sm bg-white">
            <thead class="table-dark text-center">
                <tr>
                    <th>No</th>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Nilai Matematika</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <?php $no = 1 ?>
                <?php foreach($rows as $row): ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $row['nis']; ?></td>
                        <td><?= $row['nama']; ?></td>
                        <td><?= $row['nilai_mtk']; ?></td>
                        <td>
                            <?php if ($row['nilai_mtk'] >= 75): ?>
                                <span class="badge bg-success">Lulus</span>
                            <?php else: ?>
                                <span class="badge bg-danger">Remidi</span>
                            <?php endif; ?>
                        </td>
                        <td>
                            <a href="../data/edit.php?id=<?= $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="../data/hapus.php?id=<?= $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?');">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                <?php if (empty($rows)) : ?>
                    <tr>
                        <td colspan="6" class="text-center text-muted">Belum ada data.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Bootstrap JS (optional if you want dropdowns/modal) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
