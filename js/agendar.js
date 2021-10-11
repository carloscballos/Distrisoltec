$(function () {
    $("#agenda").datepicker({        
        format: "dd/mm/yyyy",
        todayBtn: 'linked',
        language: "es",
        todayHighlight: true,
        daysOfWeekDisabled: "0",
        autoclose: true,
        datesDisabled: ['18/10/2021','01/11/2021','15/11/2021','08/12/2021','25/12/2021']
    });
});

$(function(){
    $('#hora').clockpicker({

    }
    )
})