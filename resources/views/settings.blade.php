@extends('layouts.base')

@section('content')
    <div id="content-wrapper">
       <div class="container-fluid upload-details" style="min-height:800px">
          <div class="row">
             <div class="col-lg-12">
                <div class="main-title">
                   <h6>Definições</h6>
                </div>
             </div>
          </div>
          <form method="POST" action="{{ route('profile.update') }}">
          @csrf
             <div class="row">
                <div class="col-sm-6">
                   <div class="form-group">
                      <label class="control-label">Nome: <span class="required">*</span></label>
                      <input id="name"  placeholder="Insira seu nome" type="text" class="form-control border-form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name">

                     @error('name')
                        <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                        </span>
                     @enderror
                   </div>
                </div>
                <div class="col-sm-6">
                   <div class="form-group">
                      <label class="control-label">Telefone: <span class="required">*</span></label>
                      <input id="telefone"  placeholder="Insira seu telefone" type="number" class="form-control border-form-control @error('telefone') is-invalid @enderror" name="telefone" value="{{ old('telefone') }}" required autocomplete="telefone">

                     @error('name')
                        <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                        </span>
                     @enderror
                   </div>
                </div>
             </div>
             <div class="row">
                <div class="col-sm-6">
                   <div class="form-group">
                      <label class="control-label">Email: <span class="required">*</span></label>
                      <input class="form-control border-form-control " value="" placeholder="iamosahan@gmail.com" disabled="" type="email">
                   </div>
                </div>
                <div class="col-sm-6">
                   <div class="form-group">
                      <label class="control-label">Sexo: <span class="required">*</span></label>
                      <div>
                        <div class="custom-control custom-radio custom-control-inline">
                           <input type="radio" id="gender1" name="gender" class="custom-control-input">
                           <label class="custom-control-label" for="gender1">Masculino</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                           <input type="radio" id="gender2" name="gender" class="custom-control-input">
                           <label class="custom-control-label" for="gender2">Feminino</label>
                        </div>
                     </div>
                   </div>
                </div>
             </div>
             <div class="row">
                <div class="col-sm-12">
                   <div class="form-group">
                      <label class="control-label">Endereço: <span class="required">*</span></label>
                      <textarea name="address" class="form-control border-form-control"> {{ old('address') }}</textarea>
                   </div>
                </div>
             </div>
             <div class="row">
                <div class="col-sm-12 text-right">
                   <button type="button" class="btn btn-danger border-none"> Cancelar </button>
                   <button type="submit" class="btn btn-success border-none"> Actualizar </button>
                </div>
             </div>
          </form>
       </div>
       <!-- /.container-fluid -->           <!-- Sticky Footer -->
            @include('layouts.footer')
         </div>
         <!-- /.content-wrapper -->
@endsection
