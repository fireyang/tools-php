<div class="cards index">
<h2><?php __('Cards');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<div id="entries">
<?php
$i = 0;
foreach ($cards as $card):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="entry card"';
	}
?>
	<div class="entry">
	    <div class="card">
		    <div class="header"><img
			    src=/img/upload/<?php 
			     echo $card['Card']['header']; ?>
			    />
		    </div>
		    <div>
			    <?php echo $card['Card']['name']; ?>
		    </div>
		    <div>
			    <?php echo $card['Card']['display_name']; ?>
		    </div>
		    <div>
			    <?php echo $card['Card']['email']; ?>
		    </div>
		    <div>
			    <?php echo $card['Card']['mobile']; ?>
		    </div>
		    <div class="actions">
			    <?php echo $html->link(__('View', true), array('action'=>'view', $card['Card']['id'])); ?>
			    <?php echo $html->link(__('Edit', true), array('action'=>'edit', $card['Card']['id'])); ?>
			    <?php echo $html->link(__('Delete', true), array('action'=>'delete', $card['Card']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $card['Card']['id'])); ?>
		    </div>
		</div>
	</div>
<?php endforeach; ?>
</div>
</div>
<div class="paging">
	<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $paginator->numbers();?>
	<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class'=>'disabled'));?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('New Card', true), array('action'=>'add')); ?></li>
		<li><?php echo $html->link(__('List Users', true), array('controller'=> 'users', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New User', true), array('controller'=> 'users', 'action'=>'add')); ?> </li>
	</ul>
</div>
