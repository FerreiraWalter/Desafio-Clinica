<!DOCTYPE HTML>
<html lang=”pt-br”>
    <head>
        <meta charset=”UTF-8”>
        <title>Clínica Walter</title>
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body class="bg-green-100">
        <nav class="bg-green-400 px-8 pt-2 shadow-md">
            <div class="-mb-px flex justify-center">
                <a class="no-underline uppercase tracking-wide font-bold text-xs py-3 mr-3 color-white" href="#">
                    <p class="font-mono text-3xl text-white">Clinica Walter</p>
                </a>
            </div>
        </nav>

        <form action="#" method="POST">
            <p class="flex justify-center font-mono pt-10 text-xl text-green-500">GRAU ESFÉRICO</p>
            <!-- Grau Esférico do olho ESQUERDO -->
            <div class="flex justify-center p-10">
                <p class="font-mono p-2 text-green-700">Grau Esférico do olho esquerdo: </p>
                <input class="shadow appearance-none border rounded py-1 px-10 text-grey-darker border-green-400"
                       type="number"
                       name="esferico_esquerdo" min="-15.00" max="0.00" step="0.25" required>
            </div>

            <!-- Grau Esférico do olho DIREITO -->
            <div class="flex justify-center p-0">
                <p class="font-mono p-2 text-green-700">Grau Esférico do olho direito: </p>
                <input class="shadow appearance-none border rounded py-1 px-10 text-grey-darker border-green-400"
                       type="number"
                       name="esferico_direito" min="-15.00" max="0.00" step="0.25" required>
            </div>

            <p class="flex justify-center font-mono pt-10 text-xl text-green-500">GRAU CILÍNDRICO</p>
            <!-- Grau Cilíndrico do olho ESQUERDO -->
            <div class="flex justify-center p-10">
                <p class="font-mono p-2 text-green-700">Grau Cilíndrico do olho esquerdo: </p>
                <input class="shadow appearance-none border rounded py-1 px-10 text-grey-darker border-green-400"
                       type="number"
                       name="cilindrico_esquerdo" min="-6.00" max="0.00" step="0.25" required>
            </div>

            <!-- Grau Cilíndrico do olho DIREITO -->
            <div class="flex justify-center p-0">
                <p class="font-mono p-2 text-green-700">Grau Cilíndrico do olho direito: </p>
                <input class="shadow appearance-none border rounded py-1 px-10 text-grey-darker border-green-400"
                       type="number"
                       name="cilindrico_direito" min="-6.00" max="0.00" step="0.25" required>
            </div>

            <div class="flex justify-center p-10">
                <button class="bg-green-500 hover:bg-green-400 text-white font-bold py-2 px-4 border-b-4
                border-green-600 hover:border-green-600 rounded">Consultar</button>
            </div>
        </form>

        <?php
        if(isset($_POST['esferico_esquerdo'])) {
            $esferico_esquerdo = $_POST['esferico_esquerdo'];
            $esferico_direito= $_POST['esferico_direito'];
            $cilindrico_esquerdo = $_POST['cilindrico_esquerdo'];
            $cilindrico_direito = $_POST['cilindrico_direito'];

            //true -> se a Lente Prime está DISPONÍVEL
            //false -> se a Lente Prime está INDISPONÍVEL
            $lentePrime = true;

            //Lente Prime
            if($lentePrime == true) {
                if($esferico_esquerdo <=-3 || $esferico_direito <= -3) {
                    if($cilindrico_esquerdo >= -2 || $cilindrico_direito >= -2) {
                        ?> <p class="flex justify-center font-mono p-2 text-green-700">Olá, nossa clínica preza
                            muito pelos clientes, então pelo o que analisamos, recomendamos o uso da Lente Prime
                        </p>
                        <p class="flex justify-center font-mono p-2 text-green-700">Além de suprir suas necessidades, ela traz um conforto incomparável!</p>
                        <a href="" class="flex justify-center font-mono p-2 text-green-400 underline">Clique aqui para efetuar a compra!</a>
                        <?php
                    } else {
                        ?> p class="flex justify-center font-mono p-2 text-green-700">Olá, nossa clínica preza
                        muito pelos clientes, então pelo o que analisamos, recomendamos o uso da Lente Vision
                        </p>
                        <p class="flex justify-center font-mono p-2 text-green-700">Além de suprir suas necessidades, ela traz um conforto incomparável!</p>
                        <a href="" class="flex justify-center font-mono p-2 text-green-400 underline">Clique aqui para efetuar a compra!</a>
                        <?php
                    }
                } else {
                    ?> <p class="flex justify-center font-mono p-2 text-green-700">Olá, nossa clínica preza
                        muito pelos clientes, então pelo o que analisamos, recomendamos o uso da Lente Padrão
                    </p>
                    <p class="flex justify-center font-mono p-2 text-green-700">Além de suprir suas necessidades, ela traz um conforto incomparável!</p>
                    <a href="" class="flex justify-center font-mono p-2 text-green-400 underline">Clique aqui para efetuar a compra!</a>     <?php
                }
            //Lente Vision
            } else {
        ?>    <p class="flex justify-center font-mono p-2 text-green-700">Olá, a Lente Prime está em falta no
                    momento, mas não abaixe a cabeça, a Lente Vision consegue suprir suas necessidades</p>
                <a href="" class="flex justify-center font-mono p-2 text-green-400 underline">Clique aqui
                    para efetuar a
                    compra!</a>
                <?php
            }

        }

        ?>

        <footer>
            <div class="container mx-auto">
                <div class="mt-16 border-t-2 border-green-500 flex flex-col items-center">
                    <div class="sm:w-2/3 text-center py-6">
                        <p class="text-sm text-green-500 font-bold mb-2">
                            © 2021 by WALTER FERREIRA
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
