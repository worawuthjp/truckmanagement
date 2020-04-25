@extends('layout.master')

@section('body')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="min-height: 1200.88px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h5>รายงายสรุปการทำงานของพนักงาน</h5>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <!-- DONUT CHART -->
                    <div class="card card-danger">
                        <div class="card-header">
                            <h3 class="card-title">อัตราการเกิดอุบัติเหตุของพนักงานทั้งหมด</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                        class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove"><i
                                        class="fas fa-times"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="chartjs-size-monitor">
                                <div class="chartjs-size-monitor-expand">
                                    <div class=""></div>
                                </div>
                                <div class="chartjs-size-monitor-shrink">
                                    <div class=""></div>
                                </div>
                            </div>
                            <canvas id="donutChart"
                                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 627px;"
                                width="627" height="250" class="chartjs-render-monitor"></canvas>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <div class="col-md-6">
                    <!-- PIE CHART -->
                    <div class="card card-danger">
                        <div class="card-header">
                            <h3 class="card-title">ประวัติด้านความประพฤติ</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                        class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove"><i
                                        class="fas fa-times"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="chartjs-size-monitor">
                                <div class="chartjs-size-monitor-expand">
                                    <div class=""></div>
                                </div>
                                <div class="chartjs-size-monitor-shrink">
                                    <div class=""></div>
                                </div>
                            </div>
                            <canvas id="pieChart"
                                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 627px;"
                                width="627" height="250" class="chartjs-render-monitor"></canvas>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="card-header bg-warning d-flex align-items-center" style="height: 3.5em">
                            <h3 class="card-title">งานที่กำลังดำเนินการ</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr role="row">
                                        <th rowspan="1" colspan="1">ทะเบียนรถ</th>
                                        <th rowspan="1" colspan="1">ชื่อพนักงาน</th>
                                        <th rowspan="1" colspan="1">หัวบรรทุก</th>
                                        <th rowspan="1" colspan="1">หางบรรทุก</th>
                                        <th rowspan="1" colspan="1">ยี่ห้อรถ</th>
                                        <th rowspan="1" colspan="1">ประเภทรถ</th>
                                        <th rowspan="1" colspan="1">วันที่ขับ</th>
                                        <th rowspan="1" colspan="1">รายละเอียดการทำงาน</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd">
                                        <!-- <td valign="top" colspan="7" class="dataTables_empty">No data
                                                        available in table</td> -->
                                        <td> 555</td>
                                        <td> 555</td>
                                        <td> 555</td>
                                        <td> 555</td>
                                        <td> 555</td>
                                        <td> 555</td>
                                        <td> 555</td>
                                        <td class="text-center py-0 align-middle">

                                            <a href="#" class="detail">
                                                <button type="button" class="btn btn-warning  btn-sm" 4
                                                    data-toggle="modal" title="แก้ไขข้อมูล" data-target="#modalDetail">
                                                    <i class="fas fa-align-justify"></i>
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th rowspan="1" colspan="1">ทะเบียนรถ</th>
                                        <th rowspan="1" colspan="1">ชื่อพนักงาน</th>
                                        <th rowspan="1" colspan="1">หัวบรรทุก</th>
                                        <th rowspan="1" colspan="1">หางบรรทุก</th>
                                        <th rowspan="1" colspan="1">ยี่ห้อรถ</th>
                                        <th rowspan="1" colspan="1">ประเภทรถ</th>
                                        <th rowspan="1" colspan="1">วันที่ขับ</th>
                                        <th rowspan="1" colspan="1">รายละเอียดการทำงาน</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<div id="modalDetail" class="modal fade show" id="modal-default" aria-modal="true">
    <form class="modal-dialog modal-lg" method="post" action="processaddsubject.php">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">รายละเอียดงาน</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body" id="addModalBody">
                <div class="card-body">
                    <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="dataTables_length" id="example1_length"><label>Show <select
                                            name="example1_length" aria-controls="example1"
                                            class="custom-select custom-select-sm form-control form-control-sm">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select> entries</label></div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search"
                                            class="form-control form-control-sm" placeholder=""
                                            aria-controls="example1"></label></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="example1" class="table table-bordered table-striped dataTable dtr-inline"
                                    role="grid" aria-describedby="example1_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1" aria-sort="ascending"
                                                aria-label="วันที่: activate to sort column descending">วันที่</th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1"
                                                aria-label="สถานที่จัดส่ง: activate to sort column ascending">
                                                สถานที่จัดส่ง</th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1" aria-label="ชื่อผู้รับ: activate to sort column ascending">
                                                ชื่อผู้รับ</th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1"
                                                aria-label="หมายเลขรถขนส่ง: activate to sort column ascending">
                                                หมายเลขรถขนส่ง</th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1" aria-label="สถานะ: activate to sort column ascending">สถานะ
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd">
                                            <td valign="top" colspan="5" class="dataTables_empty">No data available in
                                                table</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th rowspan="1" colspan="1">วันที่</th>
                                            <th rowspan="1" colspan="1">สถานที่จัดส่ง</th>
                                            <th rowspan="1" colspan="1">ชื่อผู้รับ</th>
                                            <th rowspan="1" colspan="1">คนขับรถ</th>
                                            <th rowspan="1" colspan="1">สถานะ</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-5">
                                <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing
                                    0 to 0 of 0 entries</div>
                            </div>
                            <div class="col-sm-12 col-md-7">
                                <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                                    <ul class="pagination">
                                        <li class="paginate_button page-item previous disabled" id="example1_previous">
                                            <a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0"
                                                class="page-link">Previous</a></li>
                                        <li class="paginate_button page-item next disabled" id="example1_next"><a
                                                href="#" aria-controls="example1" data-dt-idx="1" tabindex="0"
                                                class="page-link">Next</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </form>
    <!-- /.modal-content -->
</div>
<!-- /.modal -->
<!-- jQuery -->
<script src="bootstrap/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="bootstrap/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="bootstrap/plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE App -->
<script src="bootstrap/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="bootstrap/dist/js/demo.js"></script>
<!-- page script -->
<script>
$(".detail").click(function() {});
$(function() {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    //--------------
    //- AREA CHART -
    //--------------


    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData = {
        labels: [
            'จำนวนการเกิดอุบัตดิเหตุ',
            'จำนวนที่ไม่เกิดอุบัิเหตุ',
        ],
        datasets: [{
            data: [2, 12],
            backgroundColor: ['#f56954', '#00a65a'],
        }]
    }
    var donutOptions = {
        maintainAspectRatio: false,
        responsive: true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var donutChart = new Chart(donutChartCanvas, {
        type: 'doughnut',
        data: donutData,
        options: donutOptions
    })

    //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieChart1 = {
        labels: [
            'ใบสั่ง',
            'ลางาน',
            'ยกเลิกงาน',
            'ขาดงาน'
        ],
        datasets: [{
            data: [2, 12, 3, 5],
            backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', ],
        }]
    }
    var pieData = pieChart1;
    var pieOptions = {
        maintainAspectRatio: false,
        responsive: true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var pieChart = new Chart(pieChartCanvas, {
        type: 'pie',
        data: pieData,
        options: pieOptions
    })

    //-------------
    //- BAR CHART -
    //-------------

})
</script>
@endsection