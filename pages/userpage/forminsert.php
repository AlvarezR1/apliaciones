
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../../css/styleform.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<title>Añadir usuario</title>

</head>
<body>

<div class="container" style="display: flex;width: 45%;">

    <div class="form-container">

        <form action="../../config/insert.php" method="POST">
            <label for="name " class="form-label">Nombre de Usuario:</label>
            <input type="text" class="form-control" id="name" name="name" required>

            <label for="email" class="form-label">email:</label>
            <input type="text" class="form-control" id="email" name="email" required>

            <label for="password" class="form-label">password:</label>
            <input type="text" class="form-control" id="password" name="password" required>

            <label for="password" class="form-label">password:</label>
            <input type="text" class="form-control" id="password" name="password" required>

            <label for="rol" class="form-label">rol:</label>
            <input type="text" class="form-control" id="rol" name="rol" required>

            <label for="status" class="form-label">status:</label>
            <input type="text" class="form-control" id="status" name="status" required>

            <button type="submit" class="btn btn-outline-success">Guardar</button>
        </form>
    </div>
    <img src="../../img/1.png" alt="Imagen" width="400">

</div>  

</body>
</html>