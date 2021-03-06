@extends('layouts.main')

@section('content')
<div id="summary" class="summary">
  <div class="text-vcenter">
    <div class="rowsum">
		<h2>Report Summary</h2>
	    <p class="lead">
	        Credit Logs, Summary, etc.
	    </p>
	    
	    <div class="alert alert-info">
	        <h4>Credit Logs</h4>
	        <p>Lists of the credits bought by the tenants.</p>
	        <p>Shows the Unit ID, amount bought, and the date of transaction.</p>
	    </div>

	    <hr />

	    <div class="method">
	        <div class="row margin-0 list-header hidden-sm hidden-xs">
	            <div class="col-md-3"><div class="header">Unit ID</div></div>
	            <div class="col-md-4"><div class="header">Amount</div></div>
	            <div class="col-md-5"><div class="header">Date</div></div>
	        </div>
			@foreach ($credit_summary as $credits)
	        <div class="row margin-0">
	            <div class="col-md-3">
	                <div class="cell">
	                    <div class="type">
	                          {{$credits->unit_id}}
	                    </div>
	                </div>
	            </div>
	            <div class="col-md-4">
	                <div class="cell">
	                    <div class="type">
	                        {{$credits->amount}}
	                    </div>
	                </div>
	            </div>
	            <div class="col-md-5">
	                <div class="cell">
	                    <div class="type">
	                        {{$credits->created_at}}
	                    </div>
	                </div>
	            </div>

	        </div>
	        @endforeach
	    </div>
    </div>
  </div>
</div>


<div class="container">

    
</div>
@stop


