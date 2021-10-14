@extends('layouts.master')
@section('content')

        <div class="page-body">
            <!-- Infobox -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box infobox-type-5 hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">supervisor_account</i>
                        </div>
                        <div class="content">
                            <div class="text">UNIQUE USERS</div>
                            <div class="number">23 400</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box infobox-type-5 hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">equalizer</i>
                        </div>
                        <div class="content">
                            <div class="text">PAGE VIEWS</div>
                            <div class="number">12 400</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box infobox-type-5 hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">shopping_cart</i>
                        </div>
                        <div class="content">
                            <div class="text">SALES</div>
                            <div class="number">$52 750</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box infobox-type-5 hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">assignment</i>
                        </div>
                        <div class="content">
                            <div class="text">NEW TASKS</div>
                            <div class="number">1 250</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Infobox -->
            <!-- Main Graph -->
@endsection

@push('head')

    @endpush

@push('js')

@endpush
