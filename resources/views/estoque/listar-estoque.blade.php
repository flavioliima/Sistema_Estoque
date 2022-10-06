@extends('principal')

@section('conteudo')
    <div class="card mt-1 ml-1 mr-1 border-info">
        <div class="card-header bg-info">
            <h6 class="text-white">Estoque de produtos</h6>
        </div>

        <div class="card-body text-center">
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <a href="{{route('estoques.create')}}" class="btn btn-success mb-3 font-weight-bold">Adicionar novo produto +</a>

                    @isset($mensagemSucesso)
                        <div class="alert alert-success">
                            {{$mensagemSucesso}}
                        </div>
                    @endisset

                    <thead>
                    <tr>
                        <th scope="col">Nome do produto</th>
                        <th scope="col">Fornecedor</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Data</th>
                        <th scope="col">Tipo Estoque</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Opções</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($estoques as $estoque)
                        <tr>
                            <th scope="row">{{$estoque->nome_produto}}</th>
                            <td>{{$estoque->fornecedor}}</td>
                            <td>{{'R$ '.$estoque->valor_unitario}}</td>
                            <td>{{date('d/m/Y', strtotime($estoque->data))}}</td>
                            <td>{{$estoque->tipoEstoque->descricao}}</td>
                            <td>{{$estoque->categoria->descricao}}</td>

                            <td>
                                <div class="d-flex">
                                    <a href="{{route('estoques.edit', $estoque->id)}}" class="btn btn-warning mr-2">Editar</a>

                                    <form action="{{route('estoques.destroy', $estoque->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger" onclick="f()">Excluir</button>

                                    </form>
                                </div>
                            </td>
                        </tr>
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
