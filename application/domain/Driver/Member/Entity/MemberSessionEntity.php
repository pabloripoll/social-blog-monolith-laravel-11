<?php

namespace Domain\Driver\Member\Entity;

use Domain\Contract\Entity\DomainEntityInterface;
use Domain\Driver\Member\Model\MemberSessionModel;
use Domain\Driver\Member\Object\MemberSessionObject;
use Domain\Driver\Member\Repository\MemberSessionRepository;

class MemberSessionEntity implements DomainEntityInterface
{
    public function model()
    {
        return new MemberSessionModel;
    }

    public function object()
    {
        return new MemberSessionObject;
    }

    public function get()
    {
        return new MemberSessionRepository;
    }

    public function set(object | array $input): mixed
    {
        $input = is_object($input) ? $input : (object) $input;

        $check = $this->object()->isValid($input);
        if ($check->has_errors) {
            return $check;
        }

        try {
            $row = ! isset($input->id) ? $this->model() : $this->model()->find($input->id);

            ! isset($input->user_id) ? : $row->user_id = $input->user_id;
            ! isset($input->in_standby) ? : $row->in_standby = $input->in_standby;
            ! isset($input->is_opened) ? : $row->is_opened = $input->is_opened;
            ! isset($input->is_expired) ? : $row->is_expired = $input->is_expired;
            ! isset($input->expires_at) ? : $row->expires_at = $input->expires_at;
            ! isset($input->token) ? : $row->token = $input->token;

            $row->save();

            return $row;

        } catch(\Exception $e) {

            return ['error' => json_encode($e->getMessage())];
        }
    }

    public function delete(object | int $input): mixed
    {
        try {
            $input_id = ! is_object($input) ? $input : $input->id;

            $row = $this->model()->find($input_id);

            if ($row) {
                $row->delete();
            }

            return ! $row ? true : false;

        } catch(\Exception $e) {

            return ['error' => json_encode($e->getMessage())];
        }
    }

}
