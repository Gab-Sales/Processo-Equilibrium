@include('../Components/Header')
        <div class="container">
            <div class="row p-0 h-75">      
                <div class="my-auto">
                    <div class="col-sm-12 col-lg-6 offset-lg-3 text-white shadow-lg bg-body rounded" align="center">
                        <form method="post" action="{{url('login')}}">
                            <div class="card card-block p-4 bg-dark">
                            <!-- <div class="card card-block p-4 " style="background:linear-gradient(180deg, rgba(99,53,162,1) 11%, rgba(104,25,156,1) 41%, rgba(36,2,25,1) 88%);border:none!important"> -->
                                <h4>Gerenciamento Interno</h4>
                                <div align="left" class="my-3">
                                    <label>Usuário</label>
                                    <input type="text" name="Matricula" class="form-control">
                                </div>
                                <div align="left" class="my-3">
                                    <label>Senha</label>
                                    <input type="text" name="Cartao" class="form-control">
                                </div> 
                                <div class="my-3">                      
                                    <button class="btn btn-primary p-4 col-12 col-md-12 col-lg-5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"></path>
                                        </svg>
                                        <br>
                                        Entrar
                                    </button>
                                </div>       
                             </div>
                        </form>    
                    </div>           
                </div>
            </div>
        </div>  
@include('../Components/Footer')