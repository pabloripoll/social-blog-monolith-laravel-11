<?php

namespace Domain\Driver\Admin\Entity;

use Domain\Contract\Entity\DomainEntityInterface;
use Domain\Driver\Admin\Model\AdminSessionModel;
use Domain\Driver\Admin\Object\AdminSessionObject;
use Domain\Driver\Admin\Repository\AdminSessionRepository;

class AdminSessionEntity implements DomainEntityInterface
{
    public function model()
    {
        return new AdminSessionModel;
    }

    public function object()
    {
        return new AdminSessionObject;
    }

    public function get()
    {
        return new AdminSessionRepository;
    }

    public function save(object | array $input): mixed
    {
        try {
            $row = ! isset($input->id) ? $this->model() : $this->model()->find($input->id);

            ! isset($input->user_id) ? : $row->user_id = $input->user_id;
            ! isset($input->in_standby) ? : $row->in_standby = $input->in_standby;
            ! isset($input->is_opened) ? : $row->is_opened = $input->is_opened;
            ! isset($input->is_expired) ? : $row->is_expired = $input->is_expired;
            ! isset($input->expires_at) ? : $row->expires_at = $input->expires_at;
            ! isset($input->token) ? : $row->token = $input->token;

            return $row->save();

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
