async function iniciar(){
            
    var prueba = [];
    const prueba2 = await loadPeriods();
    for (let index = 0; index < prueba2[0].length; index++) {
        prueba.push(String(index));
        
    }
    
    
    const labels = prueba;
   
    const data = {
        labels: labels,
        datasets: [{
            label: 'My First dataset',
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: prueba2[0],
        }]
    };
    console.log(prueba2[0]);
    const config = {
        type: 'bar',
        data,
        options: {
            animation: false
        }
    };
    
    
    var myChart = new Chart(
    document.getElementById('myChart'),
    config
    );
    /* console.log(myChart.config.data);
    console.log(myChart); */
    
    /* setTimeout(function(){ console.log(data.datasets[0].data); }, 1000);
    setTimeout(function(){data.datasets[0].data = prueba2[1];}, 1000);
    setTimeout(function(){ console.log(data.datasets[0].data); }, 1000); */
    for (let index = 0; index < prueba2.length; index++) {
        removeData(myChart, prueba2[index])
        
    }
    
    
    
}

async function loadPeriods(){
    return new Promise((res,rej)=>{
        $.ajax({
            type:'POST',
            url:'back/main.php',
            
            data: {opcion: 4},
            success:(data)=>{
                console.log(data);
                res(JSON.parse(data));
            },
            error:(data)=>{
                console.log(data);
            }
        });
    })
}
function removeData(chart, array) {
    for (let index = 0; index < array.length; index++) {
        setTimeout(function(){ 
            chart.data.datasets[0].data[index] = array[index];
            chart.update();
        }, 1);
        
        
    }
    alert('done');
}
document.addEventListener("DOMContentLoaded",iniciar);