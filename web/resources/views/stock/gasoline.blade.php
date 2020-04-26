@extends('layout.master')

@section('body')
    <script>
        $(document).ready(function () {
            $("#example4").DataTable();
           $('#gas-table').hide();
           $("#in1").on('click',function () {
              $('#oil-table').show();
              $('#gas-table').hide();
           });
           $("#in2").on('click',function () {
              $("#gas-table").show();
              $("#example3").DataTable();
              $("#oil-table").hide();
           });
        });
    </script>
    <div class="content-wrapper pt-3">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h5>ข้อมูลน้ำมันทั้งหมด</h5>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main Content-->
        <div class="content">
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-gradient-info">
                        <div class="inner">
                            <h3>35000 lbs</h3>
                            <p>ปริมาณน้ำมัน</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-oil-can"></i>
                        </div>
                        <p class="small-box-footer" id="in1">More info <i class="fas fa-arrow-circle-right"></i></p>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>78000 lbs</h3>

                            <p>ปริมาณก๊าซ</p>
                        </div>
                        <div class="icon">
                            <i class="ion fas fa-gas-pump"></i>
                        </div>
                        <p class="small-box-footer" id="in2">More info <i class="fas fa-arrow-circle-right"></i></p>
                    </div>
                </div>
                <!-- row -->
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="row" id="oil-table">
                        <div class="card">
                            <div class="card-header bg-gradient-info d-flex align-items-center " style="height: 3.5em">
                                <h3 class="card-title">การใช้น้ำมัน</h3>
                                <!-- card-header -->
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <table id="example1" class="table table-bordered table-striped ">
                                            <thead>
                                            <tr>
                                                <th width="200px">วันที่</th>
                                                <th width="400px">ผู้ใช้</th>
                                                <th width="300px">ประเภทรถ</th>
                                                <th width="100px">ป้ายทะเบียน</th>
                                                <th width="100px">ปริมาณ</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <th width="200px">วันที่</th>
                                                <th width="400px">ผู้ใช้</th>
                                                <th width="300px">ประเภทรถ</th>
                                                <th width="100px">ป้ายทะเบียน</th>
                                                <th width="100px">ปริมาณ</th>
                                            </tr>
                                            </tfoot>
                                        </table>
                                        <!-- col-12 -->
                                    </div>
                                    <!-- row -->
                                </div>
                                <!-- card-body -->
                            </div>
                            <!-- card -->
                        </div>
                        <!--row id= oil-table -->
                    </div>
                    <div class="row" id="gas-table">
                        <div class="card">
                            <div class="card-header bg-gradient-green d-flex align-items-center " style="height: 3.5em">
                                <h3 class="card-title">การใช้ก๊าซ</h3>
                                <!-- card-header -->
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <table id="example3" class="table table-bordered table-striped ">
                                            <thead>
                                            <tr>
                                                <th width="200px">วันที่</th>
                                                <th width="400px">ผู้ใช้</th>
                                                <th width="300px">ประเภทรถ</th>
                                                <th width="100px">ป้ายทะเบียน</th>
                                                <th width="100px">ปริมาณ</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <th width="200px">วันที่</th>
                                                <th width="400px">ผู้ใช้</th>
                                                <th width="300px">ประเภทรถ</th>
                                                <th width="100px">ป้ายทะเบียน</th>
                                                <th width="100px">ปริมาณ</th>
                                            </tr>
                                            </tfoot>
                                        </table>
                                        <!-- col-12 -->
                                    </div>
                                    <!-- row -->
                                </div>
                                <!-- card-body -->
                            </div>
                            <!-- card -->
                        </div>
                        <!--row id= gas-table -->
                    </div>
                    <!-- col-6 -->
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="card" style="margin-left: 10px">
                            <div class="card-header bg-gradient-danger d-flex align-items-center " style="height: 3.5em">
                                <h3 class="card-title">การซื้อน้ำมัน</h3>
                                <!-- card-header -->
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-3 col-6">
                                        <!-- small box -->
                                        <div class="small-box bg-gradient-orange">
                                            <div class="inner">
                                                <h3>ซื้อ</h3>
                                                <p>น้ำมัน/ก๊าซ</p>
                                            </div>
                                            <div class="icon">
                                                <i class="fas fa-shopping-cart"></i>
                                            </div>
                                            <p class="small-box-footer" data-toggle="modal" data-target="#cart">More info <i class="fas fa-arrow-circle-right"></i></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <table id="example4" class="table table-bordered table-striped " >
                                            <thead>
                                            <tr>
                                                <th width="100px">วันที่</th>
                                                <th width="300px">รายการ</th>
                                                <th width="100px">ปริมาตร(ลิตร)</th>
                                                <th width="100px">ค่าใช้จ่าย</th>
                                                <th width="100px">รายละเอียด</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <th width="100px">วันที่</th>
                                                <th width="300px">รายการ</th>
                                                <th width="100px">ปริมาตร(ลิตร)</th>
                                                <th width="100px">ค่าใช้จ่าย</th>
                                                <th width="100px">รายละเอียด</th>
                                            </tr>
                                            </tfoot>
                                        </table>
                                        <!-- col-12 -->
                                    </div>
                                    <!-- row -->
                                </div>
                                <!-- card-body -->
                            </div>
                            <!-- card -->
                        </div>
                        <!--row id= gas-table -->
                    </div>
                </div>
                <!-- row -->
            </div>
        <!-- content -->
        </div>
    </div>
    <div class="modal fade" id="cart">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-gradient-red">
                    <h4 class="modal-title"><ion-icon name="cart-outline"></ion-icon> สั่งสินค้า</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <!-- modal-header -->
                </div>
                <div class="modal-body">
                    <div class="row col-12">
                        <div class="col-3 text-right">
                            <label>รายการ :</label>
                        </div>
                        <div class="col-9">
                            <input class="col-9" type="text">
                        </div>
                    </div>
                    <div class="row col-12">
                        <div class="col-3 text-right">
                            <label>ปริมาตร :</label>
                        </div>
                        <div class="col-9">
                            <input class="col-9" type="number" min="0">
                        </div>
                    </div>
                    <div class="row col-12">
                        <div class="col-3 text-right">
                            <label>ค่าใช้จ่าย :</label>
                        </div>
                        <div class="col-9">
                            <label>... THB</label>
                        </div>
                    </div>
                    <!-- modal body -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success">สั่งของ</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
                </div>
            </div>
        </div>
    </div>
@endsection
