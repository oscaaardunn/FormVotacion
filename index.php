<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registo Votación</title>
    <link rel="stylesheet" href="stydle.css">
</head>
<body>

 <form method="post">

    <h2>Formulario de Votación</h2>

    <p></p>
    <br>

    <div class="input-wrapper">
        <input type="text" name="nombreap" placeholder="Nombre y Apellido"> Nombre & Apellido
    </div>
    <div class="input-wrapper">
        <input type="text" name="alias" placeholder="Alias">
    </div>  
    <div class="input-wrapper">
        <input type="text" name="nombre" placeholder="RUT">
    </div> 
    <div class="input-wrapper">
        <input type="email" name="email" placeholder="Email">
    </div>    
    <div class="select-wrapper">
        <select name="selectRegion">
            <option value="region"> Seleccione una Región</option>
        </select> 
    </div> 
    <br>
    <div class="select-wrapper">
        <select name="selectComuna">
            <option value="comuna"> Seleccione una Comuna</option>
        </select> 
    </div>
    <br>
    <div class="select-wrapper">
        <select name="selectCandidato">
            <option value="candidato"> Seleccione un Candidato</option>
        </select> 
    </div>
    <br>
    <div class="checkbox-wrapper">
    <label class="checkbox-inline">
      <input type="checkbox" value="">Web
      <input type="checkbox" value="">TV
      <input type="checkbox" value="">Redes Sociales
      <input type="checkbox" value="">Amigo
    </label>
    </div>
    
    <input class="btn" type="submit" name="votar" values="Votar">
 </form>
    
</body>
</html>