var limit = 10000; //increase number of dataPoints by increasing the limit
    var y = 100;
    var data = [];
    var dataSeries = { type: "line" };
    var dataPoints = [];
    for (var i = 0; i < limit; i += 1) {
        var r = Math.round(Math.random() * 10 - 5);
        y += r;
        // while(y<=0) {
        //     y = 1;
        //     y += r;
        // }
        dataPoints.push({
            x: i,
            y: y
        });
    }
    dataSeries.dataPoints = dataPoints;
    data.push(dataSeries);

    var chart = new CanvasJS.Chart("chartContainer1", {
        zoomEnabled: true,
        animationEnabled: true,
        animationEnabled: true,
        title: {
            text: "BTC Value"
        },
        axisY: {
            includeZero: false
        },
        data: data
    });
    chart.render();