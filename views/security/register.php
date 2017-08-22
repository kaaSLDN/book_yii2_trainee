<?php
/**
 * Created by PhpStorm.
 * User: andri
 * Date: 19.08.17
 * Time: 13:24
 */


/**
 * @var \app\models\RegistrationForm $model
*/
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>



<?php
    if (Yii::$app->session->hasFlash('success') ) : ?>
        <?php echo Yii::$app->session->getFlash('success');?>
<?php endif;?>

<?php
if (Yii::$app->session->hasFlash('error') ) : ?>
    <?php echo Yii::$app->session->getFlash('error');?>
<?php endif;?>


<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
            <?=$form->field($model, 'username'); ?>
            <?=$form->field($model, 'email'); ?>
            <?=$form->field($model, 'fio'); ?>
            <?=$form->field($model, 'password')->passwordInput(); ?>


            <div class="form-group">
                <?= Html::submitButton(Yii::t('app', 'Register'), ['class' => 'btn btn-primary']); ?>
            </div>
            <?php ActiveForm::end(); ?>

        </div>
    </div>
</div>
