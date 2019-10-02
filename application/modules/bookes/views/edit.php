<?php

if (validation_errors()) :
?>
<div class='alert alert-block alert-error fade in'>
    <a class='close' data-dismiss='alert'>&times;</a>
    <h4 class='alert-heading'>
        <?php echo lang('bookes_errors_message'); ?>
    </h4>
    <?php echo validation_errors(); ?>
</div>
<?php
endif;

$id = isset($bookes->id) ? $bookes->id : '';

?>

<div class="row">
    <div class="col-xl-12">
        <div class="card spur-card">
            <div class="card-header">
                <div class="spur-card-icon">
                    <i class="fas fa-chart-bar"></i>
                </div>
                <div class="spur-card-title">Bookes</div>
            </div>
            <div class="card-body ">
            	<?php echo form_open($this->uri->uri_string()); ?>
            		<div class="form-row">
	            		<div class="form-group col-md-6<?php echo form_error('name') ? ' error' : ''; ?>">
	                        <?php echo form_label(lang('bookes_field_name'), 'name'); ?>
	                        <input class="form-control" id='name' type='text' name='name' maxlength='30' cla value="<?php echo set_value('name', isset($bookes->name) ? $bookes->name : ''); ?>" />
	                    	<span class='help-inline'><?php echo form_error('name'); ?></span>
	                    </div>
	                </div>
                    <input type='submit' name='save' class='btn btn-primary' value="<?php echo lang('bookes_action_edit'); ?>" />
		            <?php echo lang('bf_or'); ?>
		            <?php echo anchor('/bookes', lang('bookes_cancel'), 'class="btn btn-warning"'); ?>
		            
		            <?php if ($this->auth->has_permission('Bookes.Bookes.Delete')) : ?>
		                <?php echo lang('bf_or'); ?>
		                <button type='submit' name='delete' formnovalidate class='btn btn-danger' id='delete-me' onclick="return confirm('<?php e(js_escape(lang('bookes_delete_confirm'))); ?>');">
		                    <span class='icon-trash icon-white'></span>&nbsp;<?php echo lang('bookes_delete_record'); ?>
		                </button>
		            <?php endif; ?>
            	<?php echo form_close(); ?>
            </div>
        </div>
     </div>
 </div>