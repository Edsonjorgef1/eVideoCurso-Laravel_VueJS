<div class="modal fade" id="deleteCategoryModal{{ $category->id }}" tabindex="-1" role="dialog" aria-labelledby="categoryModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Deletar categoria?</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                  </button>
               </div>
               <div class="modal-body">Selecione "Confirmar" se você estiver pronto para apagar a categoria <b> {{ $category->name }} </b> .</div>
                  <div class="modal-footer">
                     <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                     <span>
                           <a class="btn btn-primary" href="{{ route('categories.destroy', ['category' => $category->id]) }}"
                                 onclick="event.preventDefault();
                                          document.getElementById('delete-category-form').submit();">
                                          {{ __('Confirmar') }}
                           </a>

                           <form id="delete-category-form" action="{{ route('categories.destroy', ['category' => $category->id]) }}" method="POST" style="display: none;">
                                 @csrf
                                 @method('DELETE')
                        </form>
                        <!-- </div> -->
                     <!-- <a class="btn btn-primary" href="login.html">Confirmar</a> -->
                  </span>
               </div>
         </div>
      </div>