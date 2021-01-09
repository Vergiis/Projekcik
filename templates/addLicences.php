<div id="panel">
    <form action="?task=addLicences&action=addNew" method="post">
            <label for="licence_number" id="licence_number_label">Numer inwantarzowy:</label>
            <input type="text" id="licence_number" name="licence_number" class="myinput" required>
            <br/><br/>
            <label for="licence_nameAndDesc" id="licence_nameAndDesc_label">Nazwa i opis:</label>
            <input type="text" id="licence_nameAndDesc" name="licence_nameAndDesc" class="myinput" required>
            <br/><br/>
            <label for="licence_serialKey" id="licence_serialKey_label">Klucz seryjny:</label>
            <input type="text" id="licence_serialKey" name="licence_serialKey" class="myinput" required>
            <br/><br/>
            <label for="licence_orderDate" id="licence_orderDate_label">Data zakupu:</label>
            <input type="date" id="licence_orderDate" name="licence_orderDate" class="myinput" required>
            <br/><br/>
            <label for="licence_invoiceId" id="licence_invoiceId_label">Numer faktury:</label>
            <input type="text" id="licence_invoiceId" name="licence_invoiceId" class="myinput" required>
            <br/><br/>
            <label for="licence_supportExpiryDate" id="licence_supportExpiryDate_label">Data ważności wsparcia:</label>
            <input type="date" id="licence_supportExpiryDate" name="licence_supportExpiryDate" class="myinput" required>
            <br/><br/>
            <label for="licence_expiryDate" id="licence_expiryDate_label">Data ważności licencji:</label>
            <input type="date" id="licence_expiryDate" name="licence_expiryDate" class="myinput" required>
            <br/><br/>
            <label for="licence_notes" id="licence_notes_label">Notatki:</label>
            <input type="text" id="licence_notes" name="licence_notes" class="myinput" required>

            <div id="lower">
                <input type="submit" id="add" value="Dodaj">
            </div>
    </form>
</div>