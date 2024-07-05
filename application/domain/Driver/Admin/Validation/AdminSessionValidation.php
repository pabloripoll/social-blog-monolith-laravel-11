<?php

namespace Domain\Driver\Admin\Validation;

use Domain\Contract\Validation\DomainValidationAbstract;

/**
 * Entity properties validation
 *
 * Methods valid output value must be clean as input value
 */
class AdminSessionValidation extends DomainValidationAbstract
{
    public function id($value)
    {
        return $this->_val()->id($value) ? $value : $this->error = [__FUNCTION__ => 'not valid'];
    }

    public function user_id($value)
    {
        return $this->_val()->id($value) ? $value : $this->error = [__FUNCTION__ => 'not valid'];
    }

    public function in_standby($value)
    {
        return $this->_val()->boolean($value) ? $value : $this->error = [__FUNCTION__ => 'not valid'];
    }

    public function is_opened($value)
    {
        return $this->_val()->boolean($value) ? $value : $this->error = [__FUNCTION__ => 'not valid'];
    }

    public function is_expired($value)
    {
        return $this->_val()->boolean($value) ? $value : $this->error = [__FUNCTION__ => 'not valid'];
    }

    public function expires_at($value)
    {
        return $this->_val()->datetime($value) ? $value : $this->error = [__FUNCTION__ => 'not valid'];
    }

    public function token($value)
    {
        return $this->_val()->text($value, [64, 64]) ? $value : $this->error = [__FUNCTION__ => 'not valid'];
    }

}
