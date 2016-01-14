<?php 
/**
 *
 * @link   www.msup.com.cn
 * @author stromKnight <410345759@qq.com>
 * @since  1.0 
 */
?>

<?php if (Yii::$app->getSession()->hasFlash('user.success')): ?>
    <div class="alert alert-success">
        <p><?= Yii::$app->getSession()->getFlash('user.success') ?></p>
    </div>
<?php endif; ?>

<?php if (Yii::$app->getSession()->hasFlash('user.error')): ?>
    <div class="alert alert-danger">
        <p><?= Yii::$app->getSession()->getFlash('user.error') ?></p>
    </div>
<?php endif; ?>
