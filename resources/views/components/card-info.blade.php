<div class="col-12 mb-5"> 
    <div class="row">
        <div class="
                     <MD offset-1 col-10 
                    >=MD col-md-4 
                    
                    
                    mb-4 mb-md-0">
            <p class="m-0 fs-5 text-warning">{{ $title }}</p>
            <p class="m-0 fs-4" style="color:#d63384">{{ $entity }}</p>
            <p class="m-0">{{ $time }}</p>
        </div>
        <div class="
                     <MD offset-1 col-10 
                    >=MD offset-md-0 col-md-6
                    
                    
                    
                    
                    ">
            <p class="{{ isset($extraDescription) ? 'mb-0' : ''}}">{{ $description }}</p>

            @isset($extraDescription)
                <br>
                <p class="d-none">{{ $extraDescription }}</p>
            @endisset
        
            @if($btnShowMore)
                <p class="text-warning btnShowMore">
                    <span>Más</span> 
                    <i class="bi bi-chevron-down"></i>
                </p>
            @endif
        </div>
    </div>
</div>