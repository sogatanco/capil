$(document).ready(function () {
    var date = new Date();
    var namahari=['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu']

    $.ajax({
        url:'data/pengurusan',
        method:'get',
        type:'json',
        success:function(data) {
            var ktp=data.filter(d=>d.jenis==='ktp')
            var kk=data.filter(d=>d.jenis==='kk')
            var akte=data.filter(d=>d.jenis==='akte')
            for(i=7; i>=0; i--){
                var last = new Date(date.getTime() - (i *24 * 60 * 60 * 1000));
                // set label
                myChart.data.labels.push(namahari[last.getDay()]+', '+last.getDate()+'/'+(last.getMonth()+1))

                // set data ktp
                myChart.data.datasets[1].data.push(ktp.filter(j=>j.created_at.substr(0,10)==last.getFullYear()+'-'+("0" + (last.getMonth()+1)).slice(-2)+'-'+("0" + last.getDate()).slice(-2))
                  .length);

                // set data kk
                var last = new Date(date.getTime() - (i *24 * 60 * 60 * 1000));
                myChart.data.datasets[0].data.push(kk.filter(j=>j.created_at.substr(0,10)==last.getFullYear()+'-'+("0" + (last.getMonth()+1)).slice(-2)+'-'+("0" + last.getDate()).slice(-2))
                  .length);

                // set data kk
                var last = new Date(date.getTime() - (i *24 * 60 * 60 * 1000));
                myChart.data.datasets[2].data.push(akte.filter(j=>j.created_at.substr(0,10)==last.getFullYear()+'-'+("0" + (last.getMonth()+1)).slice(-2)+'-'+("0" + last.getDate()).slice(-2))
                  .length);

                // set backgroudcolor
                myChart.data.datasets[0].backgroundColor.push('rgba(255, 99, 132, 0.2)')
                myChart.data.datasets[1].backgroundColor.push('rgba(54, 162, 235, 0.2)')
                myChart.data.datasets[2].backgroundColor.push('rgba(153, 102, 255, 0.2)')

                // set bordercolor
                myChart.data.datasets[0].borderColor.push('rgba(255, 99, 132, 1)')
                myChart.data.datasets[1].borderColor.push('rgba(54, 162, 235, 1)')
                myChart.data.datasets[2].borderColor.push('rgba(153, 102, 255, 1)')
            }
            myChart.update()

        }
    });


    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [],
        datasets: [{
            label: 'KK',
            data:[],
            backgroundColor: [],
            borderColor: [],
            borderWidth: 1
        },
        {
            label: 'KTP',
            data: [],
            backgroundColor: [],
            borderColor: [],
            borderWidth: 1
        },
        {
            label: 'Akte',
            data: [],
            backgroundColor: [],
            borderColor: [],
            borderWidth: 1
        }
        ]
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
   console.log(myChart.data.datasets[1].data)
})