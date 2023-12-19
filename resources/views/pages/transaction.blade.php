@extends('app')

@section('content')

<div class="row">
    <!-- .col-->

    <div class="col-xl-12">
        <div class="card">
            <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">

                    <form action="{{ route('addItem') }}" method="post" name="dataForm">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-lg-9">
                                <select class="form-select rounded-pill mb-3" name="id"
                                    aria-label="Default select example">
                                    <option value="" selected>Search for services</option>
                                    @foreach($products as $key => $product)
                                    <option value="{{ $product->id }}">{{ $product->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-3">
                                <button type="submit" class="btn btn-primary" name="submit">Add for sale</button>
                            </div>
                        </div>
                    </form>
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
                                <th scope="col" colspan='5' class="text-center">Order List</th>
                            </tr>
                        </thead>
                        <tbody>

                            @php
                            $value = 0;
                            @endphp
                            @foreach($order as $key => $item)
                            <tr>
                                <form action="{{ route('updateItem') }}" method="post" name="dataForm">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $key }}">
                                    <td>{{ $item['title'] }}</td>
                                    <td>( <input type="number" name="qty" value="{{ $item['qty'] }}"> X {{
                                        $item['amount'] }} )</td>
                                    <td>{{ $val = $item['qty'] * $item['amount'] }}</td>
                                    <td><button type="submit" class="btn btn-success" name="submit">Update</button></td>
                                </form>
                                <td><a href="{{ route('deleteItem', $key) }}" class="btn btn-danger">X</a></td>
                            </tr>
                            @php
                            $value = $value + $val;
                            @endphp
                            @endforeach
                            <!-- end tr -->

                        </tbody>
                        <!-- end tbody -->
                        <tfoot>
                            <tr>
                                <td></td>
                                <td><b>Total Amount:</b></td>
                                <td><b>TK. {{ $value }}</b></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tfoot>
                    </table>
                    <!-- end table -->
                </div>
                <div class="align-items-center mt-4 pt-2 justify-content-between row text-center text-sm-start">
                    <div class="col-sm-12 text-center m-5">
                        <h2 class="text-primary">Client Information</h2>
                    </div>
                    <div class="row">
                        <form action="{{ route('order') }}" method="post" name="dataForm">
                            @csrf

                            <div class="row align-items-center g-3">
                                <div class="col-lg-4">
                                    <input type="text" class="form-control @error('client') is-invalid @enderror"
                                        id="nameInput" name="client" placeholder="Enter client name"
                                        value="{{ old('client') }}">
                                    @error('client')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror

                                </div>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control @error('contacts') is-invalid @enderror"
                                        id="nameInput" name="contacts" placeholder="Enter client contacts"
                                        value="{{ old('contacts') }}">
                                    @error('contacts')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-lg-2">
                                    <button type="submit" class="btn btn-primary" name="submit">Order Place</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <!-- .card-->
    </div>
    <!-- .col-->
</div>


@endsection