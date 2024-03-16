# Aquart Synchro

El propósito de la pagina es hacer saber al alguien con pocos o nulos conocimientos del nado sincronizado entienda el como se evalúa, de donde viene y como puedes seguir el deporte por los eventos actuales.

# Concepto

**Aquart synchro** es juego de palabras con 'Aqua'(agua), 'Art' (arte) y se añade el la parte técnica del deporte 'Synchro' porque se le conoce con diferentes nombres como "nado sincronizado", "natación artístico" pero la World Aquatics la organización encargada con el deporte lo trata con "synchronized swimming" desde el 2017 de manera oficial.

Por ser un deporte acuático se diseño una paleta de colores en azul ''9AA8CB, 839AD3, 3E599A, 172D65, 0E369A".

![[Paleta de colores]](readmeAssents/palete_colors.png)

Con estas bases tambien se le cambia el color a un diseño por IA que hace referncia al deporte.

![[]](assets\logo.svg)

---
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

---
# HTML y TailwindCSS para maquetado

Usó TailwindCSS para no escribir CSS sin perder los conocimientos del mismo y dando un formateo de los estilos para personalizar tamaños, pero no es perfecto, cuando tienes que hacer los mismos componentes uno por uno tienes que escribir las clases, el uso ideal sería programar los que se tienen renderizar con los cambios necesarios. 

## Estructura de las paginas

```php
<?php require 'components/navegation.php' ?>
<div 
	 class="
	 translate-y-20
	 min-h-100vh">
<?php require 'components/footer.php' ?>
```

Aquí todos tienen la misma estructura para añadir el solo navegación y el pie de pagina respetando la dimensión.

### Compotente navegación

![[Navegador Movil]](readmeAssents/navegation_1.png)

Se describibe la estructura, funcionalidad y diseño pada dispositivos moviles como primer paso. 

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
		<li/>[]
			<a class="hover:text-gray-600"/>
			
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
			<ul class="space-y-2"/>
				[<li>]
					<a class="
					text-xl 
					font-bold 
					text-gray-800 
					block 
					py-2"/> 
			<button id="close-btn" class="
								absolute 
								top-4 
								right-4 
								focus:outline-none"/>
	
```
- **container**: Establece el ancho máximo del contenedor y lo centra horizontalmente.

- **min-w-full**: Establece el ancho mínimo del elemento al ancho completo de su contenedor principal.

- **h-20:** Establece la altura del elemento a 20 píxeles.

- **bg-[#839AD3]:** Establece el color de fondo utilizando un valor hexadecimal (#839AD3 en este caso).

- **fixed:** Fija el elemento en su posición actual en la ventana del navegador, de modo que no se mueva al hacer scroll.

- **flex:** Establece el contenedor como un contenedor flexible.

- **justify-between:** Alinea los elementos dentro del contenedor de forma que haya espacio entre ellos, distribuyéndolos de manera que el primer elemento se alinee al inicio del contenedor y el último al final.

- **items-center:** Centra los elementos verticalmente dentro del contenedor flexible.

- **px-4:** Agrega relleno horizontal de 4 espacios.

- **py-2:** Agrega relleno vertical de 2 espacios.

- **mx-auto:** Centra horizontalmente el elemento en su contenedor.

- **text-xl:** Establece el tamaño del texto a extra grande.

- **text-zinc-200:** Establece el color del texto utilizando una clase personalizada definida en el archivo de configuración de Tailwind CSS (zinc-200).

- **hidden:** Oculta el elemento.

- **space-x-8:** Agrega espaciado horizontal entre los elementos secundarios del contenedor.

- **inset-0:** Establece el posicionamiento del elemento para que esté encajado en los bordes del contenedor principal.

- **transition-all:** Aplica una transición a todas las propiedades CSS.

- **duration-300:** Establece la duración de la transición en 300 milisegundos.

- **ease-in-out:** Establece la función de temporización de la transición.

- **transform:** Aplica una transformación al elemento.

- **translate-y-full:** Realiza una traslación del elemento en el eje Y, moviéndolo completamente hacia abajo.

- **space-y-2:** Agrega espaciado vertical entre los elementos secundarios del contenedor.

- **text-gray-800:** Establece el color del texto a gris oscuro (#4B5563).

- **font-bold:** Establece el peso de la fuente en negrita.

### Estados
- **focus:ring-2:** Agrega un anillo de enfoque alrededor del elemento cuando está enfocado.

- **focus:ring-offset-2:** Establece un desplazamiento para el anillo de enfoque.

- **translate-y-0** Con Javascript creamos una forma de activar el el menú, donde simplemente cambiamos la clase que hace que se haga un translado por el eje Y

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

Resultado la siguente vista.

![[Navegacion movil]](readmeAssents/navegation_1-list.jpeg)

### Diseño responsivo
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

- **flex-nowrap:** Establece el contenedor como un contenedor flexible sin permitir que los elementos se ajusten o se envuelvan en múltiples líneas en pantallas de tamaño mediano.


### Compotente pie pagina

Un diseño simple que aplica un color más claro.

![[pie de pagina]](readmeAssents\footer.png)

```html
<footer class="
        bg-[#839AD3]
        text-white
        p-6
        translate-y-20"/>
    <div class="
        container
        mx-auto
        flex
        justify-center
        items-center"/>
        <p class="text-center">
```

- **text-white:** Establece el color del texto en blanco.
- **p-6:** Agrega un relleno interno de 6 espacios en todas las direcciones.
- **justify-center:** Alinea los elementos dentro del contenedor de forma que estén centrados horizontalmente.

[//]: <> (Events page.)

### Pagina de eventos
Esta pagina es para manter actualizado al usuario, los datos se extraen de la pagina [World Aquatics](https://www.worldaquatics.com/competitions?group=FINA&year=2024&month=latest&disciplines=SY), y se sube a una base de datos donde tambien se adjunta la direccion de la bandera donde se va a jugar, la pagina de las banderas es [Flags API & CDN](https://flagcdn.com/).

![[Pagina de eventos]](readmeAssents/p_eventos.png)

```html
    <div class="translate-y-20 flex w-full" />
        <div class="w-2/3 m-auto"/>
            <div class="flex w-4/5 flex-wrap p-2.5"/>
                // (PHP)
```

- **w-2/3:** Establece el ancho del elemento al 2/3 del ancho del contenedor principal.

- **m-auto:** Centra horizontalmente el elemento en su contenedor.

- **w-4/5:** Establece el ancho del elemento al 4/5 del ancho del contenedor principal.

- **flex-wrap:** Permite que los elementos secundarios del contenedor se envuelvan en múltiples líneas si es necesario.

- **p-2.5:** Agrega un relleno interno de 2.5 espacios en todas las direcciones.

```php
// Optengo las credenciales que estan guardadas en variables de entorno en el servidor alojado.
$mysql_user = getenv("mysql_user");
$mysql_pass = getenv("mysql_pass");

// Establezco datos de la base de datos necesarios.
$dbName = "id21963112_art_swing";

// Se crea una conexion con la base de datos
$conn = mysqli_connect("localhost", $mysql_user, $mysql_pass, $dbName);

/*
Se crea la consulta, me se importante.

Los nombres de las columnas para 
saber con exacitud de los datos a renderizar.
*/
$sql = "SELECT `summary`, `location`, `dtstart`, `countryImage` FROM `events`;";

/* 
Revision de la conexion
si hay error mostrar directamente a el cliente
no es lo ideal pero es una solucion temporal
*/
if (!$conn) {
  die("Conexion fallida: " . mysqli_connect_error());
}

// Ejecucion de la consulta
$result = mysqli_query($conn, $sql);

// Revision y hubo error al hacer la consulta con la misma solucion
if (!$result) {
  echo "Error: " . mysqli_error($conn);
} else {
  
  
  // Iterar por el resultado y consutir tarjetas que van a renderizar
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

// Cerrando la conexión
mysqli_close($conn);
```

![[Tarjeta eventos]](readmeAssents\p_eventos_card.png)
```html
<div class="
    grid
    h-full
    grid-cols-2
    rounded-3xl
    bg-blue-200
    my-3"/>
    <div class="
        item
        flex
        h-full
        flex-col
        place-content-center
        text-end">
        <h1 class="text-xl">
            <div class="
                flex
                justify-center
                items-center"/>
                <img class="
                    w-3/4
                    object-contain"/>
```
- **grid:** Establece el contenedor como un grid.

- **h-full:** Establece la altura del contenedor al 100% del tamaño del contenedor principal.

- **grid-cols-2:** Divide el contenedor en dos columnas en el grid.

- **rounded-3xl:** Aplica bordes redondeados al contenedor con un radio de 3xl.

- **bg-blue-200:** Establece el color de fondo utilizando una clase de color azul (en este caso, un tono de azul con un grado de saturación de 200).

- **my-3:** Agrega un margen en el eje Y (arriba y abajo) de tamaño 3.

- **item:** Clase personalizada, no proporcionada por Tailwind CSS.


- **flex-col:** Establece la dirección del contenedor flexible a columna.

- **place-content-center:** Centra el contenido del contenedor tanto vertical como horizontalmente.

- **text-end:** Alinea el texto al final del contenedor.

- **object-contain:** Establece el tamaño del objeto para que se ajuste dentro del contenedor mientras mantiene su relación de aspecto original.



### Pagina Inicio
En la pagina principal juega con efectos mas visuales para atrapar a cliente por lo que es y lo que representa el deporte.

![[Inicio]](readmeAssents/p_Inicio_1.png)



```html
 <div class="
        flex 
        flex-col 
        items-center 
        bg-[url('./assets/pexels-cottonbro-studio-9616277.jpg')] 
        p-10 
        text-right 
        text-white 
        md:items-end">
            <h1 class="
                max-w-max 
                text-clip 
                p-2 
                text-4xl 
                backdrop-brightness-50"/>
            <p class="
                mt-10 
                text-justify 
                text-lg"/>

<div class="
        mb-10 
        flex 
        flex-col 
        md:flex-row"/>
    <img class="
        w-full 
        p-10 
        pb-0 
        md:w-1/3"/>

<p class="
        w-full 
        p-10 
        pt-3 
        text-justify 
        text-gray-400 
        md:pt-10"/>
    <div>
        <h1 class="
            m-0 
            w-full 
            bg-neutral-800 
            p-0 
            text-center 
            text-white"/>
        <div class="
                flex w-full 
                flex-col 
                items-center  
                bg-[#3E599A]"/>
            <div class="
                    flex 
                    flex-col 
                    md:flex-row"/>
                <button
                    class="
                    px-20 
                    py-8 
                    text-white 
                    hover:text-blue-500 
                    focus:outline-none 
                    focus:ring-2 
                    focus:ring-blue-500 
                    focus:ring-offset-2 
                    md:w-1/2 
                    md:p-10" />
                    <img class="m-auto h-12"/>


                <button
                    class="
                    px-20 py-8 
                    text-white hover:text-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"/>
                    <img class="m-auto h-12" />
```

- **p-10:** Agrega un relleno de 10 espacios en todas las direcciones dentro del contenedor.
- **mt-10:** Agrega un margen superior de tamaño 10.
- **mb-10:** Agrega un margen inferior de tamaño 10.
- **pb-0:** Elimina el relleno en la parte inferior del elemento.
- **px-20:** Agrega un relleno horizontal de 20 espacios.
- **py-8:** Agrega un relleno vertical de 8 espacios.

- **text-right:** Alinea el texto a la derecha dentro del contenedor.
- **text-center:** Alinea el texto al centro del contenedor.
- **text-justify:** Justifica el texto dentro del contenedor.
- **text-4xl:** Establece el tamaño del texto a extra grande.
- **text-lg:** Establece el tamaño del texto a grande.
- **text-gray-400:** Establece el color del texto a gris (#CBD5E0).
- **bg-neutral-800:** Establece el color de fondo utilizando una clase de color neutro.
- **max-w-max:** Establece el ancho máximo del elemento al tamaño máximo posible sin expandirse más allá de su contenido.
- **w-full:** Establece el ancho del elemento al 100% del ancho del contenedor principal.
- **text-clip:** Establece el comportamiento de recorte de texto.
- **hover:text-blue-500:** Cambia el color del texto a azul (#3B82F6) al pasar el mouse sobre el elemento.
- **focus:outline-none:** Elimina el contorno de enfoque predeterminado al enfocar el elemento.
- **focus:ring-blue-500:** Establece el color del anillo de enfoque a azul (#3B82F6).
- **focus:ring-offset-2:** Establece un desplazamiento para el anillo de enfoque.

- **md:flex-row:** Establece la dirección del contenedor flexible a fila en dispositivos de tamaño mediano.

### Diseño responsivo

```html
 <div class="md:items-end">
    <h1/>
    <p/>

<div class="md:flex-row"/>
    <img class="md:w-1/3"/>

<p class="md:pt-10"/>
    <div>
        <h1/>
        <div/>
            <div class="md:flex-row">
                <button class="md:w-1/2 md:p-10"/>
                    <img />

                <button class=" md:w-1/2 md:p-10"/>
                    <img />
```

![[Inicio]](readmeAssents/p_Inicio_2.jpeg)

### Pagina de historia
Esta pagina tiene el objetivo de complementar a la pagina de inicio con lo que fue y es ahora en la actualidad, destacantando figuras importantes del deporte

![[Historia]](readmeAssents/p_Historia.png)

```html
<div class="rounded-lg bg-white p-6 shadow-md"/>
            <div class="grid grid-cols-1 gap-4 md:grid-cols-3"/>
                <div class="md:col-span-2"/>
                    (
                        <h2 class="mb-2 text-xl font-semibold"/>
                        <p/>
                    )[]
                </div>
                <div>
                    <h2 class="mb-2 text-xl font-semibold"/>
                    <h3 class="mb-1 text-lg font-semibold"/>
                    <ul class="list-inside list-disc"/>
                        <li/>[]
                    (
                        <h3 class="mb-1 text-lg font-semibold"/>
                        <ul class="list-inside list-disc">
                            <li/>
                    )[]
```
### Diseño responsivo

```html
<div />
    <div />
        <div class="md:col-span-2"/>
            (
                <h2/>
                <p/>
            )[]
        </div>
        <div>
            <h2 />
            <h3 />
            <ul />
                <li/>[]
            (
                <h3/>
                <ul >
                    <li/>
            )[]
```