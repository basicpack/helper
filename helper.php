<?php
//Criado por Anderson Ismael
//09 de abril de 2019

function helper($includes){
    if(is_array($includes)){
        $includesList=$includes;
    }else{
        $includesList[]=$includes;
    }
    foreach ($includesList as $include) {
        $filename=ROOT.'app/helper/'.$include.'.php';
        if(file_exists($filename)){
            require_once($filename);
        }else{
            die('<b>Error: </b><br>helper <b>'.$include.'</b> not found');
        }
    }
}

