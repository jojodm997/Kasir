<div class="modal fade" id="modaltambahsatuan" tabindex="-1" aria-labelledby="modaltambahsatuanLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modaltambahsatuanLabel">Tambah Satuan</h5>
            </div>
            <?= form_open('satuan/simpandata', ['class' => 'formsimpan']) ?>
            <input type="hidden" name="aksi" id="aksi" value="<?= $aksi; ?>">
            <div class="modal-body">
                <div class="form-group">
                    <label for="">Nama Satuan</label>
                    <input type="text" name="namasatuan" id="namasatuan" class="form-control form-control-sm" required>
                    <div class="errorSatuan" style="display: none;">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary tombolSimpan">Simpan</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
                <?= form_close(); ?>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('.formsimpan').submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: "post",
                url: $(this).attr('action'),
                data: $(this).serialize(),
                dataType: "json",
                beforeSend: function(e) {
                    $('.tombolSimpan').prop('disabled', true);
                    $('.tombolSimpan').html('<i class="fa fa-spin fa-spinner"></i>');
                },
                success: function(response) {
                    if (response.sukses) {
                        Swal.fire(
                            'Berhasil',
                            response.sukses,
                            'success'
                        ).then((result) => {
                            if (result.isConfirmed) {
                                window.location.reload();
                            }
                        });
                    } else if (response.error) {
                        Swal.fire(
                            'Gagal',
                            response.error,
                            'error'
                        );
                    }
                    $('.tombolSimpan').prop('disabled', false);
                    $('.tombolSimpan').html('Simpan');
                },
                error: function(xhr, thrownError) {
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                    $('.tombolSimpan').prop('disabled', false);
                    $('.tombolSimpan').html('Simpan');
                }
            });
            return false;
        });
    });
</script>