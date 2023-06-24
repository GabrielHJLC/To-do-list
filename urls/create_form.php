<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/form.css">
</head>
<body>

    <div class="content">
        <form action="sistemas/create_account.php" method="POST" class="formulario">
            <div class="mb-3 input-box">
                <label for="exampleFormControlInput0" class="form-label">Username</label>
                <input type="text" class="form-control" name="nome" id="exampleFormControlInput0" placeholder="Your Username">
            </div>
            <div class="mb-3 input-box">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-4 input-box">
                <label for="exampleFormControlInput2" class="form-label">Password</label>
                <input type="password" class="form-control" name="senha" id="exampleFormControlInput2" placeholder="Your Password">
            </div>
            <button type="submit" class="btn btn-primary">Entrar</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>