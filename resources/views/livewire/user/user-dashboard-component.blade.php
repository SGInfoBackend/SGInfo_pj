<<<<<<< HEAD
<div>
    <div class="row mt-4">
        <div class="col-md-3">
            <div class="card bg-warning" style="height:7rem;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-9">
                            <h5 class="card-title"><i class="fa-solid fa-house text-white"></i></h5>
                            <h6 class="card-subtitle mb-2 text-muted"></h6>
                            <p class="card-text text-white mt-5">

                            </p>
                            <a href="#" class="text-white">Home</a>
                        </div>
                        <div class="col-md-3">
                            <h4 class="text-white">{{ $rooms }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-primary" style="height:7rem;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-9">
                            <h5 class="card-title"><i class="fa-solid fa-building-user text-white"></i></h5>
                            <h6 class="card-subtitle mb-2 text-muted"></h6>
                            <p class="card-text text-white mt-5">

                            </p>
                            <a href="#" class="text-white">Jobs</a>
                        </div>
                        <div class="col-md-3">
                            <h4 class="text-white">{{ $job }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-danger" style="height:7rem;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-9">
                            <h5 class="card-title"><i class="fa-solid fa-radio text-white"></i></h5>
                            <h6 class="card-subtitle mb-2 text-muted"></h6>
                            <p class="card-text text-white mt-5">

                            </p>
                            <a href="#" class="text-white">Trending News</a>
                        </div>
                        <div class="col-md-3">
                            <h4 class="text-white">{{ $lnews }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-success" style="height:7rem;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-9">
                            <h5 class="card-title"><i class="fas fa-user text-white"></i></h5>
                            <h6 class="card-subtitle mb-2 text-muted"></h6>
                            <p class="card-text text-white mt-5">

                            </p>
                            <a href="#" class="text-white">Globle News</a>
                        </div>
                        <div class="col-md-3">
                            <h4 class="text-white">{{ $Gnews }}</h4>
                        </div>
=======
<div class="content">
    <style>
        .content {
          padding-top: 40px;
          padding-bottom: 40px;
        }
        .icon-stat {
            display: block;
            overflow: hidden;
            position: relative;
            padding: 15px;
            margin-bottom: 1em;
            background-color: #fff;
            border-radius: 4px;
            border: 1px solid #ddd;
        }
        .icon-stat-label {
            display: block;
            color: #999;
            font-size: 13px;
        }
        .icon-stat-value {
            display: block;
            font-size: 28px;
            font-weight: 600;
        }
        .icon-stat-visual {
            position: relative;
            top: 22px;
            display: inline-block;
            width: 32px;
            height: 32px;
            border-radius: 4px;
            text-align: center;
            font-size: 16px;
            line-height: 30px;
        }
        .bg-primary {
            color: #fff;
            background: #d74b4b;
        }
        .bg-secondary {
            color: #fff;
            background: #6685a4;
        }

        .icon-stat-footer {
            padding: 10px 0 0;
            margin-top: 10px;
            color: #aaa;
            font-size: 12px;
            border-top: 1px solid #eee;
        }
    </style>
    <div class="container"  style="padding:30px 0;">
        <div class="row">
            <div class="col-md-3 col-sm-6">
              <div class="icon-stat">
                <div class="row">
                  <div class="col-xs-8 text-left">
                    <span class="icon-stat-label">Total Revenue</span>
                    <span class="icon-stat-value"></span>
                  </div>
                  <div class="col-xs-4 text-center">
                    <i class="fa fa-dollar icon-stat-visual bg-primary"></i>
                  </div>
                </div>
                <div class="icon-stat-footer">
                  <i class="fa fa-clock-o"></i> Updated Now
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="icon-stat">
                <div class="row">
                  <div class="col-xs-8 text-left">
                    <span class="icon-stat-label">Total Sales</span>
                    <span class="icon-stat-value"></span>
                  </div>
                  <div class="col-xs-4 text-center">
                    <i class="fa fa-gift icon-stat-visual bg-secondary"></i>
                  </div>
                </div>
                <div class="icon-stat-footer">
                  <i class="fa fa-clock-o"></i> Updated Now
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="icon-stat">
                <div class="row">
                  <div class="col-xs-8 text-left">
                    <span class="icon-stat-label">Today Revenue</span>
                    <span class="icon-stat-value">$</span>
                  </div>
                  <div class="col-xs-4 text-center">
                    <i class="fa fa-dollar icon-stat-visual bg-primary"></i>
                  </div>
                </div>
                <div class="icon-stat-footer">
                  <i class="fa fa-clock-o"></i> Updated Now
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="icon-stat">
                <div class="row">
                  <div class="col-xs-8 text-left">
                    <span class="icon-stat-label">Today Sales</span>
                    <span class="icon-stat-value"></span>
                  </div>
                  <div class="col-xs-4 text-center">
                    <i class="fa fa-gift icon-stat-visual bg-secondary"></i>
                  </div>
                </div>
                <div class="icon-stat-footer">
                  <i class="fa fa-clock-o"></i> Updated Now
                </div>
              </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Latest Order
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>OrderId</th>
                                    <th>Subtotal</th>
                                    <th>Discount</th>
                                    <th>Tax</th>
                                    <th>Total</th>
                                    <th>FirstName</th>
                                    <th>Last Name</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th>Zipcode</th>
                                    <th>Status</th>
                                    <th>Order Date</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($orders as $order)
                                    <tr>
                                        <td>{{ $order->id }}</td>
                                        <td>${{ $order->subtotal }}</td>
                                        <td>${{ $order->discount }}</td>
                                        <td>${{ $order->tax }}</td>
                                        <td>${{ $order->total }}</td>
                                        <td>{{ $order->firstname}}</td>
                                        <td>{{ $order->lastname}}</td>
                                        <td>{{ $order->mobile}}</td>
                                        <td>{{ $order->email}}</td>
                                        <td>{{ $order->zipcode}}</td>
                                        <td>{{ $order->status}}</td>
                                        <td>{{ $order->created_at }}</td>
                                        <td>
                                            <a href="{{ route('admin.orderdetail',['order_id'=>$order->id]) }}" class="btn btn-primary btn-sm ">Details</a>
                                        </td>
                                    </tr>
                                @endforeach --}}
                            </tbody>
                        </table>
>>>>>>> tw
                    </div>
                </div>
            </div>
        </div>
    </div>
<<<<<<< HEAD


{{--  For Post Table  --}}
<table class="table-striped table mt-5 mb-4">
    <tr>
        <td>Id</td>
        <td>Title</td>
        <td>Company</td>
        <td>Job location</td>
        <td>Category Job</td>
        <td>Company URL</td>
        <td>Job Description</td>
    </tr>
    @foreach ($jobs as $job)
        <tr>
            <td>{{ $job->Job_ID }}</td>
            <td>{{ $job->Job_title }}</td>
            <td>{{ $job->Company }}</td>
            <td>{{ $job->Job_location }}</td>
            <td>{{ $job->Category_job }}</td>
            <td>{{ $job->Company_URL}}</td>
            <td>{{ Str::limit($job->Job_Description, 20) }}</td>
        </tr>
    @endforeach
</table>
{{--  End Post Table  --}}
=======
>>>>>>> tw
</div>

