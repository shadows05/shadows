<?php

namespace shadows\library\pattern\prototype\prototype_manager;


class Client
{

    public function main()
    {
        ColorManager::add("white", new Color(255, 0, 0));

        $red = ColorManager::getCopy("white");
        $red->setRed(255);

        $green = ColorManager::getCopy('white');
        $green->setGreen(255);

        $blue = ColorManager::getCopy("white");
        $blue->setBlue(255);
    }

}