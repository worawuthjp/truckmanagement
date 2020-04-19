@extends('layout.master')

@section('body')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content col-6 ml-auto mr-auto">
            <div class="row">
                <div class="container mt-4 pt-2">
                    <div class="card">
                        <div class="card-header bg-warning d-flex align-items-center" style="height: 3.5em">
                            <h3 class="card-title">เเก้ไขรหัสผ่าน</h3>
                        </div>
                        <div class="card-body container">

                            <div class="row col-12">
                                <div class="col-5 text-right">
                                    <label>รหัสผ่านเก่า :</label>
                                </div>
                                <div class="col-7 text-left">
                                    <input class="col-7" maxlength="100" type="password">
                                </div>
                            </div>
                            <div class="row col-12">
                                <div class="col-5 text-right">
                                    <label>รหัสผ่านใหม่ :</label>
                                </div>
                                <div class="col-7 text-left">
                                    <input class="col-7" maxlength="100" type="password">
                                </div>

                            </div>
                            <div class="row col-12">
                                <div class="col-5 text-right">
                                    <label>ยืนยันรหัสผ่าน:</label>
                                </div>
                                <div class="col-7 text-left">
                                    <input class="col-7" maxlength="100" type="password">
                                </div>

                            </div>
                        </div>
                        <div class="card-body">
                            <a href="#" class="btn btn-primary float-right">Confirm</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection

