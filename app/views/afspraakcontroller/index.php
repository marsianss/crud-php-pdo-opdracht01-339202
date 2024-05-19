<h2>Bling Bling Nagelstudio Chantal</h2>

<form id="myForm" action="<?= URLROOT; ?>/afspraakcontroller/index" method="POST">


    <p> Kies 4 basis kleuren voor uw nagels: </p>
    <div>
        <input type="color" id="roze" name="roze" value="#FFC0CB"/>
        <input type="color" id="blauw" name="blauw" value="#0000FF"/>
        <input type="color" id="roze2" name="roze2" value="#E48686"/>
        <input type="color" id="geel" name="geel" value="#FFFF00"/>
    </div>

    <br>
    <p>Uw telefoonnummer:</p>
    <input type="tel" id="phone" name="phone" 
    placeholder="+31 6 1234 56 78" required />

    <br>
    <br>
    <p>Uw email adres:</p>
    <input type="email" name="email" id="" placeholder="randomguy@nowhere.com">

    <br> 
    <br> 

    <p>Afspraak datum:</p>
    <input type="datetime-local" name="date" id="date">
<br>

    <input type="hidden" name="nagelbijt_arrangement" value="0">
    <input type="checkbox" name="nagelbijt_arrangement" value="1"> Nagelbijt Arrangement<br>

    <input type="hidden" name="luxe_manicure" value="0">
    <input type="checkbox" name="luxe_manicure" value="1"> Luxe Manicure<br>

    <input type="hidden" name="nagelreparatie" value="0">
    <input type="checkbox" name="nagelreparatie" value="1"> Nagelreparatie<br>
    <br>
    <br>


    <button type="submit">Opslaan</button>

    <button type="reset">Reset</button>


    <input type="hidden" id="verzendDatumTijd" name="verzendDatumTijd">
</form>

<script>
    document.getElementById('myForm').addEventListener('submit', function(event) {
        var verzendDatumTijd = new Date().toISOString();
        document.getElementById('verzendDatumTijd').value = verzendDatumTijd;
    });
</script>


