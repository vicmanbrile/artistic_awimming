# artistic_swimming

El propósito de la pagina es hacer saber al alguien con pocos o nulos conocimientos del nado sincronizado entienda el como se evalúa, de donde viene y como puedes seguir el deporte por los eventos actuales.

# Concepto

**Aquart synchro** es juego de palabras con 'Aqua'(agua), 'Art' (arte) y se añade el la parte técnica del deporte 'Synchro' porque se le conoce con diferentes nombres como "nado sincronizado", "natación artístico" pero la World Aquatics la organización encargada con el deporte lo trata con "synchronized swimming" desde el 2017 de manera oficial.

Por ser un deporte acuático se diseño una paleta de colores en azul ''9AA8CB, 839AD3, 3E599A, 172D65, 0E369A" 

![[Paleta de colores]](readmeAssents/palete_colors.png) 

## Base
Por lo general cuando subimos un HTML tenemos que completar con ciertas características para que los navegadores interpreten el contenido del archivo a renderizar.
```html
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="logo.ico" type="image/x-icon">
    <title>Aquart Synchro</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
</html>
```

Una etiqueta '!DOCTYPE' para saber con que estándar va a seguir funcionando para futuras características implementadas por **W3C**, y el 'html' como inicio del documento. 

Aquí fuera de lo común es:
```html
    <title>Aquart Synchro</title>
    <script src="https://cdn.tailwindcss.com"></script>
```
donde declaro el titulo de la pagina e importo el Flamework TailwindCSS.

# TailwindCSS en el diseño
Usó TailwindCSS para no escribir CSS sin perder los conocimientos del mismo y dando un formateo de los estilos para personalizar tamaños, pero no es perfecto, cuando tienes que hacer los mismos componentes uno por uno tienes que escribir las clases, el uso ideal sería programar los que se tienen renderizar con los cambios necesarios. 

```php
<?php require 'components/navegation.php' ?>
<div 
	 class="
	 translate-y-20
	 min-h-100vh">
<?php require 'components/footer.php' ?>
```

Aquí todos tienen la misma estructura para añadir el solo navegación y el pie de pagina respetando la dimensión.

![[Navegador Movil]](readmeAssents/navegation_1.png)

```html
<div class="
	container
	min-w-full
	h-20 bg-[#839AD3] 
	fixed 
	flex 
	justify-between 
	items-center 
	px-4 
	py-2 
	mx-auto"/>

<!--Logo-->
	<div 
		 class="
		 flex 
		 items-center"/>
			 <img class="
			 h-16
			 mr-2"/>
			 <p class="text-xl">
			 
	<ul class="text-zinc-200 hidden space-x-8"/>
		<li/>
			<a class="hover:text-gray-600"/>
		...[]
			
<!--Button-->
	<button class="
			focus:outline-none 
			focus:ring-2 
			focus:ring-offset-2"/>
		<svg>
	<div id="mobile-menu"/>
		<div class="
			fixed 
			inset-0 
			bg-white 
			px-4 py-6 
			transition-all 
			duration-300 
			ease-in-out 
			transform 
			translate-y-full"/>
			<ul class="
				space-y-2"/>
				<li>
					<a class="
					text-xl 
					font-bold 
					text-gray-800 
					block 
					py-2"/>
				...[]
			<button id="close-btn" class="
								absolute 
								top-4 
								right-4 
								focus:outline-none"/>
	
```

Con Javascript creamos una forma de activar el el menú, donde simplemente cambiamos la clase que hace que se haga un translado por el eje Y

```javascript
const menuBtn = document.getElementById("menu-btn");
const mobileMenu = document.getElementById("mobile-menu");
const closeBtn = document.getElementById("close-btn");

menuBtn.addEventListener("click", function() {
    mobileMenu.classList.toggle("translate-y-0");
});

closeBtn.addEventListener("click", function() {
mobileMenu.classList.toggle("translate-y-0");
```

![[Navegacion movil]](readmeAssents/navegation_1-list.jpeg)

Cuando tenemos listo la versión para dispositivos móviles como diseño responsivo donde incluso explícitamente lo desaparecemos componentes solo tenemos que añadir algunas clases para que haya los cambios cuando sea la pantalla mas grande que tablet con **'md:'** lo declaramos.

![[Navegacion Escritorio]](readmeAssents/navegation_2.png)

```html
<div class="
	md:flex-nowrap 
	md:space-x-8"/>

	<ul class="md:flex"/>

	<!--Button-->
	<button class="md:hidden"/>
	<div id="mobile-menu"/>
		<div class="md:hidden"/>
```

[//]: <> (Fotter.)



[//]: <> (Events page.)

```php
$mysql_user = getenv("mysql_user");
$mysql_pass = getenv("mysql_pass");

$dbName = "id21963112_art_swing";
$conn = mysqli_connect("localhost", $mysql_user, $mysql_pass, $dbName);

$sql = "SELECT `summary`, `location`, `dtstart`, `countryImage` FROM `events`;";

// Revisamos la coneccion
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Ejecutar la consulta
$result = mysqli_query($conn, $sql);

// Revisar si hay errores con un simple mensaje
if (!$result) {
  echo "Error: " . mysqli_error($conn);
} else {
  while ($row = mysqli_fetch_assoc($result)) {
    echo '<div class="grid h-full grid-cols-2 rounded-3xl bg-blue-200 my-3">';

    {
      echo '<div class="item flex h-full flex-col place-content-center text-end">';
      {
        echo '<h1 class="text-xl">' . $row["summary"] . '</h1>';
        echo '<h1>' . $row["location"] . '</h1>';
        echo '<p class="">' . $row["dtstart"] . '</p>';
      }
      echo '</div>';

      echo '<div class="flex justify-center items-center">';
        echo '<img class="w-3/4 object-contain" src="' . $row["countryImage"] . '" />';
      echo '</div>';
    }
    
    echo "</div>";
  }
}
mysqli_close($conn);
```

![[Inicio]](readmeAssents/p_Inicio.jpeg)

[//]: <> (Historia page.)
