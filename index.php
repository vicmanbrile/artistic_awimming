<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="logo.ico" type="image/x-icon">
    <title>Aquart Synchro</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <?php require 'components/navegation.php' ?>
    <div class="translate-y-20 min-h-100vh">


        <div
            class="flex flex-col items-center bg-[url('./assets/pexels-cottonbro-studio-9616277.jpg')] p-10 text-right text-white md:items-end">
            <h1 class="max-w-max text-clip p-2 text-4xl backdrop-brightness-50">Nado sincronizado</h1>
            <p class="mt-10 text-justify text-lg">También conocido como natación artística, es un deporte acuático que
                combina la natación, la gimnasia y la danza. Los nadadores realizan una serie de movimientos acrobáticos
                y coreografías en el agua al ritmo de la música. Es un deporte exigente que requiere fuerza,
                flexibilidad, resistencia y mucha práctica.</p>
        </div>

        <div class="mb-10 flex flex-col md:flex-row">
            <img class="w-full p-10 pb-0 md:w-1/3"
                src="https://i.pinimg.com/564x/87/54/65/8754658ac5804d349e6f1ee900c3abd4.jpg" />
            <p class="w-full p-10 pt-3 text-justify text-gray-400 md:pt-10">
                Lo que hace especial al nado sinacronizado es la gracia, la belleza de los movimientos de los nadadores
                en el agua, la perfecta sincronización entre los movimientos de los nadadores y la música, la variedad
                de elementos que se pueden realizar, desde acrobacias hasta figuras de ballet, la expresión artística
                que permite este deporte.
                <br />
                <br />
                Cualquier persona que sepa nadar puede practicar nado sincronizado. No hay límite de edad ni de sexo. Es
                un deporte ideal para personas que buscan un deporte completo y desafiante.
            </p>
        </div>
        <div>
            <h1 class="m-0 w-full bg-neutral-800 p-0 text-center text-white">Mayores competencias</h1>
            <div class="flex w-full flex-col items-center  bg-[#3E599A] ">
                <div class="flex flex-col md:flex-row">
                    <button
                        class="px-20 py-8 text-white hover:text-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 md:w-1/2 md:p-10">
                        <img class="m-auto h-12" src="https://olympics.com/images/static/b2p-images/logo_color.svg"
                            alt="Juegos Olímpicos" />
                    </button>

                    <button
                        class="px-20 py-8 text-white hover:text-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 md:w-1/2 md:p-10">
                        <img class="m-auto h-12"
                            src="https://www.worldaquatics.com/resources/v2.11.4/i/elements/wa-footer-logo.svg"
                            alt="World Aquatics" />
                    </button>
                </div>
            </div>
        </div>
    </div>
    <?php require 'components/footer.php' ?>
</body>

</html>