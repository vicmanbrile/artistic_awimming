<?php
if (isset($_SESSION['username'])) {
    echo '
        <span class="text-zinc-200">Usuario:</span>
        <span class="text-zinc-200 font-bold">' . $_SESSION['username'] . '</span>
        <form action="logout.php" method="post" class="float-right inline">
        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded-md">Cerrar Sesión</button>
        </form>
    ';
    } else {
    echo '
        <form action="./login.php" method="post" class="float-right items-center">
        <input type="text" name="username" placeholder="Usuario" class="px-2 py-1 rounded-md border border-zinc-400">
        <input type="password" name="password" placeholder="Contraseña" class="px-2 py-1 rounded-md border border-zinc-400 ml-2">
        <button type="submit" class="bg-sky-500 hover:bg-sky-700 text-white font-bold py-1 px-2 rounded-md ml-2">Iniciar Sesión</button>
        </form>
    ';
}
?>