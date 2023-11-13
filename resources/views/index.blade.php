<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>AC Sabory</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kadwa&family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,400&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="css/index.css">

    </head>
    <body class="antialiased">
        <header>
            <img src="/img/logo.png" alt="tag">
            <h1>AC Sabory</h1>
        </header>
        <main>
            <h2>Cadastro de produto</h2>
            <form> 
                <label for=""> Nome
                <input type="text">
                </label>
                <label for="valor" class="half"> Valor
                <input id="valor" type="text">
                </label>
                <label for="quantidade" class="half"> Quantidade
                <input id="quantidade" type="text">
                </label>
                <label for=""> Descrição
                <textarea type="text"></textarea>
                </label>
                <button>Cadastrar</button>
            </form>

        </main>
    </body>
</html>
