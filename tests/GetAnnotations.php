<?php

namespace Tests;

trait GetAnnotations
{
    /**
     * phpunit 9.5 removed method getAnnotations
     *
     * implement using facade
     */
    public function getAnnotations()
    {
        return \PHPUnit\Util\Test::parseTestMethodAnnotations(
            get_class($this),
            $this->getName(false)
        );
    }
}
