// Example: Get the canvas element
const ctx = document.getElementById('chart-01').getContext('2d');

const data = {
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
        data: [0, 10, 10, 30, '25', '15', '30'],
        fill: false,
        borderColor: 'blue',
        tension: 0.1
    },
    {
        label: "Dodge Fans",
        data: [0, 5, 20, 15, '15', '15', '25'],
        fill: false,
        borderColor: 'lime',
        tension: 0.1
    }
    ]
}

const myChart = new Chart(ctx, {
    type: "line",
    data: data,
    options: {
        plugins: {
            legend: {
                display: false
            }
        }
    }
});
