@extends('layouts.app')
@section('styles')
@endsection
@section('content')
    <section class="pt-100 pb-130 mt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="text-center mt-30">
                        <h4 class="text-white">Find location</h4>

                    </div> <!-- collection menu -->
                </div>
                <div class="col-lg-9 col-md-8">
                    <div>
                        <div>
                            <div class="mt-30">
                                <div class="row">

                                    <div class="col-md-6 col-xl-5">
                                        <div class="card"
                                            style=" background: linear-gradient(30deg,hsla(0,0%,100%,.1),rgba(118, 240, 234, 0.507))">

                                            <div class="form-group ">
                                                <label class="text-white" for="province">Select Province</label>
                                                <select class="form-control" id="province" name="province">
                                                    @if (isset($provinsi))
                                                        @foreach ($provinsi as $provinsi)
                                                            <option value="">{{ $provinsi->name }}
                                                            </option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-white" for="city">Select City</label>
                                                <select class="form-control" id="city" name="city">
                                                    @if (isset($city))
                                                        @foreach ($city as $city)
                                                            <option value="">{{ $city->name }}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-white" for="district">Select District</label>
                                                <select class="form-control" id="district" name="district">
                                                    @if (isset($districts))
                                                        @foreach ($districts as $districts)
                                                            <option value="">{{ $districts->name }}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-white" for="village">Select Subdistrict</label>
                                                <select class="form-control" id="village" name="village">
                                                    @if (isset($villages))
                                                        @foreach ($villages as $villages)
                                                            <option value="">{{ $villages->name }}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>

                                        </div>
                                    </div>

                                </div> <!-- row -->
                            </div> <!-- product items -->
                        </div> <!-- tab pane -->


                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
@endsection
@section('scripts')
    <script></script>
@endsection
