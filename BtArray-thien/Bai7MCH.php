
<?php include '../Admin/partials/header.php'; ?>
    <section>
        <div class="container-fluid">
            <div class="row">
            <?php include '../Admin/navigation.php'; ?>
                <div class="col-sm-9">
                <?php
                    if (isset($_POST['submit'])) {
                        $duonglich = $_POST['duonglich'];
                        $mangchi = array("Hợi", "Tý", "Sửu", "Dần", "Mão", "Thìn", "Tỵ", "Ngọ", "Mùi", "Thân", "Dậu", "Tuất");
                        $manghinh = array("hoi.png", "ty.png", "suu.png", "dan.png", "mao.png", "thin.png", "ti.png", "ngo.png", "mui.png", "than.png", "dau.png", "tuat.png");
                        $mangcan = array("Quý", "Giáp", "Ất", "Bính", "Đinh", "Mậu", "Kỷ", "Canh", "Tân", "Nhâm");
                        $namtinh=$duonglich-3;
                        $can = $namtinh%10;
                        $chi = $namtinh%12;
                        $namal = $mangcan[$can];
                        $namal = $namal." ".$mangchi[$chi];
                        $hinh = $manghinh[$chi];
                        $hinhanh = "<img src='Hinhanh/$hinh'>";
                    }
                ?>

                <form method="post" action="">
                    <table align="center" style="background-color: #74b9ff;width: 40%;">
                        <tr style="background-color: #0984e3; color: white">
                            <td colspan="3" align="center"><h2>TÍNH NĂM ÂM LỊCH</h2></td>
                        </tr>
                        <tr>
                            <td style="color:blue">Năm dương lịch</td>
                            <td> </td>
                            <td style="color:blue">Năm âm lịch</td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" style="width: 100%;color:blue;" name="duonglich" value="<?php if(isset($duonglich)) echo $duonglich; ?>">
                            </td>
                            <td>
                                <input type="submit" style="background-color: lightyellow; color: red;" name="submit" value="=>">
                            </td>
                            <td>
                                <input type="text" style="background-color: lightyellow; color: red;" name="amlich" readonly
                                value="<?php if(isset($namal)) echo $namal;  ?>">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" align="center"><?php if(isset($hinhanh)) echo $hinhanh; ?></td>
                        </tr>
                    </table>
                </form>
                </div>
            </div>
        </div>
    </section>
<?php include '../Admin/partials/footer.php'; ?>
