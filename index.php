<?php 
    if (isset($_GET['psw_leng']) && $_GET['psw_leng'] != '' ) {
        function pswGen($pswLen) {
            $lowcase = 'abcdefghijklmnopqrstuvwxyz';
            $upcase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $num = '1234567890';
            $spcar = '!?~@#-_+<>[]{}';

            
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="m-4 ">
        <form action="./index.php" method="get">
            <input type="text" name="psw_leng" id="pswLeng" placeholder="Lunghezza Password">
            <button type="submit">Genera</button>
        </form>

        <?php if (isset($_GET['psw_leng']) && $_GET['psw_leng'] != '') { ?>            
            <h1><?php echo $_GET['psw_leng'] >= 4 ? pswGen($_GET['psw_leng']) : "Inserisci un numero maggiore di 4"?></h1>
        <?php }?>
    </div>
</body>
</html>