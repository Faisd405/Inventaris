<template>
  <div class="container p-3">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card card-default">
          <div class="card-header">Create Buku</div>

          <div class="card-body">
            <form @submit.prevent="BookStore">
              <div class="form-group">
                <label>Judul Buku</label>
                <input
                  type="text"
                  class="form-control"
                  v-model="buku.judul"
                  placeholder="Masukan judul"
                />
              </div>
                <div class="form-group">
                    <label>Penulis</label>
                    <input
                    type="text"
                    class="form-control"
                    v-model="buku.penulis"
                    placeholder="Masukan Penulis"
                    />
                </div>
                <div class="form-group">
                    <label>Penerbit</label>
                    <input
                    type="text"
                    class="form-control"
                    v-model="buku.penerbit"
                    placeholder="Masukan Penerbit"
                    />
                </div>
                <div class="form-group">
                    <label>Tanggal</label>
                    <input
                    type="text"
                    class="form-control"
                    v-model="buku.tanggal"
                    placeholder="Masukan Tanggal"
                    />
                </div>
                <div class="form-group">
                    <label>Kondisi</label>
                    <input
                    type="text"
                    class="form-control"
                    v-model="buku.kondisi"
                    placeholder="Masukan Kondisi"
                    />
                </div>
                <div class="form-group">
                    <label>Jumlah</label>
                    <input
                    type="number"
                    class="form-control"
                    v-model="buku.jumlah"
                    placeholder="Masukan Jumlah"
                    />
                </div>
                <!-- Lokasi -->
                <div class="form-group">
                    <label>Lokasi</label>
                    <input
                    type="text"
                    class="form-control"
                    v-model="buku.lokasi"
                    placeholder="Masukan Lokasi"
                    />
                </div>
              <div class="form-group">
                <button class="btn btn-md btn-success" type="submit">
                  SIMPAN
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      buku: {},
    };
  },
  methods: {
    BookStore() {
      axios
        .post("/api/buku", this.buku)
        .then((response) => {
          this.$router.push("/buku");
        })
        .catch((error) => {
          console.log(error.response.data.errors);
        });
    },
  },
};
</script>
