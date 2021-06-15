const {Chart, PieController, LineController, LineElement, PointElement, CategoryScale, LinearScale, Title, ArcElement, BarController, BarElement} = require('chart.js')
const axios = require('axios')

Chart.register(PieController, LineController, LineElement, PointElement, CategoryScale, LinearScale, Title, ArcElement, BarElement, BarController)

if(document.getElementById('article-delete')) {
    let button = document.getElementById('article-delete')

    button.addEventListener('click', function(e) {
        e.preventDefault();
        let r = confirm('Voulez Vous Supprimer cette article');

        if(r==true) {
            window.location = $(this).attr('href');
        }
    })
}



if(document.getElementById('tranche-age')) {
    let ctx = document.getElementById('tranche-age').getContext('2d');
    axios.get('http://localhost:8000/data/tranche-age')
        .then(response => {
            const {labels, data} = response.data
            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Tranche Ages',
                        data: data,
                        backgroundColor: [
                            'rgba(237, 76, 103,1.0)',
                            'rgba(6, 82, 221,1.0)',
                            'rgba(0, 148, 50,1.0)',
                            'rgba(255, 195, 18,1.0)',
                            'rgba(131, 52, 113,1.0)'
                        ],
                        borderColor: [
                            'rgba(237, 76, 103,1.0)',
                            'rgba(6, 82, 221,1.0)',
                            'rgba(0, 148, 50,1.0)',
                            'rgba(255, 195, 18,1.0)',
                            'rgba(131, 52, 113,1.0)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        title: {
                            display: true,
                            text: 'Histogramme Tranche Age'
                        }
                    }
                }
            })
        }).catch(err => {
            alert(err)
        })
}
