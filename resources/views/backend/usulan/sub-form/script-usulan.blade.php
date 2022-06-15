<script>
    let fotoAtap = ''
    $("#file-foto-atap").fileinput(getFileInputOptions('foto-atap'))
        .on('fileuploaded', function(event, previewId, index, fileId) {
            fotoAtap = previewId.response.filename
        }).on('fileuploaderror', function(event, data, msg) {
            console.log(msg)
        }).on('fileerror', function(event, data, msg) {
            console.log(msg)
        }).on('fileselect', function(event, numFiles, label) {
            $("#file-foto-atap").fileinput('upload')
        })

    //Disable Next Button First
    $(document).ready(function() {
        $('a[href="#next"]').parent().addClass("disabled").attr("aria-disabled", "true");
        $('a[href="#next"]').attr('href', '#');
    });

    //CEK KK
    var btncek = $("#btn-cek-keluarga");
    var text = $("#no-kk-pemilik-feedback");
    var formtext = $("#no-kk-pemilik");
    btncek.on('click', function() {

        var form = new FormData();
        form.append("no_kk", $("#no-kk-pemilik").val());

        $.ajax({
            method: "POST",
            contentType: false,
            cache: false,
            processData: false,
            dataType: "json",
            url: "{{ route('backend.hunian.cekKK') }}",
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            data: form,
            success: function(result) {
                console.log(result)
                if (result.data == null) {
                    formtext.attr('class', 'form-control is-invalid');
                    text.attr('class', 'badge badge-danger');
                    text.html('Data Hunian Tidak Ditemukan');
                } else {
                    formtext.attr('class', 'form-control is-valid');
                    text.attr('class', 'badge badge-success');
                    text.html('Data Hunian Ditemukan');

                    $('a[href="#"]').parent().removeClass("disabled").attr("aria-disabled",
                        "false");
                    $('a[href="#"]').attr('href', '#next');
                
                if (result.data2.length > 0) {
                    formtext.attr('class', 'form-control is-invalid');
                    text.attr('class', 'badge badge-danger');
                    text.html('Sudah pernah menerima bantuan 5 tahun terakhir');
                }
                else {
                    formtext.attr('class', 'form-control is-valid');
                    text.attr('class', 'badge badge-success');
                    text.html('Belum pernah menerima bantuan 5 tahun terakhir');

                    $('a[href="#"]').parent().removeClass("disabled").attr("aria-disabled",
                        "false");
                    $('a[href="#"]').attr('href', '#next');
                }
                }
                $('#nama-pemilik').val(result.data.nama_pemilik);
                $('#nik-pemilik').val(result.data.nik_pemilik);
                $('#tanggal-lahir').val(result.data.tanggal_lahir_pemilik);
                $('#no-telepon-pemilik').val(result.data.no_telepon_pemilik);
                $('#email-pemilik').val(result.data.email_pemilik);
                $('#jumlah-keluarga').val(result.data.jumlah_keluarga);
                $('#pendapatan-keluarga').val(result.data.pendapatan_keluarga_id).change();
                $('#foto-pemilik').attr('src', '{{ url('') }}/' + result.data.foto_pemilik);
                $('#status-kepemilikan').val(result.data.status_kepemilikan_id).change();
                $('#luas-tanah').val(result.data.luas_tanah);
                $('#luas-bangunan').val(result.data.luas_bangunan);
                $('#luas-bangunan-perkapita').val(result.data.luas_bangunan / result.data
                    .jumlah_keluarga);
                if (result.data.tersedia_listrik == 'y') {
                    $('#tersedia-listrik-y').prop('checked', true);
                } else {
                    $('#tersedia-listrik-t').prop('checked', true);
                }
                if (result.data.septic_tank == 'y') {
                    $('#septic-tank-y').prop('checked', true);
                } else {
                    $('#septic-tank-t').prop('checked', true);
                }
                if (result.data.memiliki_imb == 'y') {
                    $('#memiliki-imb-y').prop('checked', true);
                } else {
                    $('#memiliki-imb-t').prop('checked', true);
                }
                $('#foto-atap').attr('src', '{{ url('') }}/' + result.data.kondisi_atap);
                $('#foto-dinding').attr('src', '{{ url('') }}/' + result.data
                    .kondisi_dinding);
                $('#foto-lantai').attr('src', '{{ url('') }}/' + result.data.kondisi_lantai);
                $('#foto-kamar-mandi').attr('src', '{{ url('') }}/' + result.data
                    .kondisi_kamar_mandi);
                $('#foto-mck').attr('src', '{{ url('') }}/' + result.data.kondisi_mck);
                $('#foto-sumber-airminum').attr('src', '{{ url('') }}/' + result.data.kondisi_sumber_air_minum);
                $('#alamat-detail').val(result.data.alamat_detail);
                $('#kecamatans').val(result.data.desa.kecamatan.nama);
                $('#desas').val(result.data.desa.nama);
                $('#kecamatan').trigger('change');
                // loadDesa(result.data.desa.kecamatan_id, result.data.desa_id);
                idHunian = result.data.id;
            },
            error: function(error) {
                alert("NKK Tidak Tersedia, Silahkan Input Data NKK di Menu Hunian");
            }
        });
    })

    function loadDesa(id, desa_id)
    {
        $.get('{{ route('backend.desa.all', ['kecamatan_id' => ':kecamatan_id']) }}'.replace(':kecamatan_id', id))
            .done(function (response) {
                const options = [];
                let i
                for (i = 0; i < response.length; i++)
                {
                    const item = response[i]
                    options.push({
                        id: item.id,
                        text: item.nama
                    })
                }
                $('#desa').html('')
                $('#desa').select2({
                    data: options
                })
                $('#desa').val(desa_id);
                $('#desa').trigger('change');
            })
    }
</script>
