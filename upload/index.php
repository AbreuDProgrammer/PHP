<!DOCTYPE html>
<html lang="pt-pt">
    <head>
        <meta charset='utf-8'>
        <title>UPLOAD</title>
    </head>
    <body>
        <div class="div-form">
            <h1>Formulario de Upload</h1>
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <fieldset>
                    <p><label for="Enviar arquivo">Enviar arquivo: </label></p>
                    <input type="file" name="arquivo">
                    <input type="submit" name="enviar" value="Enviar">
                </fieldset>
            </form>
        </div>
    </body>
</html>