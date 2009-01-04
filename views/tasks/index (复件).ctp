<div class="tasks index">
<h2><?php __('Tasks');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('name');?></th>
	<th><?php echo $paginator->sort('header');?></th>
	<th><?php echo $paginator->sort('display_name');?></th>
	<th><?php echo $paginator->sort('start');?></th>
	<th><?php echo $paginator->sort('end');?></th>
	<th><?php echo $paginator->sort('user_id');?></th>
	<th><?php echo $paginator->sort('list_id');?></th>
	<th><?php echo $paginator->sort('location_id');?></th>
	<th><?php echo $paginator->sort('created');?></th>
	<th><?php echo $paginator->sort('updated');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($tasks as $task):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $task['Task']['id']; ?>
		</td>
		<td>
			<?php echo $task['Task']['name']; ?>
		</td>
		<td>
			<?php echo $task['Task']['header']; ?>
		</td>
		<td>
			<?php echo $task['Task']['display_name']; ?>
		</td>
		<td>
			<?php echo $task['Task']['start']; ?>
		</td>
		<td>
			<?php echo $task['Task']['end']; ?>
		</td>
		<td>
			<?php echo $html->link($task['User']['id'], array('controller'=> 'users', 'action'=>'view', $task['User']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($task['Tlist']['name'], array('controller'=> 'tlists', 'action'=>'view', $task['Tlist']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($task['Location']['name'], array('controller'=> 'locations', 'action'=>'view', $task['Location']['id'])); ?>
		</td>
		<td>
			<?php echo $task['Task']['created']; ?>
		</td>
		<td>
			<?php echo $task['Task']['updated']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $task['Task']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $task['Task']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $task['Task']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $task['Task']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>
<div class="paging">
	<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $paginator->numbers();?>
	<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class'=>'disabled'));?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('New Task', true), array('action'=>'add')); ?></li>
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
