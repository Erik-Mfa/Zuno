
(function(win,doc){
    'use strict';

    //Exibir o calendário
    function getCalendar(perfil, div)
    {
        let calendarEl=doc.querySelector(div);
        let calendar = new FullCalendar.Calendar(calendarEl, {
            themeSystem: 'bootstrap5',
            fixedWeekCount: false,
            businessHours: {
                // days of week. an array of zero-based day of week integers (0=Sunday)
                daysOfWeek: [ 1, 2, 3, 4, 5], 
              
                startTime: '8:00', 
                endTime: '20:00', 
            },
            initialView: 'dayGridMonth',
            headerToolbar:{
                start: 'title',
                center: 'prev,next,today',
                end: 'dayGridMonth, timeGridWeek'
            },
            buttonText:{
                today:    'hoje',
                month:    'mês',
                week:     'semana',
                day:      'dia'
            },
            buttonIcons:{
                prev: 'arrow-left',
                next: 'arrow-right'
            },
            locale:'pt-br',
            dateClick: function(info) {
                if(perfil == 'manager'){
                    calendar.changeView('timeGrid', info.dateStr);
                }else{
                    if(info.view.type == 'dayGridMonth'){
                        calendar.changeView('timeGrid', info.dateStr);
                    }else{
                        win.location.href='/views/user/add.php?date='+info.dateStr;
                    }
                }
            },
            eventSources: [
                {
                    url: '/controllers/ControllerEvents.php',
                    color: 'purple'
                },
                {
                    url: '/controllers/ControllerAvailableDays.php',
                    color: 'green'
                }
            ],
            eventClick: function(info) {
                if(perfil == 'manager'){
                    win.location.href=`/views/manager/editar.php?id=${info.event.id}`;
                }
            }
        });
        calendar.render();
    }

    if(doc.querySelector('.calendarUser')){
        getCalendar('user','.calendarUser');
    }else if(doc.querySelector('.calendarManager')){
        getCalendar('manager','.calendarManager');
    }

    if(doc.querySelector('#delete')){
        let btn=doc.querySelector('#delete');
        btn.addEventListener('click',(event)=>{
            event.preventDefault();
            if(confirm("Deseja mesmo apagar este dado?")){
                win.location.href=event.target.parentNode.href;
            }
        },false);
    }
})(window,document);