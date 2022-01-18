<!-- Aluna: Mahara Teixeira Nunes -->
<!-- Matrícula: 1112021103948-->
<!-- Cursando: Análise e Desenvolvimento de Sistemas -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
    <link rel="shortcut icon" href="armazem.ico.ico" type="image/x-icon">
    <link rel="stylesheet" href="css\teste.css">
    <link rel="shortcut icon" href="armazem.ico.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <a class="cadastro" id="paracadastro.html"></a>
        <div id="idcadastro">
            <form method="post" action="php/enviacadastro.php"> 
                <h1>Cadastro</h1>
                <div>
                    <p>
                        <label for="nome_cad">Seu nome</label>
                        <input name="nome_cad" required="required" type="text" placeholder="Otávio">
                    </p>
                    <p>
                        <label for="sobrenome_cad">Seu sobrenome</label>
                        <input name="sobrenome_cad" required="required" type="text" placeholder="De Oliveira">
                    </p>
                    <p>
                        <label for="cpf_cad">Seu CPF</label>
                        <input name="cpf_cad" required="required" type="text" placeholder="12344544956">
                    </p>
                    <p>
                        <label for="dtnasc_cad">Data de nascimento</label>
                        <input name="dtnasc_cad" required="required" type="date" placeholder="DD/MM/YYYY">
                    </p>
                    <p>
                        <label for="cel_cad">Celular</label>
                        <input name="cel_cad" required="required" type="tel" placeholder="41988772112">
                    </p>
                    <p>
                        <label for="rua_cad">Nome da rua</label>
                        <input name="rua_cad" required="false" type="text" placeholder="Francisco Derosso" >
                    </p>
                    <p>
                        <label for="bairro_cad">Nome do bairro</label>
                        <input name="bairro_cad" required="false" type="text" placeholder="Xaxim">
                    </p>
                    <p>
                        <label for="email_cad">Seu e-mail</label>
                        <input name="email_cad" required="required" type="email" placeholder="contato@gmail.com">
                    </p>
                    <p>
                        <label for="password_cad">Digite sua senha</label>
                        <input name="password_cad" required="required" type="password" placeholder="Senha">
                    </p>
                    <p>
                        <input type="submit" value="Cadastrar" name="btn-enviar"/> 
                    </p>
                    <p class="link">  
                        Já tem conta?
                        <a href="paralogin.php"> Ir para Login </a>
                    </p>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> 
</body>
</html>
