<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <h1 class="text-center"Data Nilai Mahasiswa</h1>
    <div class="container">
        <table class="table table-bordered table-striped">
            <thead>
            </thead>
  <body>
    <?php  
    $mhs1 = ["nim" =>  "01", "nama" =>  "Rifqi", "nilai" => 75];
    $mhs2 = ["nim" =>  "02", "nama" =>  "Ahmad", "nilai" => 60];
    $mhs3 = ["nim" =>  "03", "nama" =>  "Dani", "nilai" => 55];
    $mhs4 = ["nim" =>  "04", "nama" =>  "Akbar", "nilai" => 75];
    $mhs5 = ["nim" =>  "05", "nama" =>  "Arla", "nilai" => 80];
    $mhs6 = ["nim" =>  "06", "nama" =>  "Nurul", "nilai" => 95];
    $mhs7 = ["nim" =>  "07", "nama" =>  "Dennis", "nilai" => 70];
    $mhs8 = ["nim" =>  "08", "nama" =>  "Rafi", "nilai" => 75];
    $mhs9 = ["nim" =>  "09", "nama" =>  "David", "nilai" => 80];
    $mhs10 = ["nim" =>  "10", "nama" => "Rizki", "nilai" => 65];

    $kumpulanMahasiswa = [$mhs1, $mhs2, $mhs3, $mhs4, $mhs5, $mhs6, $mhs7, $mhs8, $mhs9, $mhs10];
    $kumpulanJudul = ["No", "NIM", "Nama", "Nilai", "Keterangan","grade", "Predikat"];
    ?>  
    <h1 class="text-center">Data Nilai Mahasiswa</h1>
    <dic class="Container">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <?php  
                    foreach ($kumpulanJudul as $judul) { ?>
                        <th><?= $judul ?></th>
                    <?php } ?>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                     $no = 1;
                     foreach ($kumpulanMahasiswa as $mahasiswa) {
                        $nim = $mahasiswa["nim"];
                        $nama = $mahasiswa["nama"];
                        $nilai = $mahasiswa["nilai"];

                        $keterangan = ($nilai >= 60) ? "Lulus" : "gagal";

                        if ($nilai >= 90 && $nilai <=100) {
                            $grade = "A";
                        } elseif ($nilai >= 80 && $nilai <=90) {
                            $grade = "B";
                        } elseif ($nilai >= 70 && $nilai <=80) {
                            $grade = "C";
                        }  elseif ($nilai >= 60 && $nilai <=70) {
                            $grade = "D";
                        }  else{
                            $grade = "E";
                        }

                        switch ($grade) {
                            case 'A':
                                $predikat = "Memuaskan";
                                break;
                            case 'B':
                                $predikat = "Baik";
                                break;
                            case 'C':
                                    $predikat = "Cukup";
                                break;
                            case 'D':
                                    $predikat = "Kurang";
                                    break;    
                                
                            default:
                                $predikat = "Buruk";
                            break;
                        }
                     ?>
                     <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $nim ?></td>
                        <td><?= $nama ?></td>
                        <td><?= $nilai ?></td>
                        <td><?= $keterangan ?></td>
                        <td><?= $grade ?></td>
                        <td><?= $predikat ?></td> 
                        </tr>
                        <?php }  ?>
                        </tbody>
                        <tfoot>
                            <?php 
                            $jumlahMahasiswa = count($kumpulanMahasiswa);
                            $kumpulanNilai = array_column($kumpulanMahasiswa, "nilai");
                            $nilaiTerbesar = max($kumpulanNilai);
                            $nilaiTerkecil = min($kumpulanNilai);
                            $totalNilai = array_sum($kumpulanNilai);
                            $rata2 = $totalNilai / $jumlahMahasiswa;

                            $tfoot = [
                                    "Nilai Terbesar" => $nilaiTerbesar,
                                    "Nilai Terkecil" => $nilaiTerkecil,
                                    "Rata-Rata" => $rata2,
                                    "Jumlah Mahasiswa" => $jumlahMahasiswa,


                            ];
                            foreach ($tfoot as $key => $value) { ?>
                                <tr>
                                <th colspan="4"><?= $key ?></th>
                                <th colspan= "3"><?= $value ?></th>

                            </tr>
                             <?php }  ?>
                        </tfoot>    
                        </table>
                        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>