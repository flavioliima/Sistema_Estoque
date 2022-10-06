@extends('principal')


@section('conteudo')
    <div class="card mt-1 ml-1 mr-1 border-success">
        <div class="card-header bg-success">
            <h6 class="text-white card-title">Novo produto</h6>
        </div>

        <div class="card-body">
            <form action="{{route('estoques.store')}}" method="POST">

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
                    <div class="form-group col-md-8">
                        <label for="nome_produto">Nome do produto :</label>
                        <input type="text" name="nome_produto" id="nome_produto" class="form-control" autofocus>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="fornecedor">Fornecedor :</label>
                        <input type="text" name="fornecedor" id="fornecedor" class="form-control" required>
                    </div>
                </div>
                <div class="row">

                    <div class="form-group col-md-3">
                        <label for="data">Data :</label>
                        <input type="date" name="data" id="data" class="form-control">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="valor">Tipo Estoque :</label>
                        <select name="id_tipo_estoque" id="id_tipo_estoque" class="form-control" required>
                        </select>
                    </div>

                    <div class="form-group col-md-5">
                        <label for="valor">Categoria :</label>
                        <select name="id_categoria" id="id_categoria" class="form-control" required>

                        </select>
                    </div>

                </div>

                <div class="text-center">
                    <button class="btn btn-success" type="submit"><strong>Cadastrar produto</strong></button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('script')
    <script src="/js/categorias.js"></script>
    <script src="/js/tipoEstoque.js"></script>
@endsection
