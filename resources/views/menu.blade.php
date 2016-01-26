@extends('layout.default')

@section('menu-content')
	<section>
		{!! Form::open(array('url' => 'menu/postOrder', 'role' => 'form', 'class' => 'form-horizontal')) !!}
			<div class="form-group">
				<?php echo Form::label('name', 'Menu List', array('class' => 'control-label col-sm-2')); ?>		
			@foreach($menuList as $item)
				<div class="col-sm-offset-2 col-sm-10">
						<label style="width: 120px;"><?php echo $item->dish ?></label>
						<?php echo Form::number($item->dish, 0, array('style' =>'width: 50px;', 'min'=>'0', 'max'=>'5')); ?>
				</div>
			@endforeach	
			</div>
			
			<div class="form-group">
				<?php echo Form::label('olio', 'Olio Piccante', array('class' => 'control-label col-sm-2')); ?>	
				<div class="col-sm-8">
					<?php echo Form::checkbox('olio', 'olio_picc');?>
				</div>
			</div>

			<div class="form-group">		
				<?php echo Form::label('name', 'Your name', array('class' => 'control-label col-sm-2')); ?>
				<div class="col-sm-8">
					<?php echo Form::text('name', 'Stefano', array('class' => 'form-control')); ?>
				</div>		
			</div>

			<div class="form-group">
				<?php echo Form::label('email', 'E-Mail Address', array('class' => 'control-label col-sm-2')); ?>
					<div class="col-sm-8">
				<?php echo Form::text('email', 'example@webyourmind.com', array('class' => 'form-control')); ?>
				</div>
			</div>

			<div class="form-group">
				<?php echo Form::label('freeOrder', 'Free Order', array('class' => 'control-label col-sm-2')); ?>
					<div class="col-sm-8">
				<?php echo Form::text('freeOrder', 'pizza margherita', array('class' => 'form-control')); ?>
				</div>
			</div>

		    <div class="form-group"> 
			    <div class="col-sm-offset-2 col-sm-8">
					<?php echo Form::button('Order Now!', array('class' => 'btn btn-default', 'type' => 'submit')); ?>
			    </div>
		    </div>
		{!! Form::close() !!}
	</section>	

	<section>
		@if($errors->has())
		   @foreach ($errors->all() as $error)
		      <div><pre>{{ $error }}</pre></div>
		  @endforeach
		@endif
	</section>
@stop



		