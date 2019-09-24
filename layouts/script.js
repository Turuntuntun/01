$( document ).ready(function() {
    $('#secondName , #firstName , #firstVal').on('change', function () {
        let message,color;
        let value = + $('#firstVal').val();
        let index1 = + $('#firstName').val();
        let index2 = + $('#secondName').val();
        let result = value / ( index2 / index1);
        if (result) {
            message = result.toFixed(4);
            color = 'black';
        } else {
            message = 'Неправильный ввод, наберите число';
            color = 'red';
        }
        $('#result').val(message).css('color', color);
    })
});