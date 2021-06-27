async function iniciar(opcion){
            
    var prueba = [];
    const prueba2 = await loadPeriods(opcion);
    for (let index = 0; index < prueba2[0].length; index++) {
        prueba.push(String(index));
        
    }
    
    
    const labels = prueba;
    const nombres = ['Algoritmo Burbuja','Algoritmo Insertion','Algoritmo Merge','Algoritmo QuickSort'];
    const data = {
        labels: labels,
        datasets: [{
            label: nombres[opcion-1],
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: prueba2[0],
        }]
    };
    const config = {
        type: 'bar',
        data,
        options: {
            animation: false
        }
    };
    
    let array = ['',2,3,4]
    console.log("HOLA");
    try {
        var myChart = new Chart(
            document.getElementById('myChart'.concat(array[opcion-1])),
            config
            );
        
    } catch  {
        
        document.getElementById("canvas".concat(array[opcion-1])).innerHTML = '';
        document.getElementById("canvas".concat(array[opcion-1])).innerHTML = `
            <canvas id="myChart${array[opcion-1]}"></canvas>
        `;

        var myChart = new Chart(
            document.getElementById('myChart'.concat(array[opcion-1])),
            config
            );
    }
    
   
    for (let index = 0; index < prueba2.length; index++) {
        removeData(myChart, prueba2[index])
        
    }
    
    
    
}

async function loadPeriods(opcion){
    return new Promise((res,rej)=>{
        $.ajax({
            type:'POST',
            url:'back/main.php',
            
            data: {opcion: opcion},
            success:(data)=>{
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
    
}