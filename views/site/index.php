<?php

/* @var $this yii\web\View */
//echo bin2hex(31); // result: 48656c6c6f
//echo hex2bin('48656c6c6f'); // result: Hello
$this->title = 'Jumlah UMB dan UMK per Kecamatan';
?>


        <div class="row">
            <div class="box box-map">
                <div class="box-header with-header">Test</div>
                <div class="row no-margin no-padding">
                    <div id="world-map" style="width: 600px; height: 400px"></div>
                    <script>
                        <?php

                        $this->registerJs("$(function(){
                            $('#world-map').vectorMap({map: 'Simeulue'});
                        });");

                         ?>
                    </script>
                </div>
            </div>
            <!-- /.col -->
        </div>

