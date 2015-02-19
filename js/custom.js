  $('#search').keyup(function(){
  var cat=$('.cat:checked').val();
  var nameCat=$(this).val();
  $.ajax({
    type:'POST',
    url:'search_Cat.php',
    data:'name='+nameCat+"&cat="+cat,
    success:function(data){
      $('.table').html(data);
      $('.table').find('th').css('background-color','#9933FF').css('color','white');
    }

    });


  });
