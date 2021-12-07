<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card card-default">
          <div class="card-header">User</div>

          <div class="card-body">
            <router-link
              :to="{ name: 'create-users' }"
              class="btn btn-md btn-primary"
              >TAMBAH Data User</router-link
            >
            <router-link
              :to="{ name: 'relasiuserbarang' }"
              class="btn btn-md btn-primary"
              >TAMBAH Data Barang ke User</router-link
            >
            <div class="table-responsive mt-2">
              <table class="table table-hover table-bordered">
                <thead>
                  <tr>
                    <th>Nama</th>
                    <th>Roles</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="user in users" :key="user.id">
                    <td>{{ user.name }}</td>
                    <td>{{ user.roles }}</td>
                    <td>
                      <router-link
                        :to="{ name: 'detail-users', params: { id: user.id } }"
                        class="btn btn-sm btn-primary"
                        >Detail</router-link
                      >
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
      users: [],
    };
  },
  created() {
    let uri = `/api/users`;
    this.axios.get(uri).then((response) => {
      this.users = response.data.data;
    });
  },
};
</script>
