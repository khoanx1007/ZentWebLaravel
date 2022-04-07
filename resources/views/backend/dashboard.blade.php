@extends('backend.layouts.master')
@section('title')
Dashboard
@endsection
@section('content')
<div class="row">
    <!-- ============================================================== -->
                              <!-- product category  -->
    <!-- ============================================================== -->
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header"> Product Category</h5>
            <div class="card-body">
                <div class="ct-chart-category ct-golden-section" style="height: 315px;"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-donut" style="width: 100%; height: 100%;"><g class="ct-series ct-series-a"><path d="M118.15,250.65A93.15,93.15,0,0,0,118.15,64.35" class="ct-slice-donut" ct:value="60" style="stroke-width: 40px;" stroke-dasharray="292.6804504394531px 292.6804504394531px" stroke-dashoffset="-292.6804504394531px"><animate attributeName="stroke-dashoffset" id="anim0" dur="1000ms" from="-292.6804504394531px" to="0px" fill="freeze" calcMode="spline" keySplines="0.23 1 0.32 1" keyTimes="0;1"></animate></path></g><g class="ct-series ct-series-b"><path d="M25,157.5A93.15,93.15,0,0,0,118.475,250.649" class="ct-slice-donut" ct:value="30" style="stroke-width: 40px;" stroke-dasharray="146.6446533203125px 146.6446533203125px" stroke-dashoffset="-146.6446533203125px"><animate attributeName="stroke-dashoffset" id="anim1" dur="1000ms" from="-146.6446533203125px" to="0px" fill="freeze" begin="anim0.end" calcMode="spline" keySplines="0.23 1 0.32 1" keyTimes="0;1"></animate></path></g><g class="ct-series ct-series-c"><path d="M118.15,64.35A93.15,93.15,0,0,0,25.001,157.825" class="ct-slice-donut" ct:value="30" style="stroke-width: 40px;" stroke-dasharray="146.64468383789062px 146.64468383789062px" stroke-dashoffset="-146.64468383789062px"><animate attributeName="stroke-dashoffset" id="anim2" dur="1000ms" from="-146.64468383789062px" to="0px" fill="freeze" begin="anim1.end" calcMode="spline" keySplines="0.23 1 0.32 1" keyTimes="0;1"></animate></path></g></svg></div>
                <div class="text-center m-t-40">
                    <span class="legend-item mr-3">
                            <span class="fa-xs text-primary mr-1 legend-tile"><i class="fa fa-fw fa-square-full "></i></span><span class="legend-text">Man</span>
                    </span>
                    <span class="legend-item mr-3">
                        <span class="fa-xs text-secondary mr-1 legend-tile"><i class="fa fa-fw fa-square-full"></i></span>
                    <span class="legend-text">Woman</span>
                    </span>
                    <span class="legend-item mr-3">
                        <span class="fa-xs text-info mr-1 legend-tile"><i class="fa fa-fw fa-square-full"></i></span>
                    <span class="legend-text">Accessories</span>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end product category  -->
           <!-- product sales  -->
    <!-- ============================================================== -->
    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <div class="card-header">
                <!-- <div class="float-right">
                        <select class="custom-select">
                            <option selected>Today</option>
                            <option value="1">Weekly</option>
                            <option value="2">Monthly</option>
                            <option value="3">Yearly</option>
                        </select>
                    </div> -->
                <h5 class="mb-0"> Product Sales</h5>
            </div>
            <div class="card-body">
                <div class="ct-chart-product ct-golden-section"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-bar" style="width: 100%; height: 100%;"><g class="ct-grids"><line x1="50" x2="50" y1="15" y2="240.66250610351562" class="ct-grid ct-horizontal"></line><line x1="169.40000915527344" x2="169.40000915527344" y1="15" y2="240.66250610351562" class="ct-grid ct-horizontal"></line><line x1="288.8000183105469" x2="288.8000183105469" y1="15" y2="240.66250610351562" class="ct-grid ct-horizontal"></line><line x1="408.2000274658203" x2="408.2000274658203" y1="15" y2="240.66250610351562" class="ct-grid ct-horizontal"></line><line y1="240.66250610351562" y2="240.66250610351562" x1="50" x2="527.6000366210938" class="ct-grid ct-vertical"></line><line y1="195.5300048828125" y2="195.5300048828125" x1="50" x2="527.6000366210938" class="ct-grid ct-vertical"></line><line y1="150.3975036621094" y2="150.3975036621094" x1="50" x2="527.6000366210938" class="ct-grid ct-vertical"></line><line y1="105.26500244140624" y2="105.26500244140624" x1="50" x2="527.6000366210938" class="ct-grid ct-vertical"></line><line y1="60.13250122070312" y2="60.13250122070312" x1="50" x2="527.6000366210938" class="ct-grid ct-vertical"></line><line y1="15" y2="15" x1="50" x2="527.6000366210938" class="ct-grid ct-vertical"></line></g><g><g class="ct-series ct-series-a"><line x1="109.70000457763672" x2="109.70000457763672" y1="240.66250610351562" y2="168.45050415039063" class="ct-bar" ct:value="800000" style="stroke-width: 40px"></line><line x1="229.10001373291016" x2="229.10001373291016" y1="240.66250610351562" y2="132.34450317382812" class="ct-bar" ct:value="1200000" style="stroke-width: 40px"></line><line x1="348.5000228881836" x2="348.5000228881836" y1="240.66250610351562" y2="114.29150268554687" class="ct-bar" ct:value="1400000" style="stroke-width: 40px"></line><line x1="467.90003204345703" x2="467.90003204345703" y1="240.66250610351562" y2="123.3180029296875" class="ct-bar" ct:value="1300000" style="stroke-width: 40px"></line></g><g class="ct-series ct-series-b"><line x1="109.70000457763672" x2="109.70000457763672" y1="168.45050415039063" y2="150.3975036621094" class="ct-bar" ct:value="200000" style="stroke-width: 40px"></line><line x1="229.10001373291016" x2="229.10001373291016" y1="132.34450317382812" y2="96.23850219726563" class="ct-bar" ct:value="400000" style="stroke-width: 40px"></line><line x1="348.5000228881836" x2="348.5000228881836" y1="114.29150268554687" y2="69.15900146484375" class="ct-bar" ct:value="500000" style="stroke-width: 40px"></line><line x1="467.90003204345703" x2="467.90003204345703" y1="123.3180029296875" y2="96.23850219726562" class="ct-bar" ct:value="300000" style="stroke-width: 40px"></line></g><g class="ct-series ct-series-c"><line x1="109.70000457763672" x2="109.70000457763672" y1="150.3975036621094" y2="141.37100341796875" class="ct-bar" ct:value="100000" style="stroke-width: 40px"></line><line x1="229.10001373291016" x2="229.10001373291016" y1="96.23850219726563" y2="78.18550170898439" class="ct-bar" ct:value="200000" style="stroke-width: 40px"></line><line x1="348.5000228881836" x2="348.5000228881836" y1="69.15900146484375" y2="33.05300048828127" class="ct-bar" ct:value="400000" style="stroke-width: 40px"></line><line x1="467.90003204345703" x2="467.90003204345703" y1="96.23850219726562" y2="42.07950073242186" class="ct-bar" ct:value="600000" style="stroke-width: 40px"></line></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="50" y="245.66250610351562" width="119.40000915527344" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 119px; height: 20px;">Q1</span></foreignObject><foreignObject style="overflow: visible;" x="169.40000915527344" y="245.66250610351562" width="119.40000915527344" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 119px; height: 20px;">Q2</span></foreignObject><foreignObject style="overflow: visible;" x="288.8000183105469" y="245.66250610351562" width="119.40000915527344" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 119px; height: 20px;">Q3</span></foreignObject><foreignObject style="overflow: visible;" x="408.2000274658203" y="245.66250610351562" width="119.40000915527344" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 119px; height: 20px;">Q4</span></foreignObject><foreignObject style="overflow: visible;" y="195.5300048828125" x="10" height="45.132501220703126" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 45px; width: 30px;">0k</span></foreignObject><foreignObject style="overflow: visible;" y="150.3975036621094" x="10" height="45.132501220703126" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 45px; width: 30px;">500k</span></foreignObject><foreignObject style="overflow: visible;" y="105.26500244140625" x="10" height="45.13250122070313" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 45px; width: 30px;">1000k</span></foreignObject><foreignObject style="overflow: visible;" y="60.13250122070312" x="10" height="45.13250122070312" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 45px; width: 30px;">1500k</span></foreignObject><foreignObject style="overflow: visible;" y="15" x="10" height="45.13250122070312" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 45px; width: 30px;">2000k</span></foreignObject><foreignObject style="overflow: visible;" y="-15" x="10" height="30" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 30px;">2500k</span></foreignObject></g></svg></div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end product sales  -->
    <!-- ============================================================== -->
    <div class="col-xl-3 col-lg-12 col-md-6 col-sm-12 col-12">
        <!-- ============================================================== -->
        <!-- top perfomimg  -->
        <!-- ============================================================== -->
        <div class="card">
            <h5 class="card-header">Top Performing Campaigns</h5>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table no-wrap p-table">
                        <thead class="bg-light">
                            <tr class="border-0">
                                <th class="border-0">Campaign</th>
                                <th class="border-0">Visits</th>
                                <th class="border-0">Revenue</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Campaign#1</td>
                                <td>98,789 </td>
                                <td>$4563</td>
                            </tr>
                            <tr>
                                <td>Campaign#2</td>
                                <td>2,789 </td>
                                <td>$325</td>
                            </tr>
                            <tr>
                                <td>Campaign#3</td>
                                <td>1,459 </td>
                                <td>$225</td>
                            </tr>
                            <tr>
                                <td>Campaign#4</td>
                                <td>5,035 </td>
                                <td>$856</td>
                            </tr>
                            <tr>
                                <td>Campaign#5</td>
                                <td>10,000 </td>
                                <td>$1000</td>
                            </tr>
                            <tr>
                                <td>Campaign#5</td>
                                <td>10,000 </td>
                                <td>$1000</td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <a href="#" class="btn btn-outline-light float-right">Details</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end top perfomimg  -->
        <!-- ============================================================== -->
    </div>
</div>
<div class="row">
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="text-muted">Total Revenue</h5>
                <div class="metric-value d-inline-block">
                    <h1 class="mb-1">$12099</h1>
                </div>
                <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                    <span><i class="fa fa-fw fa-arrow-up"></i></span><span>5.86%</span>
                </div>
            </div>
            <div id="sparkline-revenue"><canvas width="274" height="100" style="display: inline-block; width: 274.913px; height: 100px; vertical-align: top;"></canvas></div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="text-muted">Affiliate Revenue</h5>
                <div class="metric-value d-inline-block">
                    <h1 class="mb-1">$12099</h1>
                </div>
                <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                    <span><i class="fa fa-fw fa-arrow-up"></i></span><span>5.86%</span>
                </div>
            </div>
            <div id="sparkline-revenue2"><canvas width="274" height="100" style="display: inline-block; width: 274.913px; height: 100px; vertical-align: top;"></canvas></div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="text-muted">Refunds</h5>
                <div class="metric-value d-inline-block">
                    <h1 class="mb-1">0.00</h1>
                </div>
                <div class="metric-label d-inline-block float-right text-primary font-weight-bold">
                    <span>N/A</span>
                </div>
            </div>
            <div id="sparkline-revenue3"><canvas width="274" height="100" style="display: inline-block; width: 274.913px; height: 100px; vertical-align: top;"></canvas></div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="text-muted">Avg. Revenue Per User</h5>
                <div class="metric-value d-inline-block">
                    <h1 class="mb-1">$28000</h1>
                </div>
                <div class="metric-label d-inline-block float-right text-secondary font-weight-bold">
                    <span>-2.00%</span>
                </div>
            </div>
            <div id="sparkline-revenue4"><canvas width="274" height="100" style="display: inline-block; width: 274.913px; height: 100px; vertical-align: top;"></canvas></div>
        </div>
    </div>
</div>
<div class="row">
    <!-- ============================================================== -->
    <!-- sales  -->
    <!-- ============================================================== -->
    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
        <div class="card border-3 border-top border-top-primary">
            <div class="card-body">
                <h5 class="text-muted">Sales</h5>
                <div class="metric-value d-inline-block">
                    <h1 class="mb-1">$12099</h1>
                </div>
                <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                    <span class="icon-circle-small icon-box-xs text-success bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1">5.86%</span>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end sales  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- new customer  -->
    <!-- ============================================================== -->
    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
        <div class="card border-3 border-top border-top-primary">
            <div class="card-body">
                <h5 class="text-muted">New Customer</h5>
                <div class="metric-value d-inline-block">
                    <h1 class="mb-1">1245</h1>
                </div>
                <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                    <span class="icon-circle-small icon-box-xs text-success bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1">10%</span>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end new customer  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- visitor  -->
    <!-- ============================================================== -->
    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
        <div class="card border-3 border-top border-top-primary">
            <div class="card-body">
                <h5 class="text-muted">Visitor</h5>
                <div class="metric-value d-inline-block">
                    <h1 class="mb-1">13000</h1>
                </div>
                <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                    <span class="icon-circle-small icon-box-xs text-success bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1">5%</span>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end visitor  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- total orders  -->
    <!-- ============================================================== -->
    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
        <div class="card border-3 border-top border-top-primary">
            <div class="card-body">
                <h5 class="text-muted">Total Orders</h5>
                <div class="metric-value d-inline-block">
                    <h1 class="mb-1">1340</h1>
                </div>
                <div class="metric-label d-inline-block float-right text-danger font-weight-bold">
                    <span class="icon-circle-small icon-box-xs text-danger bg-danger-light bg-danger-light "><i class="fa fa-fw fa-arrow-down"></i></span><span class="ml-1">4%</span>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end total orders  -->
    <!-- ============================================================== -->
</div>
@endsection