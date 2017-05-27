<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Golongan */
?>
<div class="golongan-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'kode_golongan',
            'nama_golongan',
        ],
    ]) ?>

</div>
