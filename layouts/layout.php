
<?
    $result1 = json_decode(file_get_contents('results/result.txt'),true);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Конвертор валют</title>
    <link href="styles.css">
    <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
</head>
<body>
<form>
    <input id = 'firstVal'>
    <select id = 'firstName'>
        <?foreach ($result1 as $value){?>
            <option value = <?echo $value['INDEX'];?>>
                <? echo $value['NAME'];?>
            </option>
        <?}?>
        <option value="1">
            Рубль
        </option>
    </select>
    <select id = 'secondName'>
        <?foreach ($result1 as $value){?>
            <option value = <?echo $value['INDEX'];?>>
                <? echo $value['NAME'];?>
            </option>
        <?}?>
            <option value="1">
                Рубль
            </option>
    </select>
    <input id = 'result' disabled>
</form>
<script>
    $( document ).ready(function() {
        $('#secondName , #firstName , #firstVal').on('change', function () {
            let value = + $('#firstVal').val();
            let index1 = + $('#firstName').val().replace(',','.');
            let index2 = + $('#secondName').val().replace(',','.');
            let result = value / (index1 / index2);
            if (result) {
                $('#result').val(result.toFixed(3));
            } else {
                $('#result').val('Наберите число');
            }

        })
    });
</script>
</body>
</html>


