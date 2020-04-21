@extends('layout.master')

@section('body')
    <div class="content-wrapper pt-3">
        <!-- Main Content-->
        <div class="content">
            <div class="row" >
                <div class="col-12">
                    <div class="card">
                        <div class="card-header bg-warning d-flex align-items-center" style="height: 3.5em">
                            <h3 class="card-title">ข้อมูลน้ำมัน</h3>
                            <!-- card-header -->
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>ชื่อน้ำมัน</th>
                                    <th>ปริมาณ</th>
                                    <th>ยานพาหนะ</th>
                                    <th>ราคาต่อชิ้น(บาท)</th>
                                    <th>จำนวน</th>
                                </tr>
                                </thead>
                                <tbody>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>ชื่อน้ำมัน</th>
                                    <th>ปริมาณ</th>
                                    <th>ยานพาหนะ</th>
                                    <th>ราคาต่อชิ้น(บาท)</th>
                                    <th>จำนวน</th>
                                </tr>
                                </tfoot>
                            </table>
                            <!-- card-body -->
                        </div>
                        <!-- card-header -->
                    </div>
                <!-- col-12 -->
                </div>
            <!-- row -->
            </div>
        <!-- content -->
@endsection
