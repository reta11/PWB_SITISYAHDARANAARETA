<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Penggunaan IF</title>
</head>
<body>
    <form action="">
        Besar Pembelian :
        <input type=text name=total_beli><br><br>
        <input type=submit value="Tentukan Diskon">
    </form>
    <?php
        if (isset($total_beli))
        {
            $total_beli=intval($total_beli);
            $diskon=0;
            if($total_beli>=200000){
                $diskon=0.1;
            }else if ($total_beli>=100000){
                $diskon= 0.05;
            }else{
                $diskon=0.01;
                $diskon=$diskon * intval($total_beli);
            }
            echo $diskon;
            printf("Diskon = %s <br>\n", $diskon);
            printf("Pembayaran = %s <br>\n", $total_beli-$diskon);
        }
    ?>
</body>
</html>