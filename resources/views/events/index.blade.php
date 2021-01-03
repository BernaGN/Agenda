@extends('layouts.app')
@section('scripts')

    <!-- fullcalendar -->
    <meta charset='utf-8' />
    <link href="{{ asset('fullcalendar/core/main.css') }}" rel='stylesheet' />
    <link href="{{ asset('fullcalendar/daygrid/main.css') }}" rel='stylesheet' />
    <link href="{{ asset('fullcalendar/list/main.css') }}" rel='stylesheet' />
    <link href="{{ asset('fullcalendar/timegrid/main.css') }}" rel='stylesheet' />
    <script src="{{ asset('fullcalendar/core/main.js') }}"></script>
    <script src="{{ asset('fullcalendar/daygrid/main.js') }}"></script>
    <script src="{{ asset('fullcalendar/list/main.js') }}"></script>
    <script src="{{ asset('fullcalendar/timegrid/main.js') }}"></script>
    <script src="{{ asset('fullcalendar/interaction/main.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                plugins: ['dayGrid', 'interaction', 'timeGrid', 'list'],
                header: {
                    left: 'prev,next today boton',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay',
                },
                dateClick: function(info) {
                    $('#exampleModal').modal('toggle');
                    calendar.addEvent({
                        title: "Evento x",
                        date: info.dateStr
                    });
                },
                eventClick: function(info) {
                    console.log(info.event.title);
                    console.log(info.event.extendedProps.descripcion);
                    console.log(info.event.start);
                    console.log(info.event.end);
                    console.log(info.event.textColor);
                    console.log(info.event.backgroundColor);
                },
                events: [{
                    title: "Mi evento 1",
                    descripcion: "Descripcion del evento 1",
                    start: "2021-01-02 12:30:00",
                    end: "2021-01-04 12:30:00",
                    color: "#FFCCAA",
                    textColor: "#000000"
                }, {
                    title: "Mi evento 2",
                    descripcion: "Descripcion del evento 2",
                    start: "2021-01-03 12:30:00",
                    end: "2021-01-10 12:30:00",
                }]
            });
            calendar.setOption('locale', 'Es');
            calendar.render();
        });

    </script>
    <!-- js de bootstrap -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- css de bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    </head>

@endsection


@section('content')
    <div id='calendar' style="max-width: 60%; margin: 40px auto;"></div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

@endsection
