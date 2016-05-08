function initApp(){
  $('#city').on('submit', function(){
    var cityName = $('#city').serialize();
    var url = $(this).attr('action');
    getCity(url, cityName);
    return false;
  });


  function getCity(url, cityName){
    console.log('getting city...');
    $.post({
      url: url,
      method: 'post',
      dataType: 'json',
      data: cityName,
      success: listCity
    });

    function listCity(data){
      console.log(data);
      var city = data['cidade'];
      
      //creating a array for a single item
      if( !Array.isArray(city) ){
        city = [data['cidade']];
      }

      $('#box-city').html('');
      for(var i = 0; i < city.length; i++){
        $('#box-city').append('<div><p>' + city[i].nome +' - '+ city[i].uf +'</p></div>');
      }
    }
  }

}


$(document).ready(initApp);




