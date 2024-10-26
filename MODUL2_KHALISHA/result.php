<?php
//silahkan jawab disini (menangkap data dari form)
if ($_POST) {
    $olahraga = $_POST["exercise"];
}

if (empty($olahraga)){
    $error = "Waktu olahraga tidak boleh kosong.";
} elseif ($olahraga <= 0 ) {
    $error = "dianjurkan untuk tidak makan malam dan melakukan olahraga ringan di malam hari selama 5 menit";
} else {
    if ($olahraga > 15) {
    $hasil1 = "Anda boleh makan nasi sebanyak 5 sendok makan";
    $y ="<script>
            Swal.fire({
            title: 'Sukses!',
            text: 'Congrats!',
            icon: 'success',
            confirmButtonText: 'OK'
            });
        </script>";
     
    } elseif ($olahraga <= 15){
    $hasil2 = "Anda tidak boleh makan nasi";
    $r ="<script>
            Swal.fire({
            title: 'Sukses!',
            text: 'Congrats!',
            icon: 'success',
            confirmButtonText: 'OK'
            });
        </script>";


    }

}
    
    

//silahkan jawab disini (logika pola makan berdasarkan lama olahraga)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pola Makan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 text-center">
            <h3>Hasil Pola Makan Anda</h3>
            <!-- <p class="alert alert-info"> -->
                <!-- silahkan jawab disini (menampilkan hasil logika berdasarkan kondisi olahraga) -->
                <?php
                if(!empty($hasil1)) {
                    echo "<div class = 'alert alert-success'>$hasil1</div>";

                }
                ?>
                <?php
                if(!empty($hasil2)) {
                    echo "<div class = 'alert alert-success'>$hasil2</div>";

                }
                ?>
                <?php
                if(!empty($error)) {
                    echo "<div class = 'alert alert-success'>$error</div>";
                
                }
                ?>

            <!-- </p> -->
            <a href="index.php" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</body>
</html>
