<div class="col-12 mb-5">
    <div class="row gap-4">
        <!-- proyect screenshot -->
        <div class="offset-1 col-10 col-sm-4 col-md-5 p-0 border rounded-4" style="height: 15rem;">
            <img src="{{ $srcImg }}" class="img-fluid rounded-4 w-100 h-100" alt="{{ $altImg }}" style="object-fit: cover;">
        </div>

        <!-- project description -->
        <div class="offset-1 col-10 offset-sm-0 col-sm-6 col-md-5">
            <div class="row">
                <div class="col-12 fs-4 fw-bold p-0 mb-2">{{ $title }}</div>

                <div class="col-12 p-0">
                    <ul class="d-flex flex-row p-0 flex-wrap gap-3">
                        {{ $listTechnologies }}
                    </ul>
                </div>

                <div class="col-12 p-0">
                    <p>{{ $description }}</p>
                </div>

                <div class="col-12 p-0">
                    <a href="{{ $hrefCode }}" class="btn btn-custom rounded-pill me-3 fw-semibold"><i class="bi bi-github me-2"></i>Code</a>
                    <a href="{{ $hrefPreview }}" class="btn btn-custom rounded-pill me-3 fw-semibold">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-link-45deg me-1" viewBox="0 0 16 16">
                            <path d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1 1 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4 4 0 0 1-.128-1.287z" />
                            <path d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243z" />
                        </svg>Preview
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>