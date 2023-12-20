<div class="row">
    @foreach($data as $item)
    <div class="col-xl-3 col-md-6">
        <!-- card -->
        <div class="card card-animate">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1 overflow-hidden">
                        <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                            {{$item['title']}}
                        </p>
                    </div>
                    
                </div>
                <div class="d-flex align-items-end justify-content-between mt-4">
                    <div>
                        <h4 class="fs-22 fw-semibold ff-secondary mb-4">
                            $<span class="counter-value" data-target="{{$item['sale']}}">0</span>k
                        </h4>
                       
                    </div>
                    <div class="avatar-sm flex-shrink-0">
                        <span class="avatar-title bg-primary-subtle rounded fs-3">
                            <i class="bx bx-dollar-circle text-primary"></i>
                        </span>
                    </div>
                </div>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
    @endforeach
</div>

    