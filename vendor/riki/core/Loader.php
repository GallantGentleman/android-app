<?php

class Loader {

    public static function autoload($className) {

        $fileName = '';

        $arr = explode("\\", $className);

        $namespace = array_shift($arr);

        $folder = array_shift($arr);

        $file = array_pop($arr);

        if($namespace == 'app') {


            $fileName = 'app/' . $folder . '/' . $file;
            
        } elseif($namespace == 'riki') {

            $fileName = 'vendor/riki/' . $folder . '/' . $file;

        }

        $fileName .= '.php';

        if(file_exists($fileName)) {
            include $fileName;
        } else {
            echo "<script>alert('DONT ISSET " . $fileName . "')</script>>";
        }

    }

}