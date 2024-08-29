<?php
namespace Bundles\Wizlamp;
class device {
    public array $devicefunctions;
    public array $options;

    public function __construct(array $options,array $devicefunctions) {
        $this->options = $options;
        $this->devicefunctions = $devicefunctions;
    }
    public function getfunctions() {
        return $devicefunctions;
    }
    public function getoption() {
        return $this->options;
    }
    public function setOption($name, $value) {
        $this->options[] = ['name' => $name,'value'=> $value];
    }

    public function addFunction($name,$description ,$inputDescription  = null, $inputType = null, $inputValues = null, $outputDescription =null, $outputType = null, $outputValues = null) {
        $devicefunctions[] =  [
            'name' => $name,
            'description'=> $description,
            'inputDescription'=> $inputDescription,
            'inputType'=> $inputType,
            'inputValues'=> $inputValues,
            'outputDescription'=> $outputDescription,
            'outputType'=> $outputType,
            'outputValues'=> $outputValues
        ];
    }

    public function do($funcName,$inputs) {
        return  $this->$funcName($inputs)
    }
}