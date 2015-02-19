  $('#search').keyup(function(){
  var cat=$('.cat').val();
  var nameCat=$(this).val();
  $.ajax({
    type:'POST',
    url:'search_Cat.php',
    data:'name='+nameCat,
    success:function(data){
      $('.panel-body').text(data);
    }
    });


  });
