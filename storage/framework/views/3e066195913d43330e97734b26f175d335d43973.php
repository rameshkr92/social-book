<div class="panel panel-default">
	<div class="panel-heading no-bg panel-settings">
		<h3 class="panel-title">
			<?php echo e(trans('common.manage_users')); ?>

		</h3>
	</div>
	<div class="panel-body timeline">
	<?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<?php if(count($users) > 0): ?>
			<div class="table-responsive manage-table">
				<table class="table existing-products-table socialite">
					<thead>
						<tr>
							<th>&nbsp;</th>
							<th><?php echo e(trans('admin.id')); ?></th> 
							<th><?php echo e(trans('auth.name')); ?></th>
							<th><?php echo e(trans('common.email')); ?></th> 
							<th><?php echo e(trans('admin.options')); ?></th>
							<th>&nbsp;</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($users as $user): ?>
						<tr>
							<td>&nbsp;</td>	
							<td><?php echo e($user->id); ?></td>
							<td><a href="#"><img src="<?php echo e($user->avatar); ?>" alt="images"></a><a href="<?php echo e(url($user->timeline->username)); ?>"> <?php echo e($user->timeline->username); ?></a></td>

							<td><?php echo e($user->email); ?></td> 
							<td>
								<ul class="list-inline">
									<li><a href="<?php echo e(url('admin/users/'.$user->timeline->username.'/edit')); ?>"><span class="pencil-icon bg-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span></a></li>
									<li><a href="<?php echo e(url('admin/users/'.$user->id.'/delete')); ?>" onclick="return confirm('<?php echo e(trans("messages.are_you_sure")); ?>')"><span class="trash-icon bg-danger"><i class="fa fa-trash" aria-hidden="true"></i></span></a></li>
								</ul>

							</td>
							<td>&nbsp;</td> 
						</tr>
						<?php endforeach; ?>
						</tbody>
					</table>
				</div>
				<div class="pagination-holder">
					<?php echo e($users->render()); ?>

				</div>	
			<?php else: ?>
				<div class="alert alert-warning"><?php echo e(trans('messages.no_users')); ?></div>
			<?php endif; ?>
		</div>
	</div>
