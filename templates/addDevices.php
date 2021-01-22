<div id="panel">
    <h1>Dodaj sprzęt</h1>
    <form action="?task=addDevices&action=addNew" method="post">
        <label for="device_code" id="device_code_label">Numer inwantarzowy:</label>
        <input type="text" id="device_code" name="device_code" class="myinput" required>
        <br/><br/>
        <label for="device_name" id="device_name_label">Nazwa i opis:</label>
        <input type="text" id="device_name" name="device_name" class="myinput" required>
        <br/><br/>
        <label for="device_serialNumber" id="device_serialNumber_label">Numer seryjny:</label>
        <input type="number" id="device_serialNumber" name="device_serialNumber" class="myinput" required>
        <br/><br/>
        <label for="device_buyDate" id="device_buyDate_label">Data zakupu:</label>
        <input type="date" id="device_buyDate" name="device_buyDate" class="myinput" required>
        <br/><br/>
        <label for="device_invoiceId" id="device_invoiceId_label">Numer faktury:</label>
        <input type="number" id="device_invoiceId" name="device_invoiceId" class="myinput" required>
        <br/><br/>
        <label for="device_warrantyExpiryDate" id="device_warrantyExpiryDate_label">Data ważności gwarancji:</label>
        <input type="date" id="device_warrantyExpiryDate" name="device_warrantyExpiryDate" class="myinput" required>
        <br/><br/>
        <label for="device_nettoValue" id="device_nettoValue_label">Wartość netto:</label>
        <input type="number" step="0.01" id="device_nettoValue" name="device_nettoValue" class="myinput" required>
        <br/><br/>
        <label for="device_notes" id="device_notes_label">Notatki:</label>
        <input type="text" id="device_notes" name="device_notes" class="myinput myinput_label" required>

        <div id="lower">
            <input type="submit" id="addDevices" value="Dodaj">
        </div>
    </form>
</div>