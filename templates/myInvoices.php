        <div class="header">
            <h1>Moje Faktury</h1>
            <div id="search">
            <form action="?task=myInvoices&action=getSearched" method="post">
                <label for="list">Wyszukaj po:</label>
                <select id="list" name="type">
                    <option value="invoice_type">typ</option>
                    <option value="invoice_identifier">numerze faktury</option>
                    <option value="client_id">NIP</option>
                    <option value="invoice_currencyType">Waluta</option>
                </select>
                <input type="text" name="invoice_to_search" id="invoice_to_search">
                <input type="submit" id="start" value="Szukaj">
            </form>
            </div>
        </div>
        <table id="tabela">
            <thread>
                <tr>
                <th class="top">lp.</th> <th class="top">Typ</th><th class="top">Numer faktury</th> <th class="top">Nazwa kontrahenta</th> <th class="top">NIP</th> <th class="top">Kwota netto</th> <th class="top">VAT</th> <th class="top">Kwota brutto</th> <th class="top">Waluta</th> <th class="top">Kwota netto w walucie</th> <th class="top">Szczegóły</th>
                </tr>
            </thread>
            <tbody>
                <?php
                $i=1;
                        foreach ($this->get('user_invoices') as &$val) {
                            ?>
                            <tr>
                                <td class="row"><?php echo $i."."; $i++ ?></td> 
                                <td class="row"><?php echo $val['invoice_type']?></td> 
                                <td class="row"><?php echo $val['invoice_identifier']?></td> 
                                <td class="row"><?php echo $val['user_firstName']." ".$val['user_lastName']?></td> 
                                <td class="row"><?php echo $val['client_id']?></td> 
                                <td class="row"><?php echo $val['invoice_nettoValue']?></td> 
                                <td class="row"><?php echo $val['invoice_vat']?></td> 
                                <td class="row"><?php echo $val['invoite_bruttoValue']?></td> 
                                <td class="row"><?php echo $val['invoice_currencyType']?></td> 
                                <td class="row"><?php echo $val['invoice_convertedValue']?></td> 
                                <td class="row">
                                    <form action="?task=myInvoices&action=openInvoices" method="post">
                                        <input type="submit" id="details" value="Podgląd">
                                        <input type="hidden" name="details" value="<?php echo $val['detailsFile']?>">
                                    </form>
                                    <?php if($this->get('user_role')!=="audytor"){ ?>
                                    <form action="?task=myInvoices&action=delInvoices" method="post">
                                        <input type="submit" id="details" value="Usuń">
                                        <input type="hidden" name="details" value="<?php echo $val['invoice_id']?>">
                                    </form>
                                    <?php } ?>
                                </td>
                                
                            </tr>
                        <?php 
                        }
                    ?>
            </tbody>
        </table>