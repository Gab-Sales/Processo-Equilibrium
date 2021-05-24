@include('../Components/Header')
@include('../Components/SideB')

<script>
let tel ={{isset($ret) && count($ret->contatos) > 0 ? count($ret->contatos) : 0 }}
const newTel = () => {
    tel=tel+1
    $('#telDiv').append('<div class="col-12"><label for="Telefone"  class="form-label">Telefone</label><input name="Telefone['+tel+'][cod]" value="0" hidden><input type="text" onkeypress="return onlynumber();" maxlength="15" name="Telefone['+tel+'][tel]" initial class="form-control " id="Telefone"></div>')
}
function onlynumber(evt) {
   var theEvent = evt || window.event;
   var key = theEvent.keyCode || theEvent.which;
   key = String.fromCharCode( key );
   var regex = /^[0-9.]+$/;
   if( !regex.test(key) ) {
      theEvent.returnValue = false;
      if(theEvent.preventDefault) theEvent.preventDefault();
   }
}
</script>
<div class="container">
    <div class="d-flex justify-content-end mt-3">
        <a href="../funcionarios" id="bt" class="custom-but" style="color:black"><i class="fas fa-arrow-left"></i> Voltar</a> 
    </div>
    @if (Session::has('msg'))
    <div class="{{Session::get('class')}} alert-dismissible fade show" role="alert">
        {{Session::get('msg')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <form method="post" class="pb-5" action="{{url('cadastrar')}}">
        <button type="submit" id="bt" class="btn btn-primary my-3">Salvar <i class="fas fa-location-arrow"></i></button>
        <div class="mb-3 row">
            @if(isset($ret->Codigo))
            <div class="col-12 mb-4">
                <label for="Codigo" class="form-label">Codigo Usuario</label>
                <input type="text" name="Codigo" class="form-control " id="Codigo" value="{{$ret->Codigo}}" readonly>
            </div>
            @endif
            <div class="col-6 mb-4">
                <label for="CPF" class="form-label">CPF</label>
                <input type="text" name="CPF" class="form-control" onkeypress="return onlynumber();" maxlength="11" id="CPF" value="{{$ret->CPF ?? ''}}" required>
            </div>
            <div class="col-6 mb-4">
                <label for="Nome" class="form-label">Nome</label>
                <input type="text" name="Nome" class="form-control" id="Nome" maxlength="120" value="{{$ret->Nome  ?? ''}}" required>
            </div>
            <div class="col-6 mb-4">
                <label for="CTPS" class="form-label">Carteira de Trabalho</label>
                <input type="text" name="CTPS" class="form-control" id="CTPS" value="{{$ret->CTPS  ?? ''}}" required>
            </div>
            <div class="col-6 mb-4">
                <label for="Setor" class="form-label">Setor</label>
                <select class="form-select " name="Setor" id="Setor" required>
                    <option selected value="{{$ret->Setor  ?? ''}}">{{$ret->Setor  ?? 'Selecione'}}</option>
                    <option value="Vendas">Vendas</option>
                    <option value="Escritório">Escritório</option>
                    <option value="Estoque">Estoque</option>
                    <option value="Administrativo">Administrativo</option>
                </select>
            </div>
        </div>
        <div class="mb-3 row" id="telDiv">
        @if(isset($ret->contatos))
            @foreach ($ret->contatos as $key => $val)
                <div class="col-12">
                    <label for="Telefone"  class="form-label">Telefone {{$key+1}}</label>
                    <input name="Telefone[{{$key}}][cod]" value="{{$val->Codigo}}" hidden>
                    <input type="text" name="Telefone[{{$key}}][tel]" onkeypress="return onlynumber();" maxlength="15" class="form-control " id="Telefone" value="{{$val->Telefone}}">
                </div>
            @endforeach
        @endif
        </div>
        <div class="d-flex flex-row-reverse">
            <button type="button" class="btn btn-success" onclick="newTel()">Adicionar telefone <i class="fas fa-plus"></i></button>
        </div>
    </form>
</div>
@include('../Components/Footer')