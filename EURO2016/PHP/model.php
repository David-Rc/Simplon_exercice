<?php
class Model{
    
    public $data;

    function readFile($url){

    	$this->data = file_get_contents($url);

    }

}
?>