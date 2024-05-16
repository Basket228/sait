<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ФлипСтайл</title>
    <link href="Style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php
        include ("header.php");
    ?>
    

    <main>
        <div class="container py-4">
            <div class="p-5 mb-4 bg-body-tertiary rounded-3">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold">Флипстайл</h1>
                <p class="col-md-8 fs-4">Место объединяющее культуру скейтбординга. Наша команда дружелюбных менеджеров всегда поможет вам на шаг приблизиться к скейт – стилю.</p>
                <button onclick="window.location='novinki.php'" class="cssbuttons-io" type="button"><span>К новинкам</span></button>
            </div>
            </div>

            <div class="row align-items-md-stretch">
            <div class="col-md-6">
                <div class="h-100 p-5 text-bg-dark rounded-3">
                <p>И это еще не все! Взгляните на нашу коллекцию, в каталоге товаров. Мы уверены что сможем вас удивить высококачественным товаром по приемлемой цене!</p>
                <button onclick="window.location='catalog.php'" class="cssbuttons-io" type="button"><span>В каталог</span></button>
                </div>
            </div>
            <div class="col-md-6">
                <div class="h-100 p-5 bg-body-tertiary border rounded-3">
                <p>А чтобы не потерять свои любимые товары и следить за его наличием, советуем вам зарегистрироваться на нашем сайте, чтобы мы вас запомнили!</p>
                <button onclick="window.location='zaregistrirovatsya.php'" class="cssbuttons-io" type="button"><span>Зарегистрироваться сейчас</span></button>
                </div>
            </div>
            </div>
        </div>
    </main>



    <?php
        include ("footer.php");
    ?>

    <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>