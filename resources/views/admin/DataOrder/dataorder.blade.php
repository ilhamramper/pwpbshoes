@extends('layoutsadmin.template')

@section('admin')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tabel Data Order</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex justify-content-between align-items-center">
                <h6 class="m-0 font-weight-bold text-primary">Data Order</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr class="text-center">
                                <th>ID Order</th>
                                <th>Nama</th>
                                <th>No. HP</th>
                                <th>Email</th>
                                <th>Total</th>
                                <th>Payment</th>
                                <th>Tanggal Order</th>
                                <th>Status</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach ($orders as $order)
                                <tr>
                                    <td>{{ $order->id_order }}</td>
                                    <td>{{ $order->user->name }}</td>
                                    <td>{{ $order->phone }}</td>
                                    <td>{{ $order->email }}</td>
                                    <td>${{ number_format($order->total, 2) }}</td>
                                    <td>{{ $order->payment }}</td>
                                    <td>{{ $order->created_at->format('H:i:s Y-m-d') }}</td>
                                    <td></td>
                                    <td class="d-flex justify-content-center">
                                        <a href="" class="btn btn-primary">Simpan</a>
                                        <a href="" class="btn btn-warning">Detail</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
