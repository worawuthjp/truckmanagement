@extends('layout.master')

@section('body')
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
                        <div class="card-header bg-gradient-navy d-flex align-items-center" style="height: 3.5em">
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
                                        <option value="2">ร้านค้า B</option>
                                        <option value="3">ร้านค้า C</option>
                                        <option value="4">ทั้งหมด</option>
                                    </select>
                                    <!-- col-12 -->
                                </div>
                                <!-- row -->
                            </div>
                            <br><br>
                            <div class="row">
                                <div class="col-12">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th width="20%">วันที่สั่ง</th>
                                            <th width="20%">ร้านค้า</th>
                                            <th width="50%">รายการ</th>
                                            <th width="10%">จำนวน</th>
                                            <th width="10%">ราคาต่อชิ้น(บาท)</th>
                                            <th width="10%">ราคาทั้งหมด(บาท)</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th width="20%">วันที่สั่ง</th>
                                            <th width="20%">ร้านค้า</th>
                                            <th width="50%">รายการ</th>
                                            <th width="10%">จำนวน</th>
                                            <th width="10%">ราคาต่อชิ้น(บาท)</th>
                                            <th width="10%">ราคาทั้งหมด(บาท)</th>
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
                    <!-- col-6 -->
                </div>
                {{-- Store --}}
                <div class="col-6">
                    <div class="card">
                        <div class="card-header bg-gradient-danger d-flex align-items-center" style="height: 3.5em">
                            <h3 class="card-title">รายการที่ต้องสั่งเพิ่ม</h3>
                            <!-- card-header -->
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <table id="example2" class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th width="20%">วันที่หมด</th>
                                            <th width="50%">ชื่ออะไหล่</th>
                                            <th width="20%">รหัส</th>
                                            <th width="10%">ราคาต่อชิ้น(บาท)</th>
                                            <th width="10%">สั่งสินค้า</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>15/03/2563</td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th width="20%">วันที่หมด</th>
                                            <th width="50%">ชื่ออะไหล่</th>
                                            <th width="20%">รหัส</th>
                                            <th width="10%">ราคาต่อชิ้น(บาท)</th>
                                            <th width="10%">สั่งสินค้า</th>
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
                    <!-- col-6 -->
                </div>
                <!-- row -->
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header bg-warning d-flex align-items-center" style="height: 3.5em">
                            <h3 class="card-title">ข้อมูลอะไหล่</h3>
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
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th width="30%">ชื่ออะไหล่</th>
                                    <th width="10%">รหัส</th>
                                    <th width="15%">ยานพาหนะ</th>
                                    <th width="10%">ราคาต่อชิ้น(บาท)</th>
                                    <th width="10%">ร้านค้า</th>
                                    <th width="10%">จำนวน</th>
                                    <th width="20%">การจัดการ</th>
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

@endsection
