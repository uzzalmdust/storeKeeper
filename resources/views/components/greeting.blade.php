<div class="row mb-3 pb-1">
    <div class="col-12">
        <div class="d-flex align-items-lg-center flex-lg-row flex-column">
            <div class="flex-grow-1">
                <!-- <h4 class="fs-16 mb-1">Good Morning, Anna!</h4> -->
                <!-- <p class="text-muted mb-0"> -->
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif
                <!-- </p> -->
            </div>
            <div class="mt-3 mt-lg-0">

                <div class="row g-3 mb-0 align-items-center">

                    <!--end col-->
                    <div class="col-auto">
                        <a class="btn btn-soft-primary" href="{{ route('products.create') }}">
                            <i class="ri-add-circle-line align-middle me-1"></i>
                            Add Product
                        </a>
                    </div>

                </div>
            </div>
        </div>
        <!-- end card header -->
    </div>
    <!--end col-->
</div>