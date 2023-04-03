@extends('layouts.app')
@section('title','BlogRepublic')
@section('content')
<div class="container">
        <article class="blog-post mt-5">
            <h2 class="blog-post-title mb-1 text-danger">{{$p->title}}</h2>
            <p class="blog-post-meta">{{ date("d M Y H:i", strtotime($p->created_at))}}</p>
    
            <p class="text-white">{{$p->content}}</p>
          </article>

          <p class="text-white">{{$total_comments}} Comments</p>
          <a href="{{ url("posts/$p->id/commentPage") }}" class="btn text-white bg-primary" style="font-family: 'Times New Roman'; border-radius:0%">Give A Comment</a>
          @foreach ($comments as $c)
          <div class="card bg-white mb-3" style="border-radius:0%">
            <div class="card-head">
            <div class="card-body">
                <h6 class="text-danger">{{$c->User}}</h6>
                <p style="font-size: 15px" class="text-black">{{$c->comment}}</p>
            </div>
            </div>
          </div>
          @endforeach
          <a href="{{url('posts')}}" class="btn btn-danger " style="font-family: 'Times New Roman'; border-radius:0%">Back to Home</a>
    </div>
@endsection