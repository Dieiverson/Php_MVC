<?php

$this->get('/', function(){
   (new \app\controller\TesteController)->index();
});

$this->get('/home', function(){
    echo 'Estou na HOME :D';
});

$this->get('/categoria', 'TesteController@seta');

?>