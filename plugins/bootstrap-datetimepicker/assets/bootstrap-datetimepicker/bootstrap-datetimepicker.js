$(document).on('ready pjax:success',function() {
    $('.datetimepicker').datetimepicker({
        locale: 'de'
    });
    $('.datepicker').datetimepicker({
        locale: 'de',
        format: 'DD.MM.YYYY'
    });
    $('.timepicker').datetimepicker({
        locale: 'de',
        format: 'HH:mm'
    });
});