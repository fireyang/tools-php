<div class="cards form">
<?php echo $form->create('Card');?>
	<fieldset>
 		<legend><?php __('Edit Card');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('name');
		echo $form->input('header');
		echo $form->input('display_name');
		echo $form->input('email');
		echo $form->input('mobile');
		echo $form->input('author');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('Card.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Card.id'))); ?></li>
		<li><?php echo $html->link(__('List Cards', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Users', true), array('controller'=> 'users', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New User', true), array('controller'=> 'users', 'action'=>'add')); ?> </li>
	</ul>
</div>
