<?php

session_start();

include '../Database/connection.php';

if (isset($_POST['upload'])) {
    if ($_SESSION['type_user'] == "DPID") {
        $recipient = $_POST['Recipient'];

        $queryGetIDVendor = "SELECT * FROM MST_VENDOR WHERE EMAIL = '$recipient'";

        $sqlQueryGetIDVendor = mysqli_query($koneksi, $queryGetIDVendor);
        $dataVendor = mysqli_fetch_assoc($sqlQueryGetIDVendor);

        $id_user = $_SESSION['id_user'];
        $idVendor = $dataVendor['ID']; // Mengganti $cekVendor menjadi $dataVendor
        $subject = $_POST['Subject'];
        $description = $_POST['Description'];

        $files = $_FILES;
        $jumlahFile = count($files['Attachment']['name']);
        $folderUpload = "../File Uploads/DPID/ID_User (". $id_user.")";
        if (!is_dir($folderUpload)) {
            # jika tidak maka folder harus dibuat terlebih dahulu
            mkdir($folderUpload, 0777, $rekursif = true);
        }

        for ($i = 0; $i < $jumlahFile; $i++) {
            $date = date("Y/m/d");
            $file_name = $files['Attachment']['name'][$i];
            $file_path = $files['Attachment']['tmp_name'][$i];
            $nama_file = uniqid() . '-' . $file_name;
            $lokasi_file = "{$folderUpload}/{$nama_file}";
            $prosesUpload = move_uploaded_file($file_path, $lokasi_file);
            
            $queryInsertData = "INSERT INTO TRN_FILES_DPID VALUES ( 
                NULL,
                '$date',
                '$idVendor',
                '$id_user',
                '$subject',
                '$description',
                '$file_name',
                '$lokasi_file')";
    
            $sqlInsertData = mysqli_query($koneksi, $queryInsertData);
            if ($sqlInsertData) { // Mengganti mysqli_affected_rows dengan $sqlInsertData
                echo "<script> alert('Data Berhasil Dikirim!')</script>";
                echo "<script>document.location.href='../Archive.php';</script>";
            } else {
                echo "Error: " . $queryInsertData . "<br>" . mysqli_error($koneksi); // Menambahkan pesan error jika query gagal
            }
        }
        
    }
    else{
        $id_user = $_SESSION['id_user'];
        $subject = $_POST['Subject'];
        $description = $_POST['Description'];
        $date = date("Y/m/d");

        $files = $_FILES;
        $jumlahFile = count($files['Attachment']['name']);
        $jumlahFile = count($files['Attachment']['name']);
        $folderUpload = "../File Uploads/Vendor/ID_User (". $id_user.")";
        if (!is_dir($folderUpload)) {
            # jika tidak maka folder harus dibuat terlebih dahulu
            mkdir($folderUpload, 0777, $rekursif = true);
        }

        for ($i = 0; $i < $jumlahFile; $i++) {
            $file_name = $files['Attachment']['name'][$i];
            $file_path = $files['Attachment']['tmp_name'][$i];
           
            $nama_file = uniqid() . '-' . $file_name;
            $lokasi_file = "{$folderUpload}/{$nama_file}";
            move_uploaded_file($file_path, $lokasi_file);
            
            
            $queryInsertData = "INSERT INTO TRN_FILES_VENDOR VALUES ( 
                NULL,
                '$date',
                '$id_user',
                '$subject',
                '$description',
                '$file_name',
                '$lokasi_file')";
    
            $sqlInsertData = mysqli_query($koneksi, $queryInsertData);
            if ($sqlInsertData) { // Mengganti mysqli_affected_rows dengan $sqlInsertData
                echo "<script> alert('Data Berhasil Dikirim!')</script>";
                echo "<script>document.location.href='../Archive.php';</script>";
            } else {
                echo "Error: " . $queryInsertData . "<br>" . mysqli_error($koneksi); // Menambahkan pesan error jika query gagal
            }
        }
    }
}
else{
    echo "<script> alert('ERROR!!')</script>";
}

?>
