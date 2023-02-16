
(function(win,doc){
    'use strict';

    //Exibir o calendário
    function getCalendar(perfil, div)
    {
        let calendarEl=doc.querySelector(div);
        let calendar = new FullCalendar.Calendar(calendarEl, {
            themeSystem: 'bootstrap5',
            slotDuration: '00:30:00',
            slotMinTime: '08:00:00',
            slotMaxTime: '21:00:00',
            allDaySlot: false,
            fixedWeekCount: false,
            initialView: 'dayGridMonth',
            headerToolbar:{
                start: 'title',
                center: '',
                end: ''
            },
            footerToolbar:{
                start: 'dayGridMonth',
                center: 'prev,next,today',
                end: 'agendados'
            },
            buttonText:{
                today:    'HOJE',
                month:    'CALENDÁRIO',
            },
            buttonIcons:{
                prev: 'arrow-left',
                next: 'arrow-right',
            },
            customButtons: {
                agendados: {
                  text: 'RESERVADOS',
                  click: function() {
                    alert('clicked the custom button!');
                  }
                }
              },
            locale:'pt-br',
            dateClick: function(info) {
                if(perfil == 'manager'){
                    calendar.changeView('timeGrid', info.dateStr);
                    if(info.view.type == 'timeGrid'){
                        win.location.href='/views/manager/add.php?date='+info.dateStr;
                    }
                }else{
                    if(info.view.type == 'dayGridMonth'){
                        calendar.changeView('timeGrid', info.dateStr);
                    }
                }
            },
            events: '/controllers/EventsControllers/ControllerEvents.php',
            eventClick: function(info) {
                if(perfil == 'manager' && info.view.type == 'timeGrid'){
                    win.location.href=`/views/manager/edit.php?id=${info.event.id}`;
                }else if(perfil == 'user' && info.view.type == 'timeGrid'){
                    win.location.href=`/views/user/add.php?date=${info.event.startStr}`;
                }
            },
            eventTextColor: 'black',
            dayMaxEventRows: true, // for all non-TimeGrid views
            views: {
              dayGridMonth: {
                dayMaxEventRows: 1 // adjust to 6 only for timeGridWeek/timeGridDay
              }
            }
        });
        // var source = calendar.getEvents(1)
        // console.log(source)

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