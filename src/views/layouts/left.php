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

/**
 * @var $this yii\base\View
 * @var $directoryAsset string
 */

use yongtiger\adminlteasset\widgets\Menu;
use yongtiger\admin\components\MenuHelper;

?>

<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/><!--///?????[yii2-adminlte-asset]-->
            </div>
            <div class="pull-left info">
                <p>
                    <?= \Yii::$app->user->identity->username ?><!--///[yii2-adminlte-asset]-->
                </p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!--///[yii2-adminlte-asset]-->
        <!--///修正Yii2-Adminlte的的显示错误（menu前面的图标不显示等问题）-->
        <?php
        $callback = function($menu){ 
            $data = json_decode($menu['data'], true); 
            $items = $menu['children']; 
            $return = [ 
                'label' => $menu['name'], 
                'url' => $menu['route'], 
            ]; 
            //处理我们的配置 
            if ($data) { 
                //visible 
                isset($data['visible']) && $return['visible'] = $data['visible']; 
                //icon 
                isset($data['icon']) && $data['icon'] && $return['icon'] = $data['icon']; 
                //other attribute e.g. class... 
                $return['options'] = $data; 
            } 
            //没配置图标的显示默认图标 
            (!isset($return['icon']) || !$return['icon']) && $return['icon'] = 'fa fa-circle-o'; 
            $items && $return['items'] = $items; 
            return $return; 
        }; 
        //这里我们对一开始写的菜单menu进行了优化
        echo Menu::widget( [ 
            'options' => ['class' => 'sidebar-menu'], 
            'items' => MenuHelper::getAssignedMenu(\Yii::$app->user->id, null, $callback), 
        ] );
        ?>
        <!--///[http://www.brainbook.cc]-->

    </section>

</aside>
