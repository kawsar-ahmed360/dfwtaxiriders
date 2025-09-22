@extends('Server.master')
@section('content')

<div class="container-fluid">
    <form action="{{route('CouponStore')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title costom-card-title mb-30">Add Coupon</h4>

                        <div class="form-body">
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label for="cpnName" class="costom-label">Coupon Name</label>
                                        <input id="cpnName" name="coupon_name" type="text" required class="form-control" placeholder="Coupon Name" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label for="cpnName" class="costom-label">Coupon Code</label>
                                        <input id="cpnCode" name="coupon_code" type="text" required class="form-control" placeholder="Coupon Code" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label for="starts" class="costom-label">Starts</label>
                                        <input id="starts" name="start_date" type="datetime-local" required class="form-control" placeholder="Starts" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label for="ends" class="costom-label">Ends</label>
                                        <input id="ends" name="end_date" type="datetime-local" required class="form-control" placeholder="Ends" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label for="cpnName" class="costom-label">Discount Ammount</label>
                                        <input id="cpnDiscount" name="discount_amount" type="number" required class="form-control" placeholder="Discount Ammount" />
                                    </div>
                                </div>


                            </div>


                        </div>
                        <div class="form-actions">
                            <div class="text-start">
                                <button type="submit" class="btn btn-info">Submit</button>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </form>


</div>

@endsection