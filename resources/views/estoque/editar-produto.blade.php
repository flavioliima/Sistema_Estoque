@extends('principal')


@section('conteudo')
    <div class="card mt-1 ml-1 mr-1 border-success">
        <div class="card-header bg-success">
            <h6 class="text-white">Editando Produto</h6>
        </div>

        <div class="card-body">
            <form action="{{route('estoques.update', $produto->id)}}" method="post">
                    @csrf

                    @isset($produto->nome_produto)
                    @method('put')
                    @endisset
                    <div class="row">
                        <div class="form-group col-md-2">
                            <label for="codigo">Código :</label>
                            <input type="text" name="codigo" id="codigo" class="form-control" @isset($produto->codigo) value="{{$produto->codigo}}" @endisset>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="nome_produto">Nome do produto :</label>
                            <input type="text" name="nome_produto" id="nome_produto" class="form-control" @isset($produto->nome_produto) value="{{$produto->nome_produto}}" @endisset>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="fornecedor">Fornecedor :</label>
                            <input type="text" name="fornecedor" id="fornecedor" class="form-control" @isset($produto->fornecedor) value="{{$produto->fornecedor}}" @endisset>
                        </div>
                    </div>

                <div class="row">

                    <div class="form-group col-md-2">
                        <label for="valor">Quantidade :</label>
                        <input type="number" name="quantidade" id="quantidade" class="form-control" @isset($produto->quantidade) value="{{$produto->quantidade}}" @endisset>
                    </div>

                    <div class="form-group col-md-2">
                        <label for="valor">Valor :</label>
                        <input type="number" name="valor" id="valor" class="form-control" @isset($produto->valor) value="{{$produto->valor}}" @endisset>
                    </div>

                    <div class="form-group col-md-2">
                        <label for="data">Data :</label>
                        <input type="date" name="data" id="data" class="form-control" @isset($produto->data) value="{{$produto->data}}" @endisset>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="valor">Tipo Estoque :</label>
                        <select name="id_tipo_estoque" id="id_tipo_estoque" class="form-control">
                            <option value="{{$produto->id_tipo_estoque}}"></option>
                        </select>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="valor">Categoria :</label>
                        <select name="id_categoria" id="id_categoria" class="form-control">
                            <option value="{{$produto->id_categoria}}"></option>
                        </select>
                    </div>

                </div>

                <div class="text-center">
                    <button class="btn btn-success" type="submit"><strong>Editar produto</strong></button>
                </div>

            </form>

        </div>
    </div>
@endsection
@section('script')
    <script src="/js/categoria.js"></script>
    <script src="/js/tipoEstoque.js"></script>
@endsection
