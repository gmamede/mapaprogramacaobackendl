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
        height: 630px;
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
        width: 100%;
        height: 30px;
        text-align: center;
        bottom: 0;
        left: 0;
        background-color: #424242;
        color:#424242;
    }

    .boxs{
        width: 100%;
        min-height: 150px;
        text-align: left;
        justify-content: center;
        display: flex ;
        background-color: #424242;
        color:#fff;
        padding: 5px;

    }

    .saiba-mais{
        padding: 15px;
    }

    .saiba-mais a{
        color:#424242;
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
            $array_marmitas = array('marmita1', 'marmita2', 'marmita3', 'marmita4', 'marmita5', 'marmita6');

            $marmitas_lista = '';

            foreach ($array_marmitas as $m) {

                $imagem = '<img class="imagens-grid" src="imagens/' . $m . '.jpg" style="height:250px" />';

                $marmitas_lista .= '<div class="marmitas">' . $imagem . '<br><span class="saiba-mais"><a href="produto.php?data=' . $m . '">Saiba mais</a></span></div>';
            }

            echo $marmitas_lista;
            ?>
            <br><br>
        </div>
        <footer>
            <div class="boxs">
                <h3>Nossas Páginas</h3>
                <ul>
                    <li>Home</li><br>
                    <li>Blog</li><br>
                    <li>Contato</li><br>
                    <l1>Conheça a Dona Rita</li>
                    <br><br>
                </ul>
            </div>
            <div class="boxs">
                <h3>Links Úteis</h3>
                <ul>
                    <li>Política de Privacidade</li><br>
                    <li>Aviso Legal</li><br>
                    <li>Termos de uso</li><br><br>
              </ul>
            </div>
            <div class="boxs">
                <h3>Sobre o Projeto</h3>
                <ul>
                    <l1>Projeto de divulgação das marmitas da Dona Rita</li><br><br>
                 </ul><br>
             </div>
            <hr>
            <h4>Desenvolvido por Gabriel Mamede</h4>
        </footer> 

    </body>

</html>
