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
    <title>Delete</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/form.css">
</head>
<body>
    <div class="content">
        <div class="formulario">
            <h1>Area De Risco</h1>
            <h5>Tem certeza de que deseja deletar essa linha?</h5>
            <button class="btn btn-danger" id="delete_button">Deletar</button>
            <button class="btn btn-primary" id="return_button">Voltar</button>
        </div>
    </div>

    <script>

        let btn_delete = document.getElementById('delete_button')
        let return_button = document.getElementById('return_button')

        btn_delete.addEventListener('click', ()=>{
            location.href = 'sistemas/delete_task.php?id=<?=$id?>'
        })

        return_button.addEventListener('click', ()=>{
            location.href = '../index.php'
        })

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>