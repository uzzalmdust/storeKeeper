@extends('app')

@section('content')

<div class="row">
    <!-- .col-->

    <div class="col-xl-12">
        <div class="card">
            <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">

                    <div class="row mb-3">
                        <h2 class="text-primary text-center">Sales Transaction Histoty</h2>
                    </div>
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
                                <th scope="col" >SL NO.</th>
                                <th scope="col" >Client</th>
                                <th scope="col" >Amount</th>
                                <th scope="col" >Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $i = 1;
                            @endphp
                            @foreach($items as $item)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $item->client }} </td>
                                <td>{{ $item->amount }}</td>
                                <td>{{ $item->created_at }}</td>
                            </tr>
                            @endforeach
                            <!-- end tr -->

                        </tbody>
                        <!-- end tbody -->

                    </table>
                    <!-- end table -->
                </div>

            </div>
        </div>
        <!-- .card-->
    </div>
    <!-- .col-->
</div>


@endsection