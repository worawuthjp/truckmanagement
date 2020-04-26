@extends('layout.master')

@section('body')
    <script>
        $(document).ready(function(){
            $('.card').hide();
            $('.custom-select').change(function(){
                $('.card').show();
                var sel = $(this).children("option:selected").val();
                $('.card-body').hide();
                $('#te'+sel).show();
                $('.card-title').text($(this).children("option:selected").text())
                $('#example'+sel).DataTable();
                $('.btn-success').attr('data-target','#add'+sel)
                if(sel == 1){
                    $('.btn-success').css('margin-left','78%')
                }else if(sel == "02"){
                    $('.btn-success').css('margin-left','70%')
                }else if(sel == 3){
                    $('.btn-success').css('margin-left','83%')
                }else if(sel == 4){
                    $('.btn-success').css('margin-left','75%')
                }else if(sel == 5){
                    $('.btn-success').css('margin-left','74%')
                }else if(sel == 0){
                    $('.btn-success').css('margin-left','74%')
                }
            });
        });
    </script>
    <div class="content-wrapper pt-3">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">ประวัติทั้งหมดของรถ</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <section class="content">

            <div class="row">
                <div class="col-4">
                    <div class=" input-group mb-3 " style="margin-top: 5px">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-gradient-cyan" >ประวัติที่ต้องการ :</span>
                        </div>
                        <select class="form-control custom-select" id="sel1" name="sellist1">
                            <option value="" disabled selected>---Select your option---</option>
                            <option value="0">ประวัติการเปลี่ยนอะไหล่</option>
                            <option value="1">ประวัติการซ่อมบำรุง</option>
                            <option value="02">ประวัติการต่อภาษี พรบ. ประกัน</option>
                            <option value="3">ประวัติยาง</option>
                            <option value="4">ประวัติการเกิดอุบัติเหตุ</option>
                            <option value="5">ประวัติการเติมน้ำมัน/ก๊าซ</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="card-header bg-warning d-flex align-items-center" style="height: 3.5em">
                            <h3 class="card-title">ประวัติการซ่อมบำรุง</h3>
                            <label ></label>
                            <button type="button" class="btn btn-success cursor-hand" data-toggle="modal" data-target="#add1" style="">+ เพิ่มรายการ</button>
                        </div>
                        <!-- /.card-header -->
                        <!--history repair-->
                        <div class="card-body" id="te1">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>ทะเบียนรถ</th>
                                    <th>วันที่เข้าซ่อม</th>
                                    <th>รายละเอียดการซ่อมบำรุง</th>
                                    <th>ระยะรถ</th>
                                    <th>อู่ที่เข้า</th>
                                    <th>ราคา</th>
                                    <th>กำหนดรอบถัดไป</th>
                                    <th></th>
                                    <th></th>

                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>4กข-4526</td>
                                    <td>06/04/2020</td>
                                    <td><p>ถ่ายน้ำมันเครื่อง</p><p>อัดจารบี</p></td>
                                    <td>45000</td>
                                    <td class="cursor-hand" data-toggle="modal" data-target="#myModal" style="color: #0c525d">อู่นครชัย</td>
                                    <td>4550</td>
                                    <td>07/05/2020</td>
                                    <td><button type="button" class="btn btn-warning">แก้ไข</button></td>
                                    <td><button type="button" class="btn btn-danger">ลบ</button></td>
                                </tr>
                                <tr>
                                    <td>1มค-1255</td>
                                    <td>06/04/2020</td>
                                    <td><p>ถ่ายน้ำมันเครื่อง</p><p>อัดจารบี</p><p>เติมน้ำมันเกียร์</p></td>
                                    <td>31000</td>
                                    <td class="cursor-hand" data-toggle="modal" data-target="#myModal" style="color: #0c525d">อู่นครชัย</td>
                                    <td>4550</td>
                                    <td>07/05/2020</td>
                                    <td><button type="button" class="btn btn-warning">แก้ไข</button></td>
                                    <td><button type="button" class="btn btn-danger">ลบ</button></td>
                                </tr>
                                <tr>
                                    <td>จม-3535</td>
                                    <td>08/04/2020</td>
                                    <td><p>ถ่ายน้ำมันเครื่อง</p><p>อัดจารบี</p><p>เติมน้ำมันเกียร์</p></td>
                                    <td>25000</td>
                                    <td>บริษัท</td>
                                    <td>-</td>
                                    <td>09/05/2020</td>
                                    <td><button type="button" class="btn btn-warning">แก้ไข</button></td>
                                    <td><button type="button" class="btn btn-danger">ลบ</button></td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>ทะเบียนรถ</th>
                                    <th>วันที่เข้าซ่อม</th>
                                    <th>รายละเอียดการซ่อมบำรุง</th>
                                    <th>ระยะรถ</th>
                                    <th>อู่ที่เข้า</th>
                                    <th>ราคา</th>
                                    <th>กำหนดรอบถัดไป</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </tfoot>
                            </table>

                        </div>
                        <!--/history repair-->
                        <!-- history vat -->
                        <div class="card-body" id="te02">
                            <table id="example02" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>ทะเบียนรถ</th>
                                    <th>วันครบกำหนด พรบ.</th>
                                    <th>สถานะ</th>
                                    <th>วันครบกำหนดต่อภาษี</th>
                                    <th>สถานะ</th>
                                    <th>วันครบกำหนดต่อประกัน</th>
                                    <th>สถานะ</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>4กข-4526</td>
                                    <td>06/04/2020</td>
                                    <td>N</td>
                                    <td>12/04/2020</td>
                                    <td>N</td>
                                    <td>07/05/2020</td>
                                    <td>N</td>
                                    <td><button type="button" class="btn btn-warning">แก้ไข</button></td>
                                    <td><button type="button" class="btn btn-danger">ลบ</button></td>
                                </tr>
                                <tr>
                                    <td>1มค-1255</td>
                                    <td>06/04/2020</td>
                                    <td>N</td>
                                    <td>20/04/2020</td>
                                    <td>N</td>
                                    <td>07/05/2020</td>
                                    <td>N</td>
                                    <td><button type="button" class="btn btn-warning">แก้ไข</button></td>
                                    <td><button type="button" class="btn btn-danger">ลบ</button></td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>ทะเบียนรถ</th>
                                    <th>วันครบกำหนด พรบ.</th>
                                    <th>สถานะ</th>
                                    <th>วันต่อภาษี</th>
                                    <th>สถานะ</th>
                                    <th>วันครบกำหนดต่อประกัน</th>
                                    <th>สถานะ</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </tfoot>
                            </table>

                        </div>
                        <!--/history vat-->

                        <!--history tires-->
                        <div class="card-body" id="te3">
                            <table id="example3" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>ทะเบียนรถ</th>
                                    <th>วันที่ติดตั้ง</th>
                                    <th>ตำแหน่ง</th>
                                    <th>สภาพยาง</th>
                                    <th>มิตเตอร์เริ่มต้น</th>
                                    <th>มิตเตอร์สิ้นสุด</th>
                                    <th>การสลับยางครั้งที่ 1</th>
                                    <th>การสลับยางครั้งที่ 2</th>
                                    <th>การสลับยางครั้งที่ 3</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>4กข-4526</td>
                                    <td>06/04/2020</td>
                                    <td>1</td>
                                    <td>ยางใหม่</td>
                                    <td>32000</td>
                                    <td>59000</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td><button type="button" class="btn btn-warning">แก้ไข</button></td>
                                    <td><button type="button" class="btn btn-danger">ลบ</button></td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>ทะเบียนรถ</th>
                                    <th>วันที่ติดตั้ง</th>
                                    <th>ตำแหน่ง</th>
                                    <th>สภาพยาง</th>
                                    <th>มิตเตอร์เริ่มต้น</th>
                                    <th>มิตเตอร์สิ้นสุด</th>
                                    <th>การสลับยางครั้งที่ 1</th>
                                    <th>การสลับยางครั้งที่ 2</th>
                                    <th>การสลับยางครั้งที่ 3</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </tfoot>
                            </table>

                        </div>
                        <!--/history tires-->

                        <!--history accident-->
                        <div class="card-body" id="te4">
                            <table id="example4" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>ทะเบียนรถ</th>
                                    <th>วัน/เวลาที่เกิดเหตุ</th>
                                    <th>อะไหล่ส่วนหัว</th>
                                    <th>ความเสียหาย (หัว)</th>
                                    <th>อะไหล่ส่วนหาง</th>
                                    <th>ความเสียหาย (หาง)</th>
                                    <th>ระยะเวลาในการซ่อม</th>
                                    <th>อู่ที่เข้าซ่อม</th>
                                    <th>ค่าเสียหาย</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>4กข-4526</td>
                                    <td>20/03/2020 10:30</td>
                                    <td>HD-1025</td>
                                    <td>สปอยเลอร์หัก</td>
                                    <td>LW-50F1</td>
                                    <td>ขีดข่วนเล็กน้อย</td>
                                    <td>3 วัน</td>
                                    <td class="cursor-hand" data-toggle="modal" data-target="#myModal" style="color: #0c525d">อู่นครชัย</td>
                                    <td>-</td>
                                    <td><button type="button" class="btn btn-warning">แก้ไข</button></td>
                                    <td><button type="button" class="btn btn-danger">ลบ</button></td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>ทะเบียนรถ</th>
                                    <th>วัน/เวลาที่เกิดเหตุ</th>
                                    <th>อะไหล่ส่วนหัว</th>
                                    <th>ความเสียหาย (หัว)</th>
                                    <th>อะไหล่ส่วนหาง</th>
                                    <th>ความเสียหาย (หาง)</th>
                                    <th>ระยะเวลาในการซ่อม</th>
                                    <th>อู่ที่เข้าซ่อม</th>
                                    <th>ค่าเสียหาย</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </tfoot>
                            </table>

                        </div>
                        <!--/history accident-->

                        <!--history gas-->
                        <div class="card-body" id="te5">
                            <table id="example5" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>ทะเบียนรถ</th>
                                    <th>วันที่เติม</th>
                                    <th>น้ำมันที่เติม</th>
                                    <th>ปริมาณ (ลิตร)</th>
                                    <th>ราคาต่อหน่วย (น้ำมัน)</th>
                                    <th>แก๊สที่เติม</th>
                                    <th>ปริมาณ (ลิตร)</th>
                                    <th>ราคาต่อหน่วย (น้ำมัน)</th>
                                    <th>ราคารวม</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>4กข-4526</td>
                                    <td>20/03/2020</td>
                                    <td>ดีเซล</td>
                                    <td>50</td>
                                    <td>29.31</td>
                                    <td>NGV</td>
                                    <td>100</td>
                                    <td>11.45</td>
                                    <td>1610</td>
                                    <td><button type="button" class="btn btn-warning">แก้ไข</button></td>
                                    <td><button type="button" class="btn btn-danger">ลบ</button></td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>ทะเบียนรถ</th>
                                    <th>วันที่เติม</th>
                                    <th>น้ำมันที่เติม</th>
                                    <th>ปริมาณ (ลิตร)</th>
                                    <th>ราคาต่อหน่วย (น้ำมัน)</th>
                                    <th>แก๊สที่เติม</th>
                                    <th>ปริมาณ (ลิตร)</th>
                                    <th>ราคาต่อหน่วย (น้ำมัน)</th>
                                    <th>ราคารวม</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </tfoot>
                            </table>

                        </div>
                        <!--/history gas-->

                        <!--history parts-->
                        <div class="card-body" id="te0">
                            <table id="example0" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>วันที่</th>
                                    <th>ทะเบียนรถ</th>
                                    <th>หัวบรรทุก</th>
                                    <th>หางบรรทุก</th>
                                    <th>ขนาดเครื่องยนต์</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>20/03/2020</td>
                                    <td>4กข-4526</td>
                                    <td align="center"><p style="display:block;">LF45-521</p><label class="fa fa-angle-double-down" style="display:block;"></label>
                                        <p style="display:block;">LF46-692</p>
                                    </td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td><button type="button" class="btn btn-warning">แก้ไข</button></td>
                                    <td><button type="button" class="btn btn-danger">ลบ</button></td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>วันที่</th>
                                    <th>ทะเบียนรถ</th>
                                    <th>หัวบรรทุก</th>
                                    <th>หางบรรทุก</th>
                                    <th>เครื่องยนต์</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </tfoot>
                            </table>

                        </div>
                        <!--/history parts-->

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
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">อู่นครชัย</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <label style="font-weight: bold; display: inline-block">ที่อยู่ : </label><p style="display: inline"> 999/99 ถนนสาระทุก แขวงสุกดิบ เขตสุขสัน จังหวัดสวรรค์ดิบ 99999 </p><br>
                    <label style="font-weight: bold; display: inline-block">เบอร์โทรศัพท์ : </label><p style="display: inline"> 099-999-9999 </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    <div class="modal fade" id="add0" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">เพิ่มข้อมูลการเปลี่ยนอะไหล่</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="somewhere" method="post"></form>
                    <label style="padding-right: 3px;font-weight: bold; display: inline-block">วันที่ : </label><input type="date" style="display: inline" class="form-control col-5" name="datePart" id="datePart" required><br>
                    <label style="padding-right: 3px;font-weight: bold; display: inline-block;">ทะเบียนรถ : </label><input type="text" style="display: inline" class="form-control col-5" name="carLic" id="carLic" required><br>
                    <label style="padding-right: 3px;font-weight: bold; display: inline-block">หัวรถบรรทุก : </label><label style="padding-right: 10px; display: inline-block">------</label><label style="padding-right: 3px; display: inline-block" class="fa fa-angle-double-down"></label><select class="form-control" id="partChange" name="partChange">
                        <option value="" disabled selected>---Select your option---</option>
                        <option value="LA-526">LA-526</option>
                        <option value="LA4-554">LA4-554</option></select><br>
                    <label style="padding-right: 3px;font-weight: bold; display: inline-block">หางรถบรรทุก : </label><label style="padding-right: 10px; display: inline-block">------</label><label style="padding-right: 3px; display: inline-block" class="fa fa-angle-double-down"></label><select class="form-control" id="partChange" name="partChange">
                        <option value="" disabled selected>---Select your option---</option>
                        <option value="LA-526">TL-626</option>
                        <option value="LA4-554">LL5-555</option></select><br>
                    <label style="padding-right: 3px;font-weight: bold; display: inline-block">เครื่องยนต์ : </label><label style="padding-right: 10px; display: inline-block">------</label><label style="padding-right: 3px; display: inline-block" class="fa fa-angle-double-down"></label><select class="form-control" id="partChange" name="partChange">
                        <option value="" disabled selected>---Select your option---</option>
                        <option value="LA-526">EN4-2554</option>
                        <option value="LA4-554">EN7-7705</option></select><br>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" data-dismiss="modal">submit</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    <div class="modal fade" id="add1" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-gradient-green">
                    <h4 class="modal-title">เพิ่มข้อมูลการซ่อมบำรุง</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="somewhere" method="post"></form>
                    <label style="padding-right: 3px;font-weight: bold; display: inline-block;">ทะเบียนรถ : </label><input type="text" style="display: inline" class="form-control col-5" name="carLic" id="carLic" required><br>
                    <label style="padding-right: 3px;font-weight: bold; display: inline-block">วันที่เข้าซ่อมบำรุง : </label><input type="date" style="display: inline" class="form-control col-5" name="dateCome" id="dateCome" required><br>
                    <label style="padding-right: 3px;font-weight: bold; display: inline-block">รายการซ่อมบำรุง : </label><input type="text" style="display: inline" class="form-control col-5" name="listAct" id="listAct" required><br>
                    <label style="padding-right: 3px;font-weight: bold; display: inline-block">ระยะรถ : </label><input type="number" style="display: inline" class="form-control col-5" name="carDistan" id="carDistan" min="0" required><br>
                    <label style="padding-right: 3px;font-weight: bold; display: inline-block">อู่ที่เข้า : </label><input type="text" style="display: inline" class="form-control col-5" name="carCare" id="carCare" required><br>
                    <label style="padding-right: 3px;font-weight: bold; display: inline-block">ราคา : </label><input type="number" style="display: inline" class="form-control col-5" name="carCare" id="carCare" min="0" required><br>
                    <label style="padding-right: 3px;font-weight: bold; display: inline-block">กำหนดรอบถัดไป : </label><input type="date" style="display: inline" class="form-control col-5" name="carCare" id="carCare" required><br>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" data-dismiss="modal">submit</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    <div class="modal fade" id="add02" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-gradient-green">
                    <h4 class="modal-title">เพิ่มข้อมูลการต่อภาษี</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="somewhere" method="post"></form>
                    <label style="padding-right: 3px;font-weight: bold; display: inline-block;">ทะเบียนรถ : </label><input type="text" style="display: inline" class="form-control col-5" name="carLic" id="carLic" required><br>
                    <label style="padding-right: 3px;font-weight: bold; display: inline-block">วันครบกำหนดพรบ. : </label><input type="date" style="display: inline" class="form-control col-5" name="datePLB" id="datePLB" required><br>
                    <label style="padding-right: 3px;font-weight: bold; display: inline-block">สถานะ : </label><select class="form-control" id="stat1" name="stat1">
                        <option value="" disabled selected>---Select your option---</option>
                        <option value="1">Y (ต่อแล้ว)</option>
                        <option value="2">N (ยังไม่ได้ต่อ)</option></select><br>
                    <label style="padding-right: 3px;font-weight: bold; display: inline-block">วันครบกำหนดภาษีรถ : </label><input type="date" style="display: inline" class="form-control col-5" name="dateVat" id="dateVat" required><br>
                    <label style="padding-right: 3px;font-weight: bold; display: inline-block">สถานะ : </label></label><select class="form-control" id="stat2" name="stat2">
                        <option value="" disabled selected>---Select your option---</option>
                        <option value="1">Y (ต่อแล้ว)</option>
                        <option value="2">N (ยังไม่ได้ต่อ)</option></select><br>
                    <label style="padding-right: 3px;font-weight: bold; display: inline-block">วันครบกำหนดประกันรถ : </label><input type="date" style="display: inline" class="form-control col-5" name="datePri" id="datePri" required><br>
                    <label style="padding-right: 3px;font-weight: bold; display: inline-block">สถานะ : </label></label><select class="form-control" id="stat3" name="stat3">
                        <option value="" disabled selected>---Select your option---</option>
                        <option value="1">Y (ต่อแล้ว)</option>
                        <option value="2">N (ยังไม่ได้ต่อ)</option></select><br>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">submit</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    <div class="modal fade" id="add3" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-gradient-green">
                    <h4 class="modal-title">เพิ่มข้อมูลการต่อภาษี</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="somewhere" method="post"></form>
                    <label style="padding-right: 3px;font-weight: bold; display: inline-block;">ทะเบียนรถ : </label><input type="text" style="display: inline" class="form-control col-5" name="carLic" id="carLic" required><br>
                    <label style="padding-right: 3px;font-weight: bold; display: inline-block">วันที่ติดตั้ง : </label><input type="date" style="display: inline" class="form-control col-5" name="dateBuild" id="dateBuild" required><br>
                    <label style="padding-right: 3px;font-weight: bold; display: inline-block;">ตำแหน่ง : </label><input type="text" style="display: inline" class="form-control col-5" name="posiTire" id="posiTire" required><br>
                    <label style="padding-right: 3px;font-weight: bold; display: inline-block">สภาพยาง : </label><select class="form-control" id="tireStat" name="tireStat">
                        <option value="" disabled selected>---Select your option---</option>
                        <option value="1">ยางใหม่</option>
                        <option value="2">ดอกยางสึก</option></select><br>
                    <label style="padding-right: 3px;font-weight: bold; display: inline-block">มิตเตอร์เริ่มต้น : </label><input type="number" style="display: inline" class="form-control col-5" name="startMit" id="startMit" min="0" required><br>
                    <label style="padding-right: 3px;font-weight: bold; display: inline-block">มิตเตอร์สิ้นสุด : </label><input type="number" style="display: inline" class="form-control col-5" name="endMit" id="endMit" min="0" required><br>
                    <label style="padding-right: 3px;font-weight: bold; display: inline-block">สลับยางครั้งที่ 1 : </label><input type="text" style="display: inline" class="form-control col-5" name="change1" id="change1" ><br>
                    <label style="padding-right: 3px;font-weight: bold; display: inline-block">สลับยางครั้งที่ 2 : </label><input type="text" style="display: inline" class="form-control col-5" name="change2" id="change2" ><br>
                    <label style="padding-right: 3px;font-weight: bold; display: inline-block">สลับยางครั้งที่ 3 : </label><input type="text" style="display: inline" class="form-control col-5" name="change3" id="change3" ><br>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">submit</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    <div class="modal fade" id="add4" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-gradient-green">
                    <h4 class="modal-title">เพิ่มข้อมูลการต่อภาษี</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="somewhere" method="post"></form>
                    <label style="padding-right: 3px;font-weight: bold; display: inline-block;">ทะเบียนรถ : </label><input type="text" style="display: inline" class="form-control col-5" name="carLic" id="carLic" required><br>
                    <label style="padding-right: 3px;font-weight: bold; display: inline-block">วัน/เวลาที่เกิดเหตุ : </label><input type="datetime-local" style="display: inline" class="form-control col-5" name="datiAcc" id="datiAcc" required><br>
                    <label style="padding-right: 3px;font-weight: bold; display: inline-block;">อะไหล่ส่วนหัว : </label><input type="text" style="display: inline" class="form-control col-5" name="headMod" id="headMod" required><br>
                    <label style="padding-right: 3px;font-weight: bold; display: inline-block;">ความเสียหาย(ส่วนหัว) : </label><input type="text" style="display: inline" class="form-control col-5" name="dmgHead" id="dmgHead" required><br>
                    <label style="padding-right: 3px;font-weight: bold; display: inline-block">อะไหล่ส่วนหาง : </label><input type="text" style="display: inline" class="form-control col-5" name="tailMod" id="tailMod" min="0" required><br>
                    <label style="padding-right: 3px;font-weight: bold; display: inline-block">ความเสียหาย(ส่วนหาง) : </label><input type="text" style="display: inline" class="form-control col-5" name="dmgTail" id="dmgTail" min="0" required><br>
                    <label style="padding-right: 3px;font-weight: bold; display: inline-block">ระยะเวลาในการซ่อม : </label><input type="text" style="display: inline" class="form-control col-5" name="longRepair" id="longRepair" required ><br>
                    <label style="padding-right: 3px;font-weight: bold; display: inline-block">อู่ที่เข้า : </label><input type="text" style="display: inline" class="form-control col-5" name="carCare" id="carCare" required><br>
                    <label style="padding-right: 3px;font-weight: bold; display: inline-block">ค่าเสียหาย : </label><input type="number" style="display: inline" class="form-control col-5" name="payDmg" id="payDmg" min="0" ><br>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">submit</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    <div class="modal fade" id="add5" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-gradient-green">
                    <h4 class="modal-title">เพิ่มข้อมูลการต่อภาษี</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="somewhere" method="post"></form>
                    <label style="padding-right: 3px;font-weight: bold; display: inline-block;">ทะเบียนรถ : </label><input type="text" style="display: inline" class="form-control col-5" name="carLic" id="carLic" required><br>
                    <label style="padding-right: 3px;font-weight: bold; display: inline-block">วันที่เติม : </label><input type="date" style="display: inline" class="form-control col-5" name="refuelDate" id="refuelDate" required><br>
                    <label style="padding-right: 3px;font-weight: bold; display: inline-block;">น้ำมันที่เติม : </label><input type="text" style="display: inline" class="form-control col-5" name="fuelType" id="fuelType" required><br>
                    <label style="padding-right: 3px;font-weight: bold; display: inline-block;">ปริมาณ(ลิตร) : </label><input type="number" style="display: inline" class="form-control col-5" name="valFuel" id="valFuel" min="0" required><br>
                    <label style="padding-right: 3px;font-weight: bold; display: inline-block">ราคาต่อหน่วย(น้ำมัน) : </label><input type="number" style="display: inline" class="form-control col-5" name="fuelUnit" id="fuelUnit" min="0" required><br>
                    <label style="padding-right: 3px;font-weight: bold; display: inline-block">แก๊สที่เติม : </label><input type="text" style="display: inline" class="form-control col-5" name="gasType" id="gasType" required><br>
                    <label style="padding-right: 3px;font-weight: bold; display: inline-block">ปริมาณ(ลิตร) : </label><input type="number" style="display: inline" class="form-control col-5" name="valGas" id="valGas" min="0" required ><br>
                    <label style="padding-right: 3px;font-weight: bold; display: inline-block">ราคาต่อหน่วย(แก๊ส) : </label><input type="number" style="display: inline" class="form-control col-5" name="gasUnit" id="gasUnit" min="0" required><br>
                    <label style="padding-right: 3px;font-weight: bold; display: inline-block">ราคารวม : </label><input type="number" style="display: inline" class="form-control col-5" name="totalRe" id="totalRe" min="0" ><br>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">submit</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    @endsection
