<template>
    <div >
        <h2>Budget Co-pro </h2>
        <line-chart :chart-data="datacollection" :height="150"></line-chart>
    </div>
</template>

<script>

    import LineChart from './LineChart.js'

    export default {
        components: {
            LineChart
        },
        data(){
            return {
                datacollection: null
            }
        },
        mounted () {
            this.fillData()
        },
        methods: {

            fillData ()
            {
                this.datacollection = {
                    labels: ['Janvier','Fevrier','Mars','Avril','Mais', 'Juin' , 'Juillet'],
                    datasets: [
                        {
                            label: 'Charge',
                            backgroundColor: 'rgba(10,7,255,0.55)',
                            data: [ 2000, 4000, 2500, 2000, 4500, 4000, 2000]
                        },

                        {
                            label: 'depense',
                            backgroundColor: 'rgba(255,0,102,0.55)',
                            data: [ 5000, 2000, 3000, 4000, 3000, 2000, 5000]
                        },
                    ]
                }
            }
        }
    }
</script>

<style lang="css">
    .small {
        max-width: 800px;
        max-height: 500px;
        margin:  50px auto;

    }
</style>
