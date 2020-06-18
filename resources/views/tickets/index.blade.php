@extends('layouts.app')

@section('content')
<div class="col-md-9">
	<div class="card">
	    <div class="card-header">
	    	Tickets
	    	<a href="{{ route('issues.index','status=closed') }}" class="btn btn-primary btn-sm float-right ml-2">Closed</a>
	    	<a href="{{ route('issues.index','status=open') }}" class="btn btn-primary btn-sm float-right ml-2">Open</a>
	    	<a href="{{ route('issues.index') }}" class="btn btn-primary btn-sm float-right">All</a>
	    </div>

	    <div class="card-body">
	        @if (session('flash_message_success'))
	            <div class="alert alert-success" role="alert">
	                {{ session('flash_message_success') }}
	            </div>
	        @endif

	        <div>
	        	<table class="table">
	        		<thead>
	        			<tr>
	        				<th>Reference </th> 
	        				<th>Description</th> 
	        				<th>Customer </th> 
	        				<th>Status</th> 
	        				<th></th> 
	        			</tr> 
	        		</thead>
	        		<tbody>
	        			@if (!$tickets->count())
		        			<tr colspan="4">
		        				<td>No Tickets Fouond.</td>
		        			</tr>
		        		@endif
		        		@foreach ($tickets as $ticket)
		        			<tr>
		        				<td><a href="{{ route('issues.show',$ticket->reference) }}">{{ $ticket->reference }}</a></td>
		        				<td>{{ substr($ticket->description, 0, 30) }}</td>
		        				<td>{{ $ticket->customer->name }}</td>
		        				<td>{{ $ticket->status }}</td>
		        				<td></td>
		        			</tr>
		        		@endforeach
	        		</tbody>
	        	</table>
	        	<div>
	        		{{ $tickets->render() }}
	        	</div>
	        </div>
	    </div>
	</div>
</div>
@endsection
