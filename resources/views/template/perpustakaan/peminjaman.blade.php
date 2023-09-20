@extends('template.master')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Input Data peminjaman</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/peminjaman/store" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Pinjam</label>
                    <input type="date" class="form-control" name="tanggal_pinjam" placeholder="Input Tanggal Pinjam">
                    <label for="exampleInputEmail1">Tanggal Kembali</label>
                    <input type="date" class="form-control" name="tanggal_kembali" placeholder="Input Tanggal Kembali">
</div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="submit" class="btn btn-primary">Reset</button>
                </div>
              </form>
            </div>
</div>
@endsection