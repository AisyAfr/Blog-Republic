@extends('layouts.app')
@section('title','BlogRepublic')
@section('content')

<h1 class="mb-5 mt-3 text-white" style="text-align: center; font-family: 'Times New Roman'; font-size:50px">Blog<span style="color:rgb(239, 66, 66)">Republic</span></h1>

    <a href="{{url('posts/create')}}" class="btn btn-success" style="font-family: 'Times New Roman'; border-radius:0%">+ Write Your Own Blog!</a>
    <a href="{{url('posts/trash')}}" class="btn btn-warning " style="font-family: 'Times New Roman'; border-radius:0%">Recyle Bin</a>
    <br>
    <br>
    <p class="text-warning">Your Post : <span class="text-white p-1">{{$postingan}}</span></p>
    <p class="text-warning">Discarded Post : <span class="text-white p-1">{{$postingandihapus}}</span></p>
   @foreach($posts as $p)
 <div class="card my-4 bg-white" id="card" style="border-radius: 0%">
   <div class="card-body">  
    <h5 class="card-title text-black " style="font-family: 'Times New Roman'; font-size:25px">{{ $p->title }}</h5>
    <p class="card-text">{{ $p->content }}</p>
    <p class="card-text"><small class="text-muted">Created At {{ date("d M Y H:i", strtotime($p->created_at))}}</small></p>
    <a href="{{ url("posts/$p->slug") }}" class="btn text-white bg-dark" style="font-family: 'Times New Roman'; border-radius:0%">More Detail</a>
    <a href="{{ url("posts/$p->slug/edit") }}" class="btn text-white bg-danger" style="font-family: 'Times New Roman'; border-radius:0%">Edit</a>
        <button type="button" class="btn text-black bg-info" data-bs-toggle="modal" data-bs-target="#exampleModal" style="font-family: 'Times New Roman'; border-radius:0%">Delete Your Post</button>
    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header ">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Are You Sure?</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        You Wanna Delete This Blog?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <form action="{{url("posts/$p->id/delete")}}" method='POST'>
          @method('DELETE')
          @csrf
          <button type="submit" class="btn btn-danger" >Delete Your Post</button>
      </form>
      </div>
    </div>
  </div>
</div>
   </div>
 </div>
   @endforeach

   @endsection
 
 