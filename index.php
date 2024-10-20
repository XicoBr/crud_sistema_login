<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISTEMA DE LOGIN</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body{
            background-color: #F2F2F2;
        }
        .login {
            width: 100%;
            height: 100vh;
            align-items: center;
            justify-content: center;
            display: flex;
        }
    </style>
</head>
<body>
    <div class="login">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Acesso Restrito</h5>
                            <form action="login.php" method="POST">
                                <div>
                                    <div class="mb-3">
                                        <label for="">Usuário: </label>
                                        <input type="text" name="usuario" class="form-control">
                                    </div>
                                </div>
                                <div>
                                    <div class="mb-3">
                                        <label for="">Senha: </label>
                                        <input type="password" name="senha" class="form-control">
                                    </div>
                                </div>
                                <div>
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-primary">Enviar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>