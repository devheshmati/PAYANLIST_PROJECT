// Chart 01
const ctx = document.getElementById('chart-01').getContext('2d');

const chart_01_data = {
    labels: ['1', '2', '3', '4', '5', '6', '7'],
    datasets: [{
        label: "BMW Fans",
        data: [0, 15, 5, 15, 20, 15, 20],
        fill: true,
        borderColor: 'red',
        tension: 0.1,
    },
    {
        label: "Ford Fans",
        data: [0, 10, 10, 30, 25, 15, 30],
        fill: false,
        borderColor: 'blue',
        tension: 0.1
    },
    {
        label: "Dodge Fans",
        data: [0, 5, 20, 15, 15, 15, 25],
        fill: false,
        borderColor: 'lime',
        tension: 0.1
    }
    ]
}

const chart_01 = new Chart(ctx, {
    type: "line",
    data: chart_01_data,
    options: {
        plugins: {
            legend: {
                display: false
            }
        },
        scales: {
            x: {
                ticks: {
                    display: false,
                }
            },
            y: {
                ticks: {
                    display: false,
                }
            }
        }
    }
});

// Chart 02
const ctx_02 = document.getElementById('chart-02').getContext('2d');

const chart_02_data = {
    labels: ['1', '2', '3', '4', '5', '6', '7'],
    datasets: [{
        label: "BMW Fans",
        data: [95, 90, 75, 55, 45, 40, 40],
        fill: true,
        backgroundColor: '#a684ff',
        borderColor: 'lightblue',
        tension: 0.5,
    },
    ]
}

const chart_02 = new Chart(ctx_02, {
    type: "line",
    data: chart_02_data,
    options: {
        plugins: {
            legend: {
                display: false
            }
        },
        scales: {
            y: {
                ticks: {
                    display: false,
                },
                min: 0,
                max: 100
            },
            x: {
                ticks: {
                    display: false,
                }
            }
        }
    }
});

// Chart 03
const ctx_03 = document.getElementById('chart-03').getContext('2d');

const chart_03_data = {
    labels: ['1', '2', '3', '4', '5', '6', '7'],
    datasets: [{
        label: "BMW Fans",
        data: [40, 40, 35, 25, 15, 10, 5],
        fill: true,
        backgroundColor: '#8e51ff',
        borderColor: 'lightblue',
        tension: 0.5,
    },
    ]
}

const chart_03 = new Chart(ctx_03, {
    type: "line",
    data: chart_03_data,
    options: {
        plugins: {
            legend: {
                display: false
            }
        },
        scales: {
            y: {
                ticks: {
                    display: false,
                },
                min: 0,
                max: 100
            },
            x: {
                offset: false,
                ticks: {
                    display: false,
                }
            }
        }
    }
});
