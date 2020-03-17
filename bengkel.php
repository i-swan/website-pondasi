============================================
insert data to database
============================================
INSERT INTO `anggota` (`id`, `nama`, `jk`, `tanggal_lahir`, `daerah_asal`, `no_hp`, `gol_darah`, `riwayat_sakit`, `jurusan_ipb`, `angkatan_ipb`, `masuk_pondasi`, `lulus_pondasi`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES ('4', 'Frenky', 'laki-laki', '1995-02-20', 'Klaten', '081244445555', 'B', 'muntaber', 'manajemen', '53', '2020-02-20', NULL, 'member', NULL, NULL, NULL);
INSERT INTO `anggota` (`id`, `nama`, `jk`, `tanggal_lahir`, `daerah_asal`, `no_hp`, `gol_darah`, `riwayat_sakit`, `jurusan_ipb`, `angkatan_ipb`, `masuk_pondasi`, `lulus_pondasi`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES ('5', 'Uwa Raka', 'laki-laki', '1994-02-20', 'Bandung', '081255556666', 'AB', 'bisulan', 'gizi', '52', '2020-02-20', NULL, 'member', NULL, NULL, NULL);

        print_r($anggota_id_array);
        echo "string";
        echo $anggota_id_array;

INSERT INTO `anggota` (`id`, `nama`, `status`, `jk`, `file_foto`, `tanggal_lahir`, `daerah_asal`, `no_hp`, `email`, `gol_darah`, `riwayat_sakit`, `jurusan_ipb`, `angkatan_ipb`, `masuk_pondasi`, `created_by`, `updated_at`, `created_at`) VALUES ('3', 'Mimin', 'member', 'perempuan', 'Sixpacker28.jpg', '1999-02-20', 'Majenang', '081290908785', 'detektiftimur@gmail.com', 'O', 'Hipertensi', 'Ilmu Teknologi dan kelautan', '55', '2019-01-20', '1', '2020-03-07 03:28:53', '2020-03-07 03:28:53');




============================================
jquery selected checkbox and delete selected
============================================

    <script type="text/javascript">
    $(document).ready(function(){
        $('#select_all').on('click',function(){
            if(this.checked){
                $('.checkbox').each(function(){
                    this.checked = true;
                });
            }else{
                 $('.checkbox').each(function(){
                    this.checked = false;
                });
            }
        });
        
        $('.checkbox').on('click',function(){
            if($('.checkbox:checked').length == $('.checkbox').length){
                $('#select_all').prop('checked',true);
            }else{
                $('#select_all').prop('checked',false);
            }
        });
    // jquery ajax delete selected
    $(document).on('click', '#bulk_delete', function(){
        var id = [];
        if(confirm("Are you sure you want to Delete this data?"))
        {
            $('.student_checkbox:checked').each(function(){
                id.push($(this).val());
            });
            if(id.length > 0)
            {
                $.ajax({
                    url:"{{ route('anggota.hapus_all')}}",
                    method:"get",
                    data:{id:id},
                    success:function(data)
                    {
                        //alert(data);
                        //$('#student_table').DataTable().ajax.reload();
                        //location.reload();
                    }
                });
            }
            else
            {
                alert("Please select atleast one checkbox");
            }
        }
    });
    });
    </script>

============================================
checkbox table index anggota
============================================

<th>
    <p> All </p>
    <label class="au-checkbox">
        <input type="checkbox" id="select_all" />
        <span class="au-checkmark"></span>
    </label>
</th>

<td>
    <label class="au-checkbox">
        <input type="checkbox" name="student_checkbox[]" class="checkbox student_checkbox" value="{{ $a->id }}"/>
        <span class="au-checkmark"></span>
    </label>
</td>

============================================
anggotacontroller hapus all
============================================

$anggota_id_array = $request->input('id');
$anggota = Anggota::whereIn('id', $anggota_id_array);
$anggota->delete();


@if($a->status == 'perempuan')
    <div class="overview-item overview-item--c2">
@else
    <div class="overview-item overview-item--c3">
@endif

    <!-- Jquery CSS-->
    <link href="{{ asset('css/jquery-ui.css') }}" rel="stylesheet" media="all">

    <!-- Jquery Js-->
    <link href="{{ asset('js/jquery-3.3.1.min.js') }}" rel="stylesheet" media="all">
    <link href="{{ asset('js/jquery-ui.min.js') }}" rel="stylesheet" media="all">


============================================
login.blade.php
============================================

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
