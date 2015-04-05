<?php
if($_SESSION["current_dir"] == "user"){
    $_SESSION["current_dir"] .= "/".$_SESSION["username"];
}

?>
<div id="content">
    <div id="instrument_pannel" class="material">
        <a id="new _file"></a>
        <a id="new _dir"></a>
        
    </div>
    <div id="files" class="material">
        
    </div>
    <form method="POST" action="<?= $_SERVER["PHP_SELF"] ?>">
        <table id="explorer" class="material">
        <tr>
            <td>Выбрать</td>
            <td>Имя</td>
            <td>Тип</td>
        </tr>
        <tr>
            <td>
                кнопка назад
            </td>
        </tr>
        <? foreach (dir_detail($_SESSION["current_dir"]) as $file):?>
        <?=
            "<tr>".
            "<td></td>".
            "<td>".$file['name']."</td>".
            "<td>".$file['ext']."</td>".
            "<td>".$file['modified']."</td>".
            "</tr>"
        ?>
        <? endforeach; ?>
        </table>
    </form>
</div>
