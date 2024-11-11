@extends('layouts.app')

@section('title', 'Página de Teste')

@section('content')
    
<div class="card shadow-sm">
    <div class="card-header">
        <h3 class="card-title">Teste 1</h3>
        <div class="card-toolbar">
            <button type="button" class="btn btn-sm btn-light btn-toggle-cards">
                Action
            </button>
        </div>
    </div>
    <div class="card-body">
        123
    </div>
    <div class="card-footer">

    </div>
</div>
    
<div class="card shadow-sm">
    <div class="card-header">
        <h3 class="card-title">Teste 2</h3>
        <div class="card-toolbar">
            <button type="button" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_1">
                Launch demo modal
            </button>
        </div>
        <div class="modal fade" tabindex="-1" id="kt_modal_1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title">Modal title</h3>
        
                        <!--begin::Close-->
                        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                            <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                        </div>
                        <!--end::Close-->
                    </div>
        
                    <div class="modal-body">
                        <p>@include('mainpages.Teste.infos')</p>
                    </div>
        
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
@endsection
@section('footer')
    <script>
        $(document).ready(function(){
            $(".btn-toggle-cards").click(function(){
               $(".card-body").toggle()
            });
        })
    </script>
@endsection