<?php

namespace Domain;

use Domain\Driver\Admin\Entity\AdminUserEntity;
use Domain\Driver\Admin\Entity\AdminProfileEntity;
use Domain\Driver\Admin\Entity\AdminImageEntity;
use Domain\Driver\Admin\Entity\AdminSettingEntity;
use Domain\Driver\Admin\Entity\AdminSessionEntity;
use Domain\Driver\Admin\Entity\AdminTempTokenEntity;

class Admin
{
    public static function user()
    {
        return new AdminUserEntity;
    }

    public static function profile()
    {
        return new AdminProfileEntity;
    }

    public static function image()
    {
        return new AdminImageEntity;
    }

    public static function setting()
    {
        return new AdminSettingEntity;
    }

    public static function session()
    {
        return new AdminSessionEntity;
    }

    public static function tempToken()
    {
        return new AdminTempTokenEntity;
    }

}
