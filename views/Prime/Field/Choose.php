<div class="<?=$groupClasses;?>">
	<?=Form::label($id, $field['caption'], ['class' => 'control-label']);?>
	<div class="controls">
		<?=Form::select($field['name'], Arr::get($options, 'items', ['no options']), $value, ['id' => $id, 'class' => 'form-control']);?>
		<?php if ($error): ?>
			<span class="help-inline"><?=$error;?></span>
		<?php endif; ?>
	</div>
</div>