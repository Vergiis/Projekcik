<div id="panel">
    <?php
        foreach ($this->get('user_licences') as &$val) {
            echo 'number: '.$val['licence_number']." | ";
            echo 'name: '.$val['licence_nameAndDesc']." | ";
            echo 'serialNumber: '.$val['licence_serialKey']." | ";
            echo 'orderDate: '.$val['licence_orderDate']." | ";
            echo 'invoiceNumber: '.$val['licence_invoiceId']." | ";
            echo 'supportExpiryDate: '.$val['licence_supportExpiryDate']." | ";
            echo 'expiryDate: '.$val['licence_expiryDate']." | ";
            echo 'notes: '.$val['licence_notes']." | ";
            ?><br/><br/><?php
        }
    ?>
</div>