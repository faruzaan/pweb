<div class="container-fluid position-absolute bg-form">
    <div class="container formAlamat rounded-2">
        <div class="row d-flex justify-content-between p-3 border-bottom">
            <h5 class="w-auto text-center">Tambah Alamat</h5>
            <p onclick="closeAlamat()" style="cursor: pointer" class="w-auto">
                X
            </p>
        </div>
        <div class="row p-3 oveflow-auto">
            <form action="">
                <label for="nama" class="form-label mt-2">Nama Penerima</label>
                <input type="text" class="form-control" name="nama" id="nama" />
                <label for="no" class="form-label mt-2">No Hp</label>
                <input type="text" class="form-control" name="no" id="no" />
                <label for="label" class="form-label mt-2">Label Alamat</label>
                <input
                    type="text"
                    class="form-control"
                    name="label"
                    id="label"
                />
                <label for="kota" class="form-label mt-2"
                    >Kota dan Kecataman</label
                >
                <input type="text" class="form-control" name="kota" id="kota" />
                <label for="alamat" class="form-label mt-2">Alamat</label>
                <textarea
                    class="form-control"
                    name="alamat"
                    id="alamat"
                    cols="30"
                    rows="3"
                ></textarea>
                <span class="d-flex justify-content-center w-100 mt-3">
                    <button class="btn btn-brown w-75">Simpan</button>
                </span>
            </form>
        </div>
    </div>
</div>
