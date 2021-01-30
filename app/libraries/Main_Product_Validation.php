<?php

abstract class Main_Product_Validation
{
    abstract public function add($data);

    abstract protected function saveDb($data);

    abstract protected function validation($data);
}