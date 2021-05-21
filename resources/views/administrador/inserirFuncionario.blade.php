@include('../Components/Header')
@include('../Components/SideB')
<script>
let tel = 0;
const newTel = () => {
    tel=tel+1
    $('#telDiv').append('<div class="col-12"><label for="Telefone"  class="form-label">Telefone</label><input type="text" name="Telefone['+tel+']" initial class="form-control " id="Telefone"></div>')
}
</script>
<div class="container">
    <div class="d-flex justify-content-end mt-3">
        <a href="{{ URL::previous() }}" id="bt" class="custom-but" style="color:black"><i class="fas fa-arrow-left"></i> Voltar</a> 
    </div>
    {{$Codigo}}
    @if($Codigo > 1)
        <h1>{{$Codigo}}</h1>
    @else
        <h1>t</h1>
    @endif
    <form method="post" action="{{url('cadastrar')}}">
        <button type="submit" id="bt" class="btn btn-primary my-5">Salvar</button>
        <div class="mb-3 row">
            <div class="col-6 mb-4">
                <label for="CPF" class="form-label">CPF</label>
                <input type="text" name="CPF" class="form-control " id="CPF">
            </div>
            <div class="col-6 mb-4">
                <label for="Nome" class="form-label">Nome</label>
                <input type="text" name="Nome" class="form-control " id="Nome">
            </div>
            <div class="col-6 mb-4">
                <label for="CTPS" class="form-label">Carteira de Trabalho</label>
                <input type="text" name="CTPS" class="form-control " id="CTPS">
            </div>
            <div class="col-6 mb-4">
                <label for="Setor" class="form-label">Setor</label>
                <select class="form-select " name="Setor" id="Setor">
                    <option selected value="">Selecione</option>
                    <option value="Vendas">Vendas</option>
                    <option value="Escritório">Escritório</option>
                    <option value="Estoque">Estoque</option>
                    <option value="Administrativo">Administrativo</option>
                </select>
            </div>
        </div>
        <div class="mb-3 row" id="telDiv">
            <div class="col-12">
                <label for="Telefone"  class="form-label">Telefone</label>
                <input type="text" name="Telefone[0]" initial class="form-control " id="Telefone">
            </div>
        </div>
        <div class="d-flex flex-row-reverse">
            <button type="button" onclick="newTel()">Adicionar novo telefone</button>
        </div>
    </form>
</div>
@include('../Components/Footer')