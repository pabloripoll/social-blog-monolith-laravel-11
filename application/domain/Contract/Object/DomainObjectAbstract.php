<?php

namespace Domain\Contract\Object;

abstract class DomainObjectAbstract
{
    /**
     * Check if entity object input properties are safe
     */
    public function is_safe(object $input)
    {
        $reject = [];
        $passed = [];
        $output = new \stdClass;
        $validation = $this->validation();

        foreach ($input as $key => $value) {
            if (! method_exists($validation, $key)){
                $reject[$key] = $key.' is not an object property';
            } else {
                $validation->$key($value) == $value ? $passed[$key] = trim($value) : $reject[$key] = $validation->errors()[$key];
            }
        }

        $required = $this->required();
        foreach ($required as $key) {
            if (! isset($input->{$key}) || empty($input->{$key})) {
                $reject[$key] = 'is required';
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
