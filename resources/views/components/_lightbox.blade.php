<div id="myModal" class="custom-modal">
    <span class="close cursor" onclick="closeModal()">&times;</span>
        <div class="modal-content">

        @foreach($images as $image)
        <div class="mySlides">
            <div class="numbertext">{{ $key+1 }} / {{ count($images) }}</div>
            <img src="/upload/images/{{ $image->original_name }}" style="width:100%">
        </div>
        @endforeach

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

        <div class="caption-container">
            <p id="caption"></p>
        </div>

        @foreach($images as $key => $image)
        <div class="mySlides">
            <div class="numbertext">{{ $key+1 }} / {{ count($images) }}</div>
            <img src="/upload/images/{{ $image->original_name }}" style="width:100%">
            <img class="demo cursor" src="/upload/images/{{ $image->original_name }}" style="width:100%" onclick="currentSlide({{ $key+1 }})">
        </div>
        @endforeach
        <div class="column">
        </div>
    </div>
</div>

<!-- onclick="openModal();currentSlide($key+1)" -->
