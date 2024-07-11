<?php

namespace Domain\Driver\Admin\Entity;

use Domain\Contract\Entity\DomainEntityInterface;
use Domain\Driver\Admin\Model\AdminImageModel;
use Domain\Driver\Admin\Object\AdminImageObject;
use Domain\Driver\Admin\Repository\AdminImageRepository;

class AdminImageEntity implements DomainEntityInterface
{
    public function model()
    {
        return new AdminImageModel;
    }

    public function object()
    {
        return new AdminImageObject;
    }

    public function get()
    {
        return new AdminImageRepository;
    }

    public function set(object | array $input): mixed
    {
        try {
            $row = ! isset($input->id) ? $this->model() : $this->model()->find($input->id);

            ! isset($input->user_id) ? : $row->user_id = $input->user_id;
            ! isset($input->is_profile) ? : $row->is_profile = $input->is_profile;
            ! isset($input->is_background) ? : $row->is_background = $input->is_background;
            ! isset($input->is_selected) ? : $row->is_selected = $input->is_selected;
            ! isset($input->storage_id) ? : $row->storage_id = $input->storage_id;
            ! isset($input->file_name) ? : $row->file_name = $input->file_name;
            ! isset($input->title) ? : $row->title = $input->title;
            ! isset($input->file_extension) ? : $row->file_extension = $input->file_extension;
            ! isset($input->position) ? : $row->position = $input->position;

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
