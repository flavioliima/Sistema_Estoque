@extends('principal')


@section('conteudo')

    <div class="card border-danger mt-1 ml-1 mr-1">
        <div class="card-header bg-danger">
            <h6 class="card-title text-white">Saída</h6>
        </div>

        <div class="card-body">
            <form action="{{route('saidas.store')}}" method="post">
                @csrf
                <div class="row">

                    <div class="form-group col-md-3">
                        <label for="descricao">Descricao :</label>
                        <input type="text" id="descricao" name="descricao" class="form-control" required>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="produto">Produto :</label>
                        <select name="id_produto" id="id_produto" class="form-control" required>

                        </select>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="categoria">Categoria :</label>
                        <select name="id_categoria" id="id_categoria" class="form-control" required>
                        </select>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="categoria">Tipo estoque :</label>
                        <select name="id_tipo_estoque" id="id_tipo_estoque" class="form-control" required>

                        </select>
                    </div>

                </div>

                <div class="row">
                    <div class="form-group col-md-2">
                        <label for="data_entrada">Data :</label>
                        <input type="date" id="data_entrada" name="data_entrada" class="form-control" required>
                    </div>

                    <div class="form-group col-md-2">
                        <label for="valor_unitario">Quantidade :</label>
                        <input type="number" id="quantidade" name="quantidade" class="form-control" onblur="calcular()">
                    </div>

                    <div class="form-group col-md-2">
                        <label for="valor_unitario">Valor Unitário :</label>
                        <input type="number" id="valor_unitario" name="valor_unitario" class="form-control" onblur="calcular()">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="categoria">Tipo de movimentação :</label>
                        <select name="tipo_movimentacao" id="tipo_movimentacao" class="form-control" readonly>
                            <option value="Saida" >Saida</option>
                        </select>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="valor_unitario">Subtotal :</label>
                        <input type="number" id="subtotal" name="subtotal" class="form-control" readonly>
                    </div>
                </div>

                <div class="text-center">
                    <button class="btn btn-success font-weight-bold" type="submit">Finalizar entrada</button>
                    <a href="{{route('movimentacao.index')}}" class="btn btn-primary font-weight-bold">Voltar</a>
                </div>
            </form>

            <div class="text-center">

            </div>
        </div>
    </div>

@endsection

@section('script')

    <script>
        function calcular(){
            var quantidade = document.getElementById("quantidade").value;
            var valorUnitario = document.getElementById("valor_unitario").value;
            var var_quant = quantidade * valorUnitario;

            document.getElementById("subtotal").value = var_quant;
        }
    </script>

    <script src="/js/produtos.js"></script>
    <script src="/js/categorias.js"></script>
    <script src="/js/tipoEstoque.js"></script>
@endsection
