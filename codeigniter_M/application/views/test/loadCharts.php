<?php
if (empty($risks)) {
    echo "<div style='padding-left:40%;'><span class='badge badge-info' >Vide</span></div>";
} else {
    foreach ($risks as $row) {
        ?>
        <input class='date' type='hidden' value="<?php echo strtotime($row->Open_Date); ?>">
        <input class='risk' type='hidden' value="<?php echo $row->Probability * $row->Impact * 100; ?>">
        <?php
    }
    ?>
    <div id="resizable" style="width:100%;height: 100%;border:1px solid gray;">
        <div id="chartContainer1" style="height: 100%; width: 100%;"></div>
    </div>
    <script>
        $(function () {
            var x = [], y = [], i = 0, j = 0, dataPoint = [];
            $(".date").each(function () {
                x[i++] = $(this).val();
            });
            $(".risk").each(function () {
                y[j++] = $(this).val();
            });
            for (var k = 0; k < x.length; k++) {
                storeCoordinate(x[k], y[k], dataPoint);
            }
            draw(dataPoint);
            console.log(dataPoint);
        });


        function storeCoordinate(valx, valy, array) {
            array.push({y: parseInt(valy), x: new Date(valx * 1000)});
        }
        function draw(array) {
            $("#resizable").resizable({
                create: function (event, ui) {
                    //Create chart.
                    $("#chartContainer1").CanvasJSChart(setOption(array));
                },
                resize: function (event, ui) {
                    //Update chart size according to its container size.
                    $("#chartContainer1").CanvasJSChart().render();
                }
            });
        }
        function setOption(array) {
            var options1 = {
                animationEnabled: false,
                title: {
                    text: "Risks By Project__"
                },
                data: [{
                        type: "line", //change it to line, area, bar, pie, etc
                        showInLegend: true,
                        dataPoints: array
                    }]
            };
            return options1;
        }
        function getDATA(array, typeChar, name) {
            var Option = [];
            Option.push({type: typeChar, name: name, xValueFormatString: 'MMM YYYY', yValueFormatString: '#,##0 %', dataPoints: array});
            return Option;
        }
        function coordone(valx, valy) {
            var array = [];
            array.push({y: parseInt(valy), x: new Date(valx * 1000)});
            getDATA(array, "line", "name");
        }

    </script>
    <?php
}
?>