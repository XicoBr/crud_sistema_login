<?php 
    session_start();
    if(empty($_SESSION)) {
        print "<script>location.href='index.php';</script>";
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-light">
        <div class="container-fluid">
            <a href="" class="navbar-brand">Sistema X</a>
            <?php 
                print "Olá, " . $_SESSION["nome"];
                print "<a href='logout.php' class='btn btn-danger'>Sair</a>";
            ?>
        </div>
    </nav>

</body>
</html>