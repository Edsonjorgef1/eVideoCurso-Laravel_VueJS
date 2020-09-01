@extends('layouts.base')

@section('content')
<div id="content-wrapper">
            <div class="container-fluid pb-0">
               <div class="video-block section-padding">
                  <div class="row">
                     <div class="col-md-8">
                        <div class="single-video-left">
                           <div class="single-video">
                              
                           <div class="row">
          <div class="col-md-8 mx-auto text-center pt-5 pb-5">
             <h3><i class="fas fa-file-upload text-primary" style="font-size: 50px"></i></h3>
             <h4 class="mt-5">Selecione os arquivos de vídeo para enviar</h4>
             <p class="land">ou arraste e solte arquivos de vídeo</p>
             <div class="mt-4">
                <a class="btn btn-outline-primary" href="/upload-video">Upload Video</a>
             </div>
          </div>
       </div>

                           </div>
                           <div class="single-video-title box mb-3">
                              <h2>
                              <a href="#"> {{ $course->title }} </a></h2>
                              <p class="mb-0"><i class="fas fa-eye"></i> 0 visualizações</p>
                           </div>
                           <div class="single-video-author box mb-3">
                              <div class="float-right">
                                 <button class="btn btn-danger" type="button">Subscribe <strong>1.4M</strong></button> 
                                 <button class="btn btn btn-outline-danger" type="button"><i class="fas fa-bell"></i></button>
                              </div>
                              
                              @if(auth()->user()->avatar)
                              <img alt="" class="img-fluid" src="{{ asset('storage'. auth()->user()->avatar) }}"> 
                              @else
                              <img class="img-fluid" src="{{ asset('assets/img/s4.png') }}" alt=""> 
                              @endif

                              <p>
                                 <a href="#"> <strong> {{ auth()->user()->name }}</strong></a> 
                                 <span title="" data-placement="top" data-toggle="tooltip" data-original-title="Verified">
                                 <i class="fas fa-check-circle text-success"></i></span>
                              </p>
                              <small> Publicado em 17 de Agosto de 2020 </small>
                           </div>
                           <div class="single-video-info-content box mb-3">
                              <h6>Preço & Duração:</h6>
                              <p> {{ $course->price }} , {{ $course->duration }} </p>
                              <h6>Categoria :</h6>
                              <p> Aqui eh a categoria ...  </p>
                              <h6>Descrição :</h6>
                              <p> {{ $course->description }} </p>
                              <h6>Objectivos :</h6>
                              <p> {{ $course->objectives }}</p>
                              <h6>Tags :</h6>
                              <p class="tags mb-0">
                                 <span><a href="#">Uncharted 4</a></span>
                                 <span><a href="#">Playstation 4</a></span>
                                 <span><a href="#">Gameplay</a></span>
                                 <span><a href="#">1080P</a></span>
                                 <span><a href="#">ps4Share</a></span>
                                 <span><a href="#">+ 6</a></span>
                              </p>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="single-video-right">
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="adblock">
                                    <div class="img">
                                       Google AdSense<br>
                                       336 x 280
                                    </div>
                                 </div>
                                 <div class="main-title">
                                    <div class="btn-group float-right right-action">
                                       <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                       Sort by <i class="fa fa-caret-down" aria-hidden="true"></i>
                                       </a>
                                       <div class="dropdown-menu dropdown-menu-right">
                                          <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                          <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                          <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                                       </div>
                                    </div>
                                    <h6>Up Next</h6>
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="video-card video-card-list">
                                    <div class="video-card-image">
                                       <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                       <a href="#"><img class="img-fluid" src="{{ asset('assets/img/v1.png') }}" alt=""></a>
                                       <div class="time">3:50</div>
                                    </div>
                                    <div class="video-card-body">
                                       <div class="btn-group float-right right-action">
                                          <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                          </a>
                                          <div class="dropdown-menu dropdown-menu-right">
                                             <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                             <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                             <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                                          </div>
                                       </div>
                                       <div class="video-title">
                                          <a href="#">Here are many variati of passages of Lorem</a>
                                       </div>
                                       <div class="video-page text-success">
                                          Education  <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                                       </div>
                                       <div class="video-view">
                                          1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                       </div>
                                    </div>
                                 </div>
                                 <div class="video-card video-card-list">
                                    <div class="video-card-image">
                                       <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                       <a href="#"><img class="img-fluid" src="{{ asset('assets/img/v2.png') }}" alt=""></a>
                                       <div class="time">3:50</div>
                                    </div>
                                    <div class="video-card-body">
                                       <div class="btn-group float-right right-action">
                                          <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                          </a>
                                          <div class="dropdown-menu dropdown-menu-right">
                                             <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                             <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                             <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                                          </div>
                                       </div>
                                       <div class="video-title">
                                          <a href="#">Duis aute irure dolor in reprehenderit in.</a>
                                       </div>
                                       <div class="video-page text-success">
                                          Education  <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                                       </div>
                                       <div class="video-view">
                                          1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                       </div>
                                    </div>
                                 </div>
                                 <div class="video-card video-card-list">
                                    <div class="video-card-image">
                                       <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                       <a href="#"><img class="img-fluid" src="{{ asset('assets/img/v3.png') }}" alt=""></a>
                                       <div class="time">3:50</div>
                                    </div>
                                    <div class="video-card-body">
                                       <div class="btn-group float-right right-action">
                                          <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                          </a>
                                          <div class="dropdown-menu dropdown-menu-right">
                                             <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                             <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                             <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                                          </div>
                                       </div>
                                       <div class="video-title">
                                          <a href="#">Culpa qui officia deserunt mollit anim</a>
                                       </div>
                                       <div class="video-page text-success">
                                          Education  <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                                       </div>
                                       <div class="video-view">
                                          1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                       </div>
                                    </div>
                                 </div>
                                 <div class="video-card video-card-list">
                                    <div class="video-card-image">
                                       <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                       <a href="#"><img class="img-fluid" src="{{ asset('assets/img/v4.png') }}" alt=""></a>
                                       <div class="time">3:50</div>
                                    </div>
                                    <div class="video-card-body">
                                       <div class="btn-group float-right right-action">
                                          <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                          </a>
                                          <div class="dropdown-menu dropdown-menu-right">
                                             <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                             <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                             <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                                          </div>
                                       </div>
                                       <div class="video-title">
                                          <a href="#">Deserunt mollit anim id est laborum.</a>
                                       </div>
                                       <div class="video-page text-success">
                                          Education  <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                                       </div>
                                       <div class="video-view">
                                          1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                       </div>
                                    </div>
                                 </div>
                                 <div class="video-card video-card-list">
                                    <div class="video-card-image">
                                       <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                       <a href="#"><img class="img-fluid" src="{{ asset('assets/img/v5.png') }}" alt=""></a>
                                       <div class="time">3:50</div>
                                    </div>
                                    <div class="video-card-body">
                                       <div class="btn-group float-right right-action">
                                          <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                          </a>
                                          <div class="dropdown-menu dropdown-menu-right">
                                             <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                             <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                             <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                                          </div>
                                       </div>
                                       <div class="video-title">
                                          <a href="#">Exercitation ullamco laboris nisi ut.</a>
                                       </div>
                                       <div class="video-page text-success">
                                          Education  <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                                       </div>
                                       <div class="video-view">
                                          1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                       </div>
                                    </div>
                                 </div>
                                 <div class="video-card video-card-list">
                                    <div class="video-card-image">
                                       <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                       <a href="#"><img class="img-fluid" src="{{ asset('assets/img/v6.png') }}" alt=""></a>
                                       <div class="time">3:50</div>
                                    </div>
                                    <div class="video-card-body">
                                       <div class="btn-group float-right right-action">
                                          <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                          </a>
                                          <div class="dropdown-menu dropdown-menu-right">
                                             <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                             <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                             <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                                          </div>
                                       </div>
                                       <div class="video-title">
                                          <a href="#">There are many variations of passages of Lorem</a>
                                       </div>
                                       <div class="video-page text-success">
                                          Education  <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                                       </div>
                                       <div class="video-view">
                                          1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                       </div>
                                    </div>
                                 </div>
                                 <div class="adblock mt-0">
                                    <div class="img">
                                       Google AdSense<br>
                                       336 x 280
                                    </div>
                                 </div>
                                 <div class="video-card video-card-list">
                                    <div class="video-card-image">
                                       <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                       <a href="#"><img class="img-fluid" src="{{ asset('assets/img/v2.png') }}" alt=""></a>
                                       <div class="time">3:50</div>
                                    </div>
                                    <div class="video-card-body">
                                       <div class="btn-group float-right right-action">
                                          <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                          </a>
                                          <div class="dropdown-menu dropdown-menu-right">
                                             <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                             <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                             <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                                          </div>
                                       </div>
                                       <div class="video-title">
                                          <a href="#">Duis aute irure dolor in reprehenderit in.</a>
                                       </div>
                                       <div class="video-page text-success">
                                          Education  <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                                       </div>
                                       <div class="video-view">
                                          1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- /.container-fluid -->
            <!-- Sticky Footer -->
            @include('layouts.footer')
         <!-- /.content-wrapper -->
@endsection