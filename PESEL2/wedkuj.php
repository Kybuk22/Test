<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-PL-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wędkowanie</title>
    <link rel="stylesheet" href='styl_1.css'>
</head>

<body>
    <div class='banner'>
        <p>Portal dla wędkarzy</p>
    </div>
    <div class=sredni>
        <div class='lewwy'><p>Ryby zamieszukące rzeki</p><ol type="1">  <?php
                        require_once 'script.php';
                        Skrypt_1();
                    ?>
                </div>
        <div class='leww'><p>Ryby drapieżne naszych wód </p>
                <table class='tabble'>
                    <tr>
                        <th style="left:180px; position: absolute;border: 1px solid #4FB3DF;width:3%;">L.p.</th>
                        <th style="left:210px; position: absolute;border: 1px solid #4FB3DF;width:9%;">Gatunek</th>
                        <th style="left:293px; position: absolute;border: 1px solid #4FB3DF;width:17.1%;">Występowanie</th>
                        
                    </tr>
                    <tr>
                    
                    </tr>
                </table>
                <table style='position:absolute;top:50px;display:flex;'><?php
                        require_once 'script.php';
                        Skrypt_2();
                        Closed();
                        ?></table>
                        </div>
        <div class="prawy"><img class="ryba" src="ryba_1.jpg" alt="Sum"><div><a class="pobiez_kwerendy" href='kwerendy.txt'>pobiez kwerendy</a></div></div>
    </div>

    <div class="stopki"><p>Strone wykonał:00000000000</p></div>
</body>
</html>

  
