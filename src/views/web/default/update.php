<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var portalium\notification\models\Notification $model */

$this->title = Yii::t('app', 'Update Notification: {name}', [
    'name' => $model->title,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Notifications'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id_notification' => $model->id_notification]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="notification-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
