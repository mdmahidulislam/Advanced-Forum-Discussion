@extends('layouts.app')

@section('content')

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
            <hr>
            <p class="text-center">
                {{ $d->content }}
            </p>
        </div>

        <div class="panel-footer">
            {{ $d->replies->count() }} Replies
        </div>
    </div>

    @foreach($d->replies as $r)

    <div class="panel panel-success" >
            <div class="panel-heading">
                <img src={{ asset($r->user->avatar) }} alt="here is the avatar" width="20px", height="20px">&nbsp;&nbsp;&nbsp;
                <span>
                    {{ $r->user->name }}, <b> {{ $r->created_at->diffForHumans() }} </b>
                </span>
    
              
            </div>
    
            
    
            <div class="panel-body">
                
                <p class="text-center">
                    {{ $r->content }}
                </p>
            </div>
    
            <div class="panel-footer">
                
                @if($r->is_liked_by_auth_user())

                     <a href="/" class="btn btn-danger">Unlike</a>


                @else
                        <a href="/" class="btn btn-danger">Like</a>


                @endif


            </div>
        </div>


    @endforeach

    <div class="panel panel-default">
        <div class="panel-body">
            <form action="{{ route('discussion.reply', ['id' => $d->id]) }}" method="POST">
             {{ csrf_field() }}

             <div class="form-group">
                 <label for="reply">Leave a reply...</label>
                 <textarea name="reply" id="reply" cols="30" rows="10" class="form-control"></textarea>
             </div>

             <div class="form-group">
                 <button class="btn pull-right">
                     Leave a reply
                 </button>
             </div>
            
            </form>
        </div>

    </div>
    
    
@endsection
