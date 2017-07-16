<?php
//class FileController
//{
//
//    public function __construct($path)
//    {
//        $this->path = $path;
//        $this->file = file_get_contents($this->path, true);  //'pets.json'
//        $this->objectsPets = json_decode($this->file);
//
//        return $this->objectsPets;
//    }
//}


function Controller($path)
{
    $file = file_get_contents($path, true);
    $objectsPets = json_decode($file);
    
    return $objectsPets;
}