<template>
  <div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <router-link to="/" class="navbar-brand"
        >Inventaris Barang</router-link
      >
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <router-link :to="{ name: 'index-barang' }" class="nav-link" href=""
              >Barang</router-link
            >
          </li>
          <li class="nav-item">
            <router-link :to="{ name: 'index-users' }" class="nav-link" href="#"
              >User</router-link
            >
          </li>
          <li class="nav-item">
            <router-link :to="{ name: 'index-buku' }" class="nav-link" href="#"
              >Buku</router-link
            >
          </li>
        </ul>
      </div>
    </nav>
    <router-view></router-view>
  </div>
</template>

<script>
export default {};
</script>
