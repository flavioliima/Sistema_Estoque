@extends('principal')

@section('conteudo')
    <div class="card mt-1 ml-1 mr-1 border-info">
        <div class="card-header bg-info">
            <h6 class="text-white card-title">Entrada / Saída</h6>
        </div>

        <div class="card-body text-center">
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <div class="text-center">
                        <a href="{{route('entradas.create')}}" class="btn btn-success mb-3 mr-4 font-weight-bold">Movimentar Entrada <i class="fas fa-angle-double-down"></i></a>
                        <a href="{{route('saidas.create')}}" class="btn btn-danger mb-3 font-weight-bold">Movimentar Saída <i class="fas fa-angle-double-up"></i></a>
                    </div>


                    @isset($mensagemSucesso)
                        <div class="alert alert-success">
                            {{$mensagemSucesso}}
                        </div>
                    @endisset

                    <thead>
                    <tr>
                        <th scope="col">Descricao</th>
                        <th scope="col">Produto</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Tipo estoque</th>
                        <th scope="col">Quantidade</th>
                        <th scope="col">Valor unitário</th>
                        <th scope="">Tipo movimentação</th>
                        <th scope="col">Subtotal</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($movimentacao as $m)
                        @if($m->tipo_movimentacao == 'Entrada')
                        <tr class="bg-success text-white">
                            <th scope="row">{{$m->descricao}}</th>
                            <td>{{$m->produto->nome_produto}}</td>
                            <td>{{$m->categoria->descricao}}</td>
                            <td>{{$m->tipoEstoque->descricao}}</td>
                            <td>{{$m->quantidade}}</td>
                            <td>R$ {{$m->valor_unitario}}</td>
                            <td >{{$m->tipo_movimentacao}}</td>
                            <td>R$ {{$m->subtotal}}</td>
                        </tr>
                        @endif

                        @if($m->tipo_movimentacao == 'Saida')
                            <tr class="bg-danger text-white">
                                <th scope="row">{{$m->descricao}}</th>
                                <td>{{$m->produto->nome_produto}}</td>
                                <td>{{$m->categoria->descricao}}</td>
                                <td>{{$m->tipoEstoque->descricao}}</td>
                                <td>{{$m->quantidade}}</td>
                                <td>R$ {{$m->valor_unitario}}</td>
                                <td >{{$m->tipo_movimentacao}}</td>
                                <td>R$ {{$m->subtotal}}</td>
                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@section('script')
    <script>
        function f() {
            if (confirm('Deseja realmente excluir o produto?')){

            } else
                event.preventDefault();
        }
    </script>
@endsection

@endsection
