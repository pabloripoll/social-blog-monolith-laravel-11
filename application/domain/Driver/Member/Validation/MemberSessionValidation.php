<?php

namespace Domain\Driver\Member\Validation;

use Domain\Contract\Validation\DomainValidationAbstract;

/**
 * Entity properties validation
 *
 * Methods valid output value must be clean as input value
 */
class MemberSessionValidation extends DomainValidationAbstract
{
    public function id($value)
    {
        return $this->val()->id($value) ? $value : $this->error = [__FUNCTION__ => 'not valid'];
    }

    public function user_id($value)
    {
        return $this->val()->id($value) ? $value : $this->error = [__FUNCTION__ => 'not valid'];
    }

    public function ip_address($value)
    {
        return $this->val()->ip($value) ? $value : $this->error = [__FUNCTION__ => 'not valid'];
    }

    public function in_standby($value)
    {
        return $this->val()->boolean($value) ? $value : $this->error = [__FUNCTION__ => 'not valid'];
    }

    public function is_opened($value)
    {
        return $this->val()->boolean($value) ? $value : $this->error = [__FUNCTION__ => 'not valid'];
    }

    public function is_expired($value)
    {
        return $this->val()->boolean($value) ? $value : $this->error = [__FUNCTION__ => 'not valid'];
    }

    public function expires_at($value)
    {
        return $this->val()->datetime($value) ? $value : $this->error = [__FUNCTION__ => 'not valid'];
    }

    public function token($value)
    {
        return $this->val()->token($value, [16, 16]) ? $value : $this->error = [__FUNCTION__ => 'not valid'];
    }

    public function user_agent($value)
    {
        return $this->val()->text($value) ? $value : $this->error = [__FUNCTION__ => 'not valid'];
    }

}
