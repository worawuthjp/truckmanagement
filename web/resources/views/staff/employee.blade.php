@extends('layout.master')

@section('body')
    <script>
        $(document).ready(function () {
           $(".transport").hide();
            $(".employee-select").change(function () {
               var transport = $(this).children("option:selected").val();
               if (transport == 1)
               {
                   $(".transport").show();
               }
               else
                   $(".transport").hide();
           });
        });
    </script>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper pt-3">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h5>ข้อมูลพนักงานทั้งหมด</h5>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main Content-->
        <div class="content">
            <div class="row" >
                <div class="col-lg-3 col-4 cursor-hand" style="height: 8em" data-toggle="tooltip" title="">
                    <!-- small box -->
                    <div class="small-box bg-info  d-flex align-items-center" style="height: 7em"
                         data-toggle="modal" data-target="#add_staff">
                        <div class="inner">
                            <label class="font-weight-light cursor-hand">
                                <h2>เพิ่ม</h2>
                                พนักงานใหม่
                            </label>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user-plus"></i>
                        </div>
                    </div>
                </div>
                <!-- row -->
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
                                    <th>รหัสประจำตัว</th>
                                    <th>ชื่อ-นามสกุล</th>
                                    <th>แผนก</th>
                                    <th>ตำแหน่ง</th>
                                    <th>สถาะการทำงาน</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>

                                        <td>9999</td>
                                        <td>นายสมชาย&nbsp;&nbsp;&nbsp;&nbsp;มุ่งมาณะ</td>
                                        <td>ขนส่ง</td>
                                        <td>หัวหน้าฝ่าย</td>
                                        <td>ทำงาน</td>
                                        <td align="center"><button data-toggle="modal" data-target="#detail">รายละเอียด</button></td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                <tr>

                                    <th>รหัสประจำตัว</th>
                                    <th>ชื่อ-นามสกุล</th>
                                    <th>แผนก</th>
                                    <th>ตำแหน่ง</th>
                                    <th>สถาะการทำงาน</th>
                                    <th></th>
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

        <!-- content -->
        </div>
        <!-- content warpper --->
    </div>
    {{--Modal Form Detail--}}
    <div class="modal fade" id="detail">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h4 class="modal-title">นายสมชาย&nbsp;&nbsp;&nbsp;&nbsp;มุ่งมาณะ</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                <!-- modal-header -->
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-7 text-right">
                            <img src="<?php echo $img = asset('assets/img/user1-128x128.jpg'); ?>"></br></br>
                        </div>
                    </div>
                        <div class="row">
                            <div class="col-3 text-right">
                                <label>รหัสพนักงาน :</label>
                            </div>
                            <div class="col-9">
                                <input class="col-9" maxlength="150" type="text" value="9999" readonly>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3 text-right">
                                <label>ชื่อ :</label>
                            </div>
                            <div class="col-9">
                                <input class="col-9" maxlength="150" type="text" value="สมชาย" readonly>
                            </div>
                            </div>

                            <div class="row">
                                <div class="col-3 text-right">
                                    <label>นามสกุล :</label>
                                </div>
                                <div class="col-9">
                                    <input class="col-9" maxlength="150" type="text" value="มุ่งมาณะ" readonly>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-3 text-right">
                                    <label>ชื่อเล่น :</label>
                                </div>
                                <div class="col-9">
                                    <input class="col-9" maxlength="150" type="text" value="สมชาย" readonly>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3 text-right">
                                    <label>เพศ :</label>
                                </div>
                                <div class="col-9">
                                    <input class="col-9" maxlength="150" type="text" value="ชาย" readonly>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3 text-right">
                                    <label>แผนก :</label>
                                </div>
                                <div class="col-9">
                                    <input class="col-9" maxlength="150" type="text" value="ขนส่ง" readonly>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3 text-right">
                                    <label>ตำแหน่ง :</label>
                                </div>
                                <div class="col-9">
                                    <input class="col-9" maxlength="150" type="text" value="หัวหน้าฝ่าย" readonly>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3 text-right">
                                    <label>ธนาคาร :</label>
                                </div>
                                <div class="col-9">
                                    <input class="col-9" maxlength="150" type="text" value="ไทยพาณิชย์" readonly>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3 text-right">
                                    <label>เลขที่บัญชี :</label>
                                </div>
                                <div class="col-9">
                                    <input class="col-9" maxlength="150" type="text" value="xxx-xxx-xxxx" readonly>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3 text-right">
                                    <label>เลขที่ใบขับขี่ :</label>
                                </div>
                                <div class="col-9">
                                    <input class="col-9" maxlength="150" type="text" value="12345678" readonly>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-3 text-right">
                                    <label>ชนิด :</label>
                                </div>
                                <div class="col-9">
                                    <input class="col-9" maxlength="150" type="text" value="รถยนต์ส่วนบุคคล" readonly>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3 text-right">
                                    <label>วันที่อนุญาต :</label>
                                </div>
                                <div class="col-9">
                                    <input class="col-9" maxlength="150" type="text" value="12-03-2562" readonly>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3 text-right">
                                    <label>วันที่หมดอายุ :</label>
                                </div>
                                <div class="col-9">
                                    <input class="col-9" maxlength="150" type="text" value="12-03-2567" readonly>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3 text-right">
                                    <label>สถานที่ออกใบอนุญาต :</label>
                                </div>
                                <div class="col-9">
                                    <input class="col-9" maxlength="150" type="text" value="กรุงเทพมหานคร" readonly>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3 text-right">
                                    <label>เกิดวันที่ :</label>
                                </div>
                                <div class="col-9">
                                    <input class="col-9" maxlength="150" type="text" value="19/01/1989" readonly>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-3 text-right">
                                    <label>วุฒิการศึกษา :</label>
                                </div>
                                <div class="col-9">
                                    <input class="col-9" maxlength="150" type="text" value="ปริญญาตรี" readonly>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-3 text-right">
                                    <label>อีเมลล์ :</label>
                                </div>
                                <div class="col-9">
                                    <input class="col-9" maxlength="150" type="text" value="Somchai@email.com" readonly>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-3 text-right">
                                    <label>ที่อยู่ :</label>
                                </div>
                                <div class="col-9">
                                    <input class="col-9" maxlength="150" type="text" value="1234 ม.1 ต.a อ.b จ.c 99999" readonly>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-3 text-right">
                                    <label>วันทีเข้าทำงาน :</label>
                                </div>
                                <div class="col-9">
                                    <input class="col-9" maxlength="150" type="text" value="12/03/2015" readonly>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3 text-right">
                                    <label>เบอร์โทรติดต่อ :</label>
                                </div>
                                <div class="col-9">
                                    <input class="col-9" maxlength="150" type="text" value="09xxxxxxxx" readonly>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3 text-right">
                                    <label>ตารางการทำงาน :</label>
                                </div>
                                <div class="col-9">
                                    <a href="#" style="text-decoration: none">ดูรายละเอียดเพิ่มเติม</a>
                                </div>
                            </div>
                        <!-- modal-body -->
                </div>
                <div class="modal-footer">
                    <label class="btn btn-warning"  id="gotoupdate" data-dismiss="modal"><i class="far fa-edit"></i>&ensp;แก้ไขข้อมูล</label>
                    <label class="btn btn-danger" data-dismiss="modal" data-toggle="modal" data-target="#delete_staff"><i class="fas fa-trash"></i>&ensp;ลบพนักงาน</label>
                </div>
                <!-- modal-content -->
            </div>
            <!-- modal-dialog -->
        </div>
        <!-- modal fade -->
    </div>
    {{--Modal Form Update--}}
    <div class="modal fade" id="update_staff">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h4 class="modal-title"><i class="far fa-edit"></i>&ensp;แก้ไขข้อมูล</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <!-- modal-header -->
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-7 text-right">
                            <img src="<?php echo $img = asset('assets/img/user1-128x128.jpg'); ?>"></br></br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3 text-right">
                            <label>รหัสพนักงาน :</label>
                        </div>
                        <div class="col-9">
                            <input class="col-9" maxlength="150" type="text" value="9999" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3 text-right">
                            <label>ชื่อ :</label>
                        </div>
                        <div class="col-9">
                            <input class="col-9" maxlength="150" type="text" value="สมชาย" >
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-3 text-right">
                            <label>นามสกุล :</label>
                        </div>
                        <div class="col-9">
                            <input class="col-9" maxlength="150" type="text" value="มุ่งมาณะ" >
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-3 text-right">
                            <label>ชื่อเล่น :</label>
                        </div>
                        <div class="col-9">
                            <input class="col-9" maxlength="150" type="text" value="สมชาย" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3 text-right">
                            <label>เพศ :</label>
                        </div>
                        <div class="col-9">
                            <select class="col-9">
                                <option>ชาย</option>
                                <option>หญิง</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3 text-right">
                            <label>แผนก :</label>
                        </div>
                        <div class="col-9">
                            <input class="col-9" maxlength="150" type="text" value="ขนส่ง" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3 text-right">
                            <label>ตำแหน่ง :</label>
                        </div>
                        <div class="col-9">
                            <input class="col-9" maxlength="150" type="text" value="หัวหน้าฝ่าย" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3 text-right">
                            <label>ธนาคาร :</label>
                        </div>
                        <div class="col-9">
                            <input class="col-9" maxlength="150" type="text" value="ไทยพาณิชย์" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3 text-right">
                            <label>เลขที่บัญชี :</label>
                        </div>
                        <div class="col-9">
                            <input class="col-9" maxlength="10" type="text" value="xxxxxxxxxx" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3 text-right">
                            <label>เลขที่ใบขับขี่ :</label>
                        </div>
                        <div class="col-9">
                            <input class="col-9" maxlength="8" type="text" value="12345678" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3 text-right">
                            <label>ชนิด :</label>
                        </div>
                        <div class="col-9">
                            <input class="col-9" maxlength="150" type="text" value="รถยนต์ส่วนบุคคล" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3 text-right">
                            <label>วันที่อนุญาต :</label>
                        </div>
                        <div class="col-9">
                            <input class="col-9" maxlength="150" type="date" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3 text-right">
                            <label>วันที่หมดอายุ :</label>
                        </div>
                        <div class="col-9">
                            <input class="col-9" maxlength="150" type="date" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3 text-right">
                            <label>สถานที่ออกใบอนุญาต :</label>
                        </div>
                        <div class="col-9">
                            <input class="col-9" maxlength="150" type="text" value="กรุงเทพมหานคร" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3 text-right">
                            <label>เกิดวันที่ :</label>
                        </div>
                        <div class="col-9">
                            <input class="col-9" maxlength="150" type="date" >
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-3 text-right">
                            <label>วุฒิการศึกษา :</label>
                        </div>
                        <div class="col-9">
                            <select class="col-9" >
                                <option>ต่ำกว่ามัธยมศึกษาตอนปลาย</option>
                                <option>มัธยมศึกษาตอนปลาย</option>
                                <option>ปริญญาตรี</option>
                                <option>ปริญญาโท</option>
                                <option>ปริญญาเอก</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-3 text-right">
                            <label>อีเมลล์ :</label>
                        </div>
                        <div class="col-9">
                            <input class="col-9" maxlength="150" type="email" value="Somchai@email.com" >
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-3 text-right">
                            <label>ที่อยู่ :</label>
                        </div>
                        <div class="col-9">
                            <input class="col-9" maxlength="150" type="text" value="1234 ม.1 ต.a อ.b จ.c 99999" >
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-3 text-right">
                            <label>วันทีเข้าทำงาน :</label>
                        </div>
                        <div class="col-9">
                            <input class="col-9" maxlength="150" type="date">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3 text-right">
                            <label>เบอร์โทรติดต่อ :</label>
                        </div>
                        <div class="col-9">
                            <input class="col-9" maxlength="10" type="text" value="1234567890" >
                        </div>
                    </div>
                    <!-- modal-body -->
                </div>
                <div class="modal-footer">
                    <label class="btn btn-warning" id="alreadyupdate" data-dismiss="modal">ยืนยันแก้ไข</label>
                    <label class="btn btn-danger" id="cancelupdate" data-dismiss="modal">ยกเลิก</label>
                </div>
                <!-- modal-content -->
            </div>
            <!-- modal-dialog -->
        </div>
        <!-- modal fade -->
    </div>
    {{--Modal Form Delete--}}
    <div class="modal fade" id="delete_staff">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h4 class="modal-title"><i class="fas fa-trash-alt"></i>&ensp;ลบ นายสมชาย มุ่งมาณะ</h4>
                <!-- modal-header -->
                </div>
                <div class="modal-body">
                    คุณตั้งใจจะลบพนักงานชื่อ นายสมชาย&nbsp;&nbsp;&nbsp;&nbsp;มุ่งมาณะ หรือไม่ ?

                    <div class="modal-footer">
                        <label class="btn btn-primary">ยันยัน</label>
                        <label class="btn btn-secondary" data-dismiss="modal">ยกเลิก</label>
                    </div>
                    <!-- modal-body -->
                </div>

            <!-- modal-content -->
            </div>
        <!-- modal-dialog -->
        </div>
    </div>
    {{--Modal Form Add--}}
    <div class="modal fade" id="add_staff">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h4 class="modal-title"><i class="fas fa-plus-circle "></i>&ensp;เพิ่มสมาชิกใหม่</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <!-- modal-header -->
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-7 text-right">
                            <img src="<?php echo $img = asset('assets/img/user1-128x128.jpg'); ?>"></br></br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-center">
                            <input type="file" ALIGN="center"></br></br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3 text-right">
                            <label>ชื่อ :</label>
                        </div>
                        <div class="col-9">
                            <input class="col-10 from-control" maxlength="150" type="text">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-3 text-right">
                            <label>นามสกุล :</label>
                        </div>
                        <div class="col-9">
                            <input class="col-10" maxlength="150" type="text"  >
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-3 text-right">
                            <label>ชื่อเล่น :</label>
                        </div>
                        <div class="col-9">
                            <input class="col-10" maxlength="150" type="text">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-3 text-right">
                            <label>เพศ :</label>
                        </div>
                        <div class="col-9">
                            <div class="col-4">
                                <input maxlength="150" type="radio" name="gender"><label>ชาย</label>
                            </div>
                            <div class="col-4">
                                <input maxlength="150" type="radio" name="gender"><label>หญิง</label>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3 text-right">
                            <label>แผนก :</label>
                        </div>
                        <div class="col-9">
                            <select class="col-10 employee-select">
                                <option disabled selected>--- เลือกหน้าที่ ---</option>
                                <option value="1">ขนส่ง</option>
                                <option value="2">บริการทั่วไป</option>
                                <option></option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-3 text-right">
                            <label>ตำแหน่ง :</label>
                        </div>
                        <div class="col-9">
                            <select class="col-10">
                                <option>หัวหน้าฝ่าย</option>
                                <option>พนักงานทั่วไป</option>
                                <option></option>
                            </select>
                        </div>
                    </div>
                    <div class="transport">
                        <div class="row">
                            <div class="col-3 text-right">
                                <label>เลขที่ใบขับขี่ :</label>
                            </div>
                            <div class="col-9">
                                <input class="col-10" maxlength="150" type="text" >
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-3 text-right">
                                <label>ชนิด :</label>
                            </div>
                            <div class="col-9">
                                <input class="col-10" maxlength="150" type="text" >
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3 text-right ">
                                <label>วันที่อนุญาต :</label>
                            </div>
                            <div class="col-9">
                                <input class="col-10" maxlength="150" type="text" >
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3 text-right">
                                <label>วันที่หมดอายุ :</label>
                            </div>
                            <div class="col-9">
                                <input class="col-8" maxlength="150" type="text">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3 text-right">
                                <label>สถานที่ออกใบอนุญาต :</label>
                            </div>
                            <div class="col-9">
                                <input class="col-10" maxlength="150" type="text">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-3 text-right">
                            <label>เกิดวันที่ :</label>
                        </div>
                        <div class="col-9">
                            <input class="col-10" maxlength="150" type="date">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-3 text-right">
                            <label>วุฒิการศึกษา :</label>
                        </div>
                        <div class="col-9">
                            <select class="col-10">
                                <option disabled selected>--- Select your option ---</option>
                                <option>ต่ำกว่ามัธยมศึกษาตอนปลาย</option>
                                <option>มัธยมศึกษาตอนปลาย</option>
                                <option>ปริญญาตรี</option>
                                <option>ปริญญาโท</option>
                                <option>ปริญญาเอก</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-3 text-right">
                            <label>อีเมลล์ :</label>
                        </div>
                        <div class="col-9">
                            <input class="col-10" maxlength="150" type="text">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-3 text-right">
                            <label>ที่อยู่ :</label>
                        </div>
                        <div class="col-9">
                            <input class="col-10" maxlength="150" type="text">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-3 text-right">
                            <label>เบอร์โทรติดต่อ :</label>
                        </div>
                        <div class="col-9">
                            <input class="col-10" maxlength="150" type="text">
                        </div>
                    </div>

                    <div class="modal-footer">
                        <label class="btn btn-primary">ยันยัน</label>
                        <label class="btn btn-secondary" data-dismiss="modal">ยกเลิก</label>
                    </div>
                    <!-- modal-body -->
                </div>

                <!-- modal-content -->
            </div>
            <!-- modal-dialog -->
        </div>
    </div>
@endsection
