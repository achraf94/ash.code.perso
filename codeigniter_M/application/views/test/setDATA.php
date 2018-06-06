<div id="resizable" style="width:100%;height: 100%;border:1px solid gray;">
    <div id="chartContainer1" style="height: 100%; width: 100%;"></div>
</div>
<script>
    $(function () {
        var dataXY = [];
        var BigDATA = [];
        var i = 1;
        var number = [];
<?php
foreach ($data as $datarow) {
    $i = 0;
    foreach ($datarow as $row) {
        $name = $datarow[$i]["name"];
        ?>
                dataXY.push({y: parseInt(<?php echo $datarow[$i]["y"]; ?>), x: new Date(<?php echo strtotime($datarow[$i]["x"]); ?> * 1000)});
        <?php
        $i++;
    }
    ?>

            BigDATA.push({
                type: "line",
                name: "<?php echo $name; ?>",
                xValueFormatString: "MMM YYYY",
                yValueFormatString: "##,##%",
                dataPoints: dataXY
            });
    <?php
}
?>

        var options = {
            animationEnabled: true,
            title: {
                text: "Project Risks By Date"
            },
            subtitles: [{
                    text: "Click Legend to Hide or Unhide Data Series"
                }],
            axisX: {
                title: "Date"
            },
            data: BigDATA
        };

        draw(options);

        function draw(Options) {

            $("#resizable").resizable({
                create: function (event, ui) {
                    //Create chart.
                    
                    $("#chartContainer1").CanvasJSChart(Options);
                },
                resize: function (event, ui) {
                    //Update chart size according to its container size.
                    $("#chartContainer1").CanvasJSChart().render();
                }
            });
        }

        function getRandomColor() {
            var letters = '0123456789ABCDEF';
            var color = '#';
            for (var i = 0; i < 6; i++) {
                color += letters[Math.floor(Math.random() * 16)];
            }
            return color;
        }
    });
</script>
