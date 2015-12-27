<?php

namespace kotchuprik\trix;

use yii\helpers\Html;

class Widget extends \yii\base\Widget
{
    const TAG_NAME = 'trix-editor';

    public $version;

    public $model;

    public $attribute;

    public $htmlOptions = ['class' => 'trix-content'];

    public function init()
    {
        parent::init();

        if ($this->version) {
            Asset::$version = $this->version;
        }
        Asset::register($this->view);

        if ($this->model) {
            $id = Html::getInputId($this->model, $this->attribute);
            echo Html::activeTextarea($this->model, $this->attribute, ['id' => $id, 'style' => 'display: none;']);
            $this->htmlOptions = ['input' => $id];
        }

        echo Html::beginTag(self::TAG_NAME, $this->htmlOptions);
    }

    public function run()
    {
        parent::run();

        echo Html::endTag(self::TAG_NAME);
    }
}
