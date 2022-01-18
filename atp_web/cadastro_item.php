<!-- Aluna: Mahara Teixeira Nunes -->
<!-- Matrícula: 1112021103948-->
<!-- Cursando: Análise e Desenvolvimento de Sistemas -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Item</title>
    <link rel="shortcut icon" href="armazem.ico.ico" type="image/x-icon">
    <link rel="stylesheet" href="css\teste.css">
    <link rel="shortcut icon" href="armazem.ico.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form method="post" action="php/enviacadastro_item.php" >
            <div class="content">
                
                <h1>Cadastro de Item</h1>
                    <p>
                        <label for="nome_item">Nome do Item</label>
                        <input name="nome_item" required="true" type="text" placeholder="Xbox 360">
                    </p>
                    <p>
                        <label for="type_item">Tipo de Item</label>
                        <input name="type_item" required="true" type="text" placeholder="Eletrônicos">
                    </p>
                    <p>
                        <input type="submit" value="Cadastrar" name="btn-enviar">
                    </p>
                    
                    <button class="button-33"><a href="inicio.php">Página Inicial</a></button>
                
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>