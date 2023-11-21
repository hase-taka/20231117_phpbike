<?php

require_once('functions/search_bake_gas.php');
$CB400SB = searchbike('CB400SB');

$bike=htmlspecialchars($_GET['bike'],ENT_QUOTES);

$comparison = searchbike($bike);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bike comparison</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/result.css">
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/phpbike/index.php">
        Bike Comparison
            </a>
        </div>
    </header>
    <main>
        <div class="result__content">
            <div class="result-card">
                <div class="result-card__img-wrapper">
                        <img class="result-card__img" src="img/<?php echo $CB400SB['img']?>" alt="バイク画像">
                </div>
                <div class="result-card__body">
                    <p class="result-card__bike">
                        <?php echo $CB400SB['name']?>
                    </p>
                    <p class="result-card__weight">
                    重量：<?php echo $CB400SB['weight']?>
                    </p>
                </div>
            </div>
            <div class="comparison-card">
                <div class="comparison-card__img-wrapper">
                    <img class="comparison-card__img" src="img/<?php echo $comparison['img']?>" alt="バイク画像">
                </div>
                <div class="comparison-card__body">
                    <p class="comparison-card__bike">
                        <?php echo $comparison['name']?>
                    </p>
                    <p class="comparison-card__weight">重量：
                        <?php echo $comparison['weight']?>
                    </p>
                </div>
            </div>
        </div>
    </main>

</body>
</html>
