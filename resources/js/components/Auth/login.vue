<template>
  <div class="container p-3">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card card-default">
          <div class="card-header">Login</div>

          <div class="card-body">
            <form @submit.prevent="Login">
              <!-- 'nama_barang', 'kode_barang', 'detail_barang', 'kategori_id', 'fungsi', 'harga_barang', 'lokasi', 'user_id' -->
              <div class="form-group">
                <label for="nama_barang">Email</label>
                <input
                  type="text"
                  name="email"
                  class="form-control"
                  v-model="user.email"
                  placeholder="Masukan Nama Email"
                />
              </div>

              <div class="form-group">
                <label for="nama_barang">Password</label>
                <input
                  type="Password"
                  name="Password"
                  class="form-control"
                  v-model="user.Password"
                  placeholder="Masukan Nama Email"
                />
              </div>
              <div class="form-group">
                <button class="btn btn-md btn-success" type="submit">
                  Login
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
      user: {
        email: '',
        Password: ''
      }
    }
  },
    methods: {
        Login() {
        this.$http.post('/api/login', this.user).then(response => {
            console.log(response.data);
            this.$router.push('/');
        });
        }
    }
}
</script>
