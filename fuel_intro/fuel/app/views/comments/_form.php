<?php echo Form::open(); ?>
    <p>
        <?php echo 'Name: '.Auth::instance()->get_screen_name(); ?>
    </p>
	<p>
		<?php echo Form::label('Comment', 'comment'); ?>
		<?php echo Form::textarea('comment', Input::post('comment', isset($comment) ? $comment->comment : ''), array('cols' => 60, 'rows' => 8)); ?>
	</p>
	<?php echo Form::hidden('mid', Input::post('mid', isset($message) ? $message : '')); ?>
	<div class="actions">
		<?php echo Form::submit(); ?> </div>
<?php echo Form::close(); ?>