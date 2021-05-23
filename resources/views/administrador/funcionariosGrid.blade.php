@include('../Components/Header')
@include('../Components/SideB')
<script>
$(document).ready( function () {
    $('#myTable').DataTable( {
        "responsive":true,
        "lengthChange": false,
        "language": {
            "emptyTable": "Não foi encontrado nenhum registo",
            "loadingRecords": "carregando...",
            "zeroRecords": "Não foram encontrados resultados",
            "search": "Pesquisar:",  
            "paginate": {
                            "first": "Primeiro",
                            "previous": "Anterior",
                            "next": "Seguinte",
                            "last": "Último"
                        },  
            "info": "Mostrando os registos _START_ a _END_ em um total de _TOTAL_ registros",
            "infoEmpty": "Mostrando 0 os registos em um total de 0 registros"               
        }
    });
});
const openmodal = (id) => {
    $('#myModal').modal('show');
    $("#valEx").attr("href", "delete/"+id)
}
</script>
<div class="container">
    <div class="d-flex justify-content-end mt-3">
        <a href="home" id="bt" class="custom-but" style="color:black"><i class="fas fa-arrow-left"></i> Voltar</a> 
    </div>
    <div class="d-flex my-3">
            <a href="inserir" id="bt" class="btn btn-primary text-white" style="color:black">Novo Funcionario <i class="fas fa-plus-circle"></i></a> 
    </div>
    @if (Session::has('msg'))
    <div class="{{Session::get('class')}} alert-dismissible fade show" role="alert">
        {{Session::get('msg')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="table-responsive bg-light pb-5 p-3">
        <table id="myTable" class="table table-striped table-bordered dt-responsive nowrap"> 
            <thead>
                <tr>
                    <th>CPF</th>
                    <th>Nome</th>
                    <th>Setor</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ret as $user)
                <tr>
                    <td>{{$user->CPF}}</td>
                    <td>{{$user->Nome}}</td>
                    <td>{{$user->Setor}}</td>
                    <td>
                        <div align="center">
                            <a href="inserir/?Codigo={{$user->Codigo}}" type="submit" class="btn btn-secondary">Editar <i class="fas fa-edit"></i></a>
                            <button type="button" class="btn btn-danger" onclick="openmodal(this.value)"  value="{{$user->Codigo}}">Excluir <i class="fas fa-user-times"></i></button>
                        </div>    
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>  
    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Atenção</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Você tem certeza que deseja excluir este funcionario?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
                <a href="" id="valEx" class="btn btn-primary">Sim</a>
            </div>
            </div>
        </div>
    </div>     
</div>
@include('../Components/Footer')