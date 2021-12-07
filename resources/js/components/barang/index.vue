<template>
  <div class="container mt-3">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card card-default">
          <div class="card-header">Barang</div>

          <div class="card-body">
            <router-link
              :to="{ name: 'create-barang' }"
              class="btn btn-md btn-primary"
              >TAMBAH Data Barang</router-link
            >
            <div class="table-responsive mt-2">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Detail Barang</th>
                    <th>Kategori</th>
                    <th>Fungsi</th>
                    <th>Harga</th>
                    <th>Lokasi</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="barang in barang" :key="barang.id">
                    <td>{{ barang.kode_barang }}</td>
                    <td>{{ barang.nama_barang }}</td>
                    <td>{{ barang.detail_barang }}</td>
                    <td>
                      {{ barang.kategori.nama_kategori }}
                    </td>
                    <td>{{ barang.fungsi }}</td>
                    <td>{{ barang.harga_barang }}</td>
                    <td>{{ barang.lokasi }}</td>
                    <td>
                      <router-link
                        :to="{ name: 'edit-users', params: { id: barang.id } }"
                        class="btn btn-sm btn-primary"
                        >Edit</router-link
                      >
                      <button
                        class="btn btn-sm btn-danger"
                        @click="destroy(barang.id)"
                      >
                        Hapus
                      </button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
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
      barang: [],
    };
  },
  created() {
    let uri = `/api/barang`;
    this.axios.get(uri).then((response) => {
      this.barang = response.data.barang;
    });
  },
};
</script>
