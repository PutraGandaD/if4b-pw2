<?php
// Kuis Pemrograman Web II - IF4B
// ==============================
// Mahasiswa diizinkan mengakses dokumentasi seperti php.net, w3schools, bootstrap, repository github pw2 mahasiswa
// Mahasista TIDAK diizinkan mengakses ChatGPT untuk menyelesaikan soal kuis ini

// ==========================================================================================
// PERHATIAN
// ==========================================================================================
// 1. Berdoa terlebih dahulu agar diberi kemudahan dalam menjawab soal
// 2. Percaya diri dengan kemampuan yang dimiliki dalam menjawab soal
// 3. Dilarang kerja sama, berbagi jawaban dengan peserta lain 
// 4. Buat folder "kuis" di dalam folder htdocs
// 5. RENAME soal.txt menjadi soal.php dan simpan di dalam folder "kuis"
// 6. Setelah selesai menjawab atau waktu habis, silakan zip folder "kuis" dan upload ke SPON
// ==========================================================================================

// soal 1 (5 poin)
// Buat sebuah function PHP yang menerima dua parameter angka dan mengembalikan hasil penjumlahan dari kedua angka tersebut?

// TULIS JAWABAN SOAL KE-1 DI BAWAH SINI YA (silakan ganti namaFunction)
function jumlahAngka($angka1, $angka2) {
    return $angka1 + $angka2;
}

// Contoh penggunaan : 
echo jumlahAngka(1, 2); // Output : 3

// ==========================================================================================

// soal 2 (15 poin)
// Buat function PHP yang menerima sebuah parameter tanggal dengan format YYYY-MM-DD dan mengembalikan tanggal dalam format Indonesia (Nama bulan dalam bahasa Indonesia: Januari, Februari, Maret, April, Mei, Juni, Juli, Agustus, September, Oktober, November, Desember)

// TULIS JAWABAN SOAL KE-2 DI BAWAH SINI YA (silakan ganti namaFunctionTgl)
// function ...

// Contoh penggunaan :
date_default_timezone_set('Asia/Jakarta');
echo "<br>";
$ymd = date_create($tanggal);

$tanggal = date_format($ymd, 'd F Y'); // 2023-03-21
echo $tanggal; // Output : 21 Maret 2023

// ==========================================================================================

// soal 3 (25 poin)
/*
a. Susun data mahasiswa di bawah ini ke dalam bentuk array asosiatif (multidimensi)

npm: 001
nama: ahmad
jk: L

npm: 001
nama: umar
jk: L

npm: 003
nama: aisyah
jk: P

b. Kemudian tampilkan data array menggunakan foreach ke dalam bentuk tabel dengan urutan kolom NPM | Nama Mahasiswa | Jenis Kelamin
c. Hitung jumlah mahasiswa laki-laki dan perempuan, kemudian tampilkan di bawah tabel 4.b (Gunakan variabel atau function untuk mendapatkan jumlah mahasiswa laki-laki dan perempuan)
*/

// TULIS JAWABAN SOAL KE-3 DI BAWAH SINI YA
// Buat array, tampilkan dalam bentuk tabel, jumlah mhs laki-laki dan jumlah mhs perempuan di bawah sini
$mahasiswas = [
    [
        "npm" => "001",
        "nama" => "Ahmad",
        "jk" => "L",
    ],
    [
        "npm" => "002",
        "nama" => "Umar",
        "jk" => "L",
    ],
    [
        "npm" => "003",
        "nama" => "Aisyah",
        "jk" => "P",
    ]
];

echo "
    <style>
        td {
            text-align: center;
        }
    </style>
    <table border = 1>
    <tr>
        <th>NPM</th>
        <th>Mahasiswa</th>
        <th>Jenis Kelamin</th>
    </tr>
";

$jumlah_lk = 0; $jumlah_pr = 0;
foreach($mahasiswas as $data) {
    if($data["jk"] == "L") {
        $jumlah_lk += 1;
    }

    if($data["jk"] == "P") {
        $jumlah_pr += 1;
    }

    echo "
        <tr>
            <td>".$data["npm"]."</td>
            <td>".$data["nama"]."</td>
            <td>".$data["jk"]."</td>
        </tr>   
    ";
}

echo "<tr> 
    <td colspan='2'> Jumlah Mahasiswa Laki-laki </td>
    <td>" . $jumlah_lk . "</td>
</tr>";

echo "<tr> 
    <td colspan='2'> Jumlah Mahasiswa Perempuan </td>
    <td>" . $jumlah_pr . "</td>
</tr>";

echo "</table>";




// ==========================================================================================

// soal 4 (35 poin)
/*
a. Susun data pegawai di bawah ini ke dalam bentuk array asosiatif (multidimensi)

kode: 001
nama_pegawai: alif
kode_jabatan: M

kode: 001
nama_pegawai: linus
kode_jabatan: WP

kode: 003
nama_pegawai: putra
kode_jabatan: MP

kode: 004
nama_pegawai: rizky
kode_jabatan: UIX

kode: 005
nama_pegawai: thomas
kode_jabatan: DB

b. Kemudian tampilkan data array menggunakan foreach ke dalam bentuk tabel dengan urutan kolom Kode | Nama Pegawai | Jabatan | Gaji
c. Tampilkan data pada kolom jabatan sesuai dengan ketentuan berikut ini:
    - M = Manager
    - WP = Web Programmer
    - MP = Mobile Programmer
    - UIX = UI/UX Designer
    - DB = Database Designer
d. Tampilkan data pada kolom gaji sesuai dengan ketentuan berikut ini: (Gunakan fungsi number_format() untuk mengubah format angka gaji dari 15000000 menjadi 15.000.000)
    - M = 15000000
    - WP = 10000000
    - MP = 10000000
    - UIX = 8000000
    - DB = 9000000
e. Hitung dan tampilkan total gaji semua pegawai yang harus dibayar perusahaan
*/
// TULIS JAWABAN SOAL KE-4 DI BAWAH SINI YA
$pegawais = [
    [
        "kode" => "001",
        "nama_pegawai" => "Alif",
        "kode_jabatan" => "M",
    ],
    [
        "kode" => "002",
        "nama_pegawai" => "Linus",
        "kode_jabatan" => "WP",
    ],
    [
        "kode" => "003",
        "nama_pegawai" => "Putra",
        "kode_jabatan" => "MP",
    ],
    [
        "kode" => "004",
        "nama_pegawai" => "Rizky",
        "kode_jabatan" => "UIX",
    ],
    [
        "kode" => "005",
        "nama_pegawai" => "Thomas",
        "kode_jabatan" => "DB",
    ]
];

echo "
    <style>
        td {
            text-align: center;
        }
    </style>
    <table border = 1>
    <tr>
        <th>Kode</th>
        <th>Nama Pegawai</th>
        <th>Jabatan</th>
        <th>Gaji</th>
    </tr>
";

$jumlah_bayar = 0;
foreach($pegawais as $data) {
    $jumlah_bayar += getGaji($data['kode_jabatan']);

    echo "
        <tr>
            <td>".$data["kode"]."</td>
            <td>".$data["nama_pegawai"]."</td>
            <td>".getJabatan($data['kode_jabatan'])."</td>
            <td>".getGaji($data['kode_jabatan'])."</td>
        </tr>   
    ";
}

echo "<tr> 
    <td colspan='3'> Jumlah Gaji yang harus dibayar perusahaan </td>
    <td>".number_format($jumlah_bayar)."</td>
</tr>";

echo "</table>";

function getJabatan($kode_jabatan) {
    $namaJabatan = "";
    if ($kode_jabatan == "M") {
        $namaJabatan = "Manager";
    } else if ($kode_jabatan == "WP") {
        $namaJabatan = "Web Programmer";
    } else if ($kode_jabatan == "MP") {
        $namaJabatan = "Mobile Programmer";
    } else if ($kode_jabatan == "UIX") {
        $namaJabatan = "UI/UX Designer";
    } else if ($kode_jabatan == "DB") {
        $namaJabatan = "Database Designer";
    } else {
        $namaJabatan = "-";
    }
    return $namaJabatan;
}

function getGaji($kode_jabatan) {
    $gaji = "";
    if ($kode_jabatan == "M") {
        $gaji = 15000000;
    } else if ($kode_jabatan == "WP") {
        $gaji = 10000000 ;
    } else if ($kode_jabatan == "MP") {
        $gaji = 10000000 ;
    } else if ($kode_jabatan == "UIX") {
        $gaji = 8000000 ;
    } else if ($kode_jabatan == "DB") {
        $gaji = 9000000 ;
    } else {
        $gaji = "-";
    }
    return number_format($gaji,0,",",".");
}

// ==========================================================================================

// soal 5 (20 poin)
/* Buat class "Alumni" dengan atribut/property "npm", "nama", "tahun_lulus", dan "tahun_diterima_kerja". 
Buat juga method getInfo() yang mengembalikan (return) informasi alumni seperti npm, nama, tahun_lulus, tahun_diterima_kerja dan waktu_tunggu_kerja alumni tersebut. Waktu_tunggu_kerja didapat dari tahun_diterima_kerja - tahun_lulus */

// Buat class Alumni di bawah sini
class Alumni {
    //property
    private $npm;
    private $nama;
    private $tahun_lulus;
    private $tahun_diterima_kerja; 

    function getInfo() {
        return $this->npm;
        return $this->nama;
        return $this->tahun_lulus;
        return $this->tahun_diterima_kerja;
        return tahun_diterima_kerja - tahun_lulus -> waktu_tunggu_kerja;
    }
}


/* Buat objek alumni1, alumni2 dari class Alumni, kemudian isi semua atribut dari class Alumni */
$alumni1 = new Alumni();
$alumni2 = new Alumni();

$alumni1->npm = "2125250069";
$alumni1->nama = "Putra Ganda";
$alumni1->tahun_lulus = "2025";
$alumni1->tahun_diterima_kerja = "2026";

$alumni2->npm = "2125250068";
$alumni2->nama = "Putra Ganda";
$alumni2->tahun_lulus = "2025";
$alumni2->tahun_diterima_kerja = "2027";

/* Tampilkan data alumni1 dan alumni2 dengan output sebagai berikut:
    Alumni ke-1
    NPM : ... 
    Nama Alumni : ... 
    Tahun Lulus : ...
    Tahun Diterima Kerja : ...
    Waktu Tunggu Kerja : ... tahun

    Alumni ke-2
    NPM : ... 
    Nama Alumni : ... 
    Tahun Lulus : ...
    Tahun Diterima Kerja : ...
    Waktu Tunggu Kerja : ... tahun
*/

echo "NPM";
echo "<br> Nama Alumni = ".$alumni1->npm;
echo "<br> Tahun Lulus = ".$alumni1->npm;
echo "<br> Tahun Diterima Kerja = ".$alumni1->npm;

echo "<br> Nama Alumni = ".$alumni2->npm;
echo "<br> Tahun Lulus = ".$alumni2->npm;
echo "<br> Tahun Diterima Kerja = ".$alumni2->npm;

// TULIS JAWABAN SOAL KE-5 DI BAWAH SINI YA
// ==========================================================================================