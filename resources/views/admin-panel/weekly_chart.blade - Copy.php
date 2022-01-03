
@extends('admin-panel.main')

@section('content')
<?php


$data = array();

foreach ($users as $key => $value) {
    $st = $value->start_time;
    $et = $value->end_time;

    $start = explode(' ', $st);
    

    $hour = round(abs(strtotime($st) - strtotime($et))/(60*60),2);

 $data[] = array("x" =>  $start, "y" => round($hour));


}

?>


<?php 

echo '<pre>'; print_r($data);
             ?>



    <script>
                 
window.onload = function () {



var chart = new CanvasJS.Chart("chartContainer", {

    animationEnabled: true,  
    title:{
        text: "Weekly Project Report"
    },
    axisY: {
        title: "Hours",
        valueFormatString: "#0,,.",
        suffix: "hr",
        stripLines: [{
            label: "Average",
            value:"4"
        }]
    },

     axisX: {
        title: "Dates",

    },
     
    data: [{
        yValueFormatString: "hh",
        xValueFormatString: "DD-MM",
        type: "spline",
        //dataPoints:[{"x":new Date(2021,09,17),"y":12.83},{"x":new Date(2021,09,18),"y":12.83},{"x":new Date(2021,09,19),"y":12.83},{"x":new Date(2021,09,20),"y":12.83},{"x":new Date(2021,09,21),"y":4.26},{"x":new Date(2021,09,22),"y":4.23},{"x":new Date(2021,09,23),"y":10.5},{"x":new Date(2021,09,24),"y":10.51},{"x":new Date(2021,09,25),"y":5.61},{"x":new Date(2021,09,26),"y":9.23}]
        xValueFormatString: "YYYY",
        yValueFormatString: "$#,##0.##",
        xValueType: "dateTime",
        dataPoints: <?php echo json_encode($data, JSON_NUMERIC_CHECK); ?>
 

 
                     
        
    }]
});
chart.render();

}
</script>



<div id="chartContainer" style="height: 620px; width: 100%;"></div>


@endsection