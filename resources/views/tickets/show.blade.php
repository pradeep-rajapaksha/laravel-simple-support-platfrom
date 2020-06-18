@extends('layouts.app')

@section('content')
<div class="col-md-9">
    <div class="card">
        <div class="card-header">Ticket: {{$ticket->reference}}</div>

        <div class="card-body">            
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-hover mb-0">
                        <tr>
                            <th scope="row">Customer Name</th>
                            <td>{{$ticket->customer->name}}</td>
                            
                            <th scope="row">Customer Contact</th>
                            <td>{{$ticket->customer->email}} / {{$ticket->customer->phone}}</td>
                            
                            <th scope="row">Status</th>
                            <td>{{$ticket->status}}</td>
                        </tr>
                        
                        <tr>
                            <th scope="row">Issue Description</th>
                            <td colspan="5">{{$ticket->description}}</td>
                        </tr>
                        @if(Auth::guest())
                        <tr>
                            <th scope="row">Issue Response</th>
                            <td colspan="5">{{$ticket->response}}</td>
                        </tr>
                        @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
    <br>
    @if (Auth::check())
        <div class="card">
            <div class="card-header">Response: </div>
            @if (session('flash_message_error'))
                <div class="alert alert-warning" role="alert">
                    {{ session('flash_message_error') }}
                </div>
            @endif
            <div class="card-body">            
                <div class="row">
                    <div class="col-md-12">
                        {!! Form::model($ticket, ['method' => 'PUT', 'url' => '/issues/'.$ticket->id, 'class' => 'form-issues-create', 'files' => true]) !!}
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-12 {{ $errors->has('response') ? 'has-error' : ''}}">
                                    {!!  Form::textarea('response', null , ['class' => 'form-control', 'required' => 'required', 'style' => 'width:100%;'] ) !!}
                                    {!! $errors->first('response', '<p class="help-block">:message</p>') !!}
                                </div> 
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <!-- <div class="col-md-12">  -->
                                        {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
                                    <!-- </div> -->
                                </div>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
@endsection
