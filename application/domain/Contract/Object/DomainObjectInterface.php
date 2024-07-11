<?php

namespace Domain\Contract\Object;

interface DomainObjectInterface
{
    public function validation(): object;

    public function value(object | array $row = null): object;

    public function normalize(string $key, mixed $value): mixed;
}
