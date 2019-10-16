<div class="container">
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <div class="weather">
                <div class="current">
                    <div class="info">
                        <div>&nbsp;</div>
                        <div class="city"><small><small>CITY:</small></small>
                            <h1><b>{{$weather->name}}</b></h1></div>
                        <div class="temp"><small>{{ $weather->main->temp }}</small></div>
                        <div class="wind"><small></small></div>
                        <div>&nbsp;</div>
                    </div>
                    <div class="icon">
                        <span class="wi-day-sunny"></span>
                    </div>
                </div>
                <div class="future">
                    <div class="day">
                        <h3>Mon</h3>
                        <p><span class="wi-day-cloudy"></span></p>
                    </div>
                    <div class="day">
                        <h3>Tue</h3>
                        <p><span class="wi-showers"></span></p>
                    </div>
                    <div class="day">
                        <h3>Wed</h3>
                        <p><span class="wi-rain"></span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<link rel="stylesheet" type="text/css" href="/Content/css/weather-icons/css/weather-icons.min.css"/>

<style>
    .weather {
        display: flex;
        flex-flow: column wrap;
        box-shadow: 0px 1px 10px 0px #cfcfcf;
        overflow: hidden;
    }

    .weather .current {
        display: flex;
        flex-flow: row wrap;
        background-image: url({{asset('storage/images/du-bao-thoi-tiet.jpg')}});
        background-repeat: repeat-x;
        color: white;
        padding: 20px;
        text-shadow: 1px 1px #F68D2E;
    }

    .weather .current .info {
        display: flex;
        flex-flow: column wrap;
        justify-content: space-around;
        flex-grow: 2;
    }

    .weather .current .info .city {
        font-size: 26px;
    }

    .weather .current .info .temp {
        font-size: 56px;
    }

    .weather .current .info .wind {
        font-size: 24px;
    }

    .weather .current .icon {
        text-align: center;
        font-size: 64px;
        flex-grow: 1;
    }

    .weather .future {
        display: flex;
        flex-flow: row nowrap;
    }

    .weather .future .day {
        flex-grow: 1;
        text-align: center;
        cursor: pointer;
    }

    .weather .future .day:hover {
        color: #fff;
        background-color: #F68D2E;
    }

    .weather .future .day h3 {
        text-transform: uppercase;
    }

    .weather .future .day p {
        font-size: 28px;
    }
</style>
