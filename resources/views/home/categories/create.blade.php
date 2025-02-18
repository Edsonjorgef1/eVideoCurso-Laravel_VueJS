@extends('layouts.base')

@section('content')
    <div id="content-wrapper">
       <div class="container-fluid upload-details" style="min-height:800px">
          <div class="row">
             <div class="col-lg-12">
                <div class="main-title">
                   <h6>Nova Categoria</h6>
                </div>
             </div>
          </div>

            @if (session('message'))
               @include('alerts.success-message')
            @endif
          <form method="POST" action="{{ route('categories.store') }}" enctype="multipart/form-data">
          @csrf
          <div class="row">
                <div class="col-sm-6">
                  <img class="rounded-circle avatar-image" src="{{ asset('assets/img/s2.png') }}" style="heigh:130px; width: 130px">
                </div>
                <div class="col-sm-12 mt-4">
                   <div class="form-group">
                      <label class="control-label">Carregar a imagem da categoria: <span class="required">*</span></label>
                      <input type="file" enctype="multipart/form-data" class="form-control avatar-input border-form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') ? old('image') : '' }}">

                     @error('image')
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
                      <label class="control-label">Nome da categoria: <span class="required">*</span></label>
                      <input id="name"  placeholder="Insira o nome da categoria" type="text" class="form-control border-form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') ? old('name') : '' }}" required autocomplete="name">

                     @error('name')
                        <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                        </span>
                     @enderror
                   </div>
                </div>
             </div>
             <div class="row">
                <div class="col-sm-12">
                   <div class="form-group">
                      <label class="control-label">Descrição da categoria: <span class="required" >*</span></label>
                      <textarea name="description" class="form-control border-form-control" rows="4">{{ old('description') ? old('description') : ''}}</textarea>
                   </div>
                </div>
             </div>
             <div class="row">
                <div class="col-sm-12 text-right">
                   <a href="/categories" class="btn btn-primary border-none"> Voltar </a>
                   <a href="/categories/create" class="btn btn-danger border-none"> Cancelar </a>
                   <button type="submit" class="btn btn-success border-none"> Adicionar </button>
                </div>
             </div>
          </form>
       </div>
       <!-- /.container-fluid -->           <!-- Sticky Footer -->
            @include('layouts.footer')
         </div>
         <!-- /.content-wrapper -->
@endsection
