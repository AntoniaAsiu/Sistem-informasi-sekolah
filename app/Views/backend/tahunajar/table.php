<?=$this->extend('backend/template')?>
  <?=$this->section('content')?>

    <!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data tahunajar</h1>
                    <p class="mb-4">Data tahunajar untuk mengelola data pengguna yang ada di sistem.</p>


  <div class="container mt-5">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            
            <button id="btn-tambah" class="btn btn-primary">Tambah data</button>
            <h6 class="m-0 font-weight-bold text-primary">
                
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                                    
          <table id="table-tahunajar" class="datatable table table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>Tahun Ajar</th> 
                <th>Tanggal Mulai</th>
                <th>Tanggal Selesai</th>
                <th>Status Aktif</th>
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
          <form method="post" action="<?=base_url('bagian')?>" id="formtahunajar">
            <input type="hidden" name="id" />
            <input type="hidden" name="_method" />
            <div class="mb-3">
              <label for="tahun_ajar" class="form-label">Tahun Ajar</label>
              <input type="text" name="tahun_ajar" class="form-control">
            </div>
            <div class="mb-3">
              <label for="tgl_mulai" class="form-label">Tanggal Mulai</label>
              <input type="text" name="tgl_mulai" class="form-control">
            </div>
            <div class="mb-3">
              <label for="tgl_selesai" class="form-label">Tanggal Selesai</label>
              <input type="text" name="tgl_selesai" class="form-control">
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
    $("form#formtahunajar").submitAjax({
      pre:()=>{
        $("button#btn-kirim").hide();
      },
      pasca:()=>{
        $("button#btn-kirim").show();
      },
      success:(response,status)=>{
        $("#modalForm").modal("hide");
        $("table#table-tahunajar").DataTable().ajax.reload();
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
      $("#formtahunajar input[name=_method]").val("");
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
        $("form#formtahunajar").submit();
      }
    });

    //sunting data table
    $("table#table-tahunajar").on("click",".btn-edit",function(){
      $("h5#judul-form").html("Edit data");
      let id = $(this).data("id");
      let baseurl ="<?=base_url()?>";
      

      $.get(`${baseurl}/bagian/${id}`).done((e)=>{
        $("input[name=id]").val(e.id);
        $("input[name=tahun_ajar]").val(e.tahun_ajar);
        $("input[name=tgl_mulai]").val(e.tgl_mulai);
        $("input[name=tgl_selesai]").val(e.tgl_selesai);
        $("input[name=status_aktif]").val(e.status_aktif);
        $("#modalForm").modal("show");
        $("#formPengguna input[name=_method]").val("patch");
      });
    });

    // hapus data
    $("table#table-tahunajar").on("click", ".btn-hapus",function(){
      let konfirmasi = confirm("Apakah Benar Anda Ingin Menghapus Data ini?");
      //logic
      if(konfirmasi  === true){
        let _id = $(this).data("id");
        let baseurl ="<?=base_url()?>";

        $.post(`${baseurl}/tahunajar`,{id:_id, _method:"delete"}).done(function(e){
          $("table#table-tahunajar").DataTable().ajax.reload();
        });
      }
    });

    // isi table 
    $('table#table-tahunajar').DataTable({
    processing: true,
    serverSide: true,
    ajax:{
      url: "<?=base_url('tahunajar/all')?>",method: 'GET'
      },
      columns:
      [
        { data: 'id', sortable:false,searchable:false, 
          render:(data,type,row,meta)=>{
          return meta.settings._iDisplayStart + meta.row + 1;
          } 
        },
        {data: 'tahun_ajar' },
        {data: 'tgl_mulai' },
        {data: 'tgl_selesai' },
        {data: 'status_aktif' },
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