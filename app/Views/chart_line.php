<?= $this->extend('layouts/main'); ?>
<?= $this->section('content'); ?>

<div id="chart"></div>
<br>
<div id="bar"></div>

<?= $this->endSection('content'); ?>


<?= $this->section('script'); ?>

<!-- online -->
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

<!-- offline
<script src="<?= base_url('asset/js/jquery-3.6.1.min.js') ?>"></script>
<script src="<?= base_url('asset/js/apexcharts.js') ?>"></script> -->

<script>
  var options = {
    series: [{
      name: "Jumlah Buku",
      // data: [10, 41, 35, 51, 49, 62, 69, 91, 148]
      data: [<?php foreach ($list as $row) : ?><?= $row['stok'] ?>, <?php endforeach ?>]
    }],
    chart: {
      height: 350,
      type: 'line',
      zoom: {
        enabled: false
      }
    },
    dataLabels: {
      enabled: false
    },
    stroke: {
      curve: 'straight'
    },
    title: {
      text: 'Product Trends by Month',
      align: 'left'
    },
    grid: {
      row: {
        colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
        opacity: 0.5
      },
    },
    xaxis: {
      // categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
      categories: [<?php foreach ($list as $row) : ?> "<?= $row['judul'] ?>", <?php endforeach ?>],
    }
  };

  var chart = new ApexCharts(document.querySelector("#chart"), options);
  chart.render();

  var options = {
    series: [{
      data: [<?php foreach ($list as $row) : ?><?= $row['stok'] ?>, <?php endforeach ?>]
    }],
    chart: {
      type: 'bar',
      height: 350
    },
    plotOptions: {
      bar: {
        borderRadius: 4,
        horizontal: true,
      }
    },
    dataLabels: {
      enabled: false
    },
    xaxis: {
      categories: [<?php foreach ($list as $row) : ?> "<?= $row['judul'] ?>", <?php endforeach ?>],
    }
  };

  var bar = new ApexCharts(document.querySelector("#bar"), options);
  bar.render();



  // var options = {
  //   //series: [44, 55, 41, 17, 15],
  //   series: [<?php foreach ($list as $row) : ?><?= $row['stok'] ?>, <?php endforeach ?>],
  //   chart: {
  //     type: 'donut',
  //     width: '50%',
  //   },
  //   //labels: ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],    
  //   labels: [<?php foreach ($list as $row) : ?> "<?= $row['judul'] ?>", <?php endforeach ?>],
  // };

  // var chart = new ApexCharts(document.querySelector("#chart"), options);
  // chart.render();
</script>

<?= $this->endSection('script'); ?>