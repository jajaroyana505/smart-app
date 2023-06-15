<div class="card p-3">
    <div class="card-header py-3 m-3 bg-success text-white text-center ">
        <h6 class="m-0 font-weight-bold">Ubah Surat</h6>
    </div>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="modal-body">
            <div class="form-group mt-3">
                <label for="inputState" class="form-label">Jenis Surat</label>
                <select id="inputState" class="form-select ml-3 pl-2 pr-2">
                    <option selected>Pilih ...</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="form-group">
                <input type="date" class="form-control" id="" name="" placeholder="Tanggal">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="" name="" placeholder="Keperluan">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn text-white bg-success" onclick="window.history.go(-1)"><i class="fas fa-ban"></i> Kembali</button>
            <button type="submit" class="btn text-white bg-success"><i class="fas fa-plus-circle"></i> Tambah</button>
        </div>
    </form>
</div>