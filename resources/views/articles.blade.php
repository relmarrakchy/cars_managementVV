@extends('layouts.layout')

@section('title/addFile')
    <title>XManager - Articles</title>
@endsection

@section('articles')
    active
@endsection

@section('filter-form')
    <form class="mine">
        <div class="form-group0">
            <input type="text" class="form-control" placeholder="Code">
            <input type="text" class="form-control" placeholder="Designation">
        </div>
        <div class="form-groupSelect">
            <select class="form-select" aria-label="Default select example" placeholder="text">
                <option selected>Status</option>
                <option value="Actif">Actif</option>
                <option value="Inactif">Inactif</option>
            </select>
            <select class="form-select" aria-label="Default select example">
                <option selected>Categorie</option>
                <option value="Test 1">Test 1</option>
                <option value="Test 2">Test 2</option>
                <option value="Test 3">Test 3</option>
            </select>
        </div>
    </form>
@endsection

@section('table')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Code</th>
                <th scope="col">Designation</th>
                <th scope="col">Status</th>
                <th scope="col">Categorie</th>
                <th scope="col">P.V.</th>
                <th scope="col">P.A.</th>
                <th scope="col">U.V.</th>
                <th scope="col">U.A.</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
                <tr>
                    <td> <a href="/articles/{{$article->id}}"> {{$loop->index + 1}} </a>  </td>
                    <td> {{$article->code}} </td>
                    <td> {{$article->designation}} </td>
                    <td id="status"> {{$article->status}} </td>
                    <td> {{$article->categorie}} </td>
                    <td> {{$article->pv}} </td>
                    <td> {{$article->pa}} </td>
                    <td> {{$article->uv}} </td>
                    <td> {{$article->ua}} </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@section('tabs')
    <input id="tab1" type="radio" name="tabs" {{isset($id) ? "" : "checked"}}>
    <label for="tab1">Identifiant</label>

    <input id="tab2" type="radio" name="tabs" {{isset($id) ? "checked" : "disabled"}}>
    <label for="tab2">Gestion</label>

    <section id="content1">
        <div class="myForm">
            <form class="mine" action="{{route('article.store')}}" method="post">
                @csrf
                @method('post')
                <div class="form-group0">
                    <input name="code" type="text" class="form-control" placeholder="Code">
                    <input name="designation" type="text" class="form-control" placeholder="Designation">
                </div>
                <div class="form-groupSelect">
                    <select name="status" class="form-select" aria-label="Default select example" placeholder="text">
                        <option selected>Status</option>
                        <option value="Actif">Actif</option>
                        <option value="Inactif">Inactif</option>
                    </select>
                    <select name="categorie" class="form-select" aria-label="Default select example">
                        <option selected>Categorie</option>
                        <option value="Test 1">Test 1</option>
                        <option value="Test 2">Test 2</option>
                        <option value="Test 3">Test 3</option>
                    </select>
                </div>
                <div class="form-groupPrice">
                    <input name="pv" type="text" class="form-control"   placeholder="P.V.">
                    <input name="pa" type="text" class="form-control"   placeholder="P.A.">
                    <input name="uv" type="text" class="form-control"   placeholder="U.V.">
                    <input name="ua" type="text" class="form-control"   placeholder="U.A.">
                </div>
                <button onMouseOver="this.style.color='#2C061F' ; this.style.background='white'; this.style.borderColor='#2C061F'"
                onMouseOut="this.style.color='white' ; this.style.background='#2C061F'" style="color: white; background: #2C061F; transition-duration: 0.4s; border: solid #2C061F ;" type="submit" class="btn btn-primary ed">AJOUTER</button>
                <br>
                {{session('msg')}}
            </form>
        </div>
    </section>

    <section id="content2">
        <div class="myForm">
            <form class="mine" action="{{isset($id) ? route('article.update', ['id' => $id]) : ''}}" method="post">
                @csrf
                @method('put')
                <div class="form-group0">
                <input id="code" name="code1" type="text" class="form-control" value="{{(isset($id)) ? $that_article->code : ''}}" placeholder="Code">
                <input id="designation" name="designation1" type="text" class="form-control" value="{{(isset($id)) ? $that_article->designation : ''}}" placeholder="Designation">
                </div>
                <div class="form-groupSelect">
                    <select id="status" name="status1" class="form-select" aria-label="Default select example" placeholder="text">
                        <option>Status</option>
                        <option value="Actif" @if (isset($id) && $that_article->status == "Actif")
                            selected
                        @endif>Actif</option>
                        <option value="Inactif" @if (isset($id) && $that_article->status == "Inactif")
                            selected
                        @endif>Inactif</option>
                    </select>
                    <select id="categorie" name="categorie1" class="form-select" aria-label="Default select example">
                        <option>Categorie</option>
                        <option value="Test 1" @if (isset($id) && $that_article->categorie == "Test 1")
                            selected
                        @endif>Test 1</option>
                        <option value="Test 2" @if (isset($id) && $that_article->categorie == "Test 2")
                            selected
                        @endif>Test 2</option>
                        <option value="Test 3" @if (isset($id) && $that_article->categorie == "Test 3")
                            selected
                        @endif>Test 3</option>
                    </select>
                </div>
                <div class="form-groupPrice">
                    <input id="pv" name="pv1" type="text" class="form-control" value="{{(isset($id)) ? $that_article->pv : ''}}" placeholder="P.V.">
                    <input id="pa" name="pa1" type="text" class="form-control" value="{{(isset($id)) ? $that_article->pa : ''}}" placeholder="P.A.">
                    <input id="uv" name="uv1" type="text" class="form-control" value="{{(isset($id)) ? $that_article->uv : ''}}" placeholder="U.V.">
                    <input id="ua" name="ua1" type="text" class="form-control" value="{{(isset($id)) ? $that_article->ua : ''}}" placeholder="U.A.">
                </div>
                <button 
                    onMouseOver="this.style.color='#2C061F' ; this.style.background='white'; this.style.borderColor='#2C061F'"
                    onMouseOut="this.style.color='white' ; this.style.background='#2C061F'" 
                    style="float: left; color: white; background: #2C061F; transition-duration: 0.4s; border: solid #2C061F ;" 
                    type="submit" class="btn btn-primary ed">
                    MODIFIER
                </button>
                <button 
                    onMouseOver="this.style.color='#2C061F' ; this.style.background='white'; this.style.borderColor='#2C061F'"
                    onMouseOut="this.style.color='white' ; this.style.background='#2C061F'" 
                    style="float: left; margin-left : 2px; color: white; background: #2C061F; transition-duration: 0.4s; border: solid #2C061F ;" 
                    class="btn btn-primary ed" id="vider_btn" onclick="vider()"
                    type="button">
                    VIDER
                </button>
            </form>
            <form action="{{isset($id) ? route('article.destroy', ['id' => $id]) : ''}}" method="post">
                @csrf
                @method('delete')
                <button 
                    onMouseOver="this.style.color='#2C061F' ; this.style.background='white'; this.style.borderColor='#2C061F'"
                    onMouseOut="this.style.color='white' ; this.style.background='#2C061F'" 
                    style="float: right; color: white; background: #2C061F; transition-duration: 0.4s; border: solid #2C061F ;" 
                    type="submit" class="btn btn-primary ed">
                    SUPPRIMER
                </button>
            </form>
        </div>
    </section>
@endsection

@section('jsFiles')
    <script>
        let e = document.querySelector('#status')
        for (let index = 0; index < e.length; index++) {
            if (e.value == "Actif") {
                e.style.color = "green"
            }
        }
    </script>
@endsection