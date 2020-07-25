<div class="p-0" data-title="Imagens do Imóvel">
    <div class="row">
        <span class="label-text col-md-2 text-md-right">Fotos do Imóvel</span>
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
                <div id="addImage" title="Adicionar Imagem" class="image-thumbnail border border-info rounded pointer">
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
