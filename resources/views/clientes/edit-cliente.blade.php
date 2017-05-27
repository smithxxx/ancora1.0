@extends('layouts.app')

@section('content')

    <script>

        jQuery(function ($) {
            $(".data input, .maskdata").mask("99/99/9999");
            $(".telefone input, .masktel").mask("(99)9999-9999");
            $(".celular input, .maskcel").mask("(99)9-9999-9999");
            $(".cpf input, .maskcpf").mask("999.999.999-99");
            $(".cep input, .maskcep").mask("99999-999");
        });

    </script>

    <script>
        $(document).ready(function(){
            $("#myBtn").click(function(){
                $("#myModal").modal();
            });
        });
    </script>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Alteração de Cliente</div>
                    <div class="panel-body">
                        <form method="POST" action="{{ route('cliente.update', $clientes->id), 'update' }}">
                            {{ csrf_field() }}

                            <div class="row">

                                <div class="form-group{{ $errors->has('contrato') ? ' has-error' : '' }} col-md-3">

                                    <label for="contrato">Contrato</label>
                                    <input type="text" class="form-control input-sm" name="contrato" value="{{$clientes->contrato}}" autofocus>

                                </div>
                                @if ($errors->has('contrato'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('contrato') }}</strong>
                                        </span>
                                @endif

                            </div>

                            <div class="row">

                                <div class="form-group{{ $errors->has('nome') ? ' has-error' : '' }} col-md-4">

                                    <label for="nome">Nome</label>
                                    <input id="nome" type="text" class="form-control input-sm" name="nome" value="{{$clientes->nome}}" >

                                    @if ($errors->has('nome'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('nome') }}</strong>
                                        </span>
                                    @endif

                                </div>

                                <div class="form-group{{ $errors->has('cpf') ? ' has-error' : '' }} col-md-2">

                                    <label for="cpf">CPF</label>
                                    <input id="cpf" type="text" class="form-control input-sm maskcpf" name="cpf" value="{{$clientes->cpf}}" >

                                    @if ($errors->has('cpf'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('cpf') }}</strong>
                                        </span>
                                    @endif

                                </div>

                                <div class="form-group{{ $errors->has('identidade') ? ' has-error' : '' }} col-md-2">

                                    <label for="identidade">Identidade</label>
                                    <input id="identidade" type="text" class="form-control input-sm" name="identidade" value="{{$clientes->identidade}}">

                                    @if ($errors->has('identidade'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('identidade') }}</strong>
                                        </span>
                                    @endif

                                </div>

                                <div class="form-group{{ $errors->has('celular') ? ' has-error' : '' }} col-md-2">

                                    <label for="celular">Celular</label>
                                    <input type="text" class="form-control input-sm maskcel" name="celular" value="{{$clientes->celular}}">

                                    @if ($errors->has('celular'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('celular') }}</strong>
                                        </span>
                                    @endif

                                </div>

                                <div class="form-group{{ $errors->has('telefone') ? ' has-error' : '' }} col-md-2">

                                    <label for="telefone">Telefone</label>
                                    <input type="text" class="form-control input-sm masktel" name="telefone" value="{{$clientes->telefone}}">

                                    @if ($errors->has('telefone'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('telefone') }}</strong>
                                        </span>
                                    @endif

                                </div>
                            </div>

                            <div class="row">

                                <div class="form-group{{ $errors->has('endereco') ? ' has-error' : '' }} col-md-4">

                                    <label for="endereco">Endereço</label>
                                    <input type="text" class="form-control input-sm" name="endereco" value="{{$clientes->endereco}}" >

                                    @if ($errors->has('endereco'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('endereco') }}</strong>
                                        </span>
                                    @endif

                                </div>

                                <div class="form-group{{ $errors->has('bairro') ? ' has-error' : '' }} col-md-3">

                                    <label for="bairro">Bairro</label>
                                    <input type="text" class="form-control input-sm" name="bairro" value="{{$clientes->bairro}}">

                                    @if ($errors->has('bairro'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('bairro') }}</strong>
                                        </span>
                                    @endif

                                </div>

                                <div class="form-group{{ $errors->has('cidade') ? ' has-error' : '' }} col-md-2">

                                    <label for="cidade">Cidade</label>
                                    <input type="text" class="form-control input-sm" name="cidade" value="{{$clientes->cidade}}">

                                    @if ($errors->has('cidade'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('cidade') }}</strong>
                                        </span>
                                    @endif

                                </div>

                                <div class="form-group{{ $errors->has('uf') ? ' has-error' : '' }} col-md-1">

                                    <label for="bairro">UF</label>
                                    <select class="form-control input-sm selectpicker" name="uf" value="{{$clientes->uf}}">
                                        <option value="RJ">RJ</option>
                                        <option value="SP">SP</option>
                                        <option value="MG">MG</option>
                                    </select>

                                </div>

                                <div class="form-group{{ $errors->has('cep') ? ' has-error' : '' }} col-md-2">

                                    <label for="cep">CEP</label>
                                    <input type="text" class="form-control input-sm maskcep" name="cep" value="{{$clientes->cep}}">

                                    @if ($errors->has('cep'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('cep') }}</strong>
                                        </span>
                                    @endif

                                </div>

                            </div>

                            <div class="row">

                                <div class="form-group{{ $errors->has('info') ? ' has-error' : '' }} col-md-12">

                                    <label for="info">Informações</label>
                                    <textarea class="form-control input-sm" rows="5" name="info" >{{$clientes->infomacoes}}</textarea>

                                    @if ($errors->has('info'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('info') }}</strong>
                                        </span>
                                    @endif

                                </div>

                            </div>


                            <div class="form-group">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary">
                                        Alterar
                                    </button>

                                    <button type="button" class="btn btn-danger" id="myBtn">Deletar</button>

                                    <a href="{{ route('clientes') }}" class="btn btn-default">
                                        Sair
                                    </a>

                                </div>
                            </div>


                        </form>

                        <!-- Modal -->
                        <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4>Confirmação de Exclusão</h4>
                                    </div>
                                    <div class="modal-body">

                                        <form method="POST" action="{{ route('cliente.destroy', $clientes->id), 'delete' }}">
                                            {{ csrf_field() }}

                                            <button type="submit" class="btn btn-danger">Confirmar</button>
                                            <button type="submit" class="btn btn-default btn-default pull-left" data-dismiss="modal">Voltar</button>

                                        </form>
                                    </div>

                                </div>

                            </div>
                        </div> <!-- Fim Modal -->

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
