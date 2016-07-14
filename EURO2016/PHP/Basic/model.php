<?php


class Model{
    
    public $data;
    public $url;
    public $ext;

    function __construct($url){

        $this->url = $url;
        $this->data = file_get_contents($this->url);

    }

    function readFile(){

    	$ext = pathinfo($this->url, PATHINFO_EXTENSION);

    	if(strtolower($ext) === "json"){
    		$this->data = json_decode($this->data, true);
          	return $this->data;
    	} else if(strtolower($ext) === "xml"){
    		if(file_exists($this->url)){
                $this->data = simplexml_load_file($this->url);
                $this->data = json_encode($this->data);
                $this->data = json_decode($this->data, true);
                return $this->data;
    		}
    	}
    }

}
?>
