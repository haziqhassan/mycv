<?php

    //$myArray = ['haziq', 'haziqs'];

    class View extends Model{

        public function showInfo()
        {
            $results = $this->getInfo();
            print_r($results);
            echo "testt : " . $results[0]['currentJob'], $results[0]['address'], $results[0]['email'], $results[0]['contactNo'];
        }

    }

?>