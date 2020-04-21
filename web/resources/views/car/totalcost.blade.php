@extends('layout.master')

@section('body')
    <script>
        $(document).ready(function(){
            $('#te2').hide();
            $('#in1').on('click',function(){
                $('#te1').show();
                $('#te2').hide();
                $('#title').text("ค่าซ่อมบำรุง");
            });
            $('#in2').on('click',function(){
                $('#te2').show();
                $('#te1').hide();
                $('#title').text("ค่าเติมเชื้อเพลิง");
                $('#example3').DataTable();
            });
            $(function() {
                var ctxL = document.getElementById("lineChart").getContext('2d');
                var myLineChart = new Chart(ctxL, {
                    type: 'line',
                    data: {
                        labels: ["January", "February", "March", "April", "May", "June", "July"],
                        datasets: [{
                            label: "ค่าซ่อมบำรุง",
                            data: [65, 59, 80, 81, 56, 55, 40],
                            backgroundColor: [
                                'rgba(105, 0, 132, .2)',
                            ],
                            borderColor: [
                                'rgba(200, 99, 132, .7)',
                            ],
                            borderWidth: 2
                        },
                            {
                                label: "ค่าน้ำมัน",
                                data: [28, 48, 40, 19, 86, 27, 90],
                                backgroundColor: [
                                    'rgba(0, 137, 132, .2)',
                                ],
                                borderColor: [
                                    'rgba(0, 10, 130, .7)',
                                ],
                                borderWidth: 2
                            }
                        ]
                    },
                    options: {
                        responsive: true
                    }
                });
            });
            $(function () {
                //bar
                var ctxB = document.getElementById("barChart").getContext('2d');
                var myBarChart = new Chart(ctxB, {
                    type: 'bar',
                    data: {
                        labels: ["2015", "2016", "2017", "2018", "2019", "2020"],
                        datasets: [{
                            label: '# of Votes',
                            data: [12, 19, 3, 5, 2, 3],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        }
                    }
                });
            })

        });


    </script>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">สรุปค่าใช้จ่ายรายเดือน</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-gradient-info">
                            <div class="inner">
                                <h3>35000 .-</h3>
                                <p>ค่าซ่อมบำรุง</p>
                            </div>
                            <div class="icon">
                                <i class="ion fa fa-gears"></i>
                            </div>
                            <p class="small-box-footer" id="in1">More info <i class="fas fa-arrow-circle-right"></i></p>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>78000 .-</h3>

                                <p>ค่าเติมเชื้อเพลิง</p>
                            </div>
                            <div class="icon">
                                <i class="ion fas fa-gas-pump"></i>
                            </div>
                            <p class="small-box-footer" id="in2">More info <i class="fas fa-arrow-circle-right"></i></p>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-gradient-warning">
                            <div class="inner">
                                <h3>345000 .-</h3>

                                <p>รายจ่ายสุทธิของปี</p>
                            </div>
                            <div class="icon">
                                <i class="ion far fa-money-bill-alt"></i>
                            </div>
                            <p class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></p>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>4กข-4525</h3>

                                <p>ทะเบียนที่มีรายจ่ายมากที่สุด</p>
                            </div>
                            <div class="icon">
                                <i class="ion fas fa-exclamation-triangle"></i>
                            </div>
                            <p class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></p>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->
                <!-- Main row -->
                <div class="row">
                    <!-- Left col -->
                    <section class="col-lg-7 connectedSortable">
                        <!-- Custom tabs (Charts with tabs)-->
                        <div class="card">
                            <div class="card-header bg-gradient-navy">
                                <h3 class="card-title" id="title">
                                    <i class="fa fa-gears mr-1"></i>
                                    ค่าซ่อมบำรุง
                                </h3>
                            </div><!-- /.card-header -->
                            <div class="card-body" id="te1">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>ทะเบียนรถ</th>
                                        <th>ค่าซ่อมบำรุง</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>4กข-4526</td>
                                        <td>4800</td>
                                    </tr>
                                    <tr>
                                        <td>2หข-1156</td>
                                        <td>5900</td>
                                    </tr>
                                    <tr>
                                        <td>สส-1616</td>
                                        <td>9800</td>
                                    </tr>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>ทะเบียนรถ</th>
                                        <th>ค่าซ่อมบำรุง</th>
                                    </tr>
                                    </tfoot>
                                </table>

                            </div><!-- /.card-body -->
                            <!--sum oil-->
                            <div class="card-body" id="te2">
                                <table id="example3" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>ทะเบียนรถ</th>
                                        <th>ค่าเติมเชื้อเพลิง</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>4กข-4526</td>
                                        <td>5600</td>
                                    </tr>
                                    <tr>
                                        <td>2หข-1156</td>
                                        <td>9500</td>
                                    </tr>
                                    <tr>
                                        <td>สส-1616</td>
                                        <td>10200</td>
                                    </tr>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>ทะเบียนรถ</th>
                                        <th>ค่าเติมเชื้อเพลิง</th>
                                    </tr>
                                    </tfoot>
                                </table>

                            </div>
                            <!--/sum oil-->
                        </div>
                        <!-- /.card -->
                    </section>
                    <!-- /.Left col -->
                    <!-- right col (We are only adding the ID to make the widgets sortable)-->
                    <section class="col-lg-5 connectedSortable">

                        <!-- solid sales graph -->
                        <div class="card bg-gradient-light">
                            <div class="card-header border-0">
                                <h3 class="card-title">
                                    <i class="fa fa-area-chart"></i>
                                    Month Cost
                                </h3>

                                <div class="card-tools">
                                    <button type="button" class="btn bg-info btn-sm" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <canvas id="lineChart"></canvas>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                        <!-- Calendar -->
                        <div class="card bg-gradient-light">
                            <div class="card-header border-0">

                                <h3 class="card-title">
                                    <i class="fa fa-bar-chart"></i>
                                    Year Cost
                                </h3>
                                <!-- tools card -->
                                <div class="card-tools">
                                    <!-- button with a dropdown -->

                                    <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>

                                </div>
                                <!-- /. tools -->
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body pt-0">
                                <!--The calendar -->
                                <canvas id="barChart"></canvas>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </section>
                    <!-- right col -->
                </div>
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    @endsection
@section('footer')
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <!-- ChartJS -->
    <script src="bootstrap/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="bootstrap/plugins/sparklines/sparkline.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="bootstrap/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="bootstrap/plugins/moment/moment.min.js"></script>
    <script src="bootstrap/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="bootstrap/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="bootstrap/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="bootstrap/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="bootstrap/dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="bootstrap/dist/js/demo.js"></script>
@endsection

