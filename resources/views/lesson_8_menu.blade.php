@extends('layout.default')

@section('menu-content')
	<section>
		<div class="col-md-12 col-sm-12 col-lg-12">
			<div class="col-sm-offset-4 col-md-offset-4 col-lg-offset-4 col-md-6 col-sm-6 col-lg-6">
				Menu List
				<ul>
   				@foreach($menuList as $item)
					<li><?php echo $item->dish ?></li>
        		@endforeach	
        		</ul>			
			</div>
		</div>
	</section>

	<section>
		{!! Form::open(array('url' => 'menu/postOrder')) !!}
		<?php 
			echo Form::text('name', 'Stefano'); 
			echo '<br />';
			echo Form::email('email', 'example@gmail.com'); 
			echo '<br />';
			echo Form::submit('Click Me!');
		?>
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
