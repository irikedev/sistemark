<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet " href="src/css/style.css">
    <title>Login | SISTEMA RK 1.0</title>
</head>
<body>
<div class="container container-style loginform d-flex align-items-center">
    <img src="src/img/logo.png" class="flex-shrink-1 bd-highlight">
        <form method="POST" action="src/php/loginconnect.php" class="w-100 bd-highlight">
            <h3 class="text-warning"><i class="fa-solid fa-triangle-exclamation"></i> Acesso Restrito <i class="fa-solid fa-triangle-exclamation"></i></h3>
            <div class="form-group">
                <label for="emailLogin">E-Mail</label>
                <input type="email" name="emailLogin" id="emailLogin" class="form-control cpfLogin" placeholder="usuario@exemplo.com" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="senhaLogin">Senha</label>
                <input type="password" name="senhaLogin" id="senhaLogin" class="form-control" placeholder="********" autocomplete="off" required>
            </div>
            <button type="submit" class="btn btn-success text-end">Logar</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>