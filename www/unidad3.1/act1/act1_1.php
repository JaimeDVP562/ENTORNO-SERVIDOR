<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Formulario Web</title>
<!--<link rel="stylesheet" href="https://unpkg.com/@picocss/pico@latest/css/pico.min.css">
-->  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css" >

  <link rel="stylesheet" href="codigo2.css">
</head>

<body>
  <main class="container">
    <h1>Formulario Web</h1>

    <!-- ✅ añadir enctype -->
    <form method="post" action="procesar.php" enctype="multipart/form-data">
      <label>Nombre <input type="text" name="nombre" id="nombre"></label>
      <label>Apellidos <input type="text" name="apellidos"></label>
      <label>URL pagina personal<input type="text" name="URL"></label>


      <fieldset>
        <legend>Sexo</legend>
        <label><input type="radio" name="genero" value="m"> Masculino</label>
        <label><input type="radio" name="genero" value="f"> Femenino</label>
        <label><input type="radio" name="genero" value="O"> Otro</label>
      </fieldset>

      <fieldset>
        <legend>Numero de convivientes</legend>
        <label><input type="number" id="cantidad" name="cantidad" value="0" min="0"></label>
      </fieldset>


      <label>País
        <select name="pais">
          <option value="">— Selecciona —</option>
          <option value="es">España</option>
          <option value="mx">México</option>
          <option value="ar">Argentina</option>
          <option value="co">Colombia</option>
        </select>
      </label>



      <label>Lenguajes
        <select name="lenguajes[]" multiple>
          <option value="html">HTML</option>
          <option value="css">CSS</option>
          <option value="javascript">JavaScript</option>
          <option value="php">PHP</option>
        </select>
      </label>



      <!-- Habilidades -->
      <fieldset>
        <legend>Aficiones</legend>
        <label><input type="checkbox" name="habilidades[]" value="ux"> Lectura</label>
        <label><input type="checkbox" name="habilidades[]" value="bbdd"> Deporte</label>
        <label><input type="checkbox" name="habilidades[]" value="git"> Cine</label>
        <label><input type="checkbox" name="habilidades[]" value="seo"> Viajar</label>
      </fieldset>

      <label>Menú favorito
        <select name="menuFavorito">
          <option value="es">Ensalada</option>
          <option value="mx">Pasta</option>
          <option value="ar">Sushi</option>
          <option value="co">Pizza</option>
        </select>
      </label>

      <label>Biografía
        <textarea name="bio" rows="4"></textarea>
      </label>

       ✅ campo de subida 
      <label>Subir archivo
        <input type="file" name="archivo" accept=".pdf,.jpg,.png,.doc,.docx">
      </label>

      <label><input type="checkbox" name="terminos" value="S"> Acepto los términos</label>

       ✅ campo oculto 
      <input type="hidden" name="dato_oculto" value="valor_oculto">
      

      <button type="submit">Enviar</button>
    </form>
  </main>
</body>

</html>