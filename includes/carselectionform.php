<!-- // CRUD pour choisir dans un formulaire ou slider imager des voiture avec des caractéristiques  -->

<form action="#" method="post">
    <fieldset>
        <legend> which kind of car do you want ? </legend>
        <fieldset>
            <legend> which color do you prefer ? </legend>
            <input type='radio' name="color" value='blue'> Blue </input>
            <input type='radio' name="color" value='red'> Red </input>
            <input type='radio' name="color" value='black'> Blake </input>
        </fieldset>
        <br>
        <br>
        <fieldset>
            <legend> which model do you need ? </legend>
            <input type='radio' name="model" value='Subaru Impreza'> Subaru Impreza </input>
            <input type='radio' name="model" value='Peugeot 308 GTI'> Peugeot 308 GTI </input>
            <input type='radio' name="model" value='Mitsubishi Lancer Evo VII'> Mitsubishi Lancer Evo VII </input>
        </fieldset>
        <br>
        <br>
        <fieldset>
            <legend> Who will drive the car and listen you as copilot ? </legend>
            <input type='radio' name="pilot" value='Sebastien Loeb'> Sebastien Loeb </input>
            <input type='radio' name="pilot" value='Marcus Grönholm'> Marcus Grönholm </input>
            <input type='radio' name="pilot" value='Carlos Sainz'> Carlos Sainz </input>
        </fieldset>
        <br>
        <input type='submit' name="validate" value='Go !'></input>
        <br>
    </fieldset>
</form>