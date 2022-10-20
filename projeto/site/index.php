<?php
include('scripts/conexaoLogin.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {

        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: site.php");

        } else {
            echo '

            <div class="bg-gray-800 text-white">Falha no login. Senha ou e-mail incorreto. Tente novamente! </div>
            
            ';
        }

    }

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<header>
    <nav class="bg-gray-800">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-16 items-center justify-between">
                <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                    <div class="flex flex-shrink-0 items-center text-white">
                        <p class="font-sans antialiased font-bold">ARDU-WATCH </p>

                    </div>
                </div>
            </div>

        </div>
    </nav>
</header>

<body>
    <center>
    <div class="w-full max-w-xs" style="margin-top:100px;">
    <div class="mb-4">
        <label class="block bg-bla text-gray-700 text-sm font-bold mb-2">Acesse sua conta</label>
    </div>
        <form action="" method="POST" class="bg-black shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <p>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">E-mail</label>
                <input
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    type="text" name="email" placeholder="pessoa@gmail.com" required>
            </p>
            <p>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Senha</label>
                <input
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    type="password" name="senha" placeholder="*******" required>
            </p>
            <br>
            <p>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Entrar</button>
            </p>
        </form>
    </div>
</div>
</center>
</body>

</html>