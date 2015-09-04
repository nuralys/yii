<div class="row register">
	<div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 ">
		<?
			$form = \yii\bootstrap\ActiveForm::begin();
		?>
	    <?php 
	    	echo $form->field($model,'username');
	     ?>
	     <?php 
	    	echo $form->field($model,'email');
	     ?>
	     <?php 
	    	echo $form->field($model,'password');
	     ?>
	     <?php 
	    	echo $form->field($model,'repassword');
	     ?>
	     <?php 
	    	echo \yii\helpers\Html::submitButton('Register',['class' => 'btn btn-success']);
	     ?>
		<?
			\yii\bootstrap\ActiveForm::end();
		?>
	</div>
</div>