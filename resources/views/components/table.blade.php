<div class="row">
    <!-- .col-->

    <div class="col-xl-12">
        <div class="card">
            <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">
                    Recent Orders
                </h4>
                <div class="flex-shrink-0">

                </div>
            </div>
            <!-- end card header -->

            <div class="card-body">
                <div class="table-responsive table-card">
                    <table class="table table-centered align-middle table-nowrap mb-0">
                        <thead class="text-muted table-light">
                            <tr>
                                <th scope="col">SL. NO.</th>
                                <th scope="col">Title</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $key => $product)
                            <tr>
                                
                                <td>{{ ++$key }}</td>
                                <td>{{ $product->title }}</td>
                                <td>{{ $product->qty }}</td>
                                <td>{{ $product->amount }}</td>
                                <td><a href="{{ route('products.show', $product->id) }}" class="btn btn-info">View</a></td>
                               
                            </tr>
                            @endforeach
                            <!-- end tr -->

                        </tbody>
                        <!-- end tbody -->
                    </table>
                    <!-- end table -->
                </div>
                <div class="align-items-center mt-4 pt-2 justify-content-between row text-center text-sm-start">
                    <div class="col-sm">
                        <div class="text-muted">
                            Showing <span class="fw-semibold">5</span> of
                            <span class="fw-semibold">25</span> Results
                        </div>
                    </div>
                    <div class="col-sm-auto mt-3 mt-sm-0">
                        <ul class="pagination pagination-separated pagination-sm mb-0 justify-content-center">
                            <li class="page-item disabled">
                                <a href="#" class="page-link">←</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">1</a>
                            </li>
                            <li class="page-item active">
                                <a href="#" class="page-link">2</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">3</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">→</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- .card-->
    </div>
    <!-- .col-->
</div>