window.setTimeout(function() {
    $(".dismissible").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove();
    });
}, 5000);