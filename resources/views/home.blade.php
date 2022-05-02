@extends('layout.app')

@section('title','multiple file upload')


@section('content')



<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h4>this is multiple file upload</h4>
				</div>
				<div class="card-body">
					<button class="btn btn-sm btn-primary my-3 addBtn">Add</button>
					<table class="table table-striped">
						<thead>
							<tr>
								<th>File</th>
								<th>file size</th>
								<th>censel</th>
								<th>upload</th>
								<th>upload(MB)</th>
								<th>upload(%)</th>
								<th>status</th>
							</tr>
						</thead>
						<tbody class="fileList">
						
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>



@endsection