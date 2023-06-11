<?php 

require_once('php/conexao.php');

$sql = 'SELECT * FROM tasklist';

$consulta = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Lista de Tarefas</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="content">
        <main>
            <div class="box-wrapper">
                <div class="top-content">
                    <h1 class="Title">Minha Lista de Tarefas</h1>
                    <button class="add_tarefa" id="add_tarefa">Adicionar Tarefa</button>
                </div>
                <div class="center-content">
                    <table class="table table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Descrição</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            <?php 
                            
                            while($conteudo = $consulta->fetch_array()){
                                $id = $conteudo['id'];
                                $Nome = $conteudo['Nome'];
                                $desc = $conteudo['descricao'];
                            ?>
                            <tr>
                                <th scope="row"><?=$id?></th>
                                <td><?=$Nome?></td>
                                <td><?=$desc?></td>
                                <td>
                                    <a class="status_icon edit" href="urls/edit.php?id=<?=$id?>">
                                        edit
                                    </a>
                                    <a class="status_icon delete" href="urls/delete.php?id=<?=$id?>">
                                        delete
                                    </a>
                                </td>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
                <div class="bottom-content">
                    <p>&copy;Copyright 2023</p>
                </div>
            </div>
        </main>
    </div>
    <script>
        let add_tarefa = document.getElementById('add_tarefa')

        add_tarefa.addEventListener('click', ()=>{
            location.href = 'urls/add_task.php'
        })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>