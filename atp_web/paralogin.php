<!-- Aluna: Mahara Teixeira Nunes -->
<!-- Matrícula: 1112021103948-->
<!-- Cursando: Análise e Desenvolvimento de Sistemas -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Armazém - Login</title>
    <link rel="stylesheet" href="css\teste.css">
    <link rel="shortcut icon" href="armazem.ico.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
    
<body>
    <div class="container" >
        <a class="cadastro" id="paracadastro.php"></a>
        <a class="login" id="paralogin.php"></a>
    
        <div class="content">
            <div>
                <form method="post" action="php/login.php">
                    <h1>Login</h1>
                    <p>
                        <label for="email_cad">Seu email</label>
                        <input name="email_cad" required="required" type="text" placeholder="contato@gmail.com">
                    </p>
                    <p>
                        <label for="password_cad">Sua senha</label>
                        <input name="password_cad" required="required" type="password" placeholder="Senha">
                    </p>
                    <p>
                        <input type="checkbox" name="manterlogado" id="manterlogado" value=""/>
                        <label for="manterlogado">Manter-me logado</label>
                    </p>
                    <p>
                        <button class="button-33" type="submit" value="entrar" name="btn-entrar">Entrar</button>
                    </p>
                    <p class="link">  
                        Não tem conta?
                        <a href="paracadastro.php"> Ir para cadastro </a>
                    </p>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>