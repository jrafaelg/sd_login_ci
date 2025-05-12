window.setTimeout(function() {
    $(".dismissible").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove();
    });
}, 5000);

$('.link-danger-delete').on('click', function(e) {
    // prevent form submit
    e.preventDefault();
    
    // get the current form id
    var id = $(this).attr("id")

    // assign the current id to the modal and show the modal
    $('#deleteModal').data('id', id).modal('show');
})

$('#confirmDelete').click(function() {

    // handle deletion here
    var id = $('#deleteModal').data('id');

    // submit the form
    $('#form'+id).submit();
    
    // hide modal
    $('#deleteModal').modal('hide');
})



$('.link-danger-delete1').click(function(e){
    if(!confirm('Are you sure you want to asdf?')){
        e.preventDefault();
    }
});

$('#confirmDelete1').click(function() {

    // handle deletion here
    var id = $('#deleteModal').data('id');
    console.log('form'+id);

    // submit the form
    $('#form'+id).submit();
    
    // or use ajax to delete the item
    // $.ajax({
    //     url: '/employees/delete/' + id,
    //     type: 'get',
    //     success: function(result) {
    //         // handle success
    //         console.log('Deleted successfully');
    //         // reload the page or update the UI
    //         location.reload();
    //     },
    //     error: function(err) {
    //         // handle error
    //         console.error('Error deleting item:', err);
    //     }
    // });
   
    // hide modal
    $('#deleteModal').modal('hide');
})