<?php

namespace Domain\Driver\Admin\Validation;

use Domain\Contract\Validation\DomainValidationAbstract;

/**
 * Entity properties validation
 *
 * Methods valid output value must be clean as input value
 */
class AdminImageValidation extends DomainValidationAbstract
{
    public function id($value)
    {
        return $this->_val()->id($value) ? $value : $this->error = [__FUNCTION__ => 'not valid'];
    }

    public function user_id($value)
    {
        return $this->_val()->id($value) ? $value : $this->error = [__FUNCTION__ => 'not valid'];
    }

    public function is_profile($value)
    {
        return $this->_val()->boolean($value) ? $value : $this->error = [__FUNCTION__ => 'not valid'];
    }

    public function is_background($value)
    {
        return $this->_val()->boolean($value) ? $value : $this->error = [__FUNCTION__ => 'not valid'];
    }

    public function is_selected($value)
    {
        return $this->_val()->boolean($value) ? $value : $this->error = [__FUNCTION__ => 'not valid'];
    }

    public function storage_id($value)
    {
        return $this->_val()->id($value) ? $value : $this->error = [__FUNCTION__ => 'not valid'];
    }

    public function file_name($value)
    {
        return $this->_val()->text($value, [1, 128]) ? $value : $this->error = [__FUNCTION__ => 'not valid'];
    }

    public function title($value)
    {
        return $this->_val()->text($value, [1, 64]) ? $value : $this->error = [__FUNCTION__ => 'not valid'];
    }

    public function file_extension($value)
    {
        return $this->_val()->text($value, [3, 8]) ? $value : $this->error = [__FUNCTION__ => 'not valid'];
    }

    public function position($value)
    {
        return $this->_val()->id($value) ? $value : $this->error = [__FUNCTION__ => 'not valid'];
    }

}
