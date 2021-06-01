$(document).ready(function() {
    $('.icon-messenger').click(function() {
        var clicks = $(this).data('clicks');
        if (clicks) {
           $('.border-chatbox').addClass('show');
           $('.slide-effect').addClass('animate__animated animate__slideOutRight')
        //    $('.slide-effect').removeClass('animate__animated animate__slideInRight')

        } else {
            $('.border-chatbox').removeClass('show');
        }
        $(this).data("clicks", !clicks);
      });
});