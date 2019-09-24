<?
    $rand = rand(1,100);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Конвертор валют</title>
    <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
    <script src="/layouts/script.js"></script>
    <link rel="stylesheet" href="/layouts/styles.css?<?=$rand?>">
</head>
<body>
    <input id = 'firstVal' placeholder="Введите сумму">
    <select id = 'firstName'>
        <?foreach ($result as $value) {?>
            <option value = <?= $value['INDEX']/$value['NOMINAL'];?>>
                <?= $value['NAME'];?>
            </option>
        <?}?>
    </select>
    <select id = 'secondName'>
        <?foreach ($result as $value) {?>
            <option value = <?= $value['INDEX']/$value['NOMINAL'];?>>
                <?= $value['NAME'];?>
            </option>
        <?}?>
    </select>
    <input id = 'result' disabled>
</body>
</html>


