<?php

namespace shadows\library\pattern\builder;

use shadows\library\pattern\builder\Builder;

class DirectorCashier
{
    public function buildFoold(Builder $builder)
    {
        $builder->buildPart1();
        $builder->buildPart2();
    }
}