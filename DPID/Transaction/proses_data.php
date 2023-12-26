<?php
include '../Database/connection.php';

if (isset($_GET['jenis'])) {
    $jenisData = $_GET['jenis'];

    if ($jenisData == 'total_terkirim') {
        $query = ($_SESSION['type_user'] == "DPID") ?
            "SELECT * FROM TRN_FILES_VENDOR WHERE ID_USER = '" . $_SESSION['id_user'] . "'" :
            "SELECT * FROM TRN_FILES_DPID WHERE ID_USER = '" . $_SESSION['id_user'] . "'";
    } elseif ($jenisData == 'total_diterima') {
        $idVendor = $_SESSION['id_vendor'];
        $query = "SELECT id, date, id_user, subject, description, file_name, file_path FROM TRN_FILES_DPID WHERE id_vendor = '$idVendor'";

        $result = mysqli_query($koneksi, $query);

        if ($result) {
            echo '<table class="u-table">';
            echo '<thead class="u-grey-50 u-table-header u-table-header-1">
                    <tr style="height: 21px;">
                        <th class="u-border-1 u-border-grey-50 u-table-cell">ID</th>
                        <th class="u-border-1 u-border-grey-50 u-table-cell">Date</th>
                        <th class="u-border-1 u-border-grey-50 u-table-cell">ID User</th>
                        <th class="u-border-1 u-border-grey-50 u-table-cell">Subject</th>
                        <th class="u-border-1 u-border-grey-50 u-table-cell">Description</th>
                        <th class="u-border-1 u-border-grey-50 u-table-cell">File Name</th>
                        <th class="u-border-1 u-border-grey-50 u-table-cell">File Path</th>
                    </tr>
                </thead>';

            echo '<tbody class="u-table-body">';
            while ($row = mysqli_fetch_array($result)) {
                echo '<tr style="height: 75px;">
                        <td class="u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell">' . $row['id'] . '</td>
                        <td class="u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell">' . $row['date'] . '</td>
                        <td class="u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell">' . $row['id_user'] . '</td>
                        <td class="u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell">' . $row['subject'] . '</td>
                        <td class="u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell">' . $row['description'] . '</td>
                        <td class="u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell">' . $row['file_name'] . '</td>
                        <td class="u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell">' . $row['file_path'] . '</td>
                    </tr>';
            }
            echo '</tbody>';
            echo '</table>';
        } else {
            echo 'Tidak ada data yang ditemukan.';
        }
     } 
     elseif ($jenisData == 'total_user') {
        $query = "SELECT name, username, email FROM MST_USER_VENDOR WHERE ID_VENDOR = '" . $_SESSION['id_vendor'] . "'";

        $result = mysqli_query($koneksi, $query);

        if ($result) {
            echo '<table class="u-table">';
            echo '<thead class="u-grey-50 u-table-header u-table-header-1">
                    <tr style="height: 21px;">
                        <th class="u-border-1 u-border-grey-50 u-table-cell">Name</th>
                        <th class="u-border-1 u-border-grey-50 u-table-cell">Username</th>
                        <th class="u-border-1 u-border-grey-50 u-table-cell">Email</th>
                    </tr>
                </thead>';

            echo '<tbody class="u-table-body">';
            while ($row = mysqli_fetch_array($result)) {
                echo '<tr style="height: 75px;">
                        <td class="u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell">' . $row['name'] . '</td>
                        <td class="u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell">' . $row['username'] . '</td>
                        <td class="u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell">' . $row['email'] . '</td>
                    </tr>';
            }
            echo '</tbody>';
            echo '</table>';
        } else {
            echo 'Tidak ada data yang ditemukan.';
        }
    } else {
        echo 'Jenis data tidak diberikan.';
    }
}
?>
