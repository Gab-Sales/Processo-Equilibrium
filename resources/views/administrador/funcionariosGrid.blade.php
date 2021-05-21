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
</script>
<div class="container">
    <div class="d-flex justify-content-end mt-3">
        <a href="{{ URL::previous() }}" id="bt" class="custom-but" style="color:black"><i class="fas fa-arrow-left"></i> Voltar</a> 
    </div>
    <div class="d-flex my-5">
        <form method="post" action="inserir">
            <button href="" id="bt" class="btn btn-primary text-white" style="color:black">Novo Funcionario</button> 
        </form>
    </div>
    <div class="table-responsive">
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
                <tr>
                    <td>03835093274</td>
                    <td>Gabriel Sales</td>
                    <td>Desenvolvimento</td>
                    <td>
                        <div class="row col-12">
                            <div class="col-lg-6" align="right">
                                <form method="post" action="inserir">
                                    <button class="btn btn-secondary" value="5">Editar</button>
                                </form>   
                            </div> 
                            <div class="col-lg-6">    
                                <button class="btn btn-danger" onclick="alert('Excluir '+this.value)" value="5">Excluir</button>
                            </div>    
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        </div>    
</div>
@include('../Components/Footer')