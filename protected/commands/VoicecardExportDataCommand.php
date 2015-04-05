<?php
class VoicecardExportDataCommand extends CConsoleCommand{

    public function run($args){

        $vcData = new VoicecardDataLoader();

        $vcData->voicecardDataLoad();
        $vcData->voicecardDataSave();
    }
}
