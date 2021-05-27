@if(session('sukses'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
 {{ session('sukses') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@elseif(session('gagal'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  {{ session('gagal') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif