<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>OKweather!</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-2.2.3.min.js" integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script>
    <style>
      body{
        padding-top: 40px;
      }

      form{
        margin-bottom: 20px;
      }

      .badge{
        background-color: #fff;
      }
      .label{
        font-size: 12px;
        margin: 0 5px;
      }
      .panel-heading{
        font-size: 25px;
      }
    </style>
  </head>
  <body>
  
  <div class="container">
    <div class="row">
      
      <div class="row">
        <div class="jumbotron text-center col-md-12">
          <h1><strong>OK!WEATHER</strong></h1>
          <p>Previsão do tempo o tempo todo</p>
        </div>
      </div>

      <div class="text-center col-md-6 col-md-offset-3">
        <form method="post" action="getters/get-city.php" id="city">
          
          <div class="input-group input-group-lg">
            <input class="form-control" name="city" type="text" placeholder="Digite o nome da cidade..."/>
            <span class="input-group-btn">
              <button class="btn btn-primary" type="submit">OK!WEATHER</button>
            </span>
          </div>
          
        </form>
        
        <div id="results">
          <div id="view" class="list-group"></div>
          
          <div id="weather" style="display:none">

            <div class="panel panel-primary">
              <div id="city_picked" class="panel-heading"></div>
              <div class="panel-body">
                <ul class="list-group">
                </ul>
              </div>
            </div>
            
          </div>

        </div>
        

      </div>

      

    </div>
      
      
  </div>
	

	


  	<script type="text/javascript" src="js/main.js"></script>
  </body>
</html>
