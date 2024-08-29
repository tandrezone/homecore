<?php
namespace Bundles\Wizlamp;
class lamp extends device
{
    public function __construct()
    {
        $options = ['ip', '192.168.1.73'];
        parent::__construct($options, []);
    }

    public function index()
    {
        print_r($this->getfunctions());
    }
}