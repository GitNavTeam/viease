<?php

namespace App\Services\Html;

/**
 * html 构建类
 */
class HtmlBuilder extends \Illuminate\Html\HtmlBuilder
{

    /**
     * demo
     *
     * @return void
     */
    public function demo()
    {
        echo '<h1>hello</h1>';
    }
}
