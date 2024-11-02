
<?php 

    $identitas = ["Nama"=>"Muhammad Raihan Al Irsyad",
                "Alamat"=>"Sedati",
                "Telepon"=>"012345678",
                "Email"=>"muhammadraihan1402@gmail.com",
                "Fb"=>"Hannzsigma",
                "Ig"=>"@Rhxannz",
                "Tiktok"=>"@mursid241"];

    $sekolah = ["Tk"=>"Aulia Kidz",
                "Sd"=>"SDN Percobaan SBY",
                "Smp"=>"MTS Nurul Huda Sedati",
                "Smk"=>"SMKN 2 buduran",
                "S1"=>"ITS",
                "S2"=>"UTB",
                "S3"=>"UI"];

    $hobi = ["Gowes","Joging","Workout","Game"];

    $skill = ["C++"=>"Expert",
            "Html"=>"Newbie",
            "Css"=>"Newbie",
            "Php"=>"Newbie",
            "Js"=>"Newbie"];

    $deskripsi = "Saya adalah seorang programmer pemula <br>";

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar riwayat hidup</title>
    <style>.container{width: 800px; margin: auto;}</style>
</head>
<body>
    <div class="container">
        <h1>DAFTAR RIWAYAT HIDUP</h1>

        <h2>Data Diri</h2>
        <table border="1px">
            <thead>
                <tr>
                    <th>Data</th>
                    <th>Deskripsi</th>
                </tr>   
            </thead>
            <tbody>
                <?php 
                    foreach ($identitas as $key => $value) {
                        ?>
                        <tr>
                            <td><?= $key ?></td>
                            <td><?= $value ?></td>
                        </tr>
                        <?php
                    }
                ?>
            </tbody>
        </table>
        <hr>

        <h2>Riwayat Pendidikan</h2>
        <table border="1px">
            <thead>
                <tr>
                    <th>Pendidikan</th>
                    <th>Nama Sekolah</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                foreach ($sekolah as $key => $value) {
                    ?>
                    <tr>
                        <td><?= $key?></td>
                        <td><?= $value?></td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
        <hr>

        <h2>Skill Coding</h2>
        <table border="1px">
            <thead>
                <tr>
                    <th>SKill</th>
                    <th>Level</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                foreach ($skill as $key => $value) {
                    ?>
                    <tr>
                        <td><?= $key?></td>
                        <td><?= $value?></td>
                    </tr>
                    <?php
                }
                ?> 
            </tbody>
        </table >

        <hr> 

        <h2>Hobi</h2>
        <ul>
            <?php 
            foreach ($hobi as $key) {
                ?>
                <li><?= $key?></li>
                <?php
            }
            ?>
        </ul>

        <hr>
        
        <h2>Tentang Aku</h2>
        <p><?= $deskripsi?></p>
    </div>
</body>
</html>
