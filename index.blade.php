<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href='https://fonts.googleapis.com/css?family=RobotoDraft' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="app.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><style>

html,body,h1,h2,h3,h4,h5 {font-family: "RobotoDraft", "Roboto", sans-serif}
.w3-bar-block .w3-bar-item {padding: 16px}
</style>
<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-black w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="white">
      <i class="fa fa-remove"></i>
    </a>
    <img src="/w3images/avatar_g2.jpg" style="width:45%;" class="w3-round"><br><br>
    <h4><b>ADMIN</b></h4>
    <p class="w3-text-grey">admin </p>
  </div>
  <div class="w3-bar-block">
    <a href="/homeAdmin" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>Dashboard</a> 
    <a href="dataPesan" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>Pemesanan</a> 
    <a href="create" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>Pembayaran</a>
    <a href="post" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>Laporan</a>
    <a href="catatan" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>Pencatatan</a> 
  </div>
  <div class="w3-panel w3-large">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">
<div class="w3-container w3-top w3-white w3-xlarge w3-padding-10">
  <span class="w3-left w3-padding">SOME NAME</span>
           
  <a href="{{ route('logout') }}" style="cursor: pointer" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" class="btn btn-md btn-primary">LOGOUT</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                </div>
                
                  
               
            
               
  <!-- Header -->
 
  <header id="portfolio">
    <a href="#"><img src="/w3images/avatar_g2.jpg" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
   <br>
   <br>
   <br>

    <div class="row">
        <div class="col-md-20">
            <div class="card border-1 shadow rounded">
                <div class="card-body">
                <h2>Data Pesanan</h2>
 <style type="text/css">          
                .scroll{
    width: 900px;
    background: white;
    padding: 15px;
    overflow: scroll;
    height: 400px;
  
  }
 </style>
              <a href="tambahPesan"  class="btn btn-md btn-success mb-3">TAMBAH </a>
  
 <div class="scroll">
                <table class="table">
                <form action="dataPesan" method="get" >
                           @csrf
                        <table class="table table-bordered">
                       
                          
                              <tr>
                              <th scope="col">no</th>
                                
                              <th scope="col">Tanggal</th>
                                <th scope="col">Nama</th>
                            
                                <th scope="col">No telp</th>
                      
                                <th scope="col">paket pemesanan</th>
                                <th scope="col">Tujuan alamat </th>
                                <th scope="col"> total pembayaran</th>
                                <th scope="col">status</th>
                                <th scope="col">mengedit</th>
                                <th scope="col">hapus</th>
                              </tr>
                            </thead>

                            <tbody>
                            <?php $nomor=1;
                ?>
                              @forelse ($pesanans as $data_p)
                                <tr>
                           </td>
                           <td>{{$nomor++}}</td>
                                    <td>{{ $data_p->tanggal }}</td>
                                    <td>{!! $data_p->nama_pelanggan !!}</td>
                                    <td>{{ $data_p->no_telp }}</td>
                                
                                    <td>{{ $data_p->paket_pesanan }}</td>
                                    <td>{!! $data_p->alamat_tujuan !!}</td>
                                    <td>{{ $data_p->total_bayar }}</td>
                                    <td>{!! $data_p->status !!}</td>
                                   <td>
                                   
                               <a href="/pesanan/{id}/edit" class="btn btn-md btn-primary">Edit </a>
                                  </td>
                                         
                                            @method('DELETE')
                                            <td><button type="submit" class="btn btn-sm btn-danger">HAPUS</button></td>
                                        </form>
                                    </td>
                                </tr>
                              @empty
                                  <div class="alert alert-danger">
                                      Data Blog belum Tersedia.
                                  </div>
                              @endforelse
                            </tbody>
                          </table>  
                          {{ $pesanans->links() }}
                    </div>
                    </div>
  
</div>
<div>

  
        </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>/

</body>
</html>
