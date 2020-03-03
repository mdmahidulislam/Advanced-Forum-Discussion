@extends('layouts.app')

@section('content')

    @foreach ($discussions as $d)
        <div class="panel panel-primary">
            <div class="panel-heading">
                <img src={{ asset($d->user->avatar) }} alt="here is the avatar" width="40px", height="40px">&nbsp;&nbsp;&nbsp;
                <span>
                    {{ $d->user->name }}, <b> {{ $d->created_at->diffForHumans() }} </b>
                </span>

                <a href="{{ route('discussion', ['slug'=> $d->slug]) }}" class="btn btn-default pull-right">View</a>
            </div>

            

            <div class="panel-body">
                <h4 class="text-center">
                        <a href="{{ route('discussion', ['slug'=> $d->slug]) }}" class="btn "> {{ $d->title }}</a>
               
                </h4>
                <p class="text-center">
                    {{ str_limit($d->content, 50) }}
                </p>
            </div>

            <div class="panel-footer">
                {{ $d->replies->count() }} Replies
            </div>
        </div>
        
    @endforeach

    <div class="text-center">
        {{ $discussions->links() }}
    </div>
    
@endsection
