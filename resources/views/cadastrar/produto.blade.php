<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>AC Sabory</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kadwa&family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,400&display=swap" rel="stylesheet">
        
        <!-- Styles -->
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <link rel="stylesheet" href="/css/index.css">
        <script src="/js/script.js"></script>

    </head>
    <body>
        <header>
            <img src="/img/logo.png" alt="tag">
            <h1>AC Sabory</h1>
            <div class="menu">
                <a class="" href="/pedido/create">Fazer Pedidos</a>
                <a class="" href="#">Pedidos</a>
                <a class="" href="/produtos/create">Cadastrar Produtos</a>
                <a class="" href="/produtos">Estoque</a>
            </div>
        </header>
        <main>
            <h2>Cadastro de produto</h2>
               
            <form id="produtoForm">
                @csrf <!-- {{ csrf_field() }} -->
                <label for="nome"> Nome
                    <input required id="nome" type="text" name="nome">
                </label>
                <label for="valor" class="half"> Valor
                    <input required id="valor" type="number" name="valor">
                </label>
                <label for="quantidade" class="half"> Quantidade
                    <input required id="quantidade" type="number" name="quantidade">
                </label>
                <label for="descricao"> Descrição
                    <textarea required id="descricao" name="descricao"></textarea>
                </label>
                <button type="button" id="submitFormProduto">Cadastrar</button>
            </form>
            
            <div id="mensagem"></div>
        </main>
        <footer>
            <p>&copy; Direitos Reservados AC-Sabory</p>
        </footer>
    </body>
</html>
