<?php

namespace Domain\Contract\Object;

abstract class DomainObjectAbstract
{
    /**
     * Check if entity object input properties are safe
     */
    public function isValid(object | array $input)
    {
        $reject = [];
        $passed = [];
        $output = new \stdClass;
        $validate = $this->validation();

        foreach ($input as $key => $value) {
            if (! method_exists($validate, $key)){
                $reject[$key] = $key.' is not an entity property';
            } else {
                $validate->$key($value) == $value ? $passed[$key] = trim($value) : $reject[$key] = $validate->errors()[$key];
            }
        }

        if (count($reject) > 0) {
            $output->error = array_keys($reject)[0];
            $output->errors = $reject;
            $output->has_errors = true;

            return $output;
        }

        $output->valid = $input;
        $output->has_errors = false;

        return $output;
    }

}
