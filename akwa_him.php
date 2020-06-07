<!doctype html>
    <html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Аква-Хим</title>
        <link rel="stylesheet" href="style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="script.js"></script>
    </head>
    <body>
        <form id="formx" class="decor" action="javascript:void(null);" onsubmit="call()" method="post">
            <div class="form-left-decoration"></div>
            <div class="form-right-decoration"></div>
            <div class="circle"></div>
            <div class="form-inner">
                <h3>Веб-сервис</h3>
                <input id="product_name" type="text" placeholder="название товара" name="product_name">
                <input id="manager_name" placeholder="имя менеджера" name="manager_name">
                <input type="submit" value="Добавить">
                <div class="results" id="results"></div>
            </div>
        </form>
    </body>
</html>


