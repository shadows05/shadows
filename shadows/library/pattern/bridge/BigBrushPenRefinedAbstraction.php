<?php
/**
 * Created by PhpStorm.
 * User: gaoduntao
 * Date: 2016/3/11
 * Time: 17:42
 */

namespace shadows\library\pattern\bridge;


class BigBrushPenRefinedAbstraction extends BrushPenAbstraction
{
    public function operationDraw()
    {
        // TODO: Implement operationDraw() method.
        $this->_implementorColor->bepaint();
    }


}