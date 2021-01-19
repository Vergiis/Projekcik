        <table id="tabela">
            <thread>
                <tr>
                    <th class="top">Suma kupna</th> <th class="top">Suma sprzedaży</th>
                </tr>
            </thread>
            <tbody>
                <?php
                    $sumBuy=0;
                    $sumSell=0;
                        foreach ($this->get('user_invoices') as &$val) {
                            if($val['invoice_type']=="sale"){
                                $sumSell+=$val['invoice_convertedValue'];
                            }
                            else{
                                $sumBuy+=$val['invoice_convertedValue'];
                            }
                        }
                ?>
                <tr>
                    <td class="row"><?php echo $sumBuy?></td> 
                    <td class="row"><?php echo $sumSell?></td> 
                </tr>
            </tbody>
        </table>