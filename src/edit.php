<?php
include 'database.php';

$db = new Database();

$detail = $db->edit($_GET['id']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>To Do List</title>
</head>

<body>
    <div class="container">
        <h1>To Do List</h1>
        <h4>Ubah To Do List</h4>

        <form method="POST" action="proses.php?aksi=update">
            <?php
            foreach ($detail as `$hasil`) {
            ?>
                <input type="hidden" name="id" value="<?php echo $hasil['id'] ?>" />
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $hasil['nama'] ?>">
                </div>

                <div class="mb-3">
                    <label for="keterangan" class="form-label">keterangan</label>
                    <textarea class="form-control" id="keterangan" name="keterangan"><?php echo $hasil['keterangan'] ?></textarea>
                </div>

                <div class="mb-3">
                    <label for="selesai" class="form-label">Selesai</label>
                    <input type="text" class="form-control" id="selesai" name="selesai" value="<?php echo $hasil['selesai'] ?>">
                </div>

            <?php
            }
            ?>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
</body>

</html>