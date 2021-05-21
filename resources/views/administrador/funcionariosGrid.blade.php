@include('../Components/Header')
@include('../Components/SideB')
<script>
$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
<div class="container my-5">
    <button id="bt" class="btn btn-primary">Novo Funcionario</button>
    <div class="mt-5 col-12">
        <table id="myTable" class="table table-striped" style="width:100%"> 
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Editar | Excluir</td>
                </tr>
                <tr>
                    <td>Garrett Winters</td>
                    <td>Accountant</td>
                    <td>Editar | Excluir</td>
                </tr>
            </tbody>
        </table>    
    </div>
</div>
@include('../Components/Footer')