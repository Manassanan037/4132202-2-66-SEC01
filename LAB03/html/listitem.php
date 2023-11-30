<?php
include "condb.php";

$sql = "SELECT * FROM tb_member";
$result = mysqli_query($conn, $sql);

//var_dump($result);
?>

<button id="btn_add"> + Add</button>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Province</th>
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
                <td><Button class="btn_del" data-id="<?= $row["id_member"] ?>">Delete</Button></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>

<script>
    $(".btn_del").click(function() {
        let id = $(this).data("id"); //มารับค่าของตัวที่ถูกคลิก id ->data-id
        console.log(id); //แสดงผลผ่าน consloe

        $.ajax({ //เป็นตัวโหลด
            url: "/delitem.php",
            method: "GET",
            data: {
                id_mem: id //เอาค่ามาจาก id บรรทัด 38
            },
            success: function(res) { //เป็นตัวที่ช่วยให้ทำงานกับฟอร์มได้  res คือสิ่งตอบกลับไฟล์มา
                console.log(res);
                if (res == "error")
                    alert("Can't delete item.");
                else
                    $("#div_item").load("/listitem.php");
            }
        });
    });

    $("#btn_add").click(function() {
        $("#div_item").load("/addform.php");
    });

</script>