<?php
/**
 * @link https://cms.skeeks.com/
 * @copyright Copyright (c) 2010 SkeekS
 * @license https://cms.skeeks.com/license/
 * @author Semenov Alexander <semenov@skeeks.com>
 */

namespace skeeks\assets\unify\base;

/**
 * @author Semenov Alexander <semenov@skeeks.com>
 */
class UnifyHsCarouselAsset extends UnifyAsset
{
    public $css = [
        'assets/vendor/slick-carousel/slick/slick.css'
    ];

    public $js = [
        'assets/vendor/slick-carousel/slick/slick.js',
        'assets/js/components/hs.carousel.js',
    ];

    public $depends = [
        UnifyHsCoreAsset::class
    ];
}