<div id="panel">
    <?php
        foreach ($this->get('user_devices') as &$val) {
            echo 'code: '.$val['device_code']." | ";
            echo 'name: '.$val['device_name']." | ";
            echo 'serialNumber: '.$val['device_serialNumber']." | ";
            echo 'buyDate: '.$val['device_buyDate']." | ";
            echo 'ExpiryDate: '.$val['device_warrantyExpiryDate']." | ";
            echo 'nettoValue: '.$val['device_nettoValue']." | ";
            echo 'notes: '.$val['device_notes']." | ";
            ?><br/><br/><?php
        }
    ?>
</div>