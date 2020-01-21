@extends('layout.app')
@section('title', 'Registro')
 
@section('content')
<h1>Criação de contatos</h1>
<hr>
 
<div class="container">
 
 
    @if(isset($customer))
 
        {!! Form::model($customer, ['method' => 'put', 'route' => ['customers.update', $customer->id ], 'class' => 'form-horizontal']) !!}
 
    @else
 
        {!! Form::open(['method' => 'post','route' => 'customers.store', 'class' => 'form-horizontal']) !!}
 
    @endif
 
    <div class="card">
        <div class="card-header">
      <span class="card-title">
          @if (isset($customer))
        Editando contato #{{ $customer->id }}
          @else
        Criando novo contato
          @endif
      </span>
        </div>
        <div class="card-body">
      <div class="form-row form-group">
 
          {!! Form::label('name', 'Nome', ['class' => 'col-form-label col-sm-2 text-right']) !!}
 
          <div class="col-sm-4">
 
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder'=>'Digite seu nome']) !!}
 
          </div>
 
      </div>
      <div class="form-row form-group">
 
          {!! Form::label('email', 'E-mail', ['class' => 'col-form-label col-sm-2 text-right']) !!}
 
          <div class="col-sm-4">
 
        {!! Form::text('email', null, ['class' => 'form-control', 'placeholder'=>'Digite seu e-mail']) !!}
 
          </div>
 
      </div>
      <div class="form-row form-group">
 
          {!! Form::label('phone', 'Telefone', ['class' => 'col-form-label col-sm-2 text-right']) !!}
 
          <div class="col-sm-4">
 
        {!! Form::text('phone', null, ['class' => 'form-control', 'placeholder'=>'Digite seu telefone']) !!}
 
          </div>
 
      </div>
      <div class="form-row form-group">
 
          {!! Form::label('address', 'Endereço', ['class' => 'col-form-label col-sm-2 text-right']) !!}
 
          <div class="col-sm-8">
 
        {!! Form::text('address', null, ['class' => 'form-control', 'placeholder'=>'Digite seu endereço']) !!}
 
          </div>
 
      </div>
      <div class="form-row form-group">
 
          {!! Form::label('facebook', 'Facebook', ['class' => 'col-form-label col-sm-2 text-right']) !!}
 
          <div class="col-sm-10">
 
        {!! Form::url('facebook', null, ['class' => 'form-control', 'placeholder'=>'Coloque aqui a url do seu facebook']) !!}
 
          </div>
 
      </div>
        </div>
        <div class="card-footer">
      {!! Form::button('cancelar', ['class'=>'btn btn-danger btn-sm', 'onclick' =>'windo:history.go(-1);']); !!}
      {!! Form::submit(  isset($customer) ? 'atualizar' : 'criar', ['class'=>'btn btn-success btn-sm']) !!}
 
        </div>
    </div>
 
    {!! Form::close() !!}
 
</div>
@endsection