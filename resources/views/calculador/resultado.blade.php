@extends('welcome')

@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr class="text-center">
                        <th scope="col">Codigo</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Prazo Entrega</th>
                        <th scope="col">Valor Mão Própria</th>
                        <th scope="col">Valor Aviso Recebimento</th>
                        <th scope="col">Valor Declarado</th>
                        <th scope="col">Entrega Domiciliar</th>
                        <th scope="col">Entrega Sábado</th>
                        <th scope="col">Mensagem</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-center">
                        <th>{{ $resultado->Codigo }}</th>
                        <th>{{ $resultado->Valor }}</th>
                        <th>{{ $resultado->PrazoEntrega }}</th>
                        <th>{{ $resultado->ValorMaoPropria }}</th>
                        <th>{{ $resultado->ValorAvisoRecebimento }}</th>
                        <th>{{ $resultado->ValorValorDeclarado }}</th>
                        <th>{{ $resultado->EntregaDomiciliar }}</th>
                        <th>{{ $resultado->EntregaSabado }}</th>
                        <th>{{ $resultado->MsgErro }}</th>
                    </tr>
                </tbody>
            </table>

            <div class="text-right">
                <a class="btn btn-primary" href="{{ url('/') }}">Nova Consulta</a>
            </div>
        </div>
    </div>
@endsection
