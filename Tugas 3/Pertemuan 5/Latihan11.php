<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penggunaan Switch - Case</title>
</head>
<body>
    Hari ini :
    <?Php
    $nama_hari = date("l");
    Switch ($nama_hari)
    {
        Case "Sunday" ;
            Print("Minggu");
            print "Waktu untuk istirahat";
        Break;
        Case "Monday" ;
            Print("Senin <br>");
            print "Meeting awal minggu jam 08.00";
        Break;
        Case "Tuesday" ;
            Print("Selasa <br>");
            print "Pembukaan Workshop Diklat";
        Break;
        Case "Wednesday" ;
            Print("Rabu <br>");
            print ("Seminar Launchig Window Vista di JHCC");
        Break;
        Case "Thrusday" ;
            Print("Kamis <br>");
            print "Pertemuan dengan Mahasiswa";
        Break;
        Case "Friday" ;
            Print("Jum’at <br>");
            print "Jogging bersama";
        Break;
        Default :
            Print("Sabtu <br>");
            print "Survey harga ke Dusit, Mangga Dua";
    }
    ?>
</body>
</html>