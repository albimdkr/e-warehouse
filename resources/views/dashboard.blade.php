@extends('layouts.app')
  
{{-- @section('title', 'Welcome | E-Warehouse') --}}
  
@section('contents')
    <!-- Begin Page Content -->
    <div class="container-fluid">
      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Welcome | E-Warehouse</h1>
          <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                  class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
      </div>

      {{-- Card --}}
      <div class="row">
          <!-- Earnings (Monthly) Card Example -->
          <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-secondary shadow h-100 py-2">
                  <div class="card-body">
                      <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Total Products</div>
                              <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalProducts }}</div>
                          </div>
                          <div class="col-auto">
                              <i class="fas fa-boxes fa-2x text-secondary"></i>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <!-- Earnings (Monthly) Card Example -->
          <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                  <div class="card-body">
                      <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Electronics</div>
                              <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalElectronics }}</div>
                          </div>
                          <div class="col-auto">
                            <i class="fas fa-boxes fa-2x text-primary"></i>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <!-- Earnings (Monthly) Card Example -->
          <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                  <div class="card-body">
                      <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Tools
                              </div>
                              <div class="row no-gutters align-items-center">
                                  <div class="col-auto">
                                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $totalTools }}</div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-auto">
                            <i class="fas fa-boxes fa-2x text-success"></i>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <!-- Pending Requests Card Example -->
          <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                  <div class="card-body">
                      <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                  Total Furniture</div>
                              <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalFurniture }}</div>
                          </div>
                          <div class="col-auto">
                            <i class="fas fa-boxes fa-2x text-info"></i>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      {{-- Chart --}}
      <div class="row">
          <!-- Pie Chart -->
          <div class="col-xl-12 col-lg-5">
              <div class="card shadow mb-4" style="display: flex;"">
                  <!-- Card Header - Dropdown -->
                  <div
                      class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                      <h6 class="m-0 font-weight-bold text-primary">Category Overview</h6>
                  </div>
                  <!-- Card Body -->
                  <div class="card-body">
                      <div class="chart-pie pt-4 pb-2">
                          <canvas id="myPieChart"></canvas>
                      </div>
                      <div class="mt-4 text-center small">
                          <span class="mr-2">
                              <i class="fas fa-circle text-primary"></i> Electronics
                          </span>
                          <span class="mr-2">
                              <i class="fas fa-circle text-success"></i> Tools
                          </span>
                          <span class="mr-2">
                              <i class="fas fa-circle text-info"></i> Furniture
                          </span>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
    <!-- /.container-fluid -->

    <script>
        var totalElectronics = {{ $totalElectronics }};
        var totalTools = {{ $totalTools }};
        var totalFurniture = {{ $totalFurniture }};
    </script>
@endsection