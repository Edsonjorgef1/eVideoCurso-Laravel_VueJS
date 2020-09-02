@extends('layouts.base')

@section('content')
<div id="content-wrapper">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-8 mx-auto text-center  pt-4 pb-5">
                     <h1><img alt="404" src="{{ asset('assets/img/404.png') }}" class="img-fluid"></h1>
                     <h1>Desculpe! Página não encontrada.</h1>
                     <p class="land">Infelizmente, a página que você está procurando foi movida ou excluída.</p>
                     <div class="mt-5">
                        <a class="btn btn-outline-primary" href="/"><i class="mdi mdi-home"></i> IR PARA A PÁGINA INICIAL</a>
                     </div>
                  </div>
               </div>
            </div>
    <!-- /.container-fluid -->
    <!-- Sticky Footer -->
    @include('layouts.footer')
 </div>
 <!-- /.content-wrapper -->
 @endsections