<?php
class Collection {
    public $array;

    public function __construct ($array){
        $this->array = $array;
    }

    public function find($value){
        $length = count($this->array);
        for ($interator = 0; $interator < $length; $interator++) {
            if($this->array[$interator] == $value){
                return $interator; 
            }
        }
        return -1;
    }
}
?>