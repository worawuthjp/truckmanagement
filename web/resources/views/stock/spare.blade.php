@extends('layout.master')

@section('body')
    <div class="content-wrapper pt-3">
        <!-- Main Content-->
        <div class="content">
            <div class="row" >
                <div class="col-12">
                    <div class="card">
                        <div class="card-header bg-warning d-flex align-items-center" style="height: 3.5em">
                            <h3 class="card-title">ข้อมูลอะไหล่</h3>
                            <!-- card-header -->
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ชื่ออะไหล่</th>
                                        <th>รหัส</th>
                                        <th>ยานพาหนะ</th>
                                        <th>ราคาต่อชิ้น(บาท)</th>
                                        <th>จำนวน</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>ล้อแม็ก Hyundai Grand Starex 2020</td>
                                        <td>9999</td>
                                        <td><p>รถกระบะ</p><p>รถบรรทุก</p></td>
                                        <td>1,500</td>
                                        <td>50</td>
                                    </tr>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>ชื่ออะไหล่</th>
                                        <th>รหัส</th>
                                        <th>ยานพาหนะ</th>
                                        <th>ราคาต่อชิ้น(บาท)</th>
                                        <th>จำนวน</th>
                                    </tr>
                                </tfoot>
                            </table>
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
