'use strict'
function sendForm(e) {
    e.preventDefault();
    
    $.ajax({
        type: 'POST',
        url: 'handler.php',
        data: $(this).serialize(),
        success: function(data){
            $('.res').html(data);
        }
    });
}
$('.form').on('submit', sendForm);
