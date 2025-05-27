<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="formulario">
        <div id="titulo">
            <h1>Formulario</h1>
        </div>
        <div id="personal">
            <h2>Personal</h2>
           <form>
             <label>
                <span>Nombre/s: </span>
                <input type="text" id="nombre-al" placeholder="Ingrese nombre/s">
            </label>
            <label>
                <span>Apellido/s: </span>
                <input type="text" id="ape-al" placeholder="Ingrese apellido/s">
            </label>
             <label>
                <span>Número de documento: </span>
                <input type="number" id="dni-al" placeholder="Solo números">
            </label>
             <label>
                <span>Cargo: </span>
                <input type="radio" name="cargo" value="docente" checked="checked"/> Docente
                <input type="radio" name="cargo" value="auxiliar"/> Auxiliar
            </label>
             <label>
                <span>Día: </span>
                <input type="date" id="fecha-pers">
            </label>
                <div class="btn-enviar">
                <button type="submit" name="submit">Enviar Formulario</button>
                </div>
           </form>
        </div>
    </div>
        <div class="atras">
        <button><a href="index.html">Volver</a></button>
    </div>
</body>
</html>