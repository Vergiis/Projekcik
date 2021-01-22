        <div class="header">
            <h1>Mój sprzęt</h1>
            <div id="search">
                <form action="?task=myDevices&action=getSearched" method="post">
                    <label for="list">Wyszukaj po:</label>
                    <select id="list" name="type">
                        <option value="device_code">numerze inwentarzowym</option>
                        <option value="device_serialNumber">numerze seryjnym</option>
                    </select>
                    <input type="text" name="invoice_to_search" id="invoice_to_search" required>
                    <input type="submit" id="start" value="Szukaj">
                </form>
            </div>
        </div>
    <table id="tabela">
            <thread>
                <tr>
                <th class="top">lp.</th> <th class="top">Numer inwentarzowy</th> <th class="top">Nazwa i opis</th> <th class="top">Numer seryjny</th> <th class="top">Data zakupu</th> <th class="top">Numer faktury</th> <th class="top">Ważność gwarancji</th> <th class="top">Wartość netto</th> <th class="top">Użytkowinik</th> <th class="top">Notatki</th>
                </tr>
            </thread>
            <tbody>
                    <?php
                    $i=1;
                        foreach ($this->get('user_devices') as &$val) {
                            ?>
                            <tr>
                                <td class="row"><?php echo $i."."; $i++ ?></td> 
                                <td class="row"><?php echo $val['device_code'] ?></td> 
                                <td class="row"><?php echo $val['device_name'] ?></td> 
                                <td class="row"><?php echo $val['device_serialNumber'] ?></td> 
                                <td class="row"><?php echo $val['device_buyDate'] ?></td> 
                                <td class="row"><?php echo $val['device_invoiceId'] ?></td> 
                                <td class="row"><?php echo $val['device_warrantyExpiryDate'] ?></td> 
                                <td class="row"><?php echo $val['device_nettoValue'] ?></td> 
                                <td class="row"><?php echo $val['user_firstName']." ".$val['user_lastName'] ?></td>
                                <td class="row"><?php echo $val['device_notes'] ?></td>
                                <?php if($this->get('user_role')!=="audytor"){ ?>
                                <td class="row">
                                    <form action="?task=myDevices&action=delDevices" method="post">
                                        <input type="submit" id="details" value="Usuń">
                                        <input type="hidden" name="details" value="<?php echo $val['device_id']?>">
                                    </form>
                                </td>
                                <?php } ?>
                            </tr>
                        <?php 
                        }
                    ?>
            </tbody>
        </table>