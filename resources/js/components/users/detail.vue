<template>
  <div class="container mt-3">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card card-default">
          <div class="card-header">User</div>

          <div class="card-body">
            <div class="table-responsive mt-2">
              <h2>Ini adalah barang yang dipakai {{ users.name }}</h2>
              <b-table :items="barangs" :fields="fields">

                <template #cell(action)="data">
                    <Button
                        class="btn btn-sm btn-danger"
                        @click.prevent="update(data.item.id)"
                      >
                        Hapus Kepemilikan
                      </Button>
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
            {
                key: 'id',
                label: 'ID',
                sortable: true
            },
            {
                key: 'kode_barang',
                label: 'Kode Barang',
                sortable: true
            },
            {
                key: 'nama_barang',
                label: 'Nama Barang',
                sortable: true
            },
            {
                key: 'fungsi',
                label: 'Fungsi',
                sortable: true
            },
            {
                key: 'lokasi',
                label: 'Lokasi',
                sortable: true
            },
            {
                key: 'harga_barang',
                label: 'Harga Barang',
                sortable: true
            },
            {
                key: 'action',
                label: 'Action',
                sortable: false
            }
        ],
      barangs: [],
      users: {},
      barang: {
          user_id: 1,
      },
    };
  },
  created() {
    let uri = `/api/users/${this.$route.params.id}`;
    this.axios.get(uri).then((response) => {
      this.barangs = response.data.barang;
      this.users = response.data.user;
    });
  },
  methods: {
    update(id) {
      let uri = "/api/barang/" + id;
      axios
        .put(uri, this.barang)
        .then((response) => {
            console.log(response.data);
            console.log(response.data.barangs.user_id);
        })
        .catch((error) => {
          console.log(error);
        });
    },
  },
};
</script>
