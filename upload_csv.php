<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
// Include file koneksi ke database
include 'koneksi.php'; // Pastikan file ini ada dan berfungsi dengan baik

// Cek apakah file CSV diunggah
if (isset($_POST['upload'])) {
    // Periksa apakah file CSV diunggah
    if (isset($_FILES['file_csv']) && $_FILES['file_csv']['error'] == 0) {
        $file_name = $_FILES['file_csv']['name'];
        $table_name = '';

        // Cek apakah nama file CSV mengandung kata-kata tertentu
        if (strpos($file_name, 'allianz') !== false) {
            $table_name = 'allianz';
        } else if (strpos($file_name, 'generali') !== false) {
            $table_name = 'generali';
        } else if (strpos($file_name, 'msig') !== false) {
            $table_name = 'msig';
        } else {
            echo "Gagal mengunggah file CSV. Nama file tidak mengandung kata-kata yang diharapkan.";
            exit;
        }

        // Buka file CSV
        $file_tmp = $_FILES['file_csv']['tmp_name'];
        if (($handle = fopen($file_tmp, "r")) !== FALSE) {
            // Lewati header (baris pertama)
            fgetcsv($handle);

            // Loop melalui setiap baris dalam CSV
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                // Real escape string untuk setiap kolom
                $no = $koneksi->real_escape_string($data[0]);
                $client_name = $koneksi->real_escape_string($data[1]);
                $date_year = $koneksi->real_escape_string($data[2]);
                $date_month = $koneksi->real_escape_string($data[3]);
                $nomor_polis = $koneksi->real_escape_string($data[4]);
                $insured_name = $koneksi->real_escape_string($data[5]);
                $area_1 = $koneksi->real_escape_string($data[6]);
                $area_2 = $koneksi->real_escape_string($data[7]);
                $provinsi = $koneksi->real_escape_string($data[8]);
                $provinsi_2 = $koneksi->real_escape_string($data[9]);
                $claim_type = $koneksi->real_escape_string($data[10]);
                $type_of_project = $koneksi->real_escape_string($data[11]);
                $investigator = $koneksi->real_escape_string($data[12]);
                $investigator_2 = $koneksi->real_escape_string($data[13]);
                $case_received = $koneksi->real_escape_string($data[14]);
                $po_received = $koneksi->real_escape_string($data[15]);
                $date_line_preliminary = $koneksi->real_escape_string($data[16]);
                $date_line_investigasi = $koneksi->real_escape_string($data[17]);
                $tat = $koneksi->real_escape_string($data[18]);
                $up = $koneksi->real_escape_string($data[19]);
                $klaim_diajukan = $koneksi->real_escape_string($data[20]);
                $dob_insured_name = $koneksi->real_escape_string($data[21]);
                $investigation_status = $koneksi->real_escape_string($data[22]);
                $comp_percentage = $koneksi->real_escape_string($data[23]);
                $report_send = $koneksi->real_escape_string($data[24]);
                $date_now = $koneksi->real_escape_string($data[25]);
                $result = $koneksi->real_escape_string($data[26]);
                $project_result = $koneksi->real_escape_string($data[27]);
                $result_detail = $koneksi->real_escape_string($data[28]);
                $pic = $koneksi->real_escape_string($data[29]);
                $on_going = $koneksi->real_escape_string($data[30]);
                $tat_on_going = $koneksi->real_escape_string($data[31]);
                $tat_completed = $koneksi->real_escape_string($data[32]);
                $temuan = $koneksi->real_escape_string($data[33]);
                $qa_reporting = $koneksi->real_escape_string($data[34]);
                $nomor_id = $koneksi->real_escape_string($data[35]);
                $qa_investigator = $koneksi->real_escape_string($data[36]);

                // Cek apakah data sudah ada di database
                $checkQuery = "SELECT * FROM $table_name WHERE `No` = '$no' AND `Nomor Polis` = '$nomor_polis'";
                $checkResult = $koneksi->query($checkQuery);

                if ($checkResult->num_rows == 0) {
                    // Masukkan data ke tabel
                    $insertQuery = "INSERT INTO $table_name (`No`, `Client Name`, `DateYear`, `Date Month`, `Nomor Polis`, `Insured Name`, `Area 1`, 
                            `Area 2`, `Provinsi`, `Provinsi 2`, `Claim Type`, `Type Of Project`, `Investigator`, `Investigator 2`, 
                            `Case Received`, `PO Received`, `Date Line Preliminary`, `Date Line Investigasi`, `TAT`, `UP`, 
                            `Klaim Yang Diajukan`, `DOB Insured Name`, `Investigation Status`, `% Comp`, `Report Send`, 
                            `Date Now`, `Result`, `Project Result`, `Result Detail`, `PIC`, `ON Going`, `TAT On Going`, 
                            `TAT Completed`, `Temuan`, `QA Reporting`, `Nomor ID`, `QA Investigator`) 
                            VALUES ('$no', '$client_name', '$date_year', '$date_month', '$nomor_polis', '$insured_name', '$area_1', 
                                    '$area_2', '$provinsi', '$provinsi_2', '$claim_type', '$type_of_project', '$investigator', 
                                    '$investigator_2', '$case_received', '$po_received', '$date_line_preliminary', 
                                    '$date_line_investigasi', '$tat', '$up', '$klaim_diajukan', '$dob_insured_name', 
                                    '$investigation_status', '$comp_percentage', '$report_send', '$date_now', '$result', 
                                    '$project_result', '$result_detail', '$pic', '$on_going', '$tat_on_going', '$tat_completed', 
                                    '$temuan', '$qa_reporting', '$nomor_id', '$qa_investigator')";

                    // Jalankan query
                    $insertResult = $koneksi->query($insertQuery);
                    if (!$insertResult) {
                        echo "Gagal mengupload ke dalam database!<script>setTimeout(function(){ window.location.href = 'csv.php'; }, 2000);</script>";
                    } else {
                        echo "Data berhasil di upload!<script>setTimeout(function(){ window.location.href = 'dashboard.php'; }, 2000);</script>";
                    }
                }
            }
            // Tutup file setelah selesai
            fclose($handle);
        } else {
            echo "Gagal membuka file CSV.";
        }
    } else {
        echo "Gagal mengunggah file CSV.";
    }
}