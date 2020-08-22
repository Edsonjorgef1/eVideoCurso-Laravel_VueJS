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
          <form>
             <div class="row">
                <div class="col-sm-6">
                   <div class="form-group">
                      <label class="control-label">Nome: <span class="required">*</span></label>
                      <input class="form-control border-form-control" value="" placeholder="Gurdeep" type="text">
                   </div>
                </div>
                <div class="col-sm-6">
                   <div class="form-group">
                      <label class="control-label">Telefone: <span class="required">*</span></label>
                      <input class="form-control border-form-control" value="" placeholder="123 456 7890" type="number">
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
                           <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                           <label class="custom-control-label" for="customRadioInline1">Masculino</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                           <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                           <label class="custom-control-label" for="customRadioInline2">Feminino</label>
                        </div> 
                     </div>
                   </div>
                </div>
             </div>
             <div class="row">
                <div class="col-sm-12">
                   <div class="form-group">
                      <label class="control-label">Endereço: <span class="required">*</span></label>
                      <textarea class="form-control border-form-control"></textarea>
                   </div>
                </div>
             </div>
             <div class="row">
                <div class="col-sm-12 text-right">
                   <button type="button" class="btn btn-danger border-none"> Cancelar </button>
                   <button type="button" class="btn btn-success border-none"> Actualizar </button>
                </div>
             </div>
          </form>
       </div>
       <!-- /.container-fluid -->           <!-- Sticky Footer -->
            @include('layouts.footer')
         </div>
         <!-- /.content-wrapper -->
@endsection