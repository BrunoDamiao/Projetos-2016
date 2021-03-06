<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">
      {{ $pessoa->apelido }}
      <span class="pull-right">
        <a href="#" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" title="Editar"> <!-- <i class="fa fa-edit"></i> --> <i class="glyphicon glyphicon-edit"></i> </a>
        <a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Apagar"> <!-- <i class="fa fa-minus-circle"></i> --> <i class="glyphicon glyphicon-minus-sign"></i> </a>
      </span>
    </h3>
  </div>
  <div class="panel-body">
    <h4> {{ $pessoa->nome }} </h4>
    <table class="table table-hover">
    	@foreach($pessoa->telefones as $telefone)
    		<tr>
    			<td>{{ $telefone->descricao }}</td>
    			<!-- <td>{{ $telefone->codpaís }} ({{ $telefone->ddd }}) {{ $telefone->prefixo }} {{ $telefone->sufixo }}</td> -->
          <td>{{ $telefone->numero }}</td>
    			<td>
    				<a href="#" class="text-danger" data-toggle="tooltip" data-placement="top" title="Apagar"> <!-- <i class="fa fa-minus-circle"></i> --> <i class="glyphicon glyphicon-minus-sign"></i> </a>
    			</td>
    		</tr>
    	@endforeach
    </table>
  </div>
</div>