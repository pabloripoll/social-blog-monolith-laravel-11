<?php

namespace Domain\Driver\Admin\Entity;

use Domain\Contract\Entity\DomainEntityInterface;
use Domain\Driver\Admin\Model\AdminNotificationModel;
use Domain\Driver\Admin\Object\AdminNotificationObject;
use Domain\Driver\Admin\Repository\AdminNotificationRepository;

class AdminNotificationEntity implements DomainEntityInterface
{
    public function model()
    {
        return new AdminNotificationModel;
    }

    public function object()
    {
        return new AdminNotificationObject;
    }

    public function validation()
    {
        return new AdminNotificationValidation;
    }

    public function get()
    {
        return new AdminNotificationRepository;
    }

    public function save(object | array $input): mixed
    {
        try {
            $row = ! isset($input->id) ? $this->model() : $this->model()->find($input->id);

            ! isset($input->user_id) ? : $row->user_id = $input->user_id;
            ! isset($input->category_id) ? : $row->category_id = $input->category_id;
            ! isset($input->source_id) ? : $row->source_id = $input->source_id;
            ! isset($input->source_pid) ? : $row->source_pid = $input->source_pid;
            ! isset($input->from_id) ? : $row->from_id = $input->from_id;
            ! isset($input->from_pid) ? : $row->from_pid = $input->from_pid;
            ! isset($input->source_ref) ? : $row->source_ref = $input->source_ref;
            ! isset($input->source_url) ? : $row->source_url = $input->source_url;
            ! isset($input->from_ref) ? : $row->from_ref = $input->from_ref;
            ! isset($input->from_url) ? : $row->from_url = $input->from_url;

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
