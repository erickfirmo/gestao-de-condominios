<div class="p-0" data-title="{{ $title }}">
    <div class="row">
        <span class="label-text col-md-2 text-md-right">{{ $title }}</span>
        <div class="col-md-10 m-0">
            <div class="flex-container single-gallery">
                @if(count($images))
                    @foreach($images as $key => $image)
                        <div id="parent_image_{{ $image->id }}" title="{{ $image->imagem()->get()[0]->original_name }}" style="background-image: url('/upload/images/{{ $image->imagem()->get()[0]->original_name }}')" class="image-thumbnail" data-image="/upload/images/{{ $image->imagem()->get()[0]->original_name }}">
                            <div class="image-actions">
                                <span id="remove_parent_image_{{ $image->id }}" class="delete-image" title="Remover Imagem">
                                    <i class="fa fa-times"></i>
                                </span>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-sm-12 col-md-12 d-inline">
                        <p>Nenhuma imagem encontrada</p>
                    </div>
                @endif
                <div id="addParentImage" title="Adicionar Imagem" class="image-thumbnail border border-info rounded pointer">
                    <div>
                        <span class="d-block mx-auto text-center text-info" style="font-size: 26px;">
                            <i class="fa fa-plus"></i>
                        </span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<div id="vCenteredModal" class="modal fade">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title">Adicionar Fotos</h5>
            <button type="button" class="close" data-dismiss="modal">×</button> 
         </div>
         <div class="modal-body">
            <div class="row">
                <div class="col-md-12">
                    <button id="addNewImage" class="btn btn-rounded btn-outline-info w-100 mb-4">
                        <i class="fa fa-plus"></i> Carregar foto
                    </button>
                </div>
                
            </div>

            <div class="flex-container modal-gallery rounded">
                @foreach($all_images as $key => $image)
                <div id="gallery_image_{{ $image->id }}" class="image-thumbnail add-parent-image pointer" style="background-image:url('/upload/images/{{ $image->original_name }}')">
                    <div class="bg-selected">
                        <i class="far fa-check-circle"></i>
                    </div>
                </div>
                @endforeach
            </div>


            
            
         </div>
         <div class="modal-footer"> <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button> <button type="button" class="btn btn-success">Adicionar</button> </div>
      </div>
   </div>
</div>
