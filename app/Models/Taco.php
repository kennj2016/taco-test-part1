<?php
namespace Taco\Models;
use Taco\Models\Base;
use Illuminate\Support\Arr;
class Taco extends Base
{

    public function getTacos()
    {
        return $this->getAllData()['tacos'];
    }

    public function isExistItem($name)
    {

        $data = $this->getTacos();

        $taco = Arr::first($data, function ($object, $index) use ($name){
            return  $object['name'] == $name;
        });
        if(!$taco){
            return false;
        }else{
            return true;
        }

    }

    public function update($name,$newData)
    {
        $allData =  $this->getAllData()['tacos'];

        $key_update = null;

        $found_key = array_search($name, array_column($allData,'name'));

        $allData[$found_key] = $newData;
        $this->updateData(['tacos'=>$allData]);
    }
    public function delete($name)
    {
        $allData =  $this->getAllData()['tacos'];

        $key_update = null;

        $found_key = array_search($name, array_column($allData,'name'));
        array_splice($allData,$found_key,1);
        $this->updateData(['tacos'=>$allData]);
    }
}