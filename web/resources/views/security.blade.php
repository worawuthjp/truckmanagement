@extends('layout.master')

@section('body')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper pt-3">
        <!-- Main content -->
        <section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-warning d-flex align-items-center" style="height: 3.5em">
                    <h3 class="card-title">เเก้ไขรหัสผ่าน</h3>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!-- /.content -->
        <div class="card text-center">
            <div class="card-body">

                    <div class="col-9">
                        <label>รหัสผ่านเก่า :</label>
                        <input class="col-3" maxlength="100" type="password">
                    </div>
                    <div class="col-9">
                        <label>รหัสผ่านใหม่ :</label>
                        <input class="col-3" maxlength="100" type="password">
                    </div>
                    <div class="col-9">
                        <label>ยืนยันรหัสผ่าน:</label>
                        <input class="col-3" maxlength="100" type="password">
                    </div>
                <br><a href="#" class="btn btn-primary">Confirm</a>
            </div>
            </div>
@endsection

