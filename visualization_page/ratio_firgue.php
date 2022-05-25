<?php
    include("../config/config.php");
    $school = $_POST['title'];
    $sql = "SELECT * FROM `ti_le_choi` WHERE `TÊN TRƯỜNG` LIKE '%$school%';";

    $year = $_POST['year'];
    $year_previous = (string)((int)$year - 1);
    $result = mysqli_query($con,$sql);
    $datas = array();

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $datas[] = $row;
        }
    }

    // print_r($datas);


?>

<script>
    var chi_tieu = '<?php echo $datas[0]["CHỈ TIÊU $year"];?>';
    var nguyen_vong = '<?php echo $datas[0]["NV1 $year"];?>';
    var ti_le_choi = '<?php echo $datas[0]["TỈ LỆ CHỌI $year"];?>'
    var so_sanh = (parseFloat('<?php echo $datas[0]["TỈ LỆ CHỌI $year"];?>') - parseFloat('<?php echo $datas[0]["TỈ LỆ CHỌI $year_previous"];?>')).toFixed(2);
    console.log([chi_tieu, nguyen_vong, so_sanh])

    var final_firgue = chi_tieu + '/' + nguyen_vong;

    document.querySelector('.firgue .firgue1').innerHTML = ti_le_choi;
    document.querySelector('.firgue .firgue2').innerHTML = final_firgue;
    if (so_sanh >= 0) {
        document.querySelector('.compare').innerHTML = `➚ Tăng ${so_sanh} so với năm trước`;
        document.querySelector('.compare').style.color = "green";
    } else {
        document.querySelector('.compare').innerHTML = `➘ Giảm ${so_sanh} so với năm trước`;
        document.querySelector('.compare').style.color = "red";
    }
</script>


<style>
    .win-ratio-container {
        text-align: center;
    }

    .firgue {
        margin: 20px 0;
    }

    .firgue1 {
        font-weight: bold;
        font-size: 300%;
        letter-spacing: 1px;
    }

    .firgue2 {
        color: #787878;
    }
</style>

<div class="win-ratio-container">
    <div class="firgue">
        <span class="firgue1"></span>
        <br>
        <span class="firgue2"></span>
    </div>
    <div class="compare"></div>
</div>
