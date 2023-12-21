<?php
include "condb.php";

$id = $_GET['id'];
$sql = "SELECT * FROM tb_member WHERE id_member = '$id' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>


<form>
    <label for="inp_id">ID : </label>
    <input type="text" name="id_2" id="inp_id" value="<?= $row['id_member'] ?>" readonly> <br>

    <label for="inp_name">NAME : </label>
    <input type="text" name="name_2" id="inp_name" value="<?= $row['name'] ?>"> <br>

    <label for="inp_prov">PROVINCE : </label>
    <input type="text" name="prov_2" id="inp_prov" value="<?= $row['id_province'] ?>"><br>

    <button type="submit" class="btn btn-primary">SAVE</button>
    <button type="reset" class="btn btn-danger">CANCLE</button>
</form>

    <script>
    $(function() {
        $("form").submit(function(e) {
            e.preventDefault();

            let fm = $(this);
            $.ajax({
                url: "/edititem.php",
                method: "POST",
                data: fm.serialize(),
                success: function(res) {
                    if (res == 'error')
                        alert("Can't insert data.")
                    else {
                        $("#div_1").load("/listitem.php");
                        $('#staticBackdrop').modal('hide');
                    }
                }
            });
        });
    });
</script>