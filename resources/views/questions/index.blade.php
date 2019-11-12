@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">All Questions</div>

                <div class="card-body">
                    <div class="media">
                        <div class="media-body">
                            @foreach($questions as $question)
                                <h1 class="mt-0"><a href="{{$question->url}}">{{$question->title}}</a></h1>
                                <p class="lead">
                                    Asked By
                                    <a href="{{$question->user->url}}">{{$question->user->name}}</a>
                                    <small class="text-muted">{{$question->created_at->diffForHumans()}}</small>
                                </p>
                                
                                <p>{{str_limit($question->body,250)}}</p>
                                <hr>
                            @endforeach

                            {{$questions->links()}}
                        </div>
                    
                    </div>
            
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
