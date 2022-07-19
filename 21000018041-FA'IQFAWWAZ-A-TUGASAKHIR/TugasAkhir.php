<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUGAS AKHIR</title>
    <link rel="stylesheet" type="text/css" href="tugasakhir.css">
    <script type="text/javascript"></script>
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href=''>BONJOUR</a></div>
            <div class="menu">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#calculator">Calculator</a></li>
                    <li><a href="#bukutamu">Guest Book</a></li>
                    <li><a href="#kalender">Calendar</a></li>
                    <li><a href="#contact">Contact</a></li>
                 
                </ul>
            </div>
        </div>
    </nav>
<br>
    <div class="wrapper">
        <!-- untuk home -->
        <section id="home">
            <img src="logo.jpg"/>
            <div class="kolom">
                <p class="deskripsi">Assalamualaikum,</p>
                <h4>Haii perkenalkan...</h4>
                <h2>Saya Fa'iq Fawwaz</h2>
                <p>Hai kenalkan, saya adalah Mahasiswa Aktif Universitas Ahmad Dahlan, Fakultas Teknologi Industri, Prodi Informatika, Angkatan 2021 dan saya berasal dari kelas A. Alhamdulillah saat ini saya sudah memasuki semester 2 dan tidak lama lagi memasuki semester 3. Saya berasal dari kota Cilacap, hobi saya fotografi dan sesekali jadi editor hihi.</p>
              
            </div>
        </section>
        <br>
        <!-- untuk Buku Tamu -->
<br>
        <style type="text/css">
            .desain{
                border: solid;
                border-color: black;
                background-color: whitesmoke;
                width:  1000px;
                padding: 20px;
                margin-top: 20px;
            }
        </style>
        <center>
        <div class="desain">
            <div id="bukutamu" align="center"><strong><font size="6" face="Times New Roman">DAFTAR PENGUNJUNG<br><br></font></strong></div>
            <form name="form1" method="post" action="proses.php">
                <table width="60%" border="0"   >
                    <tr>
                        <td>Nama Lengkap</td>
                        <td><input name="nama" type="text" id="nama"></td>
                    </tr>

                    <tr>
                        <td>Alamat</td>
                        <td><input name="alamat" type="text" id="alamat"></td>
                    </tr>

                    <tr>
                        <td>E-Mail</td>
                        <td><input name="email" type="text" id="email"></td> </tr>
                    </tr>

                    <tr>
                        <td>Angkatan</td>
                        <td>
                            <select name="Angkatan" id="Angkatan">
                                <option>2021</option>
                                <option>2020</option>
                                <option>2019</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td>Prodi</td>
                        <td>
                            <textarea name="Prodi" id="Prodi"></textarea></td> </textarea>
                    </tr>

                    <tr>
                        <td></td>
                        <td><input type="submit" name="Submit" value="Kirim"><input type="reset" name="Submit2" value="Batal">
                    </td>
                    </tr>
                </table>
            </form>
        <div align="center"><strong><a href="lihat.php">::Lihat Buku Tamu::<br><br>
        </a></strong><br></div>
        <br><br>
    </div>
</div>
<br>
</center>

        <!-- untuk calculator -->
        <style type="text/css">
            .button{
              width: 100%;
              color: whitesmoke;
              color: black;

            }
        </style>
        <center>
        <div class="desain" align="center">
        <div id="calculator">
        <div class="wrapper" align="center"><br>
        <h1><center style="font-family: Montserrat;">KALKULATOR</center></h1>
        <br>
            <table border="1" cellspacing="10" align="center" cellpadding="10" style="border-color: skyblue; background: linear-gradient(50deg, skyblue,navy); padding: 22px; width:  40%; font-height:bold;
    border-radius:5px; font-size:22px;">
                <tr>
                    <td colspan="4" id="inputLabel" style="color: white;">0</td>
                </tr>

                <tr>
                    <td colspan="3"><button class="button" onclick="pushBtn(this);">Reset</button></td>
                    <td><button class="button" onclick="pushBtn(this);">/</button></td>
                </tr>

                <tr>
                    <td><button class="button"  onclick="pushBtn(this);">7</button></td>
                    <td><button class="button"  onclick="pushBtn(this);">8</button></td>
                    <td><button class="button"  onclick="pushBtn(this);">9</button></td>
                    <td><button class="button" onclick="pushBtn(this);">*</button></td>
                </tr>

                <tr>
                    <td><button class="button"  onclick="pushBtn(this);">4</button></td>
                    <td><button class="button"  onclick="pushBtn(this);">5</button></td>
                    <td><button class="button"  onclick="pushBtn(this);">6</button></td>
                    <td><button class="button"  onclick="pushBtn(this);">-</button></td>
                </tr>

                <tr>
                    <td><button class="button"  onclick="pushBtn(this);">1</button></td>
                    <td><button class="button"  onclick="pushBtn(this);">2</button></td>
                    <td><button class="button"  onclick="pushBtn(this);">3</button></td>
                    <td><button class="button"  onclick="pushBtn(this);">+</button></td>
                </tr>

                <tr>
                   <td colspan="2"><button class="button"  onclick="pushBtn(this);">0</button></td>
                   <td><button class="button"  onclick="pushBtn(this);">.</button></td>
                   <td><button class="button" onclick="pushBtn(this);">=</button></td>
                </tr>
                </table>
                </div>
            </div>
        </div>
        </div>

<script type="text/javascript">
                var inputLabel = document.getElementById('inputLabel');
                function pushBtn(obj) {
                    var pushed = obj.innerHTML
                    if (pushed == '=') {
                    // Calculate
                    inputLabel.innerHTML = eval(inputLabel.innerHTML);
                    } else if (pushed == 'Reset') {
                    // All Clear
                    inputLabel.innerHTML = '0';
                    } else {
                        if (inputLabel.innerHTML == '0') {
                               inputLabel.innerHTML = pushed;  
                    } else {
                        inputLabel.innerHTML += pushed;   
                    }
                }
            }
            </script>
            </div>
    </div></div>
<br>

    <!-- untuk Kalender -->

<div align="center" class="desain"><font size="50" style=""></font>
    <div id="kalender">
        <div>
            <h4 align="center">KALENDER</h4>
        </div>
<?php
$hari = date("d");
$bulan = date ("m");
$tahun = date ("Y");
$jumlahhari=date ("t",mktime(0,0,0,$bulan,$hari,$tahun));

    switch($bulan){
        case 1: $nmbulan = "Jan"; break;
        case 2: $nmbulan = "Feb"; break;
        case 3: $nmbulan = "Mar"; break;
        case 4: $nmbulan = "Apr"; break;
        case 5: $nmbulan = "Mei"; break;
        case 6: $nmbulan = "Jun"; break;
        case 7: $nmbulan = "Jul"; break;
        case 8: $nmbulan = "Agu"; break;
        case 9: $nmbulan = "Sep"; break;
        case 10: $nmbulan = "Okt"; break;
        case 11: $nmbulan = "Nop"; break;
        case 12: $nmbulan = "Des"; break;
    }

    echo "<center><h2>$nmbulan $tahun</h2></center>";?>
    <br>    
    <table style="border: 2px;  solid: #1090FF" cellpadding="10" cellspacing="10">
        <tr>
            <td align="center"><font color="FF0000"></font></td>
            <td align="center">Sen</td>
            <td align="center">Sel</td>
            <td align="center">Rab</td>
            <td align="center">Kam</td>
            <td align="center">Jum</td>
            <td align="center">Sab</td>
        </tr>
    ?>
<?php
    $s=date ("w",mktime(0,0,0, $bulan,1,$tahun));
    for ($ds=1;$ds<=$s;$ds++){
        echo "<td></td>";
    }
    for ($d=1;$d<=$jumlahhari;$d++){
        if (date ("w",mktime(0,0,0, $bulan,$d,$tahun)) ==0 ){
            echo "<tr>";
        }
    $warna="#000000";

    if(date ("1",mktime(0,0,0, $bulan,$d,$tahun))== "Sunday"){
    $warna="#FF0000";        
    }
    echo "<td align= center valign=middle><span style=color:$warna>$d</span></td>";

    if (date ('w',mktime(0,0,0, $bulan,$d,$tahun))==6){
    echo"</tr>";
    }
}
    echo"</table>";
?>

    </div>
</div>

<br><br><br>

<!--jangandihapus-->
    </div>
<!--jangandihapus-->

    <div id="contact">
        <div class="wrapper">
            <div class="footer">
                <div class="footer-section">
                    <h3>Instagram</h3>
                    <p ><a class="footer-section" href="https://instagram.com/fafawwaz/">@fafawwaz</a></p>
                </div>
                <div class="footer-section">
                    <h3>Contact</h3>
                    <p>Whatsapp: 081578220475</p>
                </div>
            </div>
        </div>
      </div>

    <div id="copyright">
        <center>
            <b>TUGAS AKHIR</b><br> PEMROGRAMAN WEB<br>&copy; 2022. 
        </center>   
        </div>
    </div>
    <div align="center" class="courir">
    <?php

    $file_counter = "counter.txt";
    $f_open = fopen($file_counter, "r+");
    $hitung = fread($f_open, filesize($file_counter));
    echo "Anda adalah pengunjung ke ".$hitung;
    fclose($f_open);

    $f_open = fopen($file_counter, "w+");
    $hitung = $hitung + 1;
    fwrite($f_open, $hitung, strlen($hitung));
    fclose($f_open);

    ?>
</div>
</center>

</body>
</html>