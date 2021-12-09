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
            <a href="/barang/barang_pdf" class="btn btn-md btn-primary" target="_blank"
              >Cetak PDF Barang</a>
            <router-link :to="{ name: 'scanqr-barang' }" class="btn btn-md btn-primary"
              >Scan QRCode Barang</router-link
            >
            <div class="table-responsive mt-2">
              <table
                class="table table-striped"
                id="dataTable"
                width="100%"
                cellspacing="0"
              >
                <thead>
                  <tr>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Detail Barang</th>
                    <th>Kategori</th>
                    <th>Fungsi</th>
                    <th>Harga</th>
                    <th>Lokasi</th>
                    <th>Pemakai</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Detail Barang</th>
                    <th>Kategori</th>
                    <th>Fungsi</th>
                    <th>Harga</th>
                    <th>Lokasi</th>
                    <th>Pemakai</th>
                    <th>Aksi</th>
                  </tr>
                </tfoot>
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
                    <td>{{ barang.user.name }}</td>
                    <td>
                      <router-link
                        :to="{ name: 'edit-barang', params: { id: barang.id } }"
                        class="btn btn-sm btn-primary"
                        >Edit</router-link
                      >
                      <router-link
                        :to="{
                          name: 'detail-barang',
                          params: { id: barang.id },
                        }"
                        class="btn btn-sm btn-primary"
                        >Detail</router-link
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


    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>


<script>
export default {
  data() {
    return {
      barang: {
        user: {},
        kategori: {},
      },
      kategori: [],
        user: [],
    };
  },
  created() {
    let uri = `/api/barang`;
    this.axios.get(uri).then((response) => {
      this.barang = response.data.barang;
    });
  },
  methods: {
    destroy(id) {
      let uri = `/api/barang/${id}`;
      this.axios.delete(uri).then((response) => {
        this.barang = this.barang.filter((barang) => barang.id != id);
      });
    },
  },
};
</script>
