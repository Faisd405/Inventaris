<template>
  <div class="container mt-3">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card card-default">
          <div class="card-header">buku</div>

          <div class="card-body">
            <router-link
              :to="{ name: 'create-buku' }"
              class="btn btn-md btn-primary"
              >TAMBAH Data buku</router-link
            >
            <div class="table-responsive mt-2">
              <table
                class="table table-bordered"
                id="dataTable"
                width="100%"
                cellspacing="0"
              >
                <thead>
                  <tr>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Tanggal</th>
                    <th>Kondisi</th>
                    <th>Jumlah</th>
                    <th>Lokasi</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Tanggal</th>
                    <th>Kondisi</th>
                    <th>Jumlah</th>
                    <th>Lokasi</th>
                    <th>Aksi</th>
                  </tr>
                </tfoot>
                <tbody>
                  <tr v-for="buku in buku" :key="buku.id">
                    <td>{{buku.judul}}</td>
                    <td>{{buku.penulis}}</td>
                    <td>{{buku.penerbit}}</td>
                    <td>{{buku.tanggal}}</td>
                    <td>{{buku.kondisi}}</td>
                    <td>{{buku.jumlah}}</td>
                    <td>{{buku.lokasi}}</td>
                    <td>
                      <router-link
                        :to="{ name: 'edit-buku', params: { id: buku.id } }"
                        class="btn btn-sm btn-primary"
                        >Edit</router-link
                      >
                      <button
                        class="btn btn-sm btn-danger"
                        @click="destroy(buku.id)"
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
      buku: [],
    };
  },
  created() {
    let uri = `/api/buku`;
    this.axios.get(uri).then((response) => {
      this.buku = response.data.buku;
    });
  },
  methods: {
    destroy(id) {
      let uri = `/api/buku/${id}`;
      this.axios.delete(uri).then((response) => {
        this.buku = this.buku.filter((buku) => buku.id != id);
      });
    },
  },
};
</script>
