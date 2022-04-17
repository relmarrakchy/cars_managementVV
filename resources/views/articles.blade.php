@extends('layouts.layout')

@section('title/addFile')
    <title>XuRen - Articles</title>
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
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
                <tr>
                    <td> <a href="/articles/{{$article->id}}"> {{$loop->index + 1}} </a>  </td>
                    <td> {{$article->code}} </td>
                    <td> {{$article->designation}} </td>
                    <td> {{$article->status}} </td>
                    <td> {{$article->categorie}} </td>
                    <td> {{$article->pv}} </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@section('tabs')
    {{--if u wanna add an input / section, increment the id and add to the css file--}}
    <input id="tab1" type="radio" name="tabs" checked>
    <label for="tab1">Identifiant</label>

    <input id="tab2" type="radio" name="tabs">
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
            </form>
        </div>
    </section>

    <section id="content2">
        <div class="myForm">
            <form class="mine" action="" method="post">
                <div class="form-group0">
                <input name="code1" type="text" class="form-control" value="{{(isset($id)) ? $that_article->code : ''}}" placeholder="Code">
                <input name="designation1" type="text" class="form-control" value="{{(isset($id)) ? $that_article->designation : ''}}" placeholder="Designation">
                </div>
                <div class="form-groupSelect">
                    <select name="status1" class="form-select" aria-label="Default select example" placeholder="text">
                        <option selected>Status</option>
                        <option value="Actif">Actif</option>
                        <option value="Inactif">Inactif</option>
                    </select>
                    <select name="categorie1" class="form-select" aria-label="Default select example">
                        <option selected>Categorie</option>
                        <option value="1">Test 1</option>
                        <option value="2">Test 2</option>
                        <option value="3">Test 3</option>
                    </select>
                </div>
                <div class="form-groupPrice">
                    <input name="pv1" type="text" class="form-control" value="{{(isset($id)) ? $that_article->pv : ''}}" placeholder="P.V.">
                    <input name="pa1" type="text" class="form-control" value="{{(isset($id)) ? $that_article->pa : ''}}" placeholder="P.A.">
                    <input name="uv1" type="text" class="form-control" value="{{(isset($id)) ? $that_article->uv : ''}}" placeholder="U.V.">
                    <input name="ua1" type="text" class="form-control" value="{{(isset($id)) ? $that_article->ua : ''}}" placeholder="U.A.">
                </div>
                <button onMouseOver="this.style.color='#2C061F' ; this.style.background='white'; this.style.borderColor='#2C061F'"
                onMouseOut="this.style.color='white' ; this.style.background='#2C061F'" style="float: left; color: white; background: #2C061F; transition-duration: 0.4s; border: solid #2C061F ;" type="submit" class="btn btn-primary ed">MODIFIER</button>
                <button onMouseOver="this.style.color='#2C061F' ; this.style.background='white'; this.style.borderColor='#2C061F'"
                onMouseOut="this.style.color='white' ; this.style.background='#2C061F'" style="float: right; color: white; background: #2C061F; transition-duration: 0.4s; border: solid #2C061F ;" class="btn btn-primary ed">VIDER</button>
            </form>
        </div>
    </section>
@endsection