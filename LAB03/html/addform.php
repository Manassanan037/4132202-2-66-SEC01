<form>
    <label for="inp_id">ID: </label>
    <input type="text" name="id" id="inp_id">
    <br>
    <label for="inp_name">Name :</label>
    <input type="text" name="id" id="inp_name">
    <br>
    <label for="inp_prov">Province : </label>
    <input type="text" name="id" id="inp_prov">
    <br>
    <button type="submit">SAVE</button>
    <button type="reset">Cancle</button>

</form>

<script>
    $("form").submit(function(e) {
        e.preventDefault();

        let fm = $(this);
        $.ajax({
            url: "/additem.php",
            method: "POST",
            data: fm.serialize(),
            success: function(res) {
                if (res == "error")
                    alert("Don't insert data into DB.");
                else
                    $("#div_item").load("/listitem.php");
            }
        });
    });
</script>