
<script>
    $(document).ready(function () {
        get_chart_barangmasuk();
        get_chart_barangmasuk_years();
        get_chart_barangkeluar();

        var label_bulan = ['', 'Jan','Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Ags', 'Sep', 'Okt', 'Nov', 'Des'];
        var options = {
            axisX: {
                showGrid: false
            },
            seriesBarDistance: 1,
            chartPadding: {
                top: 15,
                right: 15,
                bottom: 5,
                left: 0
            },
            plugins: [
                Chartist.plugins.tooltip()
            ],
            width: '100%'
        };

        var responsiveOptions = [
            ['screen and (max-width: 640px)', {
                seriesBarDistance: 5,
                axisX: {
                    labelInterpolationFnc: function (value) {
                        return value[0];
                    }
                }
            }]
        ];

        function get_chart_barangmasuk() {
            // var data = array();
            $.ajax({
                type: "GET",
                url: "<?= site_url('Admin/Dashboard/chart_barangmasuk') ?>",
                dataType: "json",
                success: function (data) {
                    console.log(data)
                    var labels = [];
                    var jumlah = [];

                    $.each(data, function (i, v) { 
                         labels[i] = label_bulan[v.bulan];
                         jumlah[i] = v.jumlah;
                    });

                    console.log(labels);
                    console.log(jumlah);

                    var barang_masuk = {
                        labels: labels,
                        series: [
                            jumlah
                        ]
                    };

                    new Chartist.Bar('.barang-masuk', barang_masuk, options, responsiveOptions);
                }
            });
        }

        function get_chart_barangkeluar() {
            // var data = array();
            $.ajax({
                type: "GET",
                url: "<?= site_url('Admin/Dashboard/chart_barangkeluar') ?>",
                dataType: "json",
                success: function (data) {
                    console.log(data)
                    var labels = [];
                    var jumlah = [];

                    $.each(data, function (i, v) { 
                         labels[i] = label_bulan[v.bulan];
                         jumlah[i] = v.jumlah;
                    });

                    console.log(labels);
                    console.log(jumlah);

                    var barang_keluar = {
                        labels: labels,
                        series: [
                            jumlah
                        ]
                    };

                    new Chartist.Bar('.barang-keluar', barang_keluar, options, responsiveOptions);
                }
            });
        }   

        function get_chart_barangmasuk_years() {
            // var data = array();
            $.ajax({
                type: "GET",
                url: "<?= site_url('Admin/Dashboard/chart_barangmasuk_tahun') ?>",
                dataType: "json",
                success: function (data) {
                    console.log(data)

                    var labels = [];
                    var jumlah = [];

                    $.each(data, function (i, v) { 
                         labels[i] = v.year;
                         jumlah[i] = v.jumlah;
                    });

                    var chart = new Chartist.Line('.stats-year', {
                        labels: labels,
                        series: [
                            jumlah
                        ]
                    }, {
                        // low: 0,
                        // high: 28,
                        showArea: false,
                        fullWidth: false,
                        plugins: [
                            Chartist.plugins.tooltip()
                        ],
                        axisY: {
                            onlyInteger: true,
                            scaleMinSpace: 40,
                            offset: 20,
                            labelInterpolationFnc: function (value) {
                                return (value / 1);
                            }
                        },
                    });
                }
            });
        }
    //     new Chartist.Bar('.barang-keluar', data, options, responsiveOptions);

    });
</script>