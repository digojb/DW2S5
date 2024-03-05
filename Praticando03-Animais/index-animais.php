<?php

$clique = filter_input(INPUT_GET, 'clique', FILTER_SANITIZE_SPECIAL_CHARS);
$ultimos = filter_input(INPUT_GET, 'ultimos', FILTER_SANITIZE_SPECIAL_CHARS);

if ($clique) {
    switch ($clique) {
        case 'Dromedário':
            $animal = 'Dromedário';
            $curiosidade = 'O dromedário, camelo-doméstico, camelo-de-uma-bossa ou camelo-árabe é um animal mamífero nativo da região nordeste da África e da parte ocidental da Ásia, pertencente à família Camelidae, sendo uma das duas espécies de camelos.';
            $ultimos .= "Dromedário,";
            break;
        case 'Rato-candango':
            $animal = 'Rato-candango';
            $curiosidade = 'O rato-candango, também chamado rato-do-presidente, é uma espécie extinta de roedor da família Cricetidae que era endêmica do Brasil. Foi registrada apenas na região de Brasília, durante as obras de construção da cidade no início dos anos 1960.';
            $ultimos .= "Rato-candango,";
            break;
        case 'cachorro-do-mato-de-orelhas-curtas':
            $animal = 'cachorro-do-mato-de-orelhas-curtas';
            $curiosidade = 'O cachorro-do-mato-de-orelhas-curtas ou raposa-de-orelhas-pequenas, é um mamífero da família Canidae que ocorre em parte da América-do-sul. Pouco se sabe sobre esta rara espécie, seus hábitos e distribuição, por ser muito difícil de ser avistada.';
            $ultimos .= "cachorro-do-mato-de-orelhas-curtas,";
            break;
        case 'Corvo':
            $animal = 'Corvo';
            $curiosidade = 'Corvus é um gênero amplamente distribuído de aves de médio a grande porte da família Corvidae. O gênero inclui espécies comumente conhecidas como corvos.';
            $ultimos .= "Corvo,";
            break;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
    .bloco {
        display: flex;
        justify-content: space-around;
        align-items: center;
        flex-wrap: wrap;
    }

    img:hover {
        transform: scale(1.1);
        border: 2px solid red;
    }
    </style>
</head>

<body>
    <div class="container">
        <h1>Praticando 3 - Animais</h1>
        <hr />
        <div class="bloco">
            <a href="index-animais.php?clique=Dromedário&ultimos=<?= $ultimos ?>"><img
                    src="https://meusanimais.com.br/wp-content/uploads/2018/05/dromedario.jpg" width="300" height="200"
                    alt="Dromedário"></a>
            <a href="index-animais.php?clique=Rato-candango&ultimos=<?= $ultimos ?>"><img
                    src="https://s2-g1.glbimg.com/n4gj2eyI5kgUXixkOYyjsLV5lEM=/0x0:1920x1080/600x0/smart/filters:gifv():strip_icc()/i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2021/6/j/iqunHnQ8Wto5tQfuc3WQ/juscelinomys-candango-03.jpg"
                    width="300" height="200" alt="Rato-candango"></a>
            <a href="index-animais.php?clique=cachorro-do-mato-de-orelhas-curtas&ultimos=<?= $ultimos ?>"><img
                    src="https://faunanews.com.br/wp-content/uploads/2020/06/cachorro-do-mato-de-orelhas-renata-Leite-Pitman-iucn-redlist.jpg"
                    width="300" height="200" alt="cachorro-do-mato-de-orelhas-curtas"></a>
            <a href="index-animais.php?clique=Corvo&ultimos=<?= $ultimos ?>"><img
                    src="https://upload.wikimedia.org/wikipedia/commons/0/0a/Corvus-brachyrhynchos-001.jpg" width="300"
                    height="200" alt="Corvo"></a>
        </div>
        <br />
        <div>
            <?php

            if ($clique) :
            ?>
            <p>
                Você clicou no <b><?= $animal ?></b>.
            </p>
            <p>
                <?= $curiosidade ?>
            </p>
            <p>
                <a href="index-animais.php">Limpar tudo</a>
            </p>

            <?php
            endif;

            if ($ultimos && (substr_count($ultimos, ',') > 1)) :
            ?>

            <p>
                Últimos animais clicados:
            </p>

            <?php
                $arrDividido = explode(',', $ultimos);
                $i = 0;
                $cont = substr_count($ultimos, ',');
                $cont -= 1;
                foreach ($arrDividido as $strDiv) {
                    if ($i < $cont) {
                        echo '<b>' . $strDiv . '</b><br />';
                    }
                    $i++;
                }
            endif;
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>