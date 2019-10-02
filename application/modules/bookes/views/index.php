<?php

$num_columns	= 1;
$can_delete	= 	$this->auth->has_permission('Bookes.Bookes.Delete');
$can_edit		= $this->auth->has_permission('Bookes.Bookes.Edit');
$has_records	= isset($records) && is_array($records) && count($records);

if ($can_delete) {
    $num_columns++;
}
?>
<h1 class="dash-title"><?php echo lang('bookes_area_title'); ?></h1>
<div class="col-lg-12">
	<div class="card spur-card">
		<div class="card-header">
		    <div class="spur-card-icon">
		        <i class="fas fa-table"></i>
		    </div>
		    <div class="spur-card-title">Book list</div>
		</div>
		<div class="card-body ">
			<?php echo form_open($this->uri->uri_string()); ?>
			<table class="table table-in-card">
				<thead>
			        <tr>
		        	<?php if ($can_delete && $has_records) : ?>
						<th class='column-check'><input class='check-all' type='checkbox' /></th>
					<?php endif;?>
			            <th>Name</th>
			        </tr>
			    </thead>
			    <tbody>
			    	<?php
						if ($has_records) :
							foreach ($records as $record) :
						?>
						<tr>
							<?php if ($can_delete) : ?>
								<td class='column-check'><input type='checkbox' name='checked[]' value='<?php echo $record->id; ?>' /></td>
							<?php endif;?>
							
								<?php if ($can_edit) : ?>
									<td><?php echo anchor('/bookes/edit/' . $record->id, '<span class="icon-pencil"></span> ' .  $record->name); ?></td>
								<?php else : ?>
									<td><?php e($record->name); ?></td>
								<?php endif; ?>
						</tr>
						<?php
							endforeach;
						else:
						?>
						<tr>
							<td colspan='<?php echo $num_columns; ?>'><?php echo lang('bookes_records_empty'); ?></td>
						</tr>
					<?php endif; ?>
			    </tbody>
			    <?php if ($has_records) : ?>
					<tfoot>
						<?php if ($can_delete) : ?>
							<tr>
								<td colspan='<?php echo $num_columns; ?>'>
									<?php echo lang('bf_with_selected'); ?>
									<input type='submit' name='delete' id='delete-me' class='btn btn-danger' value="<?php echo lang('bf_action_delete'); ?>" onclick="return confirm('<?php e(js_escape(lang('bookes_delete_confirm'))); ?>')" />
								</td>
							</tr>
							<?php endif; ?>
					</tfoot>
				<?php endif; ?>
			</table>
		</div>
	</div>
</div>
