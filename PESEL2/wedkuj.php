<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
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
                    <tr class='divclss'>
                        <th class='thh1'>L.p.</th>
                        <th class='thh2'>Gatunek</th>
                        <th class='thh3'>Występowanie</th>
                    </tr>
                    <?php
                        require_once 'script.php';
                        Skrypt_2();
                        Closed();
                        ?>
                </table>
                        </div>
        <div class="prawy"><img class="ryba" src="ryba_1.jpg" alt="Sum"><div><a class="pobiez_kwerendy" href='kwerendy.txt'>pobiez kwerendy</a></div></div>
    </div>

    <div class="stopki"><p>Strone wykonał:00000000000</p></div>
</body>
</html>

  
