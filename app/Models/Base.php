<?php
namespace Taco\Models;
abstract class Base
{
    public $DB_PATH;

    public function __construct()
    {
        $this->DB_PATH = BASE_PATH."/db.json";
    }

    public function getAllData(){
        if(!file_exists ($this->DB_PATH)) {
            return DB_FILE_NOT_FOUND;
        }

        $db = file_get_contents($this->DB_PATH);
        if ($db === false) {
            return ERROR_WRONG;
        }
        $json_a = json_decode($db,true);
        if ($json_a === null) {
            return ERROR_WRONG;
        }

        return $json_a;
    }

    public function updateData($data){
        file_put_contents($this->DB_PATH,json_encode($data));
    }

}