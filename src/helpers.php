<?php

if ( ! function_exists('survivor')) {
    /**
     * Return survivor script
     *
     * @return string
     */
    function survivor()
    {
        return app('Peyotest\LaravelSurvivor\Survivor')->getScript();
    }
}
