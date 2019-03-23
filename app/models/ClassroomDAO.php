<?php

class Classroom {
    private $pk;
    private $name;



    private static $attrib=['pk','name'];

    public function __construct($array){
        foreach($array as $key => $value){
            if(in_array($key,self::$attrib)){
                $this->$key = $value;
            }
        }
    }

    public function __set($property, $value) {
		if (property_exists($this, $property)) {
			$this->$property = $value;
		}
	}

	public function __get($property) {
		if (property_exists($this, $property)) {
			return $this->$property;
		}
	}

}


?>
