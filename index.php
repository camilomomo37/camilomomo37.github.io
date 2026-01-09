<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Institucional</title>
    <style>
        /* CSS Básico */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4; /* Fundo cinza claro para a página */
            color: #333;
        }

        /* 1. Header com Logo Centralizada e Fundo Branco */
        header.topo {
            background-color: #ffffff; /* Fundo branco */
            padding: 20px 0;
            text-align: center; /* Centraliza o conteúdo */
            box-shadow: 0 2px 5px rgba(0,0,0,0.1); /* Sombra leve */
        }

        header.topo img {
            max-width: 250px; /* Largura máxima para a logo */
            height: auto; /* Altura automática */
        }

        /* Conteúdo Principal */
        main {
            padding: 30px 15px;
            text-align: center; /* Centraliza o conteúdo principal */
        }

        /* 2. Link com Imagem e Efeito Hover (Troca de Imagem) */

        /* O 'a' (link) se torna o container principal */
        .link-acesso a {
            display: inline-block; /* Faz o link se comportar como um bloco */
            position: relative;    /* Essencial para posicionar a imagem hover por cima */
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;      /* Garante que as imagens fiquem dentro da borda */
            line-height: 0;        /* Remove qualquer espaço de linha indesejado */
            transition: box-shadow 0.3s ease; /* Transição suave para a sombra */
        }

        /* Efeito de sombra ao passar o mouse */
        .link-acesso a:hover {
            box-shadow: 0 4px 10px rgba(0,0,0,0.15);
        }

        /* Estilo para AMBAS as imagens dentro do link */
        .link-acesso a img {
            display: block; /* Imagem como bloco para remover espaços */
            max-width: 150px; /* Mantenha a largura que desejar */
            height: auto;     /* Altura automática */
            transition: opacity 0.3s ease; /* A transição será na opacidade */
        }

        /* Imagem Padrão (Fica por baixo) */
        .link-acesso a .img-default {
            opacity: 1; /* Começa 100% visível */
        }

        /* Imagem Hover (Fica por cima, mas invisível) */
        .link-acesso a .img-hover {
            position: absolute; /* Posiciona por cima da imagem padrão */
            top: 0;
            left: 0;
            opacity: 0; /* Começa 100% invisível */
        }

        /* A MÁGICA DO HOVER */
        .link-acesso a:hover .img-default {
            opacity: 0; /* Esconde a imagem padrão */
        }

        .link-acesso a:hover .img-hover {
            opacity: 1; /* Mostra a imagem hover */
        }

        /* 3. Rodapé com Informações */
        footer.informacoes {
            background-color: #333;
            color: #f4f4f4;
            padding: 30px 15px;
            margin-top: 40px;
            text-align: center;
        }

        footer.informacoes p {
            margin: 10px 0; /* Espaçamento entre as linhas de informação */
            line-height: 1.6;
        }

        footer.informacoes a {
            color: #f4f4f4; /* Cor do link de e-mail */
            text-decoration: none;
        }

        footer.informacoes a:hover {
            text-decoration: underline; /* Sublinha o e-mail ao passar o mouse */
        }

    </style>
</head>
<body>

    <header class="topo">
        <img src="https://jhsadm.com.br/imgs/logo.jpeg" alt="Logo da Empresa">
    </header>

    <main>
        
<div class="link-acesso">
    <h2>Acesse nosso sistema:</h2>
    <a href="https://www.mmhost.com.br/clickpredio/Login/aspx/pg_Default.aspx?idcmm=160" target="_blank" rel="noopener noreferrer">
        
        <img class="img-default" src="https://jhsadm.com.br/imgs/Banner_clickpredio.png" alt="Acessar Sistema">
        
        <img class="img-hover" src="https://jhsadm.com.br/imgs/Banner_clickpredio_houver.png" alt="Acessar Sistema">

    </a>
</div>

    </main>

    <footer class="informacoes">
        <p>
            <strong>Endereço:</strong> Rua Dr. Oswaldo Cruz, 396 - Boqueirão - Santos/Sp.
        </p>
        <p>
            <strong>Telefone:</strong> 13 3877.3690
        </p>
        <p>
            <strong>E-mail:</strong> <a href="mailto:jhs_asse@litoral.com.br">jhs_asse@litoral.com.br</a>
        </p>
        <p>
            <strong>Creci:</strong> 028966-J
        </p>
    </footer>

</body>
</html>