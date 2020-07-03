<template>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{ 'locales.modules.weather.title' | trans}}</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <span v-if="isLoading" class="col-md-12 text-center">
                    {{ 'locales.modules.loading' | trans}}
                </span>
                <span v-else class="col-md-12 text-center">
                    <p>
                        <b>{{ 'locales.modules.weather.pressure' | trans}}: </b>
                        {{this.data.main.pressure}} hPa
                    </p>
                    <p>
                        <b>{{ 'locales.modules.weather.temp' | trans}}: </b>
                        {{this.data.main.temp}} °C
                    </p>
                    <p>
                        <b>{{ 'locales.modules.weather.feels_like' | trans}}: </b>
                        {{this.data.main.feels_like}} °C
                    </p>
                    <p>
                        <b>{{ 'locales.modules.weather.min_max_temp' | trans}}: </b>
                        {{this.data.main.temp_min + '°C / ' + this.data.main.temp_min}} °C
                    </p>
                    <p>
                        <b>{{ 'locales.modules.weather.wind_speed' | trans}}: </b>
                        {{this.data.wind.speed}} {{ 'locales.modules.weather.speed_metric' | trans}}
                    </p>
                    <p>
                        <b>{{ 'locales.modules.weather.clouds' | trans}}: </b>
                        {{this.data.clouds.all}}%
                    </p>
                </span>
            </div>
            <div class="row mt-4">
                <span class="col-md-12 text-center">
                    API: <a href="https://openweathermap.org/api" target="_blank">Weather API</a>
                </span>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'WeatherModule',
        data () {
            return {
                isLoading: true,
                apiKey: '6f5ed0c439c58f6763338418480c61a6',
                data: [],
            }
        },
        methods: {
            getWeatherData() {
                const city = 'Baku'
                const proxyurl = "https://cors-anywhere.herokuapp.com/"
                const url = `api.openweathermap.org/data/2.5/weather?q=${city}&appid=${this.apiKey}&units=metric`

                // Proxyurl is used to get around “No Access-Control-Allow-Origin header” problems

                axios.get(proxyurl + url).then((response) => {
                    this.data = response.data
                    this.isLoading = false
                })
            },
        },
        mounted() {
            this.getWeatherData()
        }
    }
</script>
