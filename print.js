$(document).ready(function () {
    $('#printButton').on('click', function() {
        if ($('.modal').is(':visible')) {
            console.log('si');
            var modalId = $(event.target).closest('.modal').attr('id');
            $('body').css('visibility', 'hidden');
            $("#" + modalId).css('visibility', 'visible');
            $('#' + modalId).removeClass('modal');
            window.print();
            $('body').css('visibility', 'visible');
            $('#' + modalId).addClass('modal');
        } else {
            window.print();
        }
    })
});