$('.table').on('click', 'tr.parent .btn-info', function(){
  $(this).closest('tbody').toggleClass('open');
});