var income = 5000; 
var expenditure = 3000; 

var profit = income - expenditure;
var loss = expenditure - income;

document.getElementById("profit").innerHTML = "$" + profit.toFixed(2);
document.getElementById("loss").innerHTML = "$" + loss.toFixed(2);

var ctx = document.getElementById('myChart').getContext('2d');

var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Profit', 'Loss'],
        datasets: [{
            label: 'Profit and Loss',
            data: [profit, loss],
            backgroundColor: [
                'rgba(75, 192, 192, 0.2)', 
                'rgba(255, 99, 132, 0.2)'   
            ],
            borderColor: [
                'rgba(75, 192, 192, 1)',
                'rgba(255, 99, 132, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
