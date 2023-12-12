<?php

session_start();

include '../Database/connection.php';

if (isset($_POST['upload'])) {
    if ($_SESSION['type_user'] == "DPID") {
        $recipient = $_POST['Recipient'];

        $queryGetIDVendor = "SELECT * FROM MST_VENDOR WHERE EMAIL = '$recipient' ";

        $sqlQueryGetIDVendor = mysqli_query($koneksi, $queryGetIDVendor);
        $dataVendor = mysqli_fetch_assoc($sqlQueryGetIDVendor);

        $id_user = $_SESSION['id_user'];
        $idVendor = $dataVendor['ID']; // Mengganti $cekVendor menjadi $dataVendor
        $subject = $_POST['Subject'];
        $description = $_POST['Description'];

        $queryInsertData = "INSERT INTO TRN_FILES_DPID VALUES (
            NULL, 
            '$idVendor',
            '$id_user',
            '$subject',
            '$description',
            '',
            '')";

        $sqlInsertData = mysqli_query($koneksi, $queryInsertData);
        if ($sqlInsertData) { // Mengganti mysqli_affected_rows dengan $sqlInsertData
            echo "<script> alert('Data Berhasil Dikirim!')</script>";
            echo "<script>document.location.href='../Archive.php';</script>";
        } else {
            echo "Error: " . $queryInsertData . "<br>" . mysqli_error($koneksi); // Menambahkan pesan error jika query gagal
        }
    }
    else{
        echo "<script> alert('ERROR!!')</script>";
    }
}
else{
    echo "<script> alert('ERROR!!')</script>";
}

?>
