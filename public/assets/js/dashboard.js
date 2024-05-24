$(function () {
    // =====================================
    // Profit
    // =====================================
    var datachart = $datachart;

    var chartData = {
        stunting: datachart.map(function (item) {
            return item.p_stunting;
        }),
        wasting: datachart.map(function (item) {
            return item.p_wasting;
        }),
        underweight: datachart.map(function (item) {
            return item.p_underweight;
        }),
        bulanLabels: datachart.map(function (item) {
            return item.bulan;
        }),
    };

    var options = {
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
            categories: chartData.bulanLabels,
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

    var chart = new ApexCharts(document.querySelector("#chart"), options);
    chart.render();

    $.ajax({
        url: "/getdataforchart",
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
});
