$.ajax({
  url: 'js/previsao.xml',
  method: 'get',
  contentType: 'text/xml',
  success: function(data){
    console.log(data);
    listData(data);
  }
});

function listData(data){
  var xml = data;
  var item = $(xml).find('previsao');

  $(item).each(function(){
    $('body').append( $(this).find('dia').text() + '<br/>' );
    $('body').append( $(this).find('tempo').text() + '<br/>' );
    $('body').append( $(this).find('maxima').text() + '<br/>' );
    $('body').append( $(this).find('minima').text() + '<br/>' );
    $('body').append( $(this).find('iuv').text() + '<br/>' );
  });
  console.log(item);
}
