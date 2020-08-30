@extends('layouts.base')

@section('content')
<div id="content-wrapper">
            <div class="container-fluid upload-details">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="main-title">
                        <h6>Adição de Cursos</h6>
                     </div>
                  </div>
                  <div class="col-lg-2 pb-1">
                     <div class="imgplace"></div>
                  </div>
                  <div class="col-lg-10">
                     <div class="osahan-title text-right text-danger">O curso está no Modo Rascunho (A publicação leva entre 5-15 dias):</div>
                        <div class="form-group mt-2">
                           <label for="e1">Adiciona a imagem do Curso:</label>
                           <input type="file" placeholder="Título" id="e1" class="form-control">
                        </div>
                  </div>
               </div>
               <hr>
               <form action="{{ route('courses.store') }}" method="POST">
                  @csrf
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="osahan-form">
                           <div class="row">
                              <div class="col-lg-12">
                                 <div class="form-group">
                                    <label for="title">Título do Curso:</label>
                                    <input type="text" id="title" name="title" value="{{ old('title') ? old('title') : '' }}" placeholder="Título" class="form-control">
                                 </div>
                              </div>
                              <div class="col-lg-12">
                                 <div class="form-group">
                                    <label for="description">Descrição:</label>
                                    <textarea rows="3" id="description" name="description" value="{{ old('description') ? old('description') : '' }}" class="form-control">Descrição</textarea>
                                 </div>
                              </div>
                              <div class="col-lg-12">
                                 <div class="form-group">
                                    <label for="objectives">Objectivos do curso:</label>
                                    <textarea rows="3" id="objectives" name="objectives" value="{{ old('objectives') ? old('objectives') : '' }}" class="form-control">Objectivos</textarea>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-lg-3">
                                 <div class="form-group">
                                    <label for="price">Preço do Curso:</label>
                                    <input type="text" placeholder="2500 MZN" id="price" name="price" value="{{ old('price') ? old('price') : '' }}" class="form-control">
                                 </div>
                              </div>
                              <div class="col-lg-3">
                                 <div class="form-group">
                                    <label for="total_videos">Total de vídeos do Curso:</label>
                                    <input type="text" placeholder="55 vídeos" id="total_videos" name="total_videos" value="{{ old('total_videos') ? old('total_videos') : '' }}" class="form-control">
                                 </div>
                              </div>
                              <div class="col-lg-3">
                                 <div class="form-group">
                                    <label for="price">Duração do Curso:</label>
                                    <input type="text" placeholder="1 semana" id="price" name="price" value="{{ old('price') ? old('price') : '' }}" class="form-control">
                                 </div>
                              </div>
                              <div class="col-lg-3">
                                 <div class="form-group">
                                    <label for="channel_id">ID do Canal:</label>
                                    <input type="text" placeholder="10" id="channel_id" name="channel_id" value="{{ old('channel_idice') ? old('channel_id') : '' }}" class="form-control">
                                 </div>
                              </div>
                           </div>
                           <!-- <div class="row">
                              <div class="col-lg-5">
                                 <div class="form-group">
                                    <label for="e7">Tags (13 Tags Remaining)</label>
                                    <input type="text" placeholder="Gaming, PS4" id="e7" class="form-control">
                                 </div>
                              </div>
                              <div class="col-lg-4">
                                 <div class="form-group">
                                    <label for="e8">Cast (Optional)</label>
                                    <input type="text" placeholder="Nathan Drake," id="e8" class="form-control">
                                 </div>
                              </div>
                              <div class="col-lg-3">
                                 <div class="form-group">
                                    <label for="e9">Language in Video (Optional)</label>
                                    <select id="e9" class="custom-select">
                                       <option>English</option>
                                       <option>2</option>
                                       <option>3</option>
                                       <option>4</option>
                                       <option>5</option>
                                    </select>
                                 </div>
                              </div>
                           </div> -->
                           <div class="row ">
                              <div class="col-lg-12">
                                 <div class="main-title">
                                    <h6>Categorias ( Seleccione apenas uma categoria )</h6>
                                 </div>
                              </div>
                           </div>
                           <div class="row category-checkbox ml-2">
                              <!-- checkbox 1col -->
                              @foreach($categories as $category)
                              <!-- <div class="col-12"> -->
                                 <div class="col-lg-2 col-sm-6 col-4 custom-control-inline custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck{{ $category->id }}" name="category_id" value="{{ $category->id }}">
                                    <label class="custom-control-label" for="customCheck{{ $category->id }}">{{ $category->name }}</label>
                                 </div>
                              <!-- </div> -->
                              @endforeach
                        </div>

                        <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                        <div class="osahan-area text-center mt-3">   <!--    style"background: gainsboro"  -->
                           <button class="btn btn-outline-primary">Gravar e continuar</button>
                        </div>
                        <hr>
                        <div class="terms text-center">
                           <p class="mb-0">O seu curso vai ficar no modo de rascunho, só depois de avaliado pelos administradores será publicado <a href="#">Terms of Service</a> and <a href="#">para a nossa comunidade</a>.</p>
                           <p class="hidden-xs mb-0"> A avaliação do curso pode levar até 15 dias.</p>
                        </div>
                     </div>
                  </div>
               </form>
            </div>
            <!-- /.container-fluid -->
            <!-- Sticky Footer -->
         <!-- Sticky Footer -->
         @include('layouts.footer')
         </div>
         <!-- /.content-wrapper -->
@endsection