<?php

namespace Domain\Driver\Admin\Validation;

use Domain\Contract\Validation\DomainValidationAbstract;

/**
 * Entity properties validation
 *
 * Methods valid output value must be clean as input value
 */
class AdminUserValidation extends DomainValidationAbstract
{
    public function id($value)
    {
        return $this->val()->id($value) ? $value : $this->error = [__FUNCTION__ => 'not valid'];
    }

    public function pid($value)
    {
        return $this->val()->id($value, [10, 20]) ? $value : $this->error = [__FUNCTION__ => 'not valid'];
    }

    public function is_active($value)
    {
        return $this->val()->boolean($value) ? $value : $this->error = [__FUNCTION__ => 'not valid'];
    }

    public function is_banned($value)
    {
        return $this->val()->boolean($value) ? $value : $this->error = [__FUNCTION__ => 'not valid'];
    }

    public function is_superadmin($value)
    {
        return $this->val()->boolean($value) ? $value : $this->error = [__FUNCTION__ => 'not valid'];
    }

    public function username($value)
    {
        return $this->val()->email($value, [8, 64]) ? $value : $this->error = [__FUNCTION__ => 'not valid'];
    }

    public function alias($value)
    {
        return $this->val()->alias($value, [4, 16]) ? $value : $this->error = [__FUNCTION__ => 'not valid'];
    }

    public function password($value)
    {
        return $this->val()->password($value, [8, 128]) ? $value : $this->error = [__FUNCTION__ => 'not valid'];
    }

    public function session_time($value)
    {
        return $this->val()->number($value) ? $value : $this->error = [__FUNCTION__ => 'not valid'];
    }

    public function created_by_admin_id($value)
    {
        return $this->val()->id($value) ? $value : $this->error = [__FUNCTION__ => 'not valid'];
    }

}
