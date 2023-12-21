<?php
include "condb.php";

$sql = "SELECT * FROM tb_member";
$result = mysqli_query($conn, $sql);

//var_dump($result);
?>
 <!-- Button trigger modal-->
 <button id="btn_add" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    + ADD
  </button>

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Province</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <tr>
                <td><?= $row["id_member"] ?></td>
                <td><?= $row["name"] ?></td>
                <td><?= $row["id_province"] ?></td>
                <td>
                    <button class="btn_del btn btn-danger" data-id="<?= $row["id_member"] ?>">Delete</button>
                </td>
                <td>
                    <button class="btn_edit btn btn-info" data-id="<?= $row["id_member"] ?>" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Edit</button>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>

<script>
    $(function() {
        $(".btn_edit").click(function() {
            let id = $(this).data('id'); //มารับค่าของตัวที่ถูกคลิก id ->data-id
            console.log(id); //แสดงผลผ่าน consloeท

            $("#staticBackdropLabel").text("Edit member");
            $(".modal-body").load(`/editform.php?id=${id}`);
            $(".modal-footer").hide();
        });

        $(".btn_del").click(function() {
            let id = $(this).data('id');
            console.log(id);

            $.ajax({ //เป็นตัวโหลด
                url: "/delitem.php",
                method: "GET",
                data: {
                    id_mem: id //เอาค่ามาจาก id บรรทัด 38
                },
                success: function(res) { //เป็นตัวที่ช่วยให้ทำงานกับฟอร์มได้  res คือสิ่งตอบกลับไฟล์มา
                    console.log(res);
                    if (res == "Error")
                        alert("Can't delete item.");
                    else
                        $("#tb_member").load("/listitem.php");
                }
            });
        });


        $("#btn_add").click(function() {
            $("#staticBackdropLabel").text("Add Item");
            $(".modal-body").load("/addform.php");
            $(".modal-footer").hide();
        });
    });
</script>