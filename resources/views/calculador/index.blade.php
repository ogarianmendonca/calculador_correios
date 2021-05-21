@extends('index')

@section('content')
    <div class="text-center">
        <h2>Preencha os campos abaixo</h2>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <form method="POST" action="calc-preco-prazo">
                @csrf

                <div class="row">
                    <div class="col-6">
{{--                        <div class="row">--}}
{{--                            <div class="col-10">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="nCdEmpresa">--}}
{{--                                        Código Empresa <span class="text-danger">*</span>--}}
{{--                                    </label>--}}
{{--                                    <input type="text" class="form-control" id="nCdEmpresa" name="nCdEmpresa">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-2">--}}
{{--                                <a tabindex="0"--}}
{{--                                   class="btn-circle"--}}
{{--                                   role="button"--}}
{{--                                   data-toggle="popover"--}}
{{--                                   data-trigger="focus"--}}
{{--                                   data-content="Obrigatório informar o Código Empresa.">--}}
{{--                                    <span class="material-icons">info</span>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        <div class="row">
                            <div class="col-10">
                                <div class="form-group">
                                    <label for="sCepOrigem">
                                        Cep Origem <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" id="sCepOrigem" name="sCepOrigem">
                                </div>
                            </div>
                            <div class="col-2">
                                <a tabindex="0"
                                   class="btn-circle"
                                   role="button"
                                   data-toggle="popover"
                                   data-trigger="focus"
                                   data-content="CEP de Origem sem hífen. Exemplo: 05311900">
                                    <span class="material-icons">info</span>
                                </a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-10">
                                <div class="form-group">
                                    <label for="nCdServico">
                                        Código Serviço <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" id="nCdServico" name="nCdServico">
                                </div>
                            </div>
                            <div class="col-2">
                                <a tabindex="0"
                                   class="btn-circle"
                                   role="button"
                                   data-toggle="popover"
                                   data-trigger="focus"
                                   data-content="Para clientes com contrato: Consultar os códigos no seu contrato.
                                        (04014 SEDEX à vista; 04510 PAC à vista; 04782 SEDEX 12 ( à vista);
                                        04790 SEDEX 10 (à vista); 04804 SEDEX Hoje à vista)">
                                    <span class="material-icons">info</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
{{--                        <div class="row">--}}
{{--                            <div class="col-10">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="sDsSenha">--}}
{{--                                        Senha <span class="text-danger">*</span>--}}
{{--                                    </label>--}}
{{--                                    <input type="password" class="form-control" id="sDsSenha" name="sDsSenha">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-2">--}}
{{--                                <a tabindex="0"--}}
{{--                                   class="btn-circle"--}}
{{--                                   role="button"--}}
{{--                                   data-toggle="popover"--}}
{{--                                   data-trigger="focus"--}}
{{--                                   data-content="Obrigatório informar a Senha">--}}
{{--                                    <span class="material-icons">info</span>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        <div class="row">
                            <div class="col-10">
                                <div class="form-group">
                                    <label for="sCepDestino">
                                        Cep Destino <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" id="sCepDestino" name="sCepDestino">
                                </div>
                            </div>
                            <div class="col-2">
                                <a tabindex="0"
                                   class="btn-circle"
                                   role="button"
                                   data-toggle="popover"
                                   data-trigger="focus"
                                   data-content="CEP de Destino sem hífen. Exemplo: 05311900">
                                    <span class="material-icons">info</span>
                                </a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-10">
                                <div class="form-group">
                                    <label for="nVlPeso">
                                        Peso da encomenda <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" id="nVlPeso" name="nVlPeso">
                                </div>
                            </div>
                            <div class="col-2">
                                <a tabindex="0"
                                   class="btn-circle"
                                   role="button"
                                   data-toggle="popover"
                                   data-trigger="focus"
                                   data-content="Peso da encomenda, incluindo sua embalagem. O
                                        peso deve ser informado em quilogramas. Se o
                                        formato for Envelope, o valor máximo permitido será 1
                                        kg.">
                                    <span class="material-icons">info</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="nCdFormato">
                                Formato da encomenda <span class="text-danger">*</span>
                            </label>
                            <select class="form-control" id="nCdFormato" name="nCdFormato">
                                <option>Selecionar</option>
                                <option value="1">Formato caixa/pacote</option>
                                <option value="2">Formato rolo/prisma</option>
                                <option value="3">Envelope</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="nVlComprimento">
                                Comprimento da encomenda <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" id="nVlComprimento" name="nVlComprimento">
                        </div>
                    </div>

                    <div class="col-6" style="margin-top: 5px;">
                        <div class="form-group">
                            <label for="nVlAltura">
                                Altura da encomenda <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" id="nVlAltura" name="nVlAltura">
                        </div>

                        <div class="form-group">
                            <label for="nVlLargura">
                                Largura da encomenda <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" id="nVlLargura" name="nVlLargura">
                        </div>

{{--                        <div class="form-group">--}}
{{--                            <label for="nVlDiametro">--}}
{{--                                Diâmetro da encomenda--}}
{{--                            </label>--}}
{{--                            <input type="text" class="form-control" id="nVlDiametro" name="nVlDiametro">--}}
{{--                        </div>--}}
                    </div>
                </div>

                <hr>
                <div class="row">
                    <div class="col-7">
                        <div class="row">
                            <div class="col-10">
                                <div class="form-group">
                                    <label for="nVlValorDeclarado">
                                        Encomenda será entregue com o serviço adicional valor declarado? <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" id="nVlValorDeclarado" name="nVlValorDeclarado">
                                </div>
                            </div>
                            <div class="col-2">
                                <a tabindex="0"
                                   class="btn-circle"
                                   role="button"
                                   data-toggle="popover"
                                   data-trigger="focus"
                                   data-content="Neste campo deve ser
                                        apresentado o valor declarado desejado, em Reais. Se não optar pelo
                                        serviço informar zero.">
                                    <span class="material-icons">info</span>
                                </a>
                            </div>
                        </div>

                       <div class="row">
                           <div class="col-10">
                               <div class="form-group">
                                   <label for="sCdMaoPropria">
                                       Encomenda será entregue com o serviço adicional mão própria? <span class="text-danger">*</span>
                                   </label>
                                   <select class="form-control" id="sCdMaoPropria" name="sCdMaoPropria">
                                       <option>Selecionar</option>
                                       <option value="S">Sim</option>
                                       <option value="N">Não</option>
                                   </select>
                               </div>

                               <div class="form-group">
                                   <label for="sCdAvisoRecebimento">
                                       Encomenda será entregue com o serviço adicional aviso de recebimento? <span class="text-danger">*</span>
                                   </label>
                                   <select class="form-control" id="sCdAvisoRecebimento" name="sCdAvisoRecebimento">
                                       <option>Selecionar</option>
                                       <option value="S">Sim</option>
                                       <option value="N">Não</option>
                                   </select>
                               </div>
                           </div>
                       </div>
                    </div>
                </div>

                <div class="text-right">
                    <button class="btn btn-primary" type="submit">Calcular</button>
                </div>
            </form>
        </div>
    </div>
@endsection
