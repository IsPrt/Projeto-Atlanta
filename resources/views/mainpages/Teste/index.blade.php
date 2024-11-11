@extends('layouts.app')
{{-- carrega o tema --}}

@section('title', 'Tabela de Usuarios')
@section('content')
<div class="row g-15">
    <div class="col-12">
        <div class="card card-stretch card-bordered mb-5">

            <div class="table-responsive">
                <table class="table table-row-bordered gy-5 " id="table">
                    <thead>
                        <tr class="fw-bold fs-6 text-gray-800">
                            <th class="table-sort-desc class="text-start" style="padding-left: 20px;">Nome</th>
                            <th>Email</th>
                            <th>Senha</th>
                            <th>ID</th>
                            <th width="100" class="text-center pe-6">Ações  </th>
                        </tr>
                    </thead>
                    <tbody class="align-middle fs-5">
                        @include('mainpages.Teste._list')
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <button  class="btn btn-light-success" data-bs-toggle="modal" data-bs-target="#modal_create">
                    <i class="bi bi-plus fs-1"></i>
                    Adicionar Usuario</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" tabindex="-1" id="kt_modal_1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Informações dos Usuarios</h3>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body" id="response-ajax">
                <p></p>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" tabindex="-1" id="modal_edit">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Editar Informações</h3>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body" id="response-ajax">
                <p></p>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" tabindex="-1" id="modal_userphone">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Editar Telefones</h3>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body" id="response-ajax">
                <p></p>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" tabindex="-1" id="modal_create">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Informações dos Usuarios</h3>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body">
                <form action="{{ route('users.store') }}" method="POST" id="form-store-user">
                    @csrf       
                    @include('mainpages.teste.forms')
                    <button type="submit" class="btn btn-light-success">Adicionar</button>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
    <script>
        $(document).ready(function(){


            $(document).on('click', '.btn-button-modal', function(){
                var userId = $(this).data('user');
                $.ajax({
                    url: "{{ route('users.show', '') }}/" +userId, // URL de exemplo para obter um post
                    type: 'GET',               // Tipo de requisição
                    success: function(response) { // Função a ser executada em caso de sucesso
                        $('#response-ajax').html(response);
                    }
                });
            });




            $("#form-store-user").submit(function(e){

                e.preventDefault();
                var formData = $(this).serializeArray();
                
                $.ajax({   
                    url: "{{ route('users.store') }}", // URL de exemplo para obter um post
                    type: 'POST',             
                    data: formData,
                    success: function(response) {
                        loadlist();
                        $('#modal_create').modal('hide')
                    }
                })

            });


            $(document).on('submit', "#form-edit-user", function(e){console.log('chegou aqui');
                e.preventDefault();
                var email = $('[name="email"]').val();
                var name = $('[name="name"]').val();
                var password = $('[name="password"]').val();
                var confirm_password = $('[name="confirm_password"]').val();
                $.ajax({
                    url: "{{ route('users.update', '') }}/" +userId,
                    type: 'PUT',
                    data: {_token: @json(csrf_token()),name:name,password:password,email:email,confirm_password:confirm_password},
                    success: function(response) {
                        loadlist();
                        $('#modal_edit').modal('hide')
                    }
                })
            });

            var userId;

            $(document).on('click', '.btn-edit-modal', function(){
                userId = $(this).data('user');
                $.ajax({
                    url: "{{ route('users.edit', '') }}/" +userId,
                    type: 'GET',
                    success: function(response) {
                        loadlist();
                        $('#modal_edit .modal-body').html(response);
                    }
                })
            })
            $(document).on('submit', "#form-edit-user", function(e){console.log('chegou aqui');
                e.preventDefault();
                $.ajax({
                    url: "{{ route('users.update', '') }}/" +userId,
                    type: 'PUT',
                    data: {_token: @json(csrf_token()),name:name,password:password,email:email,confirm_password:confirm_password},
                    success: function(response) {
                        loadlist();
                        $('#modal_edit').modal('hide')
                    }
                })
            });
            
            $(document).on('click', '.btn-button-editphone', function(){
                console.log('chegou aqui');
                phoneId = $(this).data('userphone');
                $.ajax({
                    url: "{{ route('userphone.edit', '') }}/" +phoneId,
                    type: 'GET',
                    success: function(response) {
                        loadlist();
                        $('#modal_userphone .modal-body').html(response);
                    }
                })
            });

            function loadlist(){
                $.ajax({   
                url: "{{ route('users.list') }}", // URL de exemplo para obter um post
                type: 'GET',               // Tipo de requisição
                success: function(response) { // Função a ser executada em caso de sucesso
                    $('#table tbody').html(response)
                }
            });
            }
            

        })

    </script>

@endsection