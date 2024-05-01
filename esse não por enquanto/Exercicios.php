<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão de Estoque</title>
    <style>
        /* Estilos gerais */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #282c34; /* Verde escuro para o fundo */
            color: #fff; /* Texto em branco */
            display: flex; /* Exibir em flexbox */
            justify-content: space-between; /* Espaço entre os elementos */
        }

        .container {
            width: 80%;
            margin: 0 auto;
        }

        /* Estilos para o cabeçalho */
        header {
            background-color: #000; /* Preto para o cabeçalho */
            color: #fff;
            padding: 10px 0;
        }

        header h1 {
            margin: 0;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            display: flex; /* Exibir os itens como flex */
            flex-direction: column; /* Coluna em vez de linha */
            align-items: flex-start; /* Alinhar à esquerda */
        }

        nav ul li {
            margin-bottom: 10px; /* Espaçamento entre os itens */
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            padding: 5px 10px;
        }

        nav ul li a:hover {
            background-color: #333; /* Verde mais escuro ao passar o mouse */
        }

        /* Estilos para o conteúdo principal */
        main {
            padding: 20px 0;
            display: flex; /* Exibir em flexbox */
            justify-content: space-between; /* Espaço entre os elementos */
            width: 100%;
        }

        section {
            background-color: #444; /* Verde escuro para as seções */
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 20px;
            width: 70%; /* Largura da seção de pedidos */
        }

        .menu-lateral {
            width: 25%; /* Largura do menu lateral */
        }

        h2 {
            color: #fff; /* Texto em branco para os títulos */
        }

        /* Estilos para tabelas */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            border-bottom: 1px solid #666; /* Cinza para as bordas */
        }

        th {
            background-color: #000; /* Preto para os cabeçalhos da tabela */
            color: #fff;
            text-align: left;
        }

        /* Estilos para imagens */
        .product-image {
            max-width: 100px;
            height: auto;
            border-radius: 5px;
            margin-right: 10px;
        }

        /* Estilos para formulários */
        form {
            max-width: 500px;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #fff; /* Texto em branco para as labels */
        }

        input[type="number"], input[type="file"] {
            width: 80px;
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #777; /* Cinza mais escuro para as bordas dos inputs */
            box-sizing: border-box;
            background-color: #333; /* Verde mais escuro para os inputs */
            color: #fff; /* Texto em branco nos inputs */
        }

        button {
            padding: 8px 20px;
            background-color: #000; /* Preto para os botões */
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #333; /* Verde mais escuro ao passar o mouse nos botões */
        }

        /* Estilos para o rodapé */
        footer {
            background-color: #000; /* Preto para o rodapé */
            color: #fff;
            text-align: center;
            padding: 10px 0;
            width: 100%;
        }
    </style>
</head>
<body>
<header>
    <div class="container">
        <h1>Gestão de Estoque</h1>
    </div>
</header>
<main>
    <nav class="menu-lateral">
        <ul>
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Produtos</a></li>
            <li><a href="#">Pedidos</a></li>
            <li><a href="#">Relatórios</a></li>
        </ul>
    </nav>
    <section id="pedidos" class="container">
        <h2>Fazer Pedido</h2>
        <form action="processar_pedido.php" method="POST" enctype="multipart/form-data">
            <table>
                <thead>
                <tr>
                    <th>Imagem</th>
                    <th>Nome</th>
                    <th>Categoria</th>
                    <th>Preço</th>
                    <th>Quantidade</th>
                </tr>
                </thead>
                <tbody>
                <!-- Lista de produtos com campos de quantidade e upload de imagem -->
                <tr>
                    <td><input type="file" name="imagem_produto1" accept="image/*"></td>
                    <td>Produto 1</td>
                    <td>Categoria A</td>
                    <td>R$ 10,00</td>
                    <td><input type="number" name="quantidade_produto1" value="0"></td>
                </tr>
                <!-- Adicione mais linhas para os outros produtos -->
                <!-- Exemplo: -->
                <!-- <tr>
                        <td><input type="file" name="imagem_produto2" accept="image/*"></td>
                        <td>Produto 2</td>
                        <td>Categoria B</td>
                        <td>R$ 15,00</td>
                        <td><input type="number" name="quantidade_produto2" value="0"></td>
                    </tr> -->
                <!-- Adicione todas as linhas necessárias -->
                </tbody>
            </table>
            <button type="submit">Enviar Pedido</button>
        </form>
        <!-- Botão para enviar o pedido em PDF -->
        <form action="gerar_pdf.php" method="POST">
            <input type="hidden" name="dados_pedido" value="...dados do pedido aqui...">
            <button type="submit">Enviar Pedido em PDF</button>
        </form>
    </section>
</main>
<footer>
    <div class="container">
        <p>&copy; 2024 Seu Nome</p>
    </div>
</footer>
</body>
</html>

