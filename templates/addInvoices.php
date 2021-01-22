<div id="panel">
<h1>Dodaj fakture</h1>
    <form action="?task=addInvoices&action=addNew" method="post" enctype="multipart/form-data">
        <label>Typ Faktury:</label><br/>
        <label for="buy">Kupna</label>
        <input type="radio" id="buy" name="invoice_type" value="buy">
        <label for="male">Sprzedaży</label>
        <input type="radio" id="sale" name="invoice_type" value="sale">
        <br/><br/>
        <label for="invoice_identifier" id="invoice_identifier_label">Numer faktury:</label>
        <input type="text" id="invoice_identifier" name="invoice_identifier" class="myinput" required>
        <br/><br/>
        <label for="client_vatId" id="client_vatId_label">NIP:</label>
        <input type="text" id="client_vatId" name="client_vatId" class="myinput" required>
        <br/><br/>
        <label for="invoice_nettoValue" id="invoice_nettoValue_label">Kwota netto:</label>
        <input type="number" step="0.01" id="invoice_nettoValue" name="invoice_nettoValue" class="myinput" required>
        <br/><br/>
        <label for="invoice_vat" id="invoice_vat_label">Kwota podatku VAT:</label>
        <input type="number" step="0.01" id="invoice_vat" name="invoice_vat" class="myinput" required>
        <br/><br/>
        <label for="invoite_bruttoValue" id="invoite_bruttoValue_label">Kwota brutto:</label>
        <input type="number" step="0.01" id="invoite_bruttoValue" name="invoite_bruttoValue" class="myinput" required>
        <br/><br/>
        <label for="invoice_currencyType" id="invoice_currencyType_label">Waluta:</label>
        <select id="invoice_currencyType" name="invoice_currencyType" class="myinput" required>
            <option value="PLN">PLN</option>
            <option value="USD">USD</option>
            <option value="EUR">EUR</option>
            <option value="CHF">CHF</option>
            <option value="GBP">GBP</option>
            <option value="CNY">CNY</option>
            <option value="CAD">CAD</option>
            <option value="RUB">RUB</option>
        </select>
        <br/><br/>
        <label for="invoice_convertedValue" id="invoice_convertedValue_label">Kwota netto w walucie:</label>
        <input type="text" id="invoice_convertedValue" name="invoice_convertedValue" class="myinput" required>
        <br/><br/>
        <label for="file" id="file_label">Wybierz plik do dodania: </label>
        <input type="file" id="file" name="file" required>

        <div id="lower">
            <input type="submit" id="add" value="Dodaj">
        </div>
    </form>
</div>