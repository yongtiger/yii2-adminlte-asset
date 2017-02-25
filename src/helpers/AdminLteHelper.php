<?php ///[yii2-adminlte-asset]

/**
 * Yii2 adminlte asset
 *
 * @link        http://www.brainbook.cc
 * @see         https://github.com/yongtiger/adminlte-asset
 * @author      Tiger Yong <tigeryang.brainbook@outlook.com>
 * @copyright   Copyright (c) 2017 BrainBook.CC
 * @license     http://opensource.org/licenses/MIT
 */

namespace yongtiger\adminlteasset\helpers;

/**
 * Class AdminLteHelper
 *
 * @package yongtiger\adminlteasset\helpers
 */
class AdminLteHelper
{
    /**
     * It allows you to get the name of the css class.
     * You can add the appropriate class to the body tag for dynamic change the template's appearance.
     * Note: Use this fucntion only if you override the skin through configuration. 
     * Otherwise you will not get the correct css class of body.
     * 
     * @return string
     */
    public static function skinClass()
    {
        /** 
         * @var \yongtiger\adminlteasset\AdminLteAsset $bundle
         */
        $bundle = \Yii::$app->assetManager->getBundle('yongtiger\adminlteasset\AdminLteAsset');

        return $bundle->skin;
    }
}
