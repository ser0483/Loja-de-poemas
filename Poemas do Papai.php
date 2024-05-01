<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poeminhas do Papai - Página Inicial</title>
    <style>
        /* CSS aqui */
        /* Cor de fundo */
        body {
            background-color: #f5f5f5; /* Um tom suave para destacar o conteúdo */
        }

        /* Estilo do cabeçalho */
        header {
            background-color: #2e7d32; /* Verde escuro para o cabeçalho */
            color: #fff; /* Texto branco para contrastar */
            padding: 10px 0;
            text-align: center;
        }

        /* Estilo do conteúdo principal */
        .main-content {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff; /* Fundo branco para o conteúdo */
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Sombra suave para efeito de elevação */
        }

        /* Estilo dos botões */
        button {
            background-color: #4caf50; /* Verde vivo para os botões */
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #45a049; /* Tom mais escuro ao passar o mouse */
        }

        /* Estilo dos poemas */
        .poem {
            margin-bottom: 20px;
            padding: 10px;
            border-radius: 5px;
            background-color: #e0f2f1; /* Verde claro para os poemas */
        }

        .poem h3 {
            margin-top: 0;
            margin-bottom: 10px;
        }

        /* Rodapé */
        footer {
            background-color: #2e7d32; /* Mesma cor do cabeçalho para consistência */
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
    </style>
</head>
<body>

<header>
    <h1>Poeminhas do Papai</h1>
</header>

<div class="main-content">
    <h2>Escolha um Poema</h2>
    <div class="poems-list">
        <div class="poem">
            <img src="exemplo1.jpg" alt="Poema sobre Árvores">
            <h3>Poema 1</h3>
            <p>Árvores<br>
                Existem muitas folhas nas árvores<br>
                Existem muitas estrelas no céu,<br>
                Eu te amo!.<br>
                                <br>-Sérgio Nascimento, poeta renomado</p>
            <button onclick="comprarPoema('Poema 1')">Comprar</button>
        </div>
        <div class="poem">
            <img src="exemplo2.jpg" alt="Poema sobre o autor">
            <h3>Poema 2</h3>
            <br>Quando vejo como os olhos pensantes<br>
            O caminho nunca sozinho<br>
            Ouço esclamar em alta e grande voz<br>
            Serginho meu pitelsinho!</br>
            <br>-Sérgio Nascimento, poeta renomado</p>
            <button onclick="comprarPoema('Poema 2')">Comprar</button>
        </div>
        <!-- Adicione mais poemas conforme necessário -->
    </div>
</div>

<footer>
    <p>&copy; 2024 todos os direitos autorais de Sérgio reservados</p>
</footer>

<script>
    function comprarPoema(poema) {
        alert(`Muito obrigado pela sua escolha. Seu poema "${poema}" será entregue em seu endereço de e-mail.`);
    }
</script>

</body>
</html>





