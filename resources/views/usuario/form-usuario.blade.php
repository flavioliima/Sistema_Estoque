@extends('principal')


@section('conteudo')
    <div class="card mt-1 ml-1 mr-1 border-success">
        <div class="card-header bg-success">
            <h6 class="text-white">Novo usuário</h6>
        </div>

        <div class="card-body">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{route('usuarios.store')}}" method="post">
                @csrf
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="nome">Nome :</label>
                        <input type="text" id="nome" name="nome" class="form-control">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="Teste">Email :</label>
                        <input type="email" id="email" name="email" class="form-control">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="password">Senha :</label>
                        <input type="password" id="password" name="password" class="form-control">
                    </div>
                </div>

                <div class="text-center">
                    <button class="btn btn-success" type="submit"><strong>Criar Usuário</strong></button>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('script')

@endsection
