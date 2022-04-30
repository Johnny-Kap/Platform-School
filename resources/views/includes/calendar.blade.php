<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/admin/src/mini-event-calendar.min.css">
    @include('includes.styles')
    <!-- Demo Styles -->
    <style>
        html,
        body {
            margin: 0;
            padding: 0;
        }

        /* Just an excuse to use CSS Grid 😊 */
        #wrapper {
            padding: 40px;
            display: grid;
            grid-gap: 40px;
            grid-template-columns: 1fr 1fr 1fr;
        }

        [id^=calendar],
        [id^=calendar]+h3 {
            width: 400px;
        }

        [id^=calendar]+h3 {
            text-align: center;
        }

        @media only screen and (max-width: 500px) {
            #wrapper {
                padding: 1em;
                display: block;
            }

            [id^=calendar],
            [id^=calendar]+h3 {
                width: 100%;
                max-width: 400px;
                margin: 1em auto;
            }

            [id^=calendar]+h3 {
                display: block;
                margin-bottom: 2em;
            }
        }
    </style>
    <div id="wrapper">
        <div>
            <div id="calendar"></div>
            <h3>Default options</h3>
        </div>

        <div>
            <div id="calendar2"></div>
            <h3>Start week days from monday</h3>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="/admin/src/mini-event-calendar.min.js"></script>
    @include('includes.scripts')

    <script>
        var sameDaylastWeek = new Date().setDate(new Date().getDate() - 7);
        var someDaynextMonth = new Date().setDate(new Date().getDate() + 31);

        // All dates should be provided in timestamps
        var sampleEvents = [{
                title: "Soulful sundays bay area",
                date: sameDaylastWeek, // Same day as today, last week
                link: "https://www.eventbrite.com/e/soulful-sundays-bay-area-edition-tickets-55214242285?aff=ehomecard"
            },
            {
                title: "London Comicon",
                date: new Date().getTime(), // Today
                link: "https://www.eventbrite.co.uk/e/london-film-comic-con-summer-2019-tickets-49472593860?aff=ebdssbdestsearch"
            },
            {
                title: "Youth Athletic Camp",
                date: someDaynextMonth, // Some day as today, next month
                link: "https://www.eventbrite.com/e/leaner-stronger-faster-tm-youth-athletic-camp-2021-tickets-38245970728?aff=ebdssbdestsearch"
            }
        ];

        // TODO: Replace with real events, say from server.
        var db_events = [{
            title: "Board members meeting",
            date: new Date().getTime(),
            link: "events.com/ev2"
        }];

        $(document).ready(function() {
            $("#calendar").MEC({
                calendar_link: "example.com/myCalendar",
                events: db_events
            });
        });
    </script>
    </body>

</html>