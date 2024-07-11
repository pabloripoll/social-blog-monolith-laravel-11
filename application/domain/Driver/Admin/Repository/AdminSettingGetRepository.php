<?php

namespace Domain\Driver\Admin\Repository;

use Domain\Driver\Admin\Model\AdminSettingModel;
use Domain\Driver\Admin\Object\AdminSettingObject;
use Domain\Contract\Repository\DomainGetRepositoryAbstract;
use Domain\Contract\Repository\DomainGetRepositoryInterface;

class AdminSettingGetRepository extends DomainGetRepositoryAbstract implements DomainGetRepositoryInterface
{
    /**
     * Required
     */
    public function model(): object
    {
        return new AdminSettingModel;
    }

    public function object(): object
    {
        return new AdminSettingObject;
    }

    /**
     * Single entity
     */
    public function byId(int $id): object | null
    {
        $row = $this->model()->where('id', '=', $id)->first() ?? null;

        return ! $row ? null : $this->dto($row);
    }

    public function rowByColumns(array $columns): object | null
    {
        $row = $this->model();

        foreach ($columns as $key => $value) {
            $row = $row->where($key, '=', $value);
        }

        $row = $row->first() ?? null;

        return ! $row ? null : $this->dto($row);
    }

    /**
     * Multiple entities
     */
    public function total(): int
    {
        return $this->model()->all()->count();
    }

    public function list(object $params = null): object | null
    {
        $page = $params->page ?? 1;
        $take = $params->take ?? 30;
        $order = isset($params->order) ? $params->order : ['id', 'asc'];

        $result = $this->model();

        ! isset($params->date_start)  ? : $result = $result->whereDate('date_start', $params->date_start);
        ! isset($params->vehicle_id)  ? : $result = $result->where('vehicle_id', $params->vehicle_id);
        ! isset($params->customer_id) ? : $result = $result->where('customer_id', $params->customer_id);

        $result = $result->skip(($page - 1) * $take)->take($take);
        $result = $result->orderBy($order[0], $order[1]);
        $result = $result->get();

        return count($result) < 1 ? null : $this->dto($result);
    }

}
