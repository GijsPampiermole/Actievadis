<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<link href='https://fullcalendar.io/releases/fullcalendar/3.9.0/fullcalendar.min.css' rel='stylesheet' />
<link href='https://fullcalendar.io/releases/fullcalendar/3.9.0/fullcalendar.print.min.css' rel='stylesheet' media='print' />
<link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src='https://fullcalendar.io/releases/fullcalendar/3.9.0/lib/moment.min.js'></script>
<script src='https://fullcalendar.io/releases/fullcalendar/3.9.0/lib/jquery.min.js'></script>
<script src='https://fullcalendar.io/releases/fullcalendar/3.9.0/fullcalendar.min.js'></script>
<script>

  $(document).ready(function() {
    $('#calendar').fullCalendar({
      header: {
        timeZone: 'Europe/Amsterdam',
        left: 'prev,next today',
        center: 'title',
        right: 'month,basicWeek,basicDay'
      },
      height: 500,
      navLinks: true, // can click day/week names to navigate views
      editable: true,
      eventLimit: true, // allow "more" link when too many events

           events: <?php echo json_encode($Events); ?>
    });

  });

</script>
</head>
<body>

  <div id='calendar' style="width: 70%; margin: 0px auto;"></div>

  <button id="btn">
    <a href="/addActivity">Add activity</a>
  </button>


</body>
</html>