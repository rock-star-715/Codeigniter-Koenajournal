<ul class="list-group list-group-flush <?php echo '$tmclass';?>" style="<?php echo '$style';?>" >
    <!-- <li>
        <?php echo _timeframe_options()?>
    </li> -->
    <div id='block-<?=$timeframeId?>' class="timeframeId-wrap">
        <br/>
    <li class="list-group list-group-flush">
        <div class='image-wrapper' >
            <a id="container-<?=$timeframeId?>" class="fancybox" rel="editor-808273962-gallery-1" href="#" data-size="1920x1080" gal-index="<?=$timeframeId?>">
                <img class='fancybox' id="ava-<?=$timeframeId?>">
            </a>
        </div>
    </li>
    <div style="width: 100%; display: inline-flex; justify-content: space-between; padding-top: 0.5rem;">
        <span class="material-icons colorGreen btn btn-primary" onclick="$('#upload-<?=$timeframeId?>').click();"><i class="ion-android-upload"></i></span>
    	<button type="button" class="btn btn-danger deleteTimeframe" id="deleteTimeframe-<?=$timeframeId?>" data-timeframe="<?=$timeframeId?>" ><i class="ion-trash-a"></i></button>
    </div>
    </div>
</ul>