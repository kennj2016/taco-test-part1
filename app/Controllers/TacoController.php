<?php
namespace Taco\Controllers;
use Illuminate\Support\Arr;
use Taco\Models\Taco;
use Pecee\Http\Request;



class TacoController {

    private $tacoModel;

    public function __construct()
    {
        $this->tacoModel = new Taco;
    }

    public function index()
    {
        $data = $this->tacoModel->getTacos();
        return  response()->json($data);
    }
    public function show($name)
    {

        $data = $this->tacoModel->getTacos();

        $taco = Arr::first($data, function ($object, $index) use ($name){
            return  $object['name'] == $name;
        });
        if(!$taco){
            return 'not found';
        }else{
            return response()->json($taco);
        }


    }
    public function update($name)
    {
        if(!$this->tacoModel->isExistItem($name)){
            return 'not found';
        }

        $dataUpdate = getPutData();
        $this->tacoModel->update($name,$dataUpdate);
        return 'done';
    }


    public function delete($name)
    {
        if(!$this->tacoModel->isExistItem($name)){
            return 'not found';
        }
        $this->tacoModel->delete($name);
        return 'done';
    }




}
