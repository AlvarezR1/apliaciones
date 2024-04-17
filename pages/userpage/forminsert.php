
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../../css/styleform.css">
<title>Añadir usuario</title>

</head>
<body>

<div class="container">

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
           
            <button type="submit" class="btn btn-success">Guardar</button>
        </form>
    </div>
    <img src="../../img/1.png" alt="Imagen" width="400">

</div>  

</body>
</html>