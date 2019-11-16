@extends('layouts.app')
@include('inc.messages')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h2>Ask your Questtion</h2>
                        <div class="ml-auto">
                            <a href="{{ route('questions.index') }}"><i class="fas fa-arrow-left"></i>Back To Home</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('questions.store') }}" method="post">
                        @include("questions._form",['buttonText'=>'Ask Question'])
 
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
