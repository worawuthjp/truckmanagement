@extends('index.home')

@section('body')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper pt-3">
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-lg-3 col-4 cursor-hand" style="height: 8em" data-toggle="tooltip" title="">
                    <!-- small box -->
                    <div class="small-box bg-info  d-flex align-items-center" style="height: 7em"
                         data-toggle="modal" data-target="#addcarinfo">
                        <div class="inner">
                            <label class="font-weight-light cursor-hand">
                                <h2>เพิ่ม</h2>
                                ข้อมูลรถ
                            </label>
                        </div>
                        <div class="icon">
                            <i class="ion ion-plus"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-4 cursor-hand" style="height: 8em" data-toggle="tooltip" title="">
                    <!-- small box -->
                    <div class="small-box bg-info  d-flex align-items-center" style="height: 7em"
                         data-toggle="modal" data-target="#updatecarinfo">
                        <div class="inner">
                            <label class="font-weight-light cursor-hand">
                                <h2>อัปเดต</h2>
                                ข้อมูลรถ
                            </label>
                        </div>
                        <div class="icon">
                            <i class="ion ion-edit"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-4 cursor-hand" style="height: 8em" data-toggle="tooltip" title="">
                    <!-- small box -->
                    <div class="small-box bg-info  d-flex align-items-center" style="height: 7em"
                         data-toggle="modal" data-target="#deletecarinfo">
                        <div class="inner">
                            <label class="font-weight-light cursor-hand">
                                <h2>ลบ</h2>
                                ข้อมูลรถ
                            </label>
                        </div>
                        <div class="icon">
                            <i class="ion ion-trash-b"></i>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
            </div>

            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="card-header bg-warning d-flex align-items-center" style="height: 3.5em">
                            <h3 class="card-title">ข้อมูลรถ</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>ทะเบียนรถ</th>
                                    <th>หัวบรรทุก</th>
                                    <th>หางบรรทุก</th>
                                    <th>ยี่ห้อรถ</th>
                                    <th>ประเภทรถ</th>
                                    <th>รุ่นรถ</th>
                                    <th>ขนาดเครื่องยนต์</th>
                                    <th>ปริมาณน้ำมันเครื่อง</th>
                                    <th>ปริมาณน้ำมันเกียร์</th>
                                    <th>ปริมาณน้ำมันเฟืองท้าย</th>
                                </tr>
                                </thead>
                                <tbody>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>ทะเบียนรถ</th>
                                    <th>หัวบรรทุก</th>
                                    <th>หางบรรทุก</th>
                                    <th>ยี่ห้อรถ</th>
                                    <th>ประเภทรถ</th>
                                    <th>รุ่นรถ</th>
                                    <th>ขนาดเครื่องยนต์</th>
                                    <th>ปริมาณน้ำมันเครื่อง</th>
                                    <th>ปริมาณน้ำมันเกียร์</th>
                                    <th>ปริมาณน้ำมันเฟืองท้าย</th>
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
    {{--Modal Form Add--}}
    <div class="modal fade" id="addcarinfo">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h4 class="modal-title"><i class="fas fa-plus-circle "></i> เพิ่มข้อมูลรถ</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row col-12">
                        <div class="col-3 text-right">
                            <label>ทะเบียนรถ :</label>
                        </div>
                        <div class="col-9">
                            <input class="col-9" maxlength="150" type="text">
                        </div>
                    </div>
                    <div class="row col-12">
                        <div class="col-3 text-right">
                            <label>หัวบรรทุก :</label>
                        </div>
                        <div class="col-9">
                            <input class="col-9" maxlength="150" type="text">
                        </div>
                    </div>
                    <div class="row col-12">
                        <div class="col-3 text-right">
                            <label>หางบรรทุก :</label>
                        </div>
                        <div class="col-9">
                            <input class="col-9" maxlength="150" type="text">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3 text-right">
                            <label>ประเภทรถ :</label>
                        </div>
                        <div class="col-9">
                            <select>
                                <option>--เลือกประเภทรถ--</option>
                                <option>รถยนต์</option>
                                <option>รถกระบะ</option>
                                <option>รถตู้</option>
                                <option>รถบรรทุก</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3 text-right">
                            <label>รุ่นรถ :</label>
                        </div>
                        <div class="col-9">
                            <select>
                                <option>--เลือกรุ่นรถ--</option>
                                <option>ISUZU</option>
                                <option>HINO</option>
                                <option>SCANIA</option>
                                <option>Volvo</option>
                                <option>FOTON</option>
                            </select>
                        </div>
                    </div>
                    <div class="row col-12">
                        <div class="col-3 text-right">
                            <label>ขนาดเครื่องยนต์ :</label>
                        </div>
                        <div class="col-9">
                            <input class="col-9" maxlength="150" type="text">
                        </div>
                    </div>
                    <div class="row col-12">
                        <div class="col-3 text-right">
                            <label>ปริมาณน้ำมันเครื่อง :</label>
                        </div>
                        <div class="col-9">
                            <input class="col-9" maxlength="150" type="text">
                        </div>
                    </div>
                    <div class="row col-12">
                        <div class="col-3 text-right">
                            <label>ปริมาณน้ำมันเกียร์ :</label>
                        </div>
                        <div class="col-9">
                            <input class="col-9" maxlength="150" type="text">
                        </div>
                    </div>
                    <div class="row col-12">
                        <div class="col-3 text-right">
                            <label>ปริมาณน้ำมันเฟืองท้าย :</label>
                        </div>
                        <div class="col-9">
                            <input class="col-9" maxlength="150" type="text">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Confirm</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    {{--Modal Form Update--}}
    <div class="modal fade" id="updatecarinfo">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h4 class="modal-title"><i class="fas fa-plus-circle "></i> อัปเดตข้อมูลรถ</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-3 text-right">
                            <label>ทะเบียนรถ :</label>
                        </div>
                        <div class="col-9">
                            <select>
                                <option>--เลือกทะเบียนรถ--</option>
                            </select>
                        </div>
                    </div>
                    <div class="row col-12">
                        <div class="col-3 text-right">
                            <label>หัวบรรทุก :</label>
                        </div>
                        <div class="col-9">
                            <input class="col-9" maxlength="150" type="text">
                        </div>
                    </div>
                    <div class="row col-12">
                        <div class="col-3 text-right">
                            <label>หางบรรทุก :</label>
                        </div>
                        <div class="col-9">
                            <input class="col-9" maxlength="150" type="text">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3 text-right">
                            <label>ประเภทรถ :</label>
                        </div>
                        <div class="col-9">
                            <select>
                                <option>--เลือกประเภทรถ--</option>
                                <option>รถยนต์</option>
                                <option>รถกระบะ</option>
                                <option>รถตู้</option>
                                <option>รถบรรทุก</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3 text-right">
                            <label>รุ่นรถ :</label>
                        </div>
                        <div class="col-9">
                            <select>
                                <option>--เลือกรุ่นรถ--</option>
                                <option>ISUZU</option>
                                <option>HINO</option>
                                <option>SCANIA</option>
                                <option>Volvo</option>
                                <option>FOTON</option>
                            </select>
                        </div>
                    </div>
                    <div class="row col-12">
                        <div class="col-3 text-right">
                            <label>ขนาดเครื่องยนต์ :</label>
                        </div>
                        <div class="col-9">
                            <input class="col-9" maxlength="150" type="text">
                        </div>
                    </div>
                    <div class="row col-12">
                        <div class="col-3 text-right">
                            <label>ปริมาณน้ำมันเครื่อง :</label>
                        </div>
                        <div class="col-9">
                            <input class="col-9" maxlength="150" type="text">
                        </div>
                    </div>
                    <div class="row col-12">
                        <div class="col-3 text-right">
                            <label>ปริมาณน้ำมันเกียร์ :</label>
                        </div>
                        <div class="col-9">
                            <input class="col-9" maxlength="150" type="text">
                        </div>
                    </div>
                    <div class="row col-12">
                        <div class="col-3 text-right">
                            <label>ปริมาณน้ำมันเฟืองท้าย :</label>
                        </div>
                        <div class="col-9">
                            <input class="col-9" maxlength="150" type="text">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Confirm</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    {{--Modal Form Delete--}}
    <div class="modal fade" id="deletecarinfo">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h4 class="modal-title"><i class="fas fa-plus-circle "></i> ลบข้อมูลรถ</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-3 text-right">
                            <label>ทะเบียนรถ :</label>
                        </div>
                        <div class="col-9">
                            <select>
                                <option>--เลือกทะเบียนรถ--</option>
                            </select>
                        </div>
                    </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Confirm</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
@endsection

