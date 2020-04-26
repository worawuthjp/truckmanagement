@extends('layout.master')
@section('body')
    <script>
        $(document).ready(function () {
            $(".list").hide();
            $("#store-table").hide();
            $('.custom-select').change(function () {
            var list = $(this).children("option:selected").val();
            $(".list").hide();
            $("#order"+list).show();
            $("#example"+list).DataTable();
            });
            $("#gotocart").on('click',function () {
               $("#cart-table").show();
               $("#store-table").hide();
            });
            $("#gotostore").on('click',function () {
                $("#store-table").show();
                $("#cart-table").hide();
                $("#example6").DataTable();
            });
        });
    </script>
    <div class="content-wrapper pt-3">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h5>ข้อมูลอะไหล่ทั้งหมด</h5>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main Content-->
        <div class="content">
            <div class="row">
                {{-- Order from Store --}}
                <div class="col-6">
                    <div class="card">
                        <div class="card-header bg-gradient-navy d-flex align-items-center " style="height: 3.5em">
                            <h3 class="card-title">รายการการสั่งซื้อ</h3>
                            <!-- card-header -->
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h4 class="text-center">เลือกร้านค้าเพื่อดูรายการที่สั่ง</h4>
                                    <select class="custom-select">
                                        <option disabled selected>---- Select your option ----</option>
                                        <option value="1">ร้านค้า A</option>
                                        <option value="3">ร้านค้า B</option>
                                        <option value="4">ร้านค้า C</option>
                                        <option value="5">ทั้งหมด</option>
                                    </select>
                                    <!-- col-12 -->
                                </div>
                                <!-- row -->
                            </div>
                            <br><br>
                            <div class="list" id="order5">
                                <div class="row">
                                    <div class="col-12">
                                        <table id="example5" class="table table-bordered table-striped">
                                            <thead>
                                            <tr>
                                                <th width="10%">วันที่สั่ง</th>
                                                <th width="20%">ร้านค้า</th>
                                                <th width="50%">รายการ</th>
                                                <th width="10%">จำนวน</th>
                                                <th width="10%">ราคาต่อชิ้น(บาท)</th>
                                                <th width="10%">ราคาทั้งหมด(บาท)</th>
                                                <th width="20%">สถานะ</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td >28/03/63</td>
                                                <td >ร้านค้า A</td>
                                                <td >ล้อรถร้าน A</td>
                                                <td >120</td>
                                                <td >3000</td>
                                                <td >360000</td>
                                                <td class="text-success">ได้รับแล้ว</td>
                                            </tr>
                                            <tr>
                                                <td >28/03/63</td>
                                                <td >ร้านค้า B</td>
                                                <td >ล้อรถร้าน B</td>
                                                <td >120</td>
                                                <td >3000</td>
                                                <td >360000</td>
                                                <td class="text-danger">ดำเนินการ</td>
                                            </tr>
                                            <tr>
                                                <td >28/03/63</td>
                                                <td >ร้านค้า C</td>
                                                <td >ล้อรถร้าน C</td>
                                                <td >120</td>
                                                <td >3000</td>
                                                <td >360000</td>
                                                <td class="text-danger">ดำเนินการ</td>
                                            </tr>
                                            <tr>
                                                <td >28/03/63</td>
                                                <td >ร้านค้า D</td>
                                                <td >ล้อรถร้าน D</td>
                                                <td >120</td>
                                                <td >3000</td>
                                                <td >360000</td>
                                                <td class="text-success">ได้รับแล้ว</td>
                                            </tr>
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <th width="20%">วันที่สั่ง</th>
                                                <th width="20%">ร้านค้า</th>
                                                <th width="50%">รายการ</th>
                                                <th width="10%">จำนวน</th>
                                                <th width="10%">ราคาต่อชิ้น(บาท)</th>
                                                <th width="10%">ราคาทั้งหมด(บาท)</th>
                                                <th width="20%">สถานะ</th>
                                            </tr>
                                            </tfoot>
                                        </table>
                                        <!-- col-12 -->
                                    </div>
                                    <!-- row -->
                                </div>
                                <!-- list -->
                            </div>
                            <div class="list" id="order4">
                                <div class="row">
                                    <div class="col-12">
                                        <table id="example4" class="table table-bordered table-striped">
                                            <thead>
                                            <tr>
                                                <th width="10%">วันที่สั่ง</th>
                                                <th width="20%">ร้านค้า</th>
                                                <th width="50%">รายการ</th>
                                                <th width="10%">จำนวน</th>
                                                <th width="10%">ราคาต่อชิ้น(บาท)</th>
                                                <th width="10%">ราคาทั้งหมด(บาท)</th>
                                                <th width="20%">สถานะ</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td >28/03/63</td>
                                                <td >ร้านค้า C</td>
                                                <td >ล้อรถร้าน C</td>
                                                <td >120</td>
                                                <td >3000</td>
                                                <td >360000</td>
                                                <td class="text-danger">ดำเนินการ</td>
                                            </tr>
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <th width="20%">วันที่สั่ง</th>
                                                <th width="20%">ร้านค้า</th>
                                                <th width="50%">รายการ</th>
                                                <th width="10%">จำนวน</th>
                                                <th width="10%">ราคาต่อชิ้น(บาท)</th>
                                                <th width="10%">ราคาทั้งหมด(บาท)</th>
                                                <th width="20%">สถานะ</th>
                                            </tr>
                                            </tfoot>
                                        </table>
                                        <!-- col-12 -->
                                    </div>
                                    <!-- row -->
                                </div>
                                <!-- list -->
                            </div>
                            <div class="list" id="order3">
                                <div class="row">
                                    <div class="col-12">
                                        <table id="example3" class="table table-bordered table-striped">
                                            <thead>
                                            <tr>
                                                <th width="10%">วันที่สั่ง</th>
                                                <th width="20%">ร้านค้า</th>
                                                <th width="50%">รายการ</th>
                                                <th width="10%">จำนวน</th>
                                                <th width="10%">ราคาต่อชิ้น(บาท)</th>
                                                <th width="10%">ราคาทั้งหมด(บาท)</th>
                                                <th width="20%">สถานะ</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td >28/03/63</td>
                                                <td >ร้านค้า B</td>
                                                <td >ล้อรถร้าน B</td>
                                                <td >120</td>
                                                <td >3000</td>
                                                <td >360000</td>
                                                <td class="text-danger">ดำเนินการ</td>
                                            </tr>
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <th width="20%">วันที่สั่ง</th>
                                                <th width="20%">ร้านค้า</th>
                                                <th width="50%">รายการ</th>
                                                <th width="10%">จำนวน</th>
                                                <th width="10%">ราคาต่อชิ้น(บาท)</th>
                                                <th width="10%">ราคาทั้งหมด(บาท)</th>
                                                <th width="20%">สถานะ</th>
                                            </tr>
                                            </tfoot>
                                        </table>
                                        <!-- col-12 -->
                                    </div>
                                    <!-- row -->
                                </div>
                                <!-- list -->
                            </div>
                            <div class="list" id="order1">
                                <div class="row">
                                    <div class="col-12">
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                            <tr>
                                                <th width="10%">วันที่สั่ง</th>
                                                <th width="20%">ร้านค้า</th>
                                                <th width="50%">รายการ</th>
                                                <th width="10%">จำนวน</th>
                                                <th width="10%">ราคาต่อชิ้น(บาท)</th>
                                                <th width="10%">ราคาทั้งหมด(บาท)</th>
                                                <th width="20%">สถานะ</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td >28/03/63</td>
                                                <td >ร้านค้า A</td>
                                                <td >ล้อรถร้าน A</td>
                                                <td >120</td>
                                                <td >3000</td>
                                                <td >360000</td>
                                                <td class="text-success">ได้รับแล้ว</td>
                                            </tr>
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <th width="20%">วันที่สั่ง</th>
                                                <th width="20%">ร้านค้า</th>
                                                <th width="50%">รายการ</th>
                                                <th width="10%">จำนวน</th>
                                                <th width="10%">ราคาต่อชิ้น(บาท)</th>
                                                <th width="10%">ราคาทั้งหมด(บาท)</th>
                                                <th width="20%">สถานะ</th>
                                            </tr>
                                            </tfoot>
                                        </table>
                                        <!-- col-12 -->
                                    </div>
                                    <!-- row -->
                                </div>
                                <!-- list -->
                            </div>

                            <!-- card-body -->
                        </div>
                        <!-- card -->
                    </div>
                    <!-- col-6 -->
                </div>
                {{-- Store --}}
                <div class="col-6 ">
                    <div class="row">
                        <div class="col-lg-3 col-4 cursor-hand" style="height: 8em" data-toggle="tooltip" title="">
                            <!-- small box -->
                            <div class="small-box bg-gradient-info  d-flex align-items-center" style="height: 7em"
                                 id="gotostore">
                                <div class="inner">
                                    <label class="font-weight-light cursor-hand">
                                        <h4>ร้านค้า</h4>
                                    </label>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-store"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-4 cursor-hand" style="height: 8em" data-toggle="tooltip" title="">
                            <!-- small box -->
                            <div class="small-box bg-gradient-danger  d-flex align-items-center" style="height: 7em"
                                 id="gotocart">
                                <div class="inner">
                                    <label class="font-weight-light cursor-hand">
                                        <h4>สิ่งที่ต้องซื้อ</h4>
                                    </label>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="cart-table">
                        <div class="card">
                            <div class="card-header bg-gradient-danger d-flex align-items-center " style="height: 3.5em">
                                <h3 class="card-title">รายการที่ต้องสั่งเพิ่ม</h3>
                            <!-- card-header -->
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <table id="example2" class="table table-bordered table-striped ">
                                            <thead>
                                            <tr>
                                                <th width="20%">วันที่หมด</th>
                                                <th width="50%">ชื่ออะไหล่</th>
                                                <th width="10%">รหัส</th>
                                                <th width="5%">ราคาต่อชิ้น(บาท)</th>
                                                <th width="20%">สั่งสินค้า</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>15/04/63</td>
                                                <td>ล้อจากร้าน B</td>
                                                <td>B9999</td>
                                                <td>3000</td>
                                                <td><button class="btn btn-success text-center" data-toggle="modal" data-target="#cart">สั่งของ</button></td>
                                            </tr>
                                            <tr>
                                                <td>16/04/63</td>
                                                <td>ล้อจากร้าน C</td>
                                                <td>C9999</td>
                                                <td>3000</td>
                                                <td><button class="btn btn-success text-center">สั่งของ</button></td>
                                            </tr>
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <th width="20%">วันที่หมด</th>
                                                <th width="50%">ชื่ออะไหล่</th>
                                                <th width="10%">รหัส</th>
                                                <th width="5%">ราคาต่อชิ้น(บาท)</th>
                                                <th width="20%">สั่งสินค้า</th>
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
                        <!--row id= cart-table -->
                    </div>
                    <div class="row" id="store-table">
                        <div class="card">
                            <div class="card-header bg-gradient-info d-flex align-items-center "  style="height: 3.5em">
                                <h3 class="card-title">ร้านค้า</h3>
                                <button type="button" class="btn cursor-hand" data-toggle="modal" data-target="#addstore"  style="margin-left: 60%;background-color: orange">+ เพิ่มรายการ</button>
                            <!-- card-header -->
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <table id="example6" class="table table-bordered table-striped " >
                                            <thead>
                                            <tr>
                                                <th width="500px">ร้านค้า</th>
                                                <th width="100px">รายละเอียด</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>ร้านค้า A</td>
                                                <td><label>รายละเอียด</label></td>
                                            </tr>
                                            <tr>
                                                <td>ร้านค้า B</td>
                                                <td><label>รายละเอียด</label></td>
                                            </tr>
                                            <tr>
                                                <td>ร้านค้า C</td>
                                                <td><label>รายละเอียด</label></td>
                                            </tr>
                                            <tr>
                                                <td>ร้านค้า D</td>
                                                <td><label>รายละเอียด</label></td>
                                            </tr>
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <th width="500px">ร้านค้า</th>
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
                        <!-- store-table -->
                    </div>
                    <!-- col-6 -->
                </div>
                <!-- row -->
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header bg-warning d-flex align-items-center" style="height: 3.5em">
                            <h3 class="card-title">ข้อมูลอะไหล่</h3>
                            <button type="button" class="btn btn-info cursor-hand" data-toggle="modal" data-target="#add1" style="margin-left: 78%">+ เพิ่มรายการ</button>
                            <!-- card-header -->
                        </div>
                        <div class="card-body">
                            <table id="example3" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th width="30%">ชื่ออะไหล่</th>
                                    <th width="10%">รหัส</th>
                                    <th width="15%">ยานพาหนะ</th>
                                    <th width="10%">ราคาต่อชิ้น(บาท)</th>
                                    <th width="10%">ร้านค้า</th>
                                    <th width="10%">จำนวน</th>
                                    <th width="20%">การจัดการ</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>ล้อจากร้าน A</td>
                                        <td>A9999</td>
                                        <td><p>รถกระบะ</p><p>รถยนต์</p></td>
                                        <td>3000</td>
                                        <td>ร้านค้า A</td>
                                        <td class="text-success">150</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-6">
                                                    <button class="btn btn-warning"><i class="far fa-edit"></i></button>
                                                </div>
                                                <div class="col-6">
                                                    <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>ล้อจากร้าน B</td>
                                        <td>B9999</td>
                                        <td><p>รถกระบะ</p><p>รถยนต์</p></td>
                                        <td>3000</td>
                                        <td>ร้านค้า B</td>
                                        <td class="text-danger">30</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-6">
                                                    <button class="btn btn-warning"><i class="far fa-edit"></i></button>
                                                </div>
                                                <div class="col-6">
                                                    <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>ล้อจากร้าน C</td>
                                        <td>C9999</td>
                                        <td><p>รถกระบะ</p><p>รถยนต์</p></td>
                                        <td>3000</td>
                                        <td>ร้านค้า C</td>
                                        <td class="text-danger">30</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-6">
                                                    <button class="btn btn-warning"><i class="far fa-edit"></i></button>
                                                </div>
                                                <div class="col-6">
                                                    <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>ล้อจากร้าน D</td>
                                        <td>D9999</td>
                                        <td><p>รถกระบะ</p><p>รถยนต์</p></td>
                                        <td>3000</td>
                                        <td>ร้านค้า D</td>
                                        <td class="text-success">150</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-6">
                                                    <button class="btn btn-warning"><i class="far fa-edit"></i></button>
                                                </div>
                                                <div class="col-6">
                                                    <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th width="30%">ชื่ออะไหล่</th>
                                    <th width="10%">รหัส</th>
                                    <th width="20%">ยานพาหนะ</th>
                                    <th width="10%">ราคาต่อชิ้น(บาท)</th>
                                    <th width="10%">ร้านค้า</th>
                                    <th width="10%">จำนวน</th>
                                    <th width="10%">การจัดการ</th>
                                </tr>
                                </tfoot>
                            </table>
                            <!-- card-body -->
                        </div>
                    </div>
                    <!-- col-12 -->
                </div>
                <!-- row -->
            </div>
            <!-- content -->
        </div>
        <!-- content-wrapper -->
    </div>
    {{-- Add List --}}
    <div class="modal fade" id="add1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h4 class="modal-title"><i class="fas fa-plus-circle"></i> เพิ่มข้อมูลรายการ</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <!-- modal-header -->
                </div>
                <div class="modal-body">
                    <div class="row col-12">
                        <div class="col-3 text-right">
                            <label>ชื่ออะไหล่ :</label>
                        </div>
                        <div class="col-9">
                            <input class="col-9" maxlength="150" type="text">
                        </div>
                    </div>
                    <div class="row col-12">
                        <div class="col-3 text-right">
                            <label>รหัส :</label>
                        </div>
                        <div class="col-9">
                            <input class="col-9" maxlength="150" type="text">
                        </div>
                    </div>
                    <div class="row col-12">
                        <div class="col-3 text-right">
                            <label>ยานพาหนะ :</label>
                        </div>
                        <div class="col-9">
                            <input class="col-9" maxlength="150" type="text">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-3 text-right">
                            <label>ร้านค้า :</label>
                        </div>
                        <div class="col-9">
                            <select>
                                <option disabled selected>-- Select your option --</option>
                                <option value="1">ร้านค้า A</option>
                                <option value="2">ร้านค้า B</option>
                                <option value="3">ร้านค้า C</option>
                                <option value="4">ร้านค้า D</option>
                            </select>
                        </div>
                    </div>
                    <div class="row col-12">
                        <div class="col-3 text-right">
                            <label>ราคาซื้อต่อชิ้น(บาท) :</label>
                        </div>
                        <div class="col-9">
                            <input class="col-9" maxlength="150" type="text">
                        </div>
                    </div>
                    <div class="row col-12">
                        <div class="col-3 text-right">
                            <label>ราคาขายต่อชิ้น(บาท) :</label>
                        </div>
                        <div class="col-9">
                            <input class="col-9" maxlength="150" type="text">
                        </div>
                    </div>
                    <div class="row col-12">
                        <div class="col-3 text-right">
                            <label>จำนวนขั้นต่ำ :</label>
                        </div>
                        <div class="col-9">
                            <input class="col-9" maxlength="150" type="number" min="0">
                        </div>
                    </div>
                    <!-- modal body -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success">Confirm</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="addstore">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-orange">
                    <h4 class="modal-title"><i class="fas fa-plus-circle"></i> เพิ่มร้านค้า</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <!-- modal-header -->
                </div>
                <div class="modal-body">
                    <div class="row col-12">
                        <div class="col-3 text-right">
                            <label>ชื่อร้าน :</label>
                        </div>
                        <div class="col-9">
                            <input class="col-9" maxlength="150" type="text">
                        </div>
                    </div>
                    <div class="row col-12">
                        <div class="col-3 text-right">
                            <label>ตำแหน่ง :</label>
                        </div>
                        <div class="col-9">
                            <input class="col-9" maxlength="150" type="text" >
                        </div>
                    </div>
                    <!-- modal body -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success">Confirm</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    {{-- Order --}}
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
                            <label>ชื่ออะไหล่ :</label>
                        </div>
                        <div class="col-9">
                            <label>ล้อจากร้าน B</label>
                        </div>
                    </div>
                    <div class="row col-12">
                        <div class="col-3 text-right">
                            <label>รหัส :</label>
                        </div>
                        <div class="col-9">
                            <label>B9999</label>
                        </div>
                    </div>
                    <div class="row col-12">
                        <div class="col-3 text-right">
                            <label>ราคาต่อชิ้น(บาท) :</label>
                        </div>
                        <div class="col-9">
                            <label>3000 THB</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3 text-right">
                            <label>ร้านค้า :</label>
                        </div>
                        <div class="col-5">
                            <select>
                                <option disabled selected>-- Select your option --</option>
                                <option value="1">ร้านค้า A</option>
                                <option value="2">ร้านค้า B</option>
                                <option value="3">ร้านค้า C</option>
                                <option value="4">ร้านค้า D</option>
                            </select>
                        </div>
                    </div>
                    <div class="row col-12">
                        <div class="col-3 text-right">
                            <label>จำนวนที่สั่งเพิ่ม :</label>
                        </div>
                        <div class="col-9">
                            <input class="col-9" maxlength="150" type="number" min="0">
                        </div>
                    </div>
                    <div class="row col-12">
                        <div class="col-3 text-right">
                            <label>ราคาทั้งหมด :</label>
                        </div>
                        <div class="col-9">
                            <label>.... THB</label>
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
