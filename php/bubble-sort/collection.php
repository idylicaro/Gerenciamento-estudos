<?php
class Collection {
    public $array;

    public function __construct ($array){
        $this->array = $array;
    }

    public function sort(){
        $length = count($this->array);
        $temp = 0;
        for($i = 0; $i< $length -1 ; $i++){
            for($j = 0; $j< $length - $i - 1; $j++){
                if ($this->array[$j] > $this->array[$j+1]){
                    $temp = $this->array[$j];
                    $this->array[$j] = $this->array[$j+1];
                    $this->array[$j+1] = $temp;
                }
            }
        }
    }

    public function display(){
        foreach($this->array as $item){
            echo $item, ' ';
        }
        echo "\n";
    }
}

?>