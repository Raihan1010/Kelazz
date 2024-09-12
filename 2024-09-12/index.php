<!-- <form action="" method="POST">
    <input type="text" name="nama" placeholder="Masukkan Nama">
    <input type="text" name="alamat" placeholder="Masukkan Alamat">
    <input type="email" name="email" placeholder="Masukkan Email">
    <input type="password" name="password" placeholder="Masukkan Password">
    <input type="submit" value="Kirim" name="tombol">
</form> -->

<form action="" method="POST">
    <input type="number" name="bulan" placeholder="Masukkan Bulan">
    <input type="number" name="tanggal" placeholder="Masukkan Tanggal">
    <input type="submit" value="kirim" name="tombol">
</form>

<?php

if (isset($_POST["tombol"])) {

    $bulan = $_POST["bulan"];
    $tanggal = $_POST["tanggal"];


    // echo $bulan;
    // echo $tanggal;

    $keterangan = "salah";

    if ($bulan > 0 && $bulan < 13) {
        // $keterangan = "benar";

        if ($bulan == 3) {
            if ($tanggal > 20 && $tanggal < 32) {
                $keterangan = "Aries";
            }
        }

        if ($bulan == 4) {
            if ($tanggal > 0 && $tanggal < 20) {
                $keterangan = "Aries";
            }
        }

        if ($bulan == 4) {
            if ($tanggal > 19 && $tanggal < 31) {
                $keterangan = "Taurus";
            }
        }

        if ($bulan == 5) {
            if ($tanggal > 0 && $tanggal < 21) {
                $keterangan = "Taurus";
            }
        }

        if ($bulan == 5) {
            if ($tanggal > 20 && $tanggal < 32) {
                $keterangan = "Gemini";
            }
        }

        if ($bulan == 6) {
            if ($tanggal > 0 && $tanggal < 21) {
                $keterangan = "Gemini";
            }
        }

        if ($bulan == 6) {
            if ($tanggal > 20 && $tanggal < 31) {
                $keterangan = "Cancer";
            }
        }

        if ($bulan == 7) {
            if ($tanggal > 0 && $tanggal < 23) {
                $keterangan = "Cancer";
            }
        }

        if ($bulan == 7) {
            if ($tanggal > 22 && $tanggal < 32) {
                $keterangan = "Leo";
            }
        }

        if ($bulan == 8) {
            if ($tanggal > 0 && $tanggal < 23) {
                $keterangan = "Leo";
            }
        }

        if ($bulan == 8) {
            if ($tanggal > 22 && $tanggal < 32) {
                $keterangan = "Virgo";
            }
        }

        if ($bulan == 9) {
            if ($tanggal > 0 && $tanggal < 23) {
                $keterangan = "Virgo";
            }
        }

        if ($bulan == 9) {
            if ($tanggal > 22 && $tanggal < 31) {
                $keterangan = "Libra";
            }
        }

        if ($bulan == 10) {
            if ($tanggal > 0 && $tanggal < 23) {
                $keterangan = "Libra";
            }
        }

        if ($bulan == 10) {
            if ($tanggal > 22 && $tanggal < 32) {
                $keterangan = "Scorpio";
            }
        }

        if ($bulan == 11) {
            if ($tanggal > 0 && $tanggal < 22) {
                $keterangan = "Scorpio";
            }
        }

        if ($bulan == 11) {
            if ($tanggal > 23 && $tanggal < 31) {
                $keterangan = "Sagitarius";
            }
        }

        if ($bulan == 12) {
            if ($tanggal > 0 && $tanggal < 22) {
                $keterangan = "Sagitarius";
            }
        }

        if ($bulan == 12) {
            if ($tanggal > 21 && $tanggal < 32) {
                $keterangan = "Capricorn";
            }
        }

        if ($bulan == 1) {
            if ($tanggal > 0 && $tanggal < 20) {
                $keterangan = "Capricorn";
            }
        }

        if ($bulan == 1) {
            if ($tanggal > 19 && $tanggal < 32) {
                $keterangan = "Aquarius";
            }
        }

        if ($bulan == 2) {
            if ($tanggal > 0 && $tanggal < 19) {
                $keterangan = "Aquarius";
            }
        }

        if ($bulan == 2) {
            if ($tanggal > 18 && $tanggal < 31) {
                $keterangan = "Pisces";
            }
        }

        if ($bulan == 3) {
            if ($tanggal > 0 && $tanggal < 21) {
                $keterangan = "Pisces";
            }
        }
    }

    echo $keterangan;
}



// if (isset($_POST["tombol"])) {

//     $nama = $_POST["nama"];
//     $alamat = $_POST["alamat"];
//     $email = $_POST["email"];
//     $password = $_POST["password"];

//     echo $nama;
//     echo $alamat;
//     echo $email;
//     echo $password;
// }
?>