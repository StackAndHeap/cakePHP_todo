<h2>Overview</h2>
<ul>
<?php foreach($todos as $todo) : ?>
	<li>
		<?php echo $todo['Todo']['description']; ?>
         (<?php echo $this->Form->postLink('Resolve', array('action' => 'resolve', $todo['Todo']['id']));
            ?>)
	</li>
<?php endforeach; ?>
<?php unset($todo); ?>
</ul>
<?php echo $this->Html->link('Add Todo', array('controller'=>'todos', 'action'=>'add')); ?>
