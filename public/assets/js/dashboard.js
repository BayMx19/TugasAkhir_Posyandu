$(function () {
    // =====================================
    // Profit
    // =====================================
    var chartData = {
        stunting: [],
        wasting: [],
        underweight: [],
        bulanLabels: [],
    };

    var chart = {
        series: [
            { name: "Stunting:", data: chartData.stunting },
            { name: "Wasting:", data: chartData.wasting },
            { name: "Underweight:", data: chartData.underweight },
        ],

        chart: {
            type: "bar",
            height: 345,
            offsetX: -15,
            toolbar: { show: true },
            foreColor: "#adb0bb",
            fontFamily: "inherit",
            sparkline: { enabled: false },
        },

        colors: ["#FDCA5D", "#46B846", "#2F80ED"],

        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: "35%",
                borderRadius: [6],
                borderRadiusApplication: "end",
                borderRadiusWhenStacked: "all",
            },
        },
        markers: { size: 0 },

        dataLabels: {
            enabled: false,
        },

        legend: {
            show: false,
        },

        grid: {
            borderColor: "rgba(0,0,0,0.1)",
            strokeDashArray: 3,
            xaxis: {
                lines: {
                    show: false,
                },
            },
        },

        xaxis: {
            type: "category",
            categories: [
                "Januari",
                "Februari",
                "Maret",
                "April",
                "Mei",
                "Juni",
                "Juli",
                "Agustus",
                "September",
                "Oktober",
                "November",
                "Desember",
            ],
            labels: {
                style: { cssClass: "grey--text lighten-2--text fill-color" },
            },
        },

        yaxis: {
            show: true,
            min: 0,
            max: 10,
            tickAmount: 4,
            labels: {
                style: {
                    cssClass: "grey--text lighten-2--text fill-color",
                },
            },
        },
        stroke: {
            show: true,
            width: 3,
            lineCap: "butt",
            colors: ["transparent"],
        },

        tooltip: { theme: "light" },

        responsive: [
            {
                breakpoint: 600,
                options: {
                    plotOptions: {
                        bar: {
                            borderRadius: 3,
                        },
                    },
                },
            },
        ],
    };

    var chart = new ApexCharts(document.querySelector("#chart"), chart);
    chart.render();

    $.ajax({
        url: "{{ route('data.chart') }}", // Ganti dengan URL endpoint yang sesuai
        type: "GET",
        dataType: "json",
        success: function (response) {
            // Memasukkan data dari response ke dalam variabel chartData
            chartData.stunting = response.map((item) => item.p_stunting);
            chartData.wasting = response.map((item) => item.p_wasting);
            chartData.underweight = response.map((item) => item.p_underweight);
            chartData.bulanLabels = response.map((item) => item.bulan);

            // Mengupdate data dalam grafik
            chart.updateSeries([
                { name: "Stunting:", data: chartData.stunting },
                { name: "Wasting:", data: chartData.wasting },
                { name: "Underweight:", data: chartData.underweight },
            ]);

            // Mengupdate label bulan dalam grafik
            chart.updateOptions({
                xaxis: {
                    categories: chartData.bulanLabels,
                },
            });
        },
        error: function (xhr, status, error) {
            console.error(error);
        },
    });

    // =====================================
    // Breakup
    // =====================================
    var breakup = {
        color: "#adb5bd",
        series: [38, 40, 25],
        labels: ["2022", "2021", "2020"],
        chart: {
            width: 180,
            type: "donut",
            fontFamily: "Plus Jakarta Sans', sans-serif",
            foreColor: "#adb0bb",
        },
        plotOptions: {
            pie: {
                startAngle: 0,
                endAngle: 360,
                donut: {
                    size: "75%",
                },
            },
        },
        stroke: {
            show: false,
        },

        dataLabels: {
            enabled: false,
        },

        legend: {
            show: false,
        },
        colors: ["#5D87FF", "#ecf2ff", "#F9F9FD"],

        responsive: [
            {
                breakpoint: 991,
                options: {
                    chart: {
                        width: 150,
                    },
                },
            },
        ],
        tooltip: {
            theme: "dark",
            fillSeriesColor: false,
        },
    };

    var chart = new ApexCharts(document.querySelector("#breakup"), breakup);
    chartBreakup.render();
});
