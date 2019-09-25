<!DOCTYPE html>
<html>
<head>
    <title>Конвертор валют</title>
    <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
    <script src="/layouts/script.js"></script>
    <link rel="stylesheet" href="/layouts/styles.css?<?=$rand?>">
</head>
<body>
    <input class = 'value' placeholder="Введите сумму">
    <select class = 'first_currency'>
        <?foreach ($result as $value) {?>
            <option value = <?= $value['INDEX']/$value['PAR'];?>>
                <?= $value['NAME'];?>
            </option>
        <?}?>
    </select>
    <select class = 'second_currency'>
        <?foreach ($result as $value) {?>
            <option value = <?= $value['INDEX']/$value['PAR'];?>>
                <?= $value['NAME'];?>
            </option>
        <?}?>
    </select>
    <input class = 'result' disabled>
</body>
</html>


