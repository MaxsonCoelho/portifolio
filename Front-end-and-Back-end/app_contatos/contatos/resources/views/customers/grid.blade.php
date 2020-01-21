@extends('layout.app')
@section('title', 'Listando todos os registros')
 
@section('content')
<h2>Lista de Contatos</h2>
<hr>
<div class="container">
    <table class="table table-bordered table-striped table-sm">
        <thead>
      <tr>
          <th>#</th>
          <th>Nome</th>
          <th>email</th>
          <th>telefone</th>
          <th>endereço</th>
          <th>facebook</th>
          <th>
        <a href="{{ route('customers.create') }}" class="btn btn-info btn-sm" >Novo</a>
          </th>
      </tr>
        </thead>
        <tbody>
      @forelse($customers as $customer)
      <tr>
          <td>{{ $customer->id }}</td>
          <td>{{ $customer->name }}</td>
          <td>{{ $customer->email }}</td>
          <td>{{ $customer->phone }}</td>
          <td>{{ $customer->address }}</td>
          <td>{{ $customer->facebook }}</td>
          <td>
        <a href="{{ route('customers.edit', ['id' => $customer->id]) }}" class="btn btn-warning btn-sm">Editar</a>
        <form method="POST" action="{{ route('customers.destroy', ['id' => $customer->id]) }}" style="display: inline" onsubmit="return confirm('Deseja excluir este registro?');" >
            @csrf
            <input type="hidden" name="_method" value="delete" >
            <button class="btn btn-danger btn-sm">Excluir</button>
        </form>
          </td>
      </tr>
      @empty
      <tr>
          <td colspan="6">Nenhum registro encontrado para listar</td>
      </tr>
      @endforelse
        </tbody>
    </table>
    {{ $customers->links() }}
</div>
@endsection