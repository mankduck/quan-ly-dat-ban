@extends('layout.backend')
@section('adminContent')
    <div class="container-xxl">
        <div class="row justify-content-center">
            <div class="col-12">
                @include('backend.component.card-component', [
                    'title' => __('messages.system.table.title') . ' ' . __('messages.' . $object . '.title'),
                    'totalRecords' => $invoiceTotalRecords,
                    // 'createRoute' => route('admin.' . $object . '.create'), // Corrected the route syntax
                ])

                <div class="card-body pt-0">
                    @include('backend.component.filter', [
                        'object' => $object,
                    ])
                </div>
            </div>

            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="table-responsive">
                        @include('backend.invoice.component.table.table')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
