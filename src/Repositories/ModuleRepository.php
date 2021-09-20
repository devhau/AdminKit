<?php

namespace Devhau\AdminKit\Repositories;

use Devhau\AdminKit\Repositories\BaseRepository;
use Devhau\AdminKit\Models\Module;

class ModuleRepository extends  BaseRepository
{
    public function model()
    {
        return Module::class;
    }
}
