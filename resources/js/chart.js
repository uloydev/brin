import {
    Chart,
    registerables
} from 'chart.js';
Chart.register(...registerables);

const colorIndigo = 'rgb(94, 92, 230)';
const darkIndigo = '#4A4993';
const customGray = '#38383C'
const indigos = [colorIndigo, darkIndigo];
const grayIndigo = [colorIndigo, customGray];

const donnutChart = (ctx, legend, color, fontSize, dataPoints) => {
    // const dataPoints = [300, 50];
    const data = {
        labels: [
            'minggu ini',
            '',
        ],
        datasets: [{
            data: dataPoints,
            backgroundColor: color,
            hoverOffset: 1,
            spacing: 0,
            cutout: "80%",
            borderRadius: 10,
            borderWidth: 0,
        }]
    };

    const counter = {
        id: 'counter',
        beforeDraw(chart, args, options) {
            const {
                ctx,
                chartArea: {
                    top,
                    right,
                    bottom,
                    left,
                    width,
                    height
                }
            } = chart;
            ctx.save();
            ctx.font = `${options.fontSize}px ${options.fontFamily}`;
            ctx.textAlign = 'center';
            ctx.fillStyle = options.fontColor;
            ctx.fillText(`${ dataPoints[0] == 0 && dataPoints[1] == 0 ? 0 : (dataPoints[0]+dataPoints[1])/dataPoints[0]*100}%`, width / 2, ((height / 2) + 21 * 0.34));
        }
    }

    const config = {
        type: 'doughnut',
        data: data,
        options: {
            plugins: {
                counter: {
                    fontColor: color[0],
                    fontSize: fontSize,
                    fontFamily: 'sans-serif'
                },
                legend: {
                    display: legend,
                    labels: {
                        padding: 15,
                        boxWidth: 20,
                        boxHeight: 5,
                        font: {
                            size: 14,
                        },
                    },
                    position: "right",
                }
            }
        },
        plugins: [counter]
    };

    return new Chart(ctx, config);
}

const barChart = (ctx, labels, values) => {

    const data = {
        labels: labels,
        datasets: [{
            data: values,
            backgroundColor: [
                'rgba(107, 88, 145, 0.6)'
            ],
            borderColor: [
                'rgb(82, 71, 107)',
            ],
            borderWidth: 1,
            barThickness: 60,
            minBarLength: "20px"
        }]
    };

    const config = {
        type: 'bar',
        data: data,
        options: {
            scales: {
                y: {
                    beginAtZero: true
                },
            },
            plugins: {
                legend: {
                    display: false,
                },
            }
        },
    };
    return new Chart(ctx, config);
}

//element
const ctx = document.getElementById('myChart');
const ctx1 = document.getElementById('myChart1');
// const ctx2 = document.getElementById('myChart2');
const ctx3 = document.getElementById('barChart').getContext('2d');
// const ctx4 = document.getElementById('myChart3');

//instantiating Chart
fetch('/chart-data')
    .then((resp) => resp.json())
    .then((data)  => {
        console.log(data)
        const myChart = donnutChart(ctx, false, grayIndigo, 18, [data.proposal.totalWeek, data.proposal.total - data.proposal.totalWeek]);
        const myChart1 = donnutChart(ctx1, false, grayIndigo, 18, [data.proposalApproved.totalWeek, data.proposalApproved.total - data.proposalApproved.totalWeek]);
        const myBarChart = barChart(ctx3, data.category.labels, data.category.values);
    });
// const myChart = donnutChart(ctx, false, grayIndigo, 18);
// const myChart1 = donnutChart(ctx1, false, grayIndigo, 18);
