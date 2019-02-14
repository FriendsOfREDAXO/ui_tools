$(document).on('ready pjax:success',function() {
    $('.datetimepicker').datetimepicker({
        locale: 'de'
    });
    $('.datepicker').datetimepicker({
        locale: 'de',
        format: 'DD.MM.YYYY',
        extraFormats: ['YYYY-MM-DD']
    });
    $('.timepicker').datetimepicker({
        locale: 'de',
        format: 'HH:mm'
    });
});
