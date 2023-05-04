@extends('layouts.main')
@section('title', $posts->title)
    
@section('content')
<!-- Imagem -->

<div class="w3-display-container w3-animate-opacity">
    <img src="/img/post/{{$posts->image}}" alt="boat" style="width:100%;min-height:350px;max-height:600px;">
  </div>


<!-- Conteudo -->
    <div class="w3-main" style="margin-left:250px">

        <div class="w3-row">
            <div class="w3-twothird w3-container">
            <h1 class="w3-text-teal">{{$posts->title}}</h1>
            <p>{{$posts->description}}</p>
            </div>
            <div class="w3-third w3-container">
            <img src="/img/post/{{$posts->image}}" class="w3-border w3-padding-large w3-padding-32 w3-center" style="width:100%">
            <img src="/img/post/{{$posts->image}}" class="w3-border w3-padding-large w3-padding-64 w3-center" style="width:100%">
            <ul>TAGS: 
                @foreach ($posts->items as $item)
                    <li>{{$item}}</li>
                @endforeach
            </ul>
            </div>
        </div>

  
    
  
        <!-- Pagination -->
        <div class="w3-center w3-padding-32">
        <div class="w3-bar">
            <a class="w3-button w3-black" href="#">1</a>
            <a class="w3-button w3-hover-black" href="#">2</a>
            <a class="w3-button w3-hover-black" href="#">3</a>
            <a class="w3-button w3-hover-black" href="#">4</a>
            <a class="w3-button w3-hover-black" href="#">5</a>
            <a class="w3-button w3-hover-black" href="#">»</a>
        </div>
    </div>


@endsection