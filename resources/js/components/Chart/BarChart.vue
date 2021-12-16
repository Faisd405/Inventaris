<script>
import { Bar } from "vue-chartjs";

export default {
  extends: Bar,
  data() {
    return {
      test: [],
      chartData: {
        // Labels for the bars
        labels: [],
        datasets: [{
          label: "Jumlah Kategori",
          borderWidth: 1,
          // Colors for the bars
          backgroundColor: "rgba(255, 99, 132, 0.2)",

          borderColor: "rgba(255,99,132,1)",

          pointBorderColor: "#2554FF",
          // length of the bar
          data: [],
        },]
      },
      options: {
        scales: {
          yAxes: [
            {
              ticks: {
                beginAtZero: true,
              },
              gridLines: {
                display: true,
              },
            },
          ],
          xAxes: [
            {
              gridLines: {
                display: false,
              },
            },
          ],
        },
        legend: {
          display: true,
        },
        responsive: true,
        maintainAspectRatio: false,
      },
    };
  },
  mounted() {
    this.axios.get(`/api/namakategori`).then((response) => {
      this.chartData.labels = response.data.kategori;
      this.chartData.datasets[0].data = response.data.jumlah;
      this.test = response.data.jumlah;
      this.renderChart(this.chartData, this.options);
    });
  },
};
</script>
