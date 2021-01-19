

<div id="search">
            <form action="?task=myLicences&action=getSearched" method="post">
                <label for="list">Wyszukaj po:</label>
                <select id="list" name="type">
                    <option value="licence_number">numerze inwentarzowym</option>
                    <option value="licence_serialKey">numerze seryjnym</option>
                </select>
                <input type="text" name="invoice_to_search" id="invoice_to_search" required>
                <input type="submit" id="start" value="Szukaj">
            </form>
        </div>
    <table id="tabela">
            <thread>
                <tr>
                    <th class="top">Numer inwentarzowy</th> <th class="top">Nazwa i opis</th> <th class="top">Numer seryjny</th> <th class="top">Data zakupu</th> <th class="top">Numer faktury</th> <th class="top">Ważność gwarancji</th> <th class="top">Wartość netto</th> <th class="top">Użytkowinik</th> <th class="top">Notatki</th>
                </tr>
            </thread>
            <tbody>
                    <?php
                        foreach ($this->get('user_licences') as &$val) {
                            ?>
                            <tr>
                                <td class="row"><?php echo $val['licence_number']?></td>
                                <td class="row"><?php echo $val['licence_nameAndDesc']?></td> 
                                <td class="row"><?php echo $val['licence_serialKey']?></td> 
                                <td class="row"><?php echo $val['licence_orderDate']?></td> 
                                <td class="row"><?php echo $val['licence_invoiceId']?></td> 
                                <td class="row"><?php echo $val['licence_supportExpiryDate']?></td> 
                                <td class="row"><?php echo $val['licence_expiryDate']?></td> 
                                <td class="row"><?php echo $val['user_firstName']." ".$val['user_lastName']?></td> 
                                <td class="row"><?php echo $val['licence_notes']?></td>
                            </tr>
                        <?php 
                        }
                    ?>
            </tbody>
        </table>

        