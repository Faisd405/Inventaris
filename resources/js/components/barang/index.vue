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
            <router-link
              :to="{ name: 'index-kategori' }"
              class="btn btn-md btn-primary"
              >Index Kategori</router-link
            >
            <div>
              <b-row>
                <b-col lg="6" class="my-1">
                  <b-form-group
                    label="Filter"
                    label-for="filter-input"
                    label-cols-sm="3"
                    label-align-sm="right"
                    label-size="sm"
                    class="mb-0"
                  >
                    <b-input-group size="sm">
                      <b-form-input
                        id="filter-input"
                        v-model="filter"
                        type="search"
                        placeholder="Type to Search"
                      ></b-form-input>

                      <b-input-group-append>
                        <b-button :disabled="!filter" @click="filter = ''"
                          >Clear</b-button
                        >
                      </b-input-group-append>
                    </b-input-group>
                  </b-form-group>
                </b-col>
                <b-col sm="5" md="6" class="my-1">
                  <b-form-group
                    label="Per page"
                    label-for="per-page-select"
                    label-cols-sm="6"
                    label-cols-md="4"
                    label-cols-lg="3"
                    label-align-sm="right"
                    label-size="sm"
                    class="mb-0"
                  >
                    <b-form-select
                      id="per-page-select"
                      v-model="perPage"
                      :options="pageOptions"
                      size="sm"
                    ></b-form-select>
                  </b-form-group>
                </b-col>
              </b-row>
              <b-table
                :items="barang"
                :fields="fields"
                :sort-by.sync="sortBy"
                striped
                responsive="sm"
                sort-icon-left
                :filter="filter"
                :filter-included-fields="filterOn"
                @filtered="onFiltered"
                :current-page="currentPage"
                :per-page="perPage"
              >
                <template #cell(kategori)="data">
                  {{ data.item.kategori.nama_kategori }}
                </template>

                <template #cell(show_details)="data">
                  <router-link
                    :to="{
                      name: 'detail-barang',
                      params: { id: data.item.id },
                    }"
                    class="btn btn-sm btn-primary"
                    >Detail</router-link
                  >
                  <router-link
                    :to="{
                      name: 'edit-barang',
                      params: { id: data.item.id },
                    }"
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
        { key: "id", sortable: true },
        { key: "nama_barang", sortable: true, filterByFormatted: true },
        { key: "detail_barang", sortable: true },
        { key: "kategori", sortable: true },
        { key: "fungsi", sortable: true },
        { key: "harga_barang", sortable: true },
        { key: "lokasi", sortable: true },
        { key: "user.name", label: "Pemakai", sortable: true },
        { key: "show_details", label: "Detail" },
      ],
      filter: null,
      filterOn: [],
      currentPage: 1,
      perPage: 5,
      pageOptions: [5, 15, 25, 50, { value: 100, text: "Show a lot" }],
      barang: [],
      sortBy: "id",
    };
  },

  created() {
    let uri = `/api/barang`;
    this.axios.get(uri).then((response) => {
      this.barang = response.data.barang;
    });
  },
  computed: {
    filterOn() {
      return this.fields
        .filter((field) => field.filterable)
        .map((field) => field.key);
    },
  },
  methods: {
    onFiltered(filteredItems) {
      this.totalRows = filteredItems.length;
      this.currentPage = 1;
    },
    destroy(id) {
      this.axios
        .delete(`/api/barang/${id}`)
        .then((response) => {
          this.barang = this.barang.filter((barang) => barang.id != id);
        })
        .catch((error) => {
          console.log(error);
        });
    },
  },
};
</script>
