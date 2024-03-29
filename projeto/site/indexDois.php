<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://cdn.tailwindcss.com"></script>

    <header>
        <nav class="bg-gray-800">
            <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
                <div class="relative flex h-16 items-center justify-between">
                    <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">

                        <button type="button"
                            class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                            aria-controls="mobile-menu" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>

                            <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>

                            <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                        <div class="flex flex-shrink-0 items-center text-white">
                            <p class="font-sans antialiased font-bold">ARDU-WATCH </p>
                        </div>
                    </div>
                </div>

            </div>
            </div>
        </nav>
        <br><br>
    </header>


    <center>
        <div class="mb-4">
            <label class="block bg-bla text-gray-700 text-sm font-bold mb-2" for="SalvarGps">Informações de teste
            </label>
        </div>

        <div class="w-full max-w-xs">

            <form method="post" 
                <?php
                    if (isset($_POST["button"]))
                    {

                        include "scripts/conexao.php";


                        $SQL_INSERT4 = "UPDATE botao SET pressionado = 1 ";
                        

                        $resultado = mysqli_multi_query($conexao, $SQL_INSERT4) or die (mysqli_error());
                        $SQL_UPDATE = " DROP EVENT IF EXISTS `Expira` ";
                        
                        $resultado = mysqli_multi_query($conexao, $SQL_UPDATE) or die (mysqli_error());
                        
                       
                        $SQL_UPDATE = "CREATE DEFINER=`root`@`localhost` EVENT `Expira` ON SCHEDULE EVERY 10 SECOND ON COMPLETION PRESERVE ENABLE DO UPDATE botao SET pressionado = 0";
                        
                        $resultado = mysqli_multi_query($conexao, $SQL_UPDATE) or die (mysqli_error());
                        header("Location: site.php");
                    }
                ?>
            >
                <input type="submit" name="button"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    value="Botão de pânico" />
            </form>
            <br>
            <form action="salvar.php" class="bg-black shadow-md rounded px-8 pt-6 pb-8 mb-4">



                <label for="gx" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Eixo
                    X</label>

                <input type="text" name="gx"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="-25.50762891328653" required>
                <br>
                <label for="gy" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Eixo
                    Y</label>
                <input type="text" name="gy"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="-31.28670807759453" required>
                <br>

                <label for="bpm" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Batimento por
                    minuto
                </label>
                <input type="text" name="bpm"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="               ..................................." required>
                <br>

                <label for="ox" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Oxigenação
                </label>

                <input type="text" name="ox"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Taxa de oxigenação" required>
                <br>
                <label for="hora" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Hora
                </label>

                <input type="text" name="hora"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="15:46" required>
                <br>
                <label for="diaAno" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Data</label>
                <input type="text" name="diaAno"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="2004-06-10" required>
                <br>
                <input type="submit" value="Salvar"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">

                <br><br>

            </form>


    </center>

</html>