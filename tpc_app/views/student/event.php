<script>
$(document).ready(function(){
    $(window).load(function(){
        $(".result").slideUp();
    });
    $(".btn2").click(function(){
        $(".result").slideToggle();
    });
});
</script>
<div class="col-lg-3" style="padding:10px;background-color:#FFFFFF;">
					<div class="col-lg-12" style="border:solid 1px #D3D3D3;padding:5px;background:#EEE">
					<div class="col-lg-6" style="padding-top:0px;">
					<img src="<?php echo base_url();?>/tpc_asset/img/people/3.png" 
					style="border-radius:5px" class="img-responsive">
					</div>
					<div class="col-lg-6" style="padding-top:15px;letter-spacing: 2px">
					<a href="profile">Edit Profile</a></h5>
						<a href="#" style="letter-spacing:1px">Logout</a></div>
					<div class="col-lg-12" style="padding:5px;padding-left:0px">
					<h5 style="letter-spacing:1px;border:solid 1px;background: #Ffffff;padding: 10px">Rahul Trivedi</h5>
					</div>
					</div>
	<div class="col-lg-12" style="padding:0px;border:solid 1px #D3D3D3">
		<div class="col-lg-12" style="padding:5px;border:solid 1px #D3D3D3">
			<h3 style="letter-spacing:1px;background: #Ffffff;">Notification</h3>
		</div>
			<div class="col-lg-12" style="padding:10px">
				<marquee direction="up" onmouseover="stop()" onmouseout="start();">
					<div style="letter-spacing: 2px">Gallor Event Is Going On !!!</div>
				</marquee>
				</div>

		</div>
	<div class="col-lg-12" style="padding:10px;border:solid 1px #D3D3D3">
		<a href="event">
		<img src="<?php echo base_url(); ?>/tpc_asset/img/eventcala.png" class="img-responsive" /></a>
		</div>
	</div>
<div class="col-lg-9" style="border:solid  0px #D6D6D6;padding:0;background-color:#FFFFFF;padding-left:5px;padding-right:5px">
	<div class="col-lg-12" style="padding-top:10px">
		<div class="widget widget-nopad">
            <div class="widget-header"> <i class="icon-list-alt"></i>
              <h3> Recent News</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <div id='calendar'>
              </div>
            </div>
            <!-- /widget-content --> 
          </div>
</div>
</div>
<script>     

        var lineChartData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [
				{
				    fillColor: "rgba(220,220,220,0.5)",
				    strokeColor: "rgba(220,220,220,1)",
				    pointColor: "rgba(220,220,220,1)",
				    pointStrokeColor: "#fff",
				    data: [65, 59, 90, 81, 56, 55, 40]
				},
				{
				    fillColor: "rgba(151,187,205,0.5)",
				    strokeColor: "rgba(151,187,205,1)",
				    pointColor: "rgba(151,187,205,1)",
				    pointStrokeColor: "#fff",
				    data: [28, 48, 40, 19, 96, 27, 100]
				}
			]

        }

        var myLine = new Chart(document.getElementById("area-chart").getContext("2d")).Line(lineChartData);


        var barChartData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [
				{
				    fillColor: "rgba(220,220,220,0.5)",
				    strokeColor: "rgba(220,220,220,1)",
				    data: [65, 59, 90, 81, 56, 55, 40]
				},
				{
				    fillColor: "rgba(151,187,205,0.5)",
				    strokeColor: "rgba(151,187,205,1)",
				    data: [28, 48, 40, 19, 96, 27, 100]
				}
			]

        }    

        $(document).ready(function() {
        var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();
        var calendar = $('#calendar').fullCalendar({
          header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
          },
          selectable: true,
          selectHelper: true,
          select: function(start, end, allDay) {
            var title = prompt('Event Title:');
            if (title) {
              calendar.fullCalendar('renderEvent',
                {
                  title: title,
                  start: start,
                  end: end,
                  allDay: allDay
                },
                true // make the event "stick"
              );
            }
            calendar.fullCalendar('unselect');
          },
          editable: true,
          events: [
            {
              title: 'All Day Event',
              start: new Date(y, m, 1)
            },
            {
              title: 'Long Event',
              start: new Date(y, m, d+5),
              end: new Date(y, m, d+7)
            },
            {
              id: 999,
              title: 'Repeating Event',
              start: new Date(y, m, d-3, 16, 0),
              allDay: false
            },
            {
              id: 999,
              title: 'Repeating Event',
              start: new Date(y, m, d+4, 16, 0),
              allDay: false
            },
            {
              title: 'Meeting',
              start: new Date(y, m, d, 10, 30),
              allDay: false
            },
            {
              title: 'Lunch',
              start: new Date(y, m, d, 12, 0),
              end: new Date(y, m, d, 14, 0),
              allDay: false
            },
            {
              title: 'Birthday Party',
              start: new Date(y, m, d+1, 19, 0),
              end: new Date(y, m, d+1, 22, 30),
              allDay: false
            },
            {
              title: 'EGrappler.com',
              start: new Date(y, m, 28),
              end: new Date(y, m, 29),
              url: 'http://EGrappler.com/'
            }
          ]
        });
      });
    </script><!-- /Calendar -->

</body>
</html>

