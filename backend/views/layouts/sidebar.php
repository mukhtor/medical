<?php
/**
 * @var \common\models\User $user
 */

use hail812\adminlte3\widgets\Menu;

$user = Yii::$app->getUser()->getIdentity();

?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?=\yii\helpers\Url::to(['/'])?>" class="brand-link">
        <span class="brand-text font-weight-light"><h3 class="text-center">XVKTTM</h3></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= Yii::$app->request->baseUrl ?>/img_367056.png" class="img-circle elevation-2"
                     alt="User Image">
            </div>
            <div class="info">
                <a href="<?=\yii\helpers\Url::to(['/'])?>"
                   class="d-block"><?= Yii::$app->user->isGuest ? '' : Yii::$app->user->identity->username ?></a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <!-- href be escaped -->
        <!-- <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div> -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <?php
            if (!Yii::$app->user->isGuest){
                $menuItems = [];
                if ($user->isAdmin() || $user->isTahrir()) {
                    $menuItems[] = ['label' => 'Yangiliklar', 'url' => ['news/index'], 'icon' => 'plus'];
                    $menuItems[] = ['label' => 'E\'lonlar', 'url' => ['events/index'], 'icon' => 'plus'];

                }
                if ($user->isAdmin()) {
                    $menuItems[] = ['label' => 'Bo\'limlar', 'url' => ['sections/index'], 'icon' => 'plus'];
                    $menuItems[] = ['label' => 'Hodimlar', 'url' => ['employees/index'], 'icon' => 'plus'];
                    $menuItems[] = ['label' => 'Gallereya', 'url' => ['gallery/index'], 'icon' => 'plus'];
                    $menuItems[] = ['label' => 'Menu', 'url' => ['menu/index'], 'icon' => 'plus'];
                    $menuItems[] = ['label' => 'Lavozimlar', 'url' => ['position/index'], 'icon' => 'plus'];
                    $menuItems[] = ['label' => 'Navbatga yozilishlar', 'url' => ['register/index'], 'icon' => 'plus'];
                    $menuItems[] = ['label' => 'Foydalanuvchilar', 'url' => ['user/index'], 'icon' => 'plus'];
                    $menuItems[] = ['label' => 'Pullik Xizmatlar', 'url' => ['services/index'], 'icon' => 'plus'];

                }
                if ($user->isShifokor()){
                    $menuItems[] = ['label' => 'Shifokorga Navbatga Yozilgan Bemorlar Ro\'yxati', 'url' => ['site/index'], 'icon' => 'plus'];

                }
                echo \hail812\adminlte\widgets\Menu::widget([
                    'items' => $menuItems,
                ]);
            }
            ?>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>