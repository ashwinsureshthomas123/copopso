@extends('layouts.app')


@section('main_content')

   <div class="page-header" style="margin-top: 60px;">
     <h1 class="text-primary">Define Cource Outcomes</h1>
   </div>
   
   <form method="POST" action="/store" data-toggle="validator" class="form-horizontal" role="form">
    	{{ csrf_field() }}
		<div class="form-group has-feedback">
			<label for="inputName" class="col-lg-1 control-label"><h4>2K16...1</h4></label>
			<div class="col-lg-8 col-lg-offset-3">
				<textarea type="text" class="form-control" id="inputName" name='co1'
				 cols="80" rows="4" pattern="^[_A-z0-9]{1,}$" required></textarea>
				 <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
			     <p class="help-block with-errors"></p>	
			</div>
		</div>

		<div class="form-group has-feedback">
			<label for="inputName" class="col-lg-1 control-label"><h4>2K16...2</h4></label>
			<div class="col-lg-8 col-lg-offset-3">
				<textarea type="text" class="form-control" id="inputName" name='co2'
				 cols="80" rows="4" pattern="^[_A-z0-9]{1,}$" required></textarea>
				 <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
			     <p class="help-block with-errors"></p>	
			</div>
		</div>
		<div class="form-group has-feedback">
			<label for="inputName" class="col-lg-1 control-label"><h4>2K16...3</h4></label>
			<div class="col-lg-8 col-lg-offset-3">
				<textarea type="text" class="form-control" id="inputName" name='co3'
				 cols="80" rows="4" pattern="^[_A-z0-9]{1,}$" required></textarea>
				 <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
			     <p class="help-block with-errors"></p>	
			</div>
		</div>
		<div class="form-group has-feedback">
			<label for="inputName" class="col-lg-1 control-label"><h4>2K16...4</h4></label>
			<div class="col-lg-8 col-lg-offset-3">
				<textarea type="text" class="form-control" id="inputName" name='co4'
				 cols="80" rows="4" pattern="^[_A-z0-9]{1,}$" required></textarea>
				 <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
			     <p class="help-block with-errors"></p>	
			</div>
		</div>
		<div class="form-group has-feedback">
			<label for="inputName" class="col-lg-1 control-label"><h4>2K16...5</h4></label>
			<div class="col-lg-8 col-lg-offset-3">
				<textarea type="text" class="form-control" id="inputName" name='co5'
				 cols="80" rows="4" pattern="^[_A-z0-9]{1,}$" required></textarea>
				 <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
			     <p class="help-block with-errors"></p>	
			</div>
		</div>
		<div class="form-group has-feedback">
			<label for="inputName" class="col-lg-1 control-label"><h4>2K16...6</h4></label>
			<div class="col-lg-8 col-lg-offset-3">
				<textarea type="text" class="form-control" id="inputName" name='co6'
				 cols="80" rows="4" pattern="^[_A-z0-9]{1,}$" required></textarea>
				 <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
			     <p class="help-block with-errors"></p>	
			</div>
		</div>
		<div class="form-group">
			 <button type="submit" class="btn btn-success">Submit</button>
		</div>
	</form>
	

@endsection

@section('script')
	<script type="text/javascript">
		$(function() {
			$('#form').validate();
		});
	</script>
@endsection