<div class="tasks form">
<?php echo $form->create('Task');?>
	<fieldset>
 		<legend><?php __('Add Task');?></legend>
	<?php
		echo $form->input('name');
		echo $form->input('header');
		echo $form->input('display_name');
		echo $form->input('start');
		echo $form->input('end');
		echo $form->input('user_id');
		echo $form->input('list_id');
		echo $form->input('location_id');
		echo $form->input('Tag');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Tasks', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Users', true), array('controller'=> 'users', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New User', true), array('controller'=> 'users', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Tlists', true), array('controller'=> 'tlists', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Tlist', true), array('controller'=> 'tlists', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Locations', true), array('controller'=> 'locations', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Location', true), array('controller'=> 'locations', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Tags', true), array('controller'=> 'tags', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Tag', true), array('controller'=> 'tags', 'action'=>'add')); ?> </li>
	</ul>
</div>
