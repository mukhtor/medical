<?php

namespace common\components;

use Yii;
use yii\base\BootstrapInterface;
use yii\web\JqueryAsset;

class Boostrap implements BootstrapInterface
{

    public function bootstrap($app)
    {
        // TODO: Implement bootstrap() method.
        Yii::$app->assetManager->bundles[JqueryAsset::class] = [
            'sourcePath' => null,
            'js' => [
                '//cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js',
            ]
        ];
    }
}