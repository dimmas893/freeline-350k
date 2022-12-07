@extends('layouts.template.template')
@section('content')
<div class="main-content">

<div class="modal fade" id="add_TU_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
          {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button> --}}
        </div>
        <form action="#" method="POST" id="add_TU_form" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <div class="my-2">
                    <label for="tujuan">Nama WhereHouse</label>
                    <select class="form-control" name="tujuan">
                        <option value="0">----Pilih WhareHouse----</option>
                        @foreach ($wharehouse as $item)
                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                        @endforeach
                    </select>
                    {{-- <input type="text" name="nama" class="form-control" placeholder="Masukan Nama"> --}}
                </div>
                <div class="my-2">
                    <label for="tanggal">tanggal</label>
                    <input type="date" name="tanggal" class="form-control" placeholder="Masukan Alamat">
                </div>
                <div class="my-2">
                    <label for="jenis_barang">Jenis Barang</label>
                    <select class="form-control" name="jenis_barang">
                        <option value="0">----Pilih Jenis Barang----</option>
                        <option value="mentah">Mentah</option>
                        <option value="matang">Matang</option>
                    </select>
                    {{-- <input type="integer" id="jenis_barang" name="jenis_barang" class="form-control" placeholder="Masukan No Telfon"> --}}
                </div>
                <div class="my-2">
                    <label for="volume">Volume</label>
                    <select class="form-control" name="volume">
                        <option value="0">----Pilih Volume----</option>
                        <option value="kg">KG</option>
                        <option value="pcs">PCS</option>
                    </select>
                    {{-- <input type="integer" id="jenis_barang" name="jenis_barang" class="form-control" placeholder="Masukan No Telfon"> --}}
                </div>
                <div class="my-2">
                    <label for="keterangan">Keterangan</label>
                    <textarea name="keterangan" class="form-control" placeholder="Masukan Keterangan"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" id="add_TU_btn" class="btn btn-primary">Simpan</button>
            </div>
        </form>
      </div>
    </div>
  </div>

  <div class="modal fade" id="customormodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
          {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button> --}}
        </div>
        <form action="#" method="POST" id="add_TU_form" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <div class="my-2">
                    <label for="tujuan">Nama Customor</label>
                    <select class="form-control" name="tujuan">
                        <option value="0">----Pilih Customor----</option>
                        @foreach ($customor as $item)
                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                        @endforeach
                    </select>
                    {{-- <input type="text" name="nama" class="form-control" placeholder="Masukan Nama"> --}}
                </div>
                <div class="my-2">
                    <label for="tanggal">tanggal</label>
                    <input type="date" name="tanggal" class="form-control" placeholder="Masukan Alamat">
                </div>
                <div class="my-2">
                    <label for="jenis_barang">Jenis Barang</label>
                    <select class="form-control" name="jenis_barang">
                        <option value="0">----Pilih Jenis Barang----</option>
                        <option value="mentah">Mentah</option>
                        <option value="matang">Matang</option>
                    </select>
                    {{-- <input type="integer" id="jenis_barang" name="jenis_barang" class="form-control" placeholder="Masukan No Telfon"> --}}
                </div>
                <div class="my-2">
                    <label for="volume">Volume</label>
                    <select class="form-control" name="volume">
                        <option value="0">----Pilih Volume----</option>
                        <option value="kg">KG</option>
                        <option value="pcs">PCS</option>
                    </select>
                    {{-- <input type="integer" id="jenis_barang" name="jenis_barang" class="form-control" placeholder="Masukan No Telfon"> --}}
                </div>
                <div class="my-2">
                    <label for="keterangan">Keterangan</label>
                    <textarea name="keterangan" class="form-control" placeholder="Masukan Keterangan"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" id="add_TU_btn" class="btn btn-primary">Simpan</button>
            </div>
        </form>
      </div>
    </div>
  </div>

{{-- add new employee modal end --}}

{{-- edit employee modal start --}}
<div class="modal fade" id="editTUModal" tabindex="-1" aria-labelledby="exampleModalLabel"
data-backdrop="static" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
      {{-- <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button> --}}
    </div>
    <form action="#" method="POST" id="edit_TU_form" enctype="multipart/form-data">
      @csrf
      <input type="hidden" name="id" id="id">
      <div class="modal-body">
            <div class="my-2">
                <label for="tanggal">tanggal</label>
                <input type="date" id="tanggal" name="tanggal" class="form-control" placeholder="Masukan Alamat">
            </div>
            <div class="my-2">
                <label for="volume">Volume</label>
                {{-- <select class="form-control" name="jenis_barang" id="jenis_barang">
                    <option value="0">----Pilih Jenis Barang----</option>
                    <option value="mentah">Mentah</option>
                    <option value="matang">Matang</option>
                </select> --}}
                <input type="text" disable id="volume" name="volume" class="form-control">
            </div>
            <div class="my-2">
                <label for="jenis_barang">Jenis Barang</label>
                <input type="text" id="jenis_barang" name="jenis_barang" class="form-control">
            </div>
            <div class="my-2">
                <label for="keterangan">Keterangan</label>
                <textarea name="keterangan" id="keterangan" class="form-control" placeholder="Masukan Keterangan"></textarea>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" id="edit_TU_btn" class="btn btn-success">Update</button>
      </div>
    </form>
  </div>
</div>
</div>
{{-- edit employee modal end --}}


    <section class="section">
      <div class="section-header">
        <h1>Halaman Outbound</h1>
      </div>

      <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" href="#approve" role="tab" data-toggle="tab">Approve</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#belumapprove" role="tab" data-toggle="tab">Belum Approve</a>
        </li>
    </ul>
      <!-- Tab panes -->
<div class="tab-content">

    <div role="tabpanel" class="tab-pane fade in active show mb-5" id="approve">

            <div class="row">
                <div class="mt-3 ml-3">
                    <form action="{{ route('outbound-wharehouse_cari') }}" method="get">
                        @csrf
                        <div class="">
                            <label for="">Tanggal Awal</label>
                            <input type="date" class="form-control" name="awal" placeholder="year">
                        </div>
                        <div class="">
                            <label for="">Tanggal Akhir</label>
                            <input type="date" class="form-control" name="akhir" placeholder="bulan">
                        </div>
                        <div class="">
                            <input type="submit" class="btn btn-primary" value="Cari">
                        </div>
                    </form>
                </div>
              <div class="col-12">
                  <div class="card mt-2">
                      <div class="card-body">
                        <button class="btn btn-light text-right mb-3" data-toggle="modal" data-target="#add_TU_modal"><i
                            class="bi-plus-circle me-2"></i>Tambah Outbound Wharehouse</button>
                          <div class="table-responsive">
                              <div id="TU_all"></div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
    </div>
    <div role="tabpanel" class="tab-pane fade in" id="belumapprove">
        <div class="row">
            <div class="mt-3 ml-3">
                <form action="{{ route('outbound-customor_cari') }}" method="get">
                    @csrf
                    <div class="">
                        <label for="">Tanggal Awal</label>
                        <input type="date" class="form-control" name="awal" placeholder="year">
                    </div>
                    <div class="">
                        <label for="">Tanggal Akhir</label>
                        <input type="date" class="form-control" name="akhir" placeholder="bulan">
                    </div>
                    <div class="">
                        <input type="submit" class="btn btn-primary" value="Cari">
                    </div>
                </form>
            </div>
            <div class="col-12">
                <div class="card mt-2">
                    <div class="card-body">
                      <button class="btn btn-light text-right" data-toggle="modal" data-target="#customormodal"><i
                          class="bi-plus-circle me-2 mb-3"></i>Tambah Outbound Customor</button>
                        <div class="table-responsive">
                            <div id="customor"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>

      <div class="section-body">







    </section>
  </div>
@endsection

@section('js')
      <script>
    $(function() {
      // add new employee ajax request
      $("#add_TU_form").submit(function(e) {
        e.preventDefault();
        const fd = new FormData(this);
        $("#add_TU_btn").text('Adding...');
        $.ajax({
          url: '{{ route('outbound-store') }}',
          method: 'post',
          data: fd,
          cache: false,
          contentType: false,
          processData: false,
          dataType: 'json',
          success: function(response) {
            if (response.status == 200) {
              Swal.fire(
                'Added!',
                'Added Successfully!',
                'success'
              )
              TU_all();
      customor();
            }
            $("#add_TU_btn").text('Save');
            $("#add_TU_form")[0].reset();
            $("#add_TU_modal").modal('hide');
          }
        });
      });
      // edit employee ajax request
      $(document).on('click', '.editIcon', function(e) {
        e.preventDefault();
        let id = $(this).attr('id');
        $.ajax({
          url: '{{ route('outbound-edit') }}',
          method: 'get',
          data: {
            id: id,
            _token: '{{ csrf_token() }}'
          },
          success: function(response) {
            $("#tanggal").val(response.tanggal);
            // $("#password").val(response.password);
            $("#volume").val(response.volume);
            $("#jenis_barang").val(response.jenis_barang);
            $("#keterangan").val(response.keterangan);
            $("#id").val(response.id);
          }
        });
      });

      // update employee ajax request
      $("#edit_TU_form").submit(function(e) {
        e.preventDefault();
        const fd = new FormData(this);
        $("#edit_TU_btn").text('Updating...');
        $.ajax({
          url: '{{ route('outbound-update') }}',
          method: 'post',
          data: fd,
          cache: false,
          contentType: false,
          processData: false,
          dataType: 'json',
          success: function(response) {
            if (response.status == 200) {
              Swal.fire(
                'Updated!',
                'Updated Successfully!',
                'success'
              )
              TU_all();
      customor();
            }
            $("#edit_TU_btn").text('Update');
            $("#edit_TU_form")[0].reset();
            $("#editTUModal").modal('hide');
          }
        });
      });
      // delete employee ajax request
      $(document).on('click', '.deleteIcon', function(e) {
        e.preventDefault();
        let id = $(this).attr('id');
        let csrf = '{{ csrf_token() }}';
        Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
          if (result.isConfirmed) {
            $.ajax({
              url: '{{ route('outbound-delete') }}',
              method: 'delete',
              data: {
                id: id,
                _token: csrf
              },
              success: function(response) {
                console.log(response);
                Swal.fire(
                  'Deleted!',
                  'Your file has been deleted.',
                  'success'
                )
                TU_all();
      customor();
              }
            });
          }
        })
      });
      // fetch all employees ajax request
      TU_all();
      function TU_all() {
        $.ajax({
          url: '{{ route('outbound-all') }}',
          method: 'get',
          success: function(response) {
            $("#TU_all").html(response);
            $("table").DataTable({
                  destroy: true,
                responsive: true
            });
          }
        });
      }

      customor();
      function customor() {
        $.ajax({
          url: '{{ route('outbound-customor') }}',
          method: 'get',
          success: function(response) {
            $("#customor").html(response);
            $("table").DataTable({
                  destroy: true,
                responsive: true
            });
          }
        });
      }
    });
  </script>
@endsection
