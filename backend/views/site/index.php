<?php

/** @var yii\web\View $this */

use yii\helpers\Url;

$this->title = 'My Yii Application';
?>
<div class="container">
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Bo'lim</th>
            <th>Hodim</th>
            <th>Bemorning Ismi Familiyasi</th>
            <th>Email</th>
            <th>Qabul Vaqti</th>
            <th>Shikoyati</th>
            <th>Amallar</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($register as $value):?>
        <tr>
            <td><?=$value->sections->name_uz?></td>
            <td><?=$value->employees->fullname_uz?></td>
            <td><?=$value->fullname?></td>
            <td><?=$value->email?></td>
            <td><?=date('Y m-d',$value->date)?></td>
            <td><?=$value->information?></td>
            <td>
                <a href="<?= Url::to(['register/view','id'=>$value->id])?>"><i class="fa fa-eye fa-2x text-info"></i></a>
                <a href="<?= Url::to(['register/receive','id'=>$value->id])?>"> <i class="fa fa-check fa-2x text-yellow"></i></a>
            </td>
        </tr>
        <?php endforeach;?>
        </tbody>
    </table>
</div>
