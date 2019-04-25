<?php 
function array2xml($array, $xml = false){

        if($xml === false){
            $xml = new SimpleXMLElement('<result/>');
        }

        foreach($array as $key => $value){
            if(is_array($value)){
                $this->array2xml($value, $xml->addChild($key));
            } else {
                $xml->addChild($key, $value);
            }
        }

        return $xml->asXML();
    }
