<div class="row">
    <div class="col-lg-10 offset-lg-1">
        <div class="card">
            <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">Add New Product</h4>

            </div><!-- end card header -->
            <div class="card-body">
                <div class="live-preview">
                    <form action="{{ route('products.update', $product->id) }}" method="post" name="dataForm">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="nameInput" class="form-label">Title</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="text" class="form-control @error('title') is-invalid @enderror"
                                    id="nameInput" name="title" placeholder="Enter your name" value="{{ $product->title }}" >
                                @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="websiteUrl" class="form-label">Quantity</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="number" class="form-control @error('qty') is-invalid @enderror"
                                    id="websiteUrl" name="qty" placeholder="your stoke is {{ $product->qty }}. For add, please enter you quantity" >
                                @error('qty')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="dateInput" class="form-label">Amount</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="number" class="form-control @error('amount') is-invalid @enderror"
                                    id="dateInput" name="amount" placeholder="Enter your product price per unit" value="{{ $product->amount }}" >
                                @error('amount')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary" name="submit">Update Stoke</button>
                        </div>
                    </form>
                </div>
            </div>
        </div> <!-- end col -->


    </div><!-- end row -->