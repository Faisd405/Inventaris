<template>
  <div class="container mt-3">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card card-default">
          <div class="card-header">User</div>

          <div class="card-body">
            <div class="table-responsive mt-2">
              <h2>Ini adalah barang yang dipakai {{ users.name }}</h2>
              <table class="table table-hover table-bordered">
                <thead>
                  <tr>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Detail Barang</th>
                    <th>Fungsi</th>
                    <th>Lokasi</th>
                    <th>Harga Barang</th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="barang in barangs" :key="barang.id">
                    <td>{{ barang.kode_barang }}</td>
                    <td>{{ barang.nama_barang }}</td>
                    <td>{{ barang.detail_barang }}</td>
                    <td>{{ barang.fungsi }}</td>
                    <td>{{ barang.lokasi }}</td>
                    <td>{{ barang.harga_barang }}</td>
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
      barangs: [],
      users: {},
    };
  },
  created() {
    let uri = `/api/users/${this.$route.params.id}`;
    this.axios.get(uri).then((response) => {
      this.barangs = response.data.data;
      this.users = response.data.user;
    });
  },
};
</script>
