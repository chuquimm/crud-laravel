$(document).ready(function(){
    $('.datepicker').datepicker({
        format: 'yyyy-mm-dd'
    });
});

$(document).ready(function(){
    $('select').formSelect();
});

$(function () {
    $("#desconoce").change(function () {
       if (this.checked) {
        $("#sangre").prop("disabled", true);
        $("#factor").prop("disabled", true);
       } else {
        $("#sangre").prop("disabled", false);
        $("#factor").prop("disabled", false);
       }
    });
});

$(document).ready(function(){
});