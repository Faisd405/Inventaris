<template>
  <div class="container p-3">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card card-default">
          <div class="card-header">Create User</div>

          <div class="card-body">
            <form @submit.prevent="RelasiUserBarangUpdate">
              <!-- select user -->
              <div class="form-group">
                <label for="user_id">User</label>
                <select
                  name="user_id"
                  class="form-control"
                  v-model="barang.user_id"
                >
                  <option value="" disabled>Pilih User</option>
                  <option v-for="user in users" :key="user.id">
                    {{ user.name }}
                  </option>
                </select>
              </div>
              <!-- select barang -->
              <div class="form-group">
                <label for="barang_id">Barang</label>
                <select
                  name="barang_id"
                  class="form-control"
                  v-model="barang.id"
                >
                  <option value="" disabled>Pilih Barang</option>
                  <option
                    v-for="barang in barang"
                    :value="barang.id"
                    :key="barang.id"
                  >
                    {{ barang.nama_barang }}
                  </option>
                </select>
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
      users: [],
      barang: [],
    };
  },
  created() {
    axios.get("/api/users/").then((response) => {
      this.users = response.data.data;
    });
    axios.get("/api/barang/NoUser").then((response) => {
      this.barang = response.data.barang;
    });
  },
  methods: {
    UserStore() {
      axios
        .post("/api/users", this.users)
        .then((response) => {
          this.$router.push("/users");
        })
        .catch((error) => {
          console.log(error.response.data.errors);
        });
    },
  },
};
</script>
