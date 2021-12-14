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
              <b-table :items="buku" :fields="fields">
                  <template #cell(action)="data">

                      <router-link
                        :to="{ name: 'edit-buku', params: { id: data.item.id } }"
                        class="btn btn-sm btn-primary"
                        >Edit</router-link
                      >
                      <button
                        class="btn btn-sm btn-danger"
                        @click="destroy(data.item.id)"
                      >
                        Hapus
                      </button>
                  </template>
              </b-table>
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
      fields: [
        { key: "id", label: "Id" },
        { key: "judul", label: "Judul" },
        { key: "penulis", label: "Penulis" },
        { key: "penerbit", label: "Penerbit" },
        { key: "tanggal", label: "Tanggal" },
        { key: "kondisi", label: "Kondisi" },
        { key: "jumlah", label: "Jumlah" },
        { key: "lokasi", label: "Lokasi" },
        { key: "action", label: "Action", sortable: false }
      ],
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
