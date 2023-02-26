@extends('layouts.admin')
@push('head')
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
@endpush

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">PAGE HEADING</h4>

                        {{--<div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                <li class="breadcrumb-item active">home</li>
                            </ol>
                        </div>--}}

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center flex-wrap gap-2">
                                <div class="flex-grow-1">
                                    <button class="btn btn-info add-btn"><i
                                            class="ri-arrow-left-fill me-1 align-bottom"></i> BACK
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <form action="">
                                <div class="row g-3">
                                    <div class="col-lg-6">
                                        <div>
                                            <label for="owner-field" class="form-label">Owner
                                                Name</label>
                                            <input type="text" id="owner-field" class="form-control"
                                                   placeholder="Enter owner name" required/>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div>
                                            <label for="industry_type-field" class="form-label">Industry
                                                Type</label>
                                            <select class="form-select" id="industry_type-field">
                                                <option value="">Select industry type</option>
                                                <option value="Computer Industry">Computer
                                                    Industry
                                                </option>
                                                <option value="Chemical Industries">Chemical
                                                    Industries
                                                </option>
                                                <option value="Health Services">Health Services
                                                </option>
                                                <option value="Telecommunications Services">
                                                    Telecommunications Services
                                                </option>
                                                <option value="Textiles: Clothing, Footwear">
                                                    Textiles: Clothing, Footwear
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div>
                                            <label for="star_value-field"
                                                   class="form-label">Rating</label>
                                            <input type="text" id="star_value-field"
                                                   class="form-control" placeholder="Enter rating"
                                                   required/>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div>
                                            <label for="location-field"
                                                   class="form-label">Location</label>
                                            <input type="text" id="location-field"
                                                   class="form-control" placeholder="Enter location"
                                                   required/>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div>
                                            <label for="employee-field"
                                                   class="form-label">Employee</label>
                                            <input type="text" id="employee-field"
                                                   class="form-control" placeholder="Enter employee"
                                                   required/>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div>
                                            <label for="website-field"
                                                   class="form-label">Website</label>
                                            <input type="text" id="website-field"
                                                   class="form-control" placeholder="Enter website"
                                                   required/>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div>
                                            <label for="contact_email-field" class="form-label">Contact
                                                Email</label>
                                            <input type="text" id="contact_email-field"
                                                   class="form-control"
                                                   placeholder="Enter contact email" required/>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div>
                                            <label for="since-field"
                                                   class="form-label">Since</label>
                                            <input type="text" id="since-field" class="form-control"
                                                   placeholder="Enter since" required/>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div>
                                            <label for="dob" class="form-label">Date</label>
                                            <input name="dob" type="text" class="form-control datepicker" placeholder="enter date" value="{{old('dob')}}" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div>
                                            <label for="dob" class="form-label">Date of Birth</label>
                                            <input name="dob" type="text" class="form-control datepicker" placeholder="enter date of birth" value="{{old('dob')}}" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <div class="hstack gap-2 justify-content-start">

                                        <button type="submit" class="btn btn-success" id="add-btn">Add
                                            Company
                                        </button>
                                        <button type="button" class="btn btn-success" id="edit-btn">
                                            Update
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--end card-->
            </div>
        </div>
        <!--end row-->
    </div>
    <!-- container-fluid -->
   {{----}}
@stop


@push('scripts')
    <!--jquery cdn-->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

    <script>
        $(function () {
            $(".datepicker").datepicker({
                dateFormat: "yy-mm-dd",
                changeYear: true,
                changeMonth: true
            });
        });
    </script>
@endpush
