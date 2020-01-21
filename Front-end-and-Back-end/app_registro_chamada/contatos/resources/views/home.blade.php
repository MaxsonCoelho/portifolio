@extends('layouts.app')

@section('content')
  <div class="container">
      <div class="row">
          <div class="col-md-10 col-md-offset-1">
              <painel titulo="Agenda on-line">
              
                <div >
                    <form >
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Envie sua foto</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                        <div class="form-group">
                            <div>
                                <label for="name" >Nome</label>
                                <input type="text" placeholder="Digite seu nome">
                            </div>
                            <div>
                                <label for="email">E-mail</label>
                                <input type="email" placeholder="Digite seu e-mail">
                            </div>
                            <div>
                                <label for="phone">Telefone</label>
                                <input type="tel" placeholder="Digite seu telefone">
                            </div>
                            <div>
                                <label for="address">Endereço</label>
                                <input type="text" placeholder="Digite seu endereço">
                            </div>
                            
                        </div>
                    </form>

                    <tabela-lista 
                    v-bind:titulos="['#','Nome','E-mail','Telefone','Endereço']"
                    v-bind:itens="[[1,'Jorge'],[2,'Teresa']]"
                    criar="#criar" detalhe="#detalhe" editar="#editar" deletar="#deletar" token="47474888"
                    
                    ></tabela-lista>
                </div>

                <div class="row">


                </div>

                

              </painel>
          </div>
      </div>
  </div>
@endsection
