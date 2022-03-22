@extends('layout.template')
@section('title', $title)
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2>Produk</h2>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="{{ route('product.create') }}" class="btn btn-sm btn-success"><i class="fas fa-sm fa-plus"></i> Tambah</a>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table" id="data-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $product->image }}</td>
                        <td>{{ $product->name }}</td>
                        <td>Rp {{ number_format($product->price) }}</td>
                        <td>
                            <a href="{{ route('user.edit', ['id' => $product->id]) }}" class="btn btn-sm btn-warning"><i class="fas fa-pen"></i></a>
                            <button type="button" class="btn btn-sm btn-danger btn-delete" data-id="{{ $product->id }}"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @push('scripts')
        <script type="text/javascript">
            $('.btn-delete').click(function(e) {
                e.preventDefault();
                Swal.fire({
                    icon: 'question',
                    title: 'Yakin untuk hapus data ini?',
                    showCancelButton: true,
                    confirmButtonText: 'Ya',
                    cancelButtonText: 'Tidak'
                }).then((res) => {
                    if (res.isConfirmed) {
                        let id = $(this).data('id');
                        let url = '{{ route('user.delete', ':id') }}';
                        url = url.replace(':id', id);
                        $.ajax({
                            url: url,
                            method: 'DELETE',
                            data: {
                                _token: '{{ csrf_token() }}'
                            },
                            success: function(res) {
                                Swal.fire({
                                    icon: 'success',
                                    title: res.alert
                                }).then(function() {
                                    location.reload();
                                });
                            },
                            error: function(err) {
                                toastr.error('Hapus data gagal, terdapat masalah pada server!');
                            }
                        })
                    }
                })
            });
        </script>
    @endpush
@endsection
