<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <h2> Edit Data </h2>
                        <form action="/pesanan/{{$pesanans->id}}/update" method="POST">
                        
                        @csrf  
                        <div class="form-group">
                    <label class="font-weight-bold">Tanggal</label>
                                <input type="text" class="form-control " name="tanggal" value="{{$pesanans->tanggal }}" 
                                placeholder="Masukkan tanggal" >
                            

                            </div>

                            
                            <div class="form-group">
                                <label class="font-weight-bold">Nama</label>
                                <input type="text" class="form-control" name="nama_pelanggan" value="{{ $pesanans->nama_pelanggan}}" placeholder="Masukkan Nama pelanggan">
                            
                            </div>
                            
                            <div class="form-group">
                                <label class="font-weight-bold">no telepon</label>
                                <input type="text" class="form-control" name="no_telp" value="{{$pesanans->no_telp }}" placeholder="Masukkan no telepon">
                            
                            </div>
                            
                            <div class="form-group">
                                <label class="font-weight-bold">paket pemesanan</label>
                                <input type="text" class="form-control" name="paket_pesanan" value="{{$pesanans->paket_pesanan }}" placeholder="Masukkan paket pemesanan">
                        
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">alamat tujuan</label>
                                <textarea type="text" class="form-control" name="alamat_tujuan" value="{{$pesanans->alamat_tujuan }}" placeholder="Masukkan alamat tujuan"></textarea>
                               
                               
                            </div>
                            
                            <div class="form-group">
                                <label class="font-weight-bold">Total Pembayaran</label>
                                <input type="text" class="form-control" name="total_bayar"value="{{$pesanans->total_bayar }}" placeholder="Masukkan Total Pembayaran">
                            
                            </div>
                           
                            <div class="form-group">
                                <label class="font-weight-bold">Status Pembayaran</label>
                                <input type="text" class="form-control" name="status" value="{{$pesanans->status }}" placeholder="Masukkan status pembayaran">
                            
                            </div>
                            
                            <button type="submit"   class="btn btn-md btn-primary">SIMPAN </a>
                           
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>
                            <a href="/dataPesan" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>kembali</a> 
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'content' );
</script>
</body>
</html>