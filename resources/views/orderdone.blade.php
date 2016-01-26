@extends('layout.default')

@section('orderdone-content')
	<section>
		<div class="col-md-12 col-sm-12 col-lg-12">
			Order done
			<?php echo $msg['name'] ?>
			<br />
			Sent confirmation email to: <?php echo $msg['email'] ?>
		</div>
	</section>
@stop
