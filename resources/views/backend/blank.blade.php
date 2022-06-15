
@extends('backend.mastertemplate.template')

@section('maincontent')
<div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>Dashboard</h4>
          <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
        </div>
      </div>

    <div class="br-pagebody">
        <div class="row row-sm">
            <div class="col-sm-12">
                <div class="card p-3 shadow-base">
                    <form action="" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="from-group">
                                    <label for="productName">Product Name</label>
                                    <input class="form-control" type="text" name="productName" id="productName" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-md-6"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection






