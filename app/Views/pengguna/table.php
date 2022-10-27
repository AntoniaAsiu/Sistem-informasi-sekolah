



<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <!-- Costume : -->
<link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="jquery-3.6.0.min.js"></script>
 <!-- --------- -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/gh/agoenxz2186/submitAjax@develop/submit_ajax.js"></script>
<!-- ---------- -->

<table id="table-pengguna" class="datatable table table-bordered">
 <thead>
  <tr>
   <th>No</th>
   <th>Nama</th>
   <th>Email</th>
   <th>Gender</th>
   <th>Aksi</th>
  </tr>
 </thead>
</table>

<!-- Script : -->
<script>
 $(document).ready(function(){
  $('table#table-pengguna').DataTable({
   processing: true,
   serverSide: true,
   ajax:{
     url: "<?=base_url('pengguna/all')?>",method: 'GET'
    },
    columns:[
     { data: 'id', sortable:false,searchable:false, 
      render:(data,type,row,meta)=>{
       return meta.settings._iDisplayStart + meta.row + 1;
      } 
     },
     {data: 'nama' },
     {data: 'email' },
     {data: 'gender',render:(data,type,row,meta)=>{
      if(data === "L"){
        return "Laki-Laki";
      }else if(data === "P"){
        return "Perempuan";
      }
      return data;
     } 
    },
     {data: 'id',render:(data,type,row,meta)=>{
      var btnEdit = `<button class='btn-edit' data-id='{$data}'> Edit </button>`;
      var btnHapus = `<button class='btn-hapus' data-id='{$data}'> Hapus </button>`;
      return btnEdit + btnHapus;
     } 
    }
    ]
   });
 });
</script>