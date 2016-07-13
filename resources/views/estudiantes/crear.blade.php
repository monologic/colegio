@extends('templates.main')

@section('title', 'Crear Estudiante')

@section('content')
	<div class="container">
		<h1>Crear Estudiante</h1>
    	<div ng-controller="estudiantesController" ng-init="getEstudiantes()">
    		<div class="col-md-6">
    			<form ng-submit="enviar()">
    				<div class="form-group">
					    <label for="exampleInputEmail1">Email address</label>
					    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
					</div>
					<div class="form-group">
					    <label for="exampleInputPassword1">Password</label>
					    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
					</div>
					<div class="form-group">
					    <label for="exampleInputFile">File input</label>
					    <input type="file" id="exampleInputFile">
					    <p class="help-block">Example block-level help text here.</p>
					</div>
					<div class="checkbox">
					    <label>
					      <input type="checkbox"> Check me out
					    </label>
					</div>
					<button type="submit" class="btn btn-default">Submit</button>
    			</form>
    		</div>
    	</div>
	</div>
    
    <script src="{{ asset('assets/js/ng-scripts/controllers/estudiantesController.js') }}"></script>
@endsection