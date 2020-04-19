@extends('index.home')

@section('body')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper pt-3">
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-lg-3 col-4 cursor-hand" style="height: 8em" data-toggle="tooltip" title="ggg">
                    <!-- small box -->
                    <div class="small-box bg-info  d-flex align-items-center" style="height: 7em"
                         data-toggle="modal" data-target="#addProcess">
                        <div class="inner">
                            <label class="font-weight-light cursor-hand">
                                <h2>เพิ่ม</h2>
                                งานให้พนักงานขับรถ
                            </label>
                        </div>
                        <div class="icon">
                            <i class="ion ion-plus"></i>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
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
                                <tr>
                                    <th>วันที่</th>
                                    <th>สถานที่จัดส่ง</th>
                                    <th>ชื่อผู้รับ</th>
                                    <th>หมายเลขรถขนส่ง</th>
                                    <th>สถานะ</th>
                                </tr>
                                </thead>
                                <tbody>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>วันที่</th>
                                    <th>สถานที่จัดส่ง</th>
                                    <th>ชื่อผู้รับ</th>
                                    <th>คนขับรถ</th>
                                    <th>สถานะ</th>
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
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    {{--Modal Form--}}
    <div class="modal fade" id="addProcess">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h4 class="modal-title"><i class="fas fa-plus-circle "></i> เพิ่มงานใหม่</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-3 text-right">
                            <label>หมายเลขรถบรรทุก :</label>
                        </div>
                        <div class="col-9">
                            <select>
                                <option>--เลือกหมายเลขรถบรรทุก--</option>
                                <option>หมายเลยรถ001</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3 text-right">
                            <label>วันที่จัดส่ง :</label>
                        </div>
                        <div class="col-9">
                            <select>
                                <option>--เลือกวัน--</option>
                                <option>วันนี้</option>
                                <option>วันพรุ่งนี้</option>
                                <option>กำหนดวันที่เอง</option>
                            </select>
                        </div>
                    </div>
                    <div class="row col-12">
                        <div class="col-3 text-right">
                            <label>สถานที่จัดส่ง :</label>
                        </div>
                        <div class="col-9">
                            <textarea class="col-12" rows="4"></textarea>
                        </div>
                    </div>
                    <div class="row col-12">
                        <div class="col-3 text-right">
                            <label>ชื่อผู้รับ :</label>
                        </div>
                        <div class="col-9">
                            <input class="col-9" maxlength="150" type="text">
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
@endsection

