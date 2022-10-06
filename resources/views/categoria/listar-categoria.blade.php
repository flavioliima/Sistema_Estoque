@extends('principal')

@section('conteudo')
    <div class="card mt-1 ml-1 mr-1 border-info">
        <div class="card-header bg-info">
            <h6 class="text-white">Listagem de categorias</h6>
        </div>

        <div class="card-body text-center">
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <a href="{{route('categorias.create')}}" class="btn btn-success mb-3 font-weight-bold">Adicionar novo +</a>

                    @isset($mensagemSucesso)
                        <div class="alert alert-success">
                            {{$mensagemSucesso}}
                        </div>
                    @endisset

                    <thead>
                    <tr>
                        <th scope="col">Descricao</th>
                        <th scope="col">Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categorias as $c)
                        <tr>
                            <td scope="row">{{$c->descricao}}</td>
                            <td>
                                {{isset($c->ativo) == 1 ? 'ativado': 'desativado'}}
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

