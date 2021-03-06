@extends('layouts.app')
@section('content')
@if(isset($saved) && $saved == false)
    <div class="alert alert-danger alert-dismissible col-sm-6">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong>Error in posting thread!</strong>
    </div>
@endif

@if($sections ?? false)
    <ul>
    @foreach ($sections as $section => $arr)
        <li>{{$section}}</li>
        <ul class="list-group col-sm-10">
        @foreach ($arr as  $id)
            <a href="/showThread/{{$id->id}}"><li class="list-group-item">{{$id->title}}<br><span>Replies: {{$id->count}}</span></li></a>
        @endforeach    
        </ul>
    @endforeach
    </ul>
@endif
@endsection