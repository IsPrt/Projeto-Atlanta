
<label for="fname">Nome:</label>
<input type="text" name="name" class='form-control form-control-solid mb-4' placeholder="Silvio Santos" value="{{ $menu->name ?? old('name') }}" required>
<div>
<label for="fname">Email:</label>
<input type="text" name="email" class='form-control form-control-solid mb-4' placeholder="Exemplo@gmail.com" value="{{ $menu->name ?? old('name') }}" required>
<div>
<label for="fname">Confirmar Email:</label>
<input type="text" class='form-control form-control-solid mb-4' placeholder="Exemplo@gmail.com"  value="{{ $menu->name ?? old('name') }}" required>
<div>
<label for="fname">Senha:</label>
<div class="position-relative mb-3">
    <input class="form-control form-control-lg form-control-solid"
    type="password" placeholder="123456789" name="password" autocomplete="off" required>    

    <!--begin::Visibility toggle-->
    <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
        placeholder="123456789" data-kt-password-meter-control="visibility" >
            <i class="ki-duotone ki-eye-slash fs-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
            <i class="ki-duotone ki-eye d-none fs-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
            
    </span>
    <!--end::Visibility toggle-->
</div>
<div>
<label for="fname">Confirmar Senha:</label>
<div class="position-relative mb-3">
    <input class="form-control form-control-lg form-control-solid"
    type="password" placeholder="123456789" name="confirm_password" autocomplete="off" required>    
    @if(session('message'))
    <p class='text-danger'> {{ session('message') }}</p>
    @endif
    <!--begin::Visibility toggle-->
    <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
        placeholder="123456789" data-kt-password-meter-control="visibility" >
            <i class="ki-duotone ki-eye-slash fs-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
            <i class="ki-duotone ki-eye d-none fs-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
            
    </span>
    <!--end::Visibility toggle-->
</div>

</form>