<table class="table table-bordered">
    <tr>
        <th>Nama</th>
        <th>{{ $item->name }}</th>
    </tr>
    <tr>
        <th>Email</th>
        <th>{{ $item->email }}</th>
    </tr>
    <tr>
        <th>Nomor</th>
        <th>{{ $item->number }}</th>
    </tr>
    <tr>
        <th>Alamat</th>
        <th>{{ $item->address }}</th>
    </tr>
    <tr>
        <th>Total Transaksi</th>
        <th>{{ $item->transaction_ttl }}</th>
    </tr>
    <tr>
        <th>Status Transaksi</th>
        <th>{{ $item->transaction_sts }}</th>
    </tr>
    <tr>
        <th>Pembelian Produk</th>
        <th>
            <table class="table table-bordered w-100">
                <tr>
                    <th>Nama</th>
                    <th>Tipe</th>
                    <th>Harga</th>
                </tr>
                @foreach ($item->detail as $d)
                    <tr>
                        <td>{{ $d->product->name }}</td>
                        <td>{{ $d->product->type }}</td>
                        <td>{{ $d->product->price }}</td>
                    </tr>
                @endforeach
            </table>
        </th>
    </tr>
</table>
<div class="row">
    <div class="col-4">
        <a href="{{ route('transaction.status', $item->id) }}?status=SUCCESS"
            class="btn btn-success btn-block"> <i class="fa fa-check"></i>Set Success
        </a>
        <a href="{{ route('transaction.status', $item->id) }}?status=FAILED"
            class="btn btn-warning btn-block"> <i class="fa fa-check"></i>Set Gagal
        </a>
        <a href="{{ route('transaction.status', $item->id) }}?status=PENDING"
            class="btn btn-warning btn-block"> <i class="fa fa-spinner"></i>Set Pending
        </a>
        
    </div>
</div>