@extends('layout.default')

@section('home-content')
	<section>
		<div class="col-md-12 col-sm-12 col-lg-12 welcome">
			<div class="col-md-3 col-sm-3 col-lg-3">
			<!-- push left content	-->
			</div>
			<div class="col-md-6 col-sm-6 col-lg-6">
				<div class="enter-pizzeria">
					<div class="highlight">
						<p>Welcome to Laravel's pizzeria</p>
						<div><form action="menu/all" method="get" accept-charset="utf-8">
							<button type="submit" class="btn btn-lg btn-danger"> Go to menu >> </button>
						</form>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@stop
