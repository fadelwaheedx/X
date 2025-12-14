<?php

namespace Modules\Shared\Contracts;

interface ModuleContract
{
    public function name(): string;

    public function description(): string;
}
