<?php
/**
 * @link https://cms.skeeks.com/
 * @copyright Copyright (c) 2010 SkeekS
 * @license https://cms.skeeks.com/license/
 * @author Semenov Alexander <semenov@skeeks.com>
 */

namespace skeeks\assets\unify\base;

use yii\web\AssetBundle;
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 */
class UnifyAsset extends AssetBundle
{
    public $sourcePath = '@skeeks/assets/unify/template/html/';
    /**
     * @param string $asset
     * @return string
     * @throws \yii\base\InvalidConfigException
     */
    static public function getAssetUrl($asset)
    {
        return \Yii::$app->assetManager->getAssetUrl(\Yii::$app->assetManager->getBundle(static::className()), $asset);
    }
}