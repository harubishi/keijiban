<?php echo $this->Form->create($UserForm,['novalidate' => true,'class' => 'form-horizontal']); ?>
	<div class="form-group">
		<?php echo $this->Form->label('name','ユーザ名',['class' => 'col-sm-2 control-label']);?>
		<div class="col-sm-10">
			<?php echo $this->Form->text('name',
				[
					'class' => 'form-control'			]
			); ?>
			<?php echo $this->Form->error('name'); ?>
		</div>
	</div>
	<div class="form-group">
		<?php echo $this->Form->label('password','パスワード',['class' => 'col-sm-2 control-label']);?>
		<div class="col-sm-10">
			<?php echo $this->Form->text('password',['type'=>'password','class' => 'form-control']); ?>		<?php echo $this->Form->error('password'); ?>
		</div>
	</div>

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<?php echo $this->Form->submit('登録',['class' => 'btn btn-success']); ?>
		</div>
	</div>
<?php echo $this->Form->end(); ?>