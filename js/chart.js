fetch('../includes/utilities/chart.inc.php')
.then(response => response.json())
.then(data => {
    const incomeData = data.income;
    const expenseData = data.expense;

    const labels = incomeData.map(item => item.description);
    const incomeAmounts = incomeData.map(item => item.amount);
    const expenseAmounts = expenseData.map(item => item.amount);

    let ctx = document.getElementById("myChart").getContext("2d");
    let myChart = new Chart(ctx, {
        type: "line",
        data: {
            labels: labels,
            datasets: [
                {
                    label: "Income",
                    data: incomeAmounts,
                    backgroundColor: "rgba(75, 192, 192, 0.6)",
                },
                {
                    label: "Expenses",
                    data: expenseAmounts,
                    backgroundColor: "rgba(255, 99, 132, 0.6)",
                },
            ],
        },
    });
})
.catch(error => console.error('Error fetching data:', error));




function cal(x,y){
    let z = x+y;
    return z;
};

cal(5,10);
cal(20,15);