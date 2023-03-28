@extends('header')

@section('content')

    @if ($errors->any())
        <h3>Houve alguns erros ao processar o formulário</h3>
        <ul>
            @foreach ($errors->all() as $error)
                <li class="alert alert-danger" role="alert">{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <div class="container">
        <main>

            <div class="col-md-12 col-lg-12">
                <h4 class="mb-3">Informações do Produto</h4>
                <form action="{{ route('generate') }}" method="post" class="needs-validation"
                    enctype="multipart/form-data" novalidate>
                    @csrf
                    <div class="row g-3">
                        <div class="col-sm-12">
                            <label for="name" class="form-label">name do Produto</label>
                            <input type="text" class="form-control" name="name" id="" placeholder=""
                                value="" required>
                            <div class="invalid-feedback">
                                O primeiro name válido é obrigatório.
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <label for="linkedin" class="form-label">linkedin do Produto</label>
                            <input type="text" class="form-control" name="linkedin" id="" placeholder=""
                                value="" required>
                            <div class="invalid-feedback">
                                O primeiro linkedin válido é obrigatório.
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <label for="github" class="form-label">github do Produto</label>
                            <input type="text" class="form-control" name="github" id="" placeholder=""
                                value="" required>
                            <div class="invalid-feedback">
                                O primeiro github válido é obrigatório.
                            </div>
                        </div>
                    </div>

                    <hr class="my-4">

                    <button class="w-25 btn btn-primary btn-lg" type="submit">Salvar</button>
            </div>
            </form>
        </main>
    </div>
@stop
