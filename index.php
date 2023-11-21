<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bike comparison</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/phpbike/index.php">Bike comparison
            </a>
        </div>
    </header>
    <main>
        <div class="search-form__content">
            <div class="search-form__heading">
                <h2>CB400SBとの比較</h2>
            </div>
            <form class="search-form" action="result.php" method="get">
                <div class="search-form__item">
                    <select class="serch-form__item-select" name="bike" >
                        <option value="ハンターカブ">ハンターカブ</option>
                        <option value="CBR250RR">CBR250RR</option>
                        <option value="レブル500">レブル500</option>
                        <option value="GB350">GB350</option>
                        <option value="CB300R">CB300R</option>
                        <option value="ホーネット600">ホーネット600</option>
                        <option value="ninja400">ninja400</option>
                        <option value="zephyr400">zephyr400</option>
                    </select>
                    <div class="search-form__buttonm">
                        <button class="search-form__button-submit" type="submit">検索</button>
                    </div>
                </div>
            </form>
        </div>
    </main>
</body>
</html>