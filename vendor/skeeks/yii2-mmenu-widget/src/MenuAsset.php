<?php
/**
 * @link      https://github.com/wbraganca/yii2-mmenu
 * @copyright Copyright (c) 2014 Wanderson Bragança
 * @license   https://github.com/wbraganca/yii2-mmenu/blob/master/LICENSE
 * @version   1.0.0
 */

namespace skeeks\yii2\mmenu;

/**
 * Asset bundle for mmenu Widget
 *
 * @author Wanderson Bragança <wanderson.wbc@gmail.com>
 */
class MenuAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/jquery.mmenu/dist';
    public $css = [
        'jquery.mmenu.all.css',
    ];
    public $js = [
        'jquery.mmenu.all.js'
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
