$( document ).ready(function() {
    $('.first_currency , .second_currency , .value').on('change', function () {
        let message,color;
        let value = + $('.value').val();
        if (value >= 0) {
            let index1 = + $('.first_currency').val();
            let index2 = + $('.second_currency').val();
            let result = value / ( index2 / index1);
            message = result.toFixed(4);
            color = 'black';
        } else {
            message = 'Неправильный ввод, наберите число';
            color = 'red';
        }
        $('.result').val(message).css('color', color);
    })
});