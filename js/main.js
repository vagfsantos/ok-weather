function setup(){
  httpGet(
    'http://servicos.cptec.inpe.br/RSS/cidade/244/previsao.xml',
    '',
    'xml',
    function(){
      console.log('ok');
    },
    function(){}
  );
}
