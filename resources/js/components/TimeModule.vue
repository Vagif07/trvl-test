<template>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{ 'locales.modules.time.title' | trans}}</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <span class="col-md-12 text-center">
                    {{ 'locales.modules.time.zone' | trans}}
                </span>
            </div>
            <div class="row my-4">
                <span v-if="isLoading" class="col-md-12 text-center">
                    {{ 'locales.modules.loading' | trans}}
                </span>
                <span v-else class="col-md-12 text-center">
                    {{this.time}}
                </span>
            </div>
            <div class="row">
                <span class="col-md-12 text-center">
                    API: <a href="http://worldtimeapi.org/" target="_blank">World Time API</a>
                </span>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'TimeModule',
        data () {
            return {
                isLoading: true,
                datetime: [],
                time: null,
            }
        },
        methods: {
            getTimeData() {
                const zone = 'Asia'
                const city = 'Baku'
                const proxyurl = "https://cors-anywhere.herokuapp.com/"
                const url = `http://worldtimeapi.org/api/timezone/${zone}/${city}`

                // Proxyurl is used to get around “No Access-Control-Allow-Origin header” problems

                axios.get(proxyurl + url).then((response) => {
                    this.datetime = new Date(response.data.datetime)
                    setInterval(() => {
                        this.updateTime()
                    }, 1000)
                })
            },
            updateTime() {
                // Increase time by 1 second
                this.datetime.setSeconds(this.datetime.getSeconds() + 1);

                // Format time displayed
                this.time = this.addZeros(this.datetime.getHours())
                    + ':' 
                    + this.addZeros(this.datetime.getMinutes()) 
                    + ':' 
                    + this.addZeros(this.datetime.getSeconds())

                this.isLoading = false
            },
            addZeros(num) {
                // Add zeroes to the beginning, if needed.
                // EX: 07:05:00
                let zero = ''
                for(let i = 0; i < 2; i++)
                    zero += '0'

                return (zero + num).slice(-2);
            }
        },
        mounted() {
            this.getTimeData()
        }
    }
</script>
