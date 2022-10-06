@extends('principal')

@section('conteudo')
    <div class="card mt-1 ml-1 mr-1 border-info">
        <div class="card-header bg-info">
            <h6 class="text-white card-title">Tipos de estoque</h6>
        </div>

        <div class="card-body text-center">
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <a href="{{route('tipoEstoques.create')}}" class="btn btn-success mb-3">Adicionar Novo +</a>

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
                    @foreach($tipoEstoques as $t)
                        <tr>
                            <td scope="row">{{$t->descricao}}</td>
                            <td>
                                {{isset($t->ativo) == 1 ? 'ativado': 'desativado'}}
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

