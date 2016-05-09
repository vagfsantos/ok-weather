function initApp(){
  var view = $('#view');
  var divWeather = $('#weather');

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
      $(divWeather).hide();
      console.log(data);
      var city = data['cidade'];
      
      //creating a array for a single item
      if( !Array.isArray(city) ){
        city = [data['cidade']];
      }

      $(view).html('');
      for(var i = 0; i < city.length; i++){
        $(view).append('<a class="list-group-item" href="'+city[i].id+'">' + city[i].nome +' - '+ city[i].uf +'</a>');
      }

      initGetWeather();
    }
  }


  function initGetWeather(){
    console.log('init');
    $(view).show();
    $(view).find('a').on('click', function(e){
      e.preventDefault();
      var cityId = $(this).attr('href');
      getWeather(cityId);
      $(view).hide();
      return false;
    });

    function getWeather(cityId){
      console.log('getting weather...');
      $.post({
        url: 'getters/get-weather.php',
        method: 'post',
        dataType: 'json',
        data: {city_id: cityId},
        success: listWeather
      });

      function listWeather(data){
        console.log(data);
        $(divWeather).show();
        var prevision = data['previsao'];
        
        //creating a array for a single item
        if( !Array.isArray(prevision) ){
          prevision = [data['previsao']];
        }

        console.log(prevision.length);

        $(divWeather).find('ul').html('');
        $('#city_picked').text(data.nome);

        for(var i = 0; i < prevision.length; i++){
          $(divWeather).find('ul').append('<li class="list-group-item text-left">Dia: ' + prevision[i].dia + '<div class="badge"><span class="label label-primary">mínima: '+prevision[i].minima+'</span>' + '<span class="label label-danger"> máxima: '+prevision[i].maxima+'</span></div></li>');
        }
      }

    }
  }

}


$(document).ready(initApp);




