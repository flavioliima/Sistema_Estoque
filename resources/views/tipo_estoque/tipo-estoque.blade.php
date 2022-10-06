@extends('principal')


@section('conteudo')
    <div class="card mt-1 ml-1 mr-1 border-success">
        <div class="card-header bg-success">
            <h6 class="text-white">Cadastrar tipo de estoque</h6>
        </div>

        <div class="card-body">
            <form action="{{route('tipoEstoques.store')}}" method="POST">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @csrf
                <div class="row">
                    <div class="form-group col-md-10">
                        <label for="descricao">Descricao :</label>
                        <input type="text" name="descricao" id="descricao" class="form-control" required>
                    </div>

                    <div class="form-group col-md-2">
                        <label for="ativo">Ativo</label>
                        <select name="ativo" id="ativo" class="form-control">
                            <option value="1">Sim</option>
                            <option value="0">Não</option>
                        </select>
                    </div>
                </div>

                    <div class="text-center">
                        <label for=""></label>
                        <button class="btn btn-success mt-2" type="submit"><strong>Cadastrar</strong></button>
                    </div>

            </form>
        </div>
    </div>
@endsection
