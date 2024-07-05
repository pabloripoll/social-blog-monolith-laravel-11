<?php

namespace Domain\Driver\Admin\Entity;

use Domain\Contract\Entity\DomainEntityInterface;
use Domain\Driver\Admin\Model\AdminCategoryBannedModel;
use Domain\Driver\Admin\Object\AdminCategoryBannedObject;
use Domain\Driver\Admin\Repository\AdminCategoryBannedRepository;

class AdminCategoryBannedEntity implements DomainEntityInterface
{
    public function model()
    {
        return new AdminCategoryBannedModel;
    }

    public function object()
    {
        return new AdminCategoryBannedObject;
    }

    public function validation()
    {
        return new AdminCategoryBannedValidation;
    }

    public function get()
    {
        return new AdminCategoryBannedRepository;
    }

    public function save(object | array $input): mixed
    {
        try {
            $row = ! isset($input->id) ? $this->model() : $this->model()->find($input->id);

            ! isset($input->title) ? : $row->title = $input->title;
            ! isset($input->description) ? : $row->description = $input->description;
            ! isset($input->created_by_user_id) ? : $row->created_by_user_id = $input->created_by_user_id;

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
