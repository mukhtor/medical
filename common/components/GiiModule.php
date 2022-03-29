<?php

namespace common\components;

use Yii;
use yii\gii\Module;

class GiiModule extends Module
{
    public $removeBundles = true;

    protected function resetGlobalSettings()
    {
        if (Yii::$app instanceof \yii\web\Application && $this->removeBundles) {
            Yii::$app->assetManager->bundles = [];
        }
    }
}