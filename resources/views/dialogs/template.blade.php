<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Deseja sair?</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                  </button>
               </div>
               <div class="modal-body">Selecione "Confirmar" se você estiver pronto para encerrar sua sessão actual.</div>
                  <div class="modal-footer">
                     <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                     <span>
                           <a class="btn btn-primary" href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                                          {{ __('Confirmar') }}
                           </a>

                           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                 @csrf
                        </form>
                        <!-- </div> -->
                     <!-- <a class="btn btn-primary" href="login.html">Confirmar</a> -->
                  </span>
               </div>
         </div>
      </div>