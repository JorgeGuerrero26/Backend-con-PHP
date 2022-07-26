@extends('template')
@section('content')
<h1>Lisatdo</h1>
    @foreach ($posts as $post)
        <h2>{{ $post-> id }}</h2>        
        <a href="{{route('post',$post->slug) }}"> {{ $post->title }}</a>
       <br>
       <span>{{$post->user->name}}</span>
    @endforeach

    {{ $posts->links() }}
@endsection

