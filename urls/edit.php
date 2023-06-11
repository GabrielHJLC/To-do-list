<?php 

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/form.css">
</head>
<body>
    <div class="content">
        <form action="sistemas/edit_task.php" method="post" class="formulario">
            <input type="hidden" name="id" value="<?=$id?>">
            <div class="input-form">
                <label for="LabelName" class="form-label">Nome</label>
                <input type="text" id="inputName" name="inputName" class="form-control" aria-labelledby="NameHelpBlock" required>
                <div id="NameHelpBlock" class="form-text">
                    Você deve ser breve no nome com maximo de 50 caracteres
                </div>
            </div>
            <div class="input-form">
                <label for="LabelDescricao" class="form-label">Descrição</label>
                <input type="text" id="inputDesc" name="inputDesc" class="form-control" aria-labelledby="descHelpBlock" required>
                <div id="descHelpBlock" class="form-text">
                    maximo de 150 caracteres
                </div>
            </div>
            <button class="btn btn-primary">Voltar</button>
            <button class="btn btn-primary" type="submit">Enviar</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script>

        let return_button = document.getElementById('return_button')

        return_button.addEventListener('click', ()=>{
            location.href = '../index.php'
        })

    </script>
</body>
</html>