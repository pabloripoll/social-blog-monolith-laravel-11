<?php

namespace Domain\Driver\Member\Repository;

use Domain\Driver\Member\Model\MemberUserModel;
use Domain\Contract\Repository\DomainRepositoryAbstract;
use Domain\Contract\Repository\DomainRepositoryInterface;

class MemberUserRepository extends DomainRepositoryAbstract implements DomainRepositoryInterface
{
    /**
     * Required
     */
    public function model(): object
    {
        return new MemberUserModel;
    }

    /**
     * Single
     */
    public function userName(string $username): object | null
    {
        $row = $this->model()->where('username', '=', $username)->first() ?? null;

        return ! $row ? null : $this->object($row);
    }

    public function userNameAndAlias(string $username, string $alias): object | null
    {
        $row = $this->model()->where('username', '=', $username)->orWhere('alias', '=', $alias)->first() ?? null;

        return ! $row ? null : $this->object($row);
    }

    public function byId(int $id): object | null
    {
        $row = $this->model()->where('id', '=', $id)->first() ?? null;

        return ! $row ? null : $this->object($row);
    }

    public function rowByColumns(array $columns): object | null
    {
        $row = $this->model();

        foreach ($columns as $key => $value) {
            $row = $row->where($key, '=', $value);
        }

        $row = $row->first() ?? null;

        return ! $row ? null : $this->object($row);
    }

    /**
     * Multiple
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

        return count($result) < 1 ? null : $this->object($result);
    }

}
