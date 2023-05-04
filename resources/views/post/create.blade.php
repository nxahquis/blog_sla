@extends('layouts.main')
@section('title', 'Produto')
    
@section('content')
    <div id="post-create-container" class="w3-container w3-row">
        <div class="w3-col m3"><br></div>
        <div class="w3-col m6">
        <h1>Crie o seu post</h1>
        <form action="/post" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="title">Post:</label>
                <input type="text" name="title" id="title" class="w3-input">
            </div>
            <div>
                <label for="Image">Imagem:</label>
                <input type="file" name="image" id="image" class="w3-input">
            </div>
            <div>
                <label for="title">Privado</label>
                <select name="private" id="private" class="w3-select">
                    <option value="0">não</option>
                    <option value="1">Sim</option>
                </select>
            </div>
            <div>
                <label for="title">Descrição:</label><br>
                <textarea name="description" id="description" ></textarea>
            </div>
            <div>
                <label for="title">Matéria</label><br>
                <input type="checkbox" class="w3-check" name="items[]" value="Português"> Português
                <input type="checkbox" class="w3-check" name="items[]" value="Matemática"> Matemática
                <input type="checkbox" class="w3-check" name="items[]" value="Biologia"> Biologia
                <input type="checkbox" class="w3-check" name="items[]" value="Quimica"> Quimica
            </div>
            <div>
                <label for="title">Data de termino</label><br>
                <input type="date" name="date" id="date">
            </div>
            <br>
            <input type="submit" value="Criar post">
        </form>
    </div>
    <div class="w3-col m3"><br></div>
    </div>
@endsection