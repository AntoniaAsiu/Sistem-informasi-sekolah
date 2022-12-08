<?=$this->extend('backend/template')?>
  <?=$this->section('content')?>

    <!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data bagian</h1>
                    <p class="mb-4">Data bagian untuk mengelola data pengguna yang ada di sistem.</p>


  <div class="container mt-5">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            
            <button id="btn-tambah" class="btn btn-primary">Tambah data</button>
            <h6 class="m-0 font-weight-bold text-primary">
                
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                                    
          <table id="table-pengguna" class="datatable table table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Bagian</th> 
                <th>Fungsi</th>
                <th>Tugas Pokok</th>
                <th>Aksi</th>
              </tr>
            </thead>
          </table>
        </div>
    </div>
  </div>
  <!--  -->
  <div id="modalForm" class="modal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 id="judul-form"> </h5>
          <button type="button" class="close" data-dismiss="modal" >&times;</button>
        </div>
        <div class="modal-body">
          <form method="post" action="<?=base_url('bagian')?>" id="formPengguna">
            <input type="hidden" name="id" />
            <input type="hidden" name="_method" />
            <div class="mb-3">
              <label for="nama" class="form-label">Nama Bagian</label>
              <input type="text" name="nama" class="form-control">
            </div>
            <div class="mb-3">
              <label for="fungsi" class="form-label">fungsi</label>
              <input type="text" name="fungsi" class="form-control">
            </div>
            <div class="mb-3">
              <label for="tugas_pokok" class="form-label">Tugas Pokok</label>
              <input type="text" name="tugas_pokok" class="form-control">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button class="btn btn-success" id="btn-kirim">Kirim</button>
        </div>
      </div>
    </div>
  </div>
  <?=$this->endSection()?>
  <!-- Script : -->
  <?=$this->section('script')?>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" 
    crossorigin="anonymous"></script> 
<script src="https://cdn.jsdelivr.net/gh/agoenxz2186/submitAjax@develop/submit_ajax.js" 
    ></script> 
<link href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet">
<script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script> 

  <script>
  $(document).ready(function(){

    // proses validasi pengiriman paket data
    $("form#formPengguna").submitAjax({
      pre:()=>{
        $("button#btn-kirim").hide();
      },
      pasca:()=>{
        $("button#btn-kirim").show();
      },
      success:(response,status)=>{
        $("#modalForm").modal("hide");
        $("table#table-pengguna").DataTable().ajax.reload();
      },
      error:(xhr,status)=>{
        alert("maaf , Data anda gagal terkirim")
      }
    })

    // menampilkan isi modal
    $("button#btn-tambah").on("click",function(){
      $("#judul-form").html("menambah data");
      $("#modalForm").modal("show");
      $("form#modalPengguna").trigger("reset");
      $("#formPengguna input[name=_method]").val("");
    });

    // kirim data 
    $("button#btn-kirim").on("click",function(){
      // periksa apakah sandi dan konfirmasi sandi sama ?
      var pass1= $("#sandi").val();
      var pass2= $("#konfirm-sandi").val();
      if(pass1 != pass2){
        // jika tidak sama maka :
        alert("password yang Anda Masukan Tidak Cocok");
      }else{
        // jika sama maka :
        $("form#formPengguna").submit();
      }
    });

    //sunting data table
    $("table#table-pengguna").on("click",".btn-edit",function(){
      $("h5#judul-form").html("Edit data");
      let id = $(this).data("id");
      let baseurl ="<?=base_url()?>";
      

      $.get(`${baseurl}/bagian/${id}`).done((e)=>{
        $("input[name=id]").val(e.id);
        $("input[name=nama]").val(e.nama);
        $("input[name=fungsi]").val(e.fungsi);
        $("input[name=tugas_pokok]").val(e.tugas_pokok);
        $("#modalForm").modal("show");
        $("#formPengguna input[name=_method]").val("patch");
      });
    });

    // hapus data
    $("table#table-pengguna").on("click", ".btn-hapus",function(){
      let konfirmasi = confirm("Apakah Benar Anda Ingin Menghapus Data ini?");
      //logic
      if(konfirmasi  === true){
        let _id = $(this).data("id");
        let baseurl ="<?=base_url()?>";

        $.post(`${baseurl}/bagian`,{id:_id, _method:"delete"}).done(function(e){
          $("table#table-pengguna").DataTable().ajax.reload();
        });
      }
    });

    // isi table 
    $('table#table-pengguna').DataTable({
    processing: true,
    serverSide: true,
    ajax:{
      url: "<?=base_url('bagian/all')?>",method: 'GET'
      },
      columns:
      [
        { data: 'id', sortable:false,searchable:false, 
          render:(data,type,row,meta)=>{
          return meta.settings._iDisplayStart + meta.row + 1;
          } 
        },
        {data: 'nama' },
        {data: 'fungsi' },
        {data: 'tugas_pokok' },
        {data: 'id',render:(data,type,row,meta)=>
          {
          var btnEdit = `<button class='btn btn-edit btn-sm btn-warning' data-id='${data}'> Edit </button>`;
          var btnHapus = `<button class='btn btn-hapus btn-sm btn-danger' data-id='${data}'> Hapus </button>`;
          return btnEdit + btnHapus;
          } 
        }
      ]
    });
  });
  </script>
  <?=$this->endSection()?>