<?php

namespace PagarMe\Sdk;

trait Fillable
{
    use CaseConverter;

    private function fill($arrayData)
    {
        foreach ($arrayData as $key => $value) {
            $field = $this->snakeToLowerCamel($key);

            if (property_exists($this, $field)) {
                $this->$field = $value;
            }
        }
    }
}
