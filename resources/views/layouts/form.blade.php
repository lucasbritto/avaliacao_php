


{{ csrf_field() }}

  <div class="form-group">
    <label for="exampleFormControlInput1">Nome</label>
    <input type="text" class="form-control" name="nome" id="exampleFormControlInput1" value="{{isset($registro->nome) ? $registro->nome : '' }}" placeholder="Digite seu nome">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">CPF</label>
    <input type="text" class="form-control" name="cpf" id="exampleFormControlInput1" value="{{isset($registro->cpf) ? $registro->cpf : '' }}" placeholder="Digite seu CPF">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">RG</label>
    <input type="text" class="form-control" name="rg" id="exampleFormControlInput1" value="{{isset($registro->rg) ? $registro->rg : '' }}" placeholder="Digite seu RG">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Nascimento</label>
    <input type="date" class="form-control" name="nascimento" id="exampleFormControlInput1" value="{{isset($registro->nascimento) ? $registro->nascimento : '' }}">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Telefone</label>
    <input type="text" class="form-control" name="telefone" id="exampleFormControlInput1" value="{{isset($registro->telefone) ? $registro->telefone : '' }}" placeholder="Digite seu Tel">
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Cidade</label>
    
    <select class="form-control" name="cidade" id="exampleFormControlSelect1" value="{{isset($registro->cidade) ? $registro->cidade : '' }}" >
    @if(isset($registro->cidade))
      @if($registro->cidade == 'BA')
        <option selected>BA</option> 
        <option>SP</option>
       @else
        <option selected>SP</option> 
        <option>BA</option>
      @endif

    @else
    <option>BA</option> 
     <option>SP</option>

    @endif
      
           
    </select>
  </div>  

  