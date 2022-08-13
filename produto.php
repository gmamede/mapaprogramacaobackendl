<!DOCTYPE html>
<style>

    body{
        background-color: #f2f2f2;
        font-family: Gill Sans Extrabold, sans-serif;
        margin: 0;

    }

    header{
        width: 100%;
        height: 400px;
        text-align: center;
        background: url('imagens/body.jpg');
        padding: 0;
        margin: 0;
    }

    .header-text{
        padding-top: 100px;
        font-size: 80px;
        text-align: center;
        margin: 0;
    }

    .header-sub{
        text-align: center;
    }

    .botao {
        display: inline-block;
        vertical-align: middle;
        margin: 0 0 1rem 0;
        padding: 0.65em 1em;
        -webkit-appearance: none;
        border: 1px solid transparent;
        border-radius: 8px;
        transition: background-color 0.25s ease-out, color 0.25s ease-out;
        font-size: 1.5rem;
        line-height: 1;
        text-align: center;
        cursor: pointer;
        background-color: #d75413;
        color: #fefefe;

    }

    .grid{
        padding-left: 80px;
        padding-right: 80px;
        min-height: 100%;
        height: 300px;
    }

    .marmitas{
        float: left;
        width: 33%;
        height: 300px;
        background-color: #f2f2f2;
    }

    .imagens-grid{
        width: 100%;
        height: 100%;
        padding: 10px;
    }

    .contato{
        height: 80px;
        background-color: #424242;
        color:#fff;
        padding-left: 200px;
        padding-right: 200px
    }

    .center{
        text-align: center;
    }

    .text-contato{
        font-size:18px;
        top:-10px;
        margin-right: 80px;
        position: relative;
    }

    footer{
        height: 30px;
        bottom: 0;
        left: 0;
        background-color: #424242;
        color:#fff;
        padding-top: 40px;
        padding-left: 100px;
        padding-right: 100px;
        text-align: center;
    }

    .saiba-mais{
        padding: 15px;
    }

    .saiba-mais a{
        color:#424242;
    }

    .voltar{
        padding: 80px;
    }
</style>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Mamede Marmitas</title>
    </head>
    <header>
        <h1 class="header-text">Marmitas Dona Rita</h1>
        <h2 class="header-sub">Venha saborear esse delicioso tempero.</h2>
        <br>
        <br>
        <a class="botao">Faça seu pedido</a>

    </header>
    <body>
        <div class="contato">
            <br>

            <img src="imagens/whats.png" width="40"> <span class="text-contato">Tel.: 42 3120-9999</span>
            <img src="imagens/face.png" width="40"> <span class="text-contato">Marmitas Dona Rita</span>
            <img src="imagens/ifood.png" width="60"> <span class="text-contato">Faça seu pedido on-line</span>
        </div>
        <div class="grid">
            <?php
            if ($_GET['data'] == 'marmita1') {
                $tamanho = '400g';
                $preco = 'R$ 23,50';
                $ingrediente = 'Arroz, Feijão Branco, Batata Frita e Bife.';
            } elseif ($_GET['data'] == 'marmita2') {
                $tamanho = '400g';
                $preco = 'R$ 25,50';
                $ingrediente = 'Arroz, Feijão Branco, Batata Frita e Contra File.';
            } elseif ($_GET['data'] == 'marmita3') {
                $tamanho = '300g';
                $preco = 'R$ 21,50';
                $ingrediente = 'Arroz, Feijão Tropeiro, Salada e Bife a Parmegiana.';
            } elseif ($_GET['data'] == 'marmita4') {
                $tamanho = '500g';
                $preco = 'R$ 17,50';
                $ingrediente = 'Arroz, Feijão Preto, Ovo, Batata Frita e Bisteca Bovina.';
            } elseif ($_GET['data'] == 'marmita5') {
                $tamanho = '400g';
                $preco = 'R$ 15,50';
                $ingrediente = 'Arroz, Feijão Preto, Couve e Farofa e Lombo Suíno.';
            } elseif ($_GET['data'] == 'marmita6') {
                $tamanho = '600g';
                $preco = 'R$ 18,50';
                $ingrediente = 'Arroz, Feijão Preto (feijoada), Couve, Vinagrete e Farofa.';
            }

            $imagem = '<img class="imagens-grid" src="imagens/' . $_GET['data'] . '.jpg" style="height:250px" />';

            $marmitas_lista = '<div class="marmitas">' . $imagem . '<br><span><b>Tamanho: ' . $tamanho . '<br>Preço: ' . $preco . '</b> <br> ' . $ingrediente . '</div>';

            echo $marmitas_lista . '';
            ?>
            <br><br>

        </div>
        <br><br><a class="voltar" href="index.php">Voltar</a>
        <footer>
            <hr>
            Desenvolvido por Gabriel Mamede
        </footer>

    </body>

</html>
