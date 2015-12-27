<?php

namespace kotchuprik\trix;

use yii\web\AssetBundle;

class Asset extends AssetBundle
{
    public static $version = '0.9.4';

    public $baseUrl = '//cdnjs.cloudflare.com/ajax/libs/trix/:version';

    public $css = ['trix.css'];

    public $js = ['trix.js'];

    public function init()
    {
        $this->baseUrl = str_replace(':version', self::$version, $this->baseUrl);

        parent::init();
    }
}
