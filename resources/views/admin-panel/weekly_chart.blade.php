
@extends('admin-panel.main')

@section('content')
<?php


$data = array();

foreach ($users as $key => $value) {
    $st = $value->start_time;
    $et = $value->end_time;

    $start = explode(' ', $st);
   
    $end= explode(' ', $et);
    

    $hour = abs(strtotime($start[1]) - strtotime($end[1]))/(60*60);

 $data[] = array("x" =>  strtotime($start[0])*1000, "y" => round($hour));



}

?>



    <script>
                 
window.onload = function () {



var chart = new CanvasJS.Chart("chartContainer", {

    animationEnabled: true,
       zoomEnabled: true,
       nimationDuration: 2000,

    title:{
        text: "Weekly Project Report"
    },
    axisY: {
        title: "Hours",
        valueFormatString: "##",
        suffix: "hr",
        stripLines: [{
            label: "Average",
            value:"7"
        }]
    },

     axisX: {
        title: "Dates",


    },
     axisX:{
           valueFormatString:"YYYY-MM-DD",
        },
     
    data: [{
        yValueFormatString: "##hr",
        type: "spline",
        markerSize: 5,
        xValueType: "dateTime",
        xValueFormatString: "YYYY-MM-DD",
        //xValueFormatString:"",
        dataPoints: <?php echo json_encode($data, JSON_NUMERIC_CHECK); ?>
 

 
                     
        
    }]
});
chart.render();

}
</script>


<div id="chartContainer" style="height: 620px; width: 100%;"></div>


@endsection                               