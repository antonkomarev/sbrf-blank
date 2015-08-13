<?php

$formName = "Форма &#8470; ПД-4";
$companyName = "ООО &quot;СайберКог&quot;";
$companyKpp = "773301001";
$companyBank = "Сбербанк России ОАО г. Москва";
$companyBankAccount = "40702810038170012955";
$companyBankKS = "30101810400000000225";
$companyBankId = "044525225";
$companyINN = "7733675649";
$noteOne = "С условиями приема указанной в платежном документе суммы, в т.ч. с суммой взимаемой платы за услуги банка, ознакомлен и согласен.";

$paymentTitle = "&nbsp;";
$payRub = "&nbsp;";
$payKop = "&nbsp;";
$payBankRub = "&nbsp;";
$payBankKop = "&nbsp;";
$payTotalRub = "&nbsp;";
$payTotalKop = "&nbsp;";
$day = "&nbsp;";
$month = "&nbsp;";
$year = "&nbsp;";
$clientAddress = "&nbsp;";
$clientId = "&nbsp;";
$clientName = "&nbsp;";

if (!isset($_GET['blank']) || $_GET['blank'] == 0) {
    $paymentTitle = "По договору пожертвования № СКП-1 от 01.01.11 <br /> (на ведение уставной деятельности и<br /> содержание организации)";
    $payRub = 125;
    $payKop = '00';
    $payBankRub = 35;
    $payBankKop = '00';
    $payTotalRub = 160;
    $payTotalKop = '00';
    $day = date('d');
    $month = date('m');
    $year = date('Y');
    $clientAddress = "г. Москва, ул. Митинская д. 50, кв. 321";
    $clientId = "Ф-86";
    $clientName = "Паминальников Ведролог Харламович";
}

if ($month > 0) {
    $month = (int)$month; // Kill 0

    $monthList = [
        1 => "января",
        2 => "февраля",
        3 => "марта",
        4 => "апреля",
        5 => "мая",
        6 => "июня",
        7 => "июля",
        8 => "августа",
        9 => "сентября",
        10 => "октября",
        11 => "ноября",
        12 => "декабря",
    ];

    $month = $monthList[$month];
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Бланк Сбербанка</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<table class="table-bordered" cellspacing="0" cellpadding="0">
    <tr>
        <td style="width: 50mm; height: 65mm; border-bottom: black 1.5px solid;">
            <table style="width: 50mm; height: 100%;" cellpadding="0" cellspacing="0">
                <tr>
                    <td class="kassir" style="vertical-align: top; letter-spacing: 0.2em;">Извещение</td>
                </tr>
                <tr>
                    <td class="kassir" style="vertical-align: bottom;">Кассир</td>
                </tr>
            </table>
        </td>
        <td style="width: 130mm; height: 65mm; padding: 0mm 4mm 0mm 3mm; border-left: black 1.5px solid; border-bottom: black 1.5px solid;">
            <table cellpadding="0" cellspacing="0" align="center" style="width: 123mm; height: 100%">
                <tr>
                    <td>
                        <table width="100%" cellspacing="0" cellpadding="0">
                            <tr>
                                <td style="height: 5mm;"></td>
                                <td class="stext7" style="text-align: right; vertical-align: middle;">
                                    <i>
                                        <?= $formName ?>
                                    </i>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table style="width: 100%; height: 100%;" cellpadding="0" cellspacing="0">
                            <tr>
                                <td class="string">
                                    <span class="nowr">
                                        <?= $companyName ?>
                                    </span>
                                </td>
                                <td class="string nowr" style="width: 1mm;">
                                    &nbsp;КПП:&nbsp;
                                    <?= $companyKpp ?>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td class="subscript nowr">(наименование получателя платежа)</td>
                </tr>
                <tr>
                    <td>
                        <table cellspacing="0" cellpadding=0 width="100%">
                            <tr>
                                <td width="30%" class="floor">
                                    <table class="cells" cellspacing="0" cellpadding="0" width="100%">
                                        <tr>
                                            <?php for ($i = 0; $i < strlen($companyINN); $i++) { ?>
                                                <?= '<td class="cell" width="10%" align="center">' . $companyINN[$i] . '</td>' ?>
                                            <?php } ?>
                                        </tr>
                                    </table>
                                </td>
                                <td width="10%" class="stext7">&nbsp;</td>
                                <td width="60%" class="floor">
                                    <table class="cells" cellspacing="0"
                                           cellpadding="0" width="100%">
                                        <tr>
                                            <?php for ($i = 0; $i < strlen($companyBankAccount); $i++) { ?>
                                                <?= '<td class="cell" width="5%" align="center">' . $companyBankAccount[$i] . '</td>' ?>
                                            <?php } ?>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td class="subscript nowr">(ИНН получателя платежа)</td>
                                <td class="subscript">&nbsp;</td>
                                <td class="subscript nowr">(номер счета получателя платежа)</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table cellspacing="0" cellpadding="0" width="100%">
                            <tr>
                                <td width="2%" class="stext">в</td>
                                <td width="64%" class="string">
                                    <span class="nowr" style="line-height: 1;">
                                        <?= $companyBank; ?>
                                    </span>
                                </td>
                                <td width="7%" class="stext" align="right">БИК&nbsp;</td>
                                <td width="27%" class="floor">
                                    <table class="cells" cellspacing="0" cellpadding="0" width="100%">
                                        <tr>
                                            <?php
                                            for ($i = 0; $i < strlen($companyBankId); $i++) {
                                                print '<td class="cell" width="11%" align="center">' . $companyBankId[$i] . '</td>';
                                            }
                                            ?>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td class="subscript">&nbsp;</td>
                                <td class="subscript nowr">(наименование банка получателя платежа)</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table cellspacing="0" cellpadding="0" width="100%">
                            <tr>
                                <td class="stext7 nowr" width="40%">Номер кор./сч. банка получателя платежа</td>
                                <td width="60%" class="floor">
                                    <table class="cells" cellspacing="0" cellpadding="0" width="100%">
                                        <tr>
                                            <?php for ($i = 0; $i < strlen($companyBankKS); $i++) { ?>
                                                <?= '<td class="cell" width="5%" align="center">' . $companyBankKS[$i] . '</td>' ?>
                                            <?php } ?>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table cellspacing="0" cellpadding="0" width="100%">
                            <tr>
                                <td class="string" width="55%">
                                    <span class="nowr">
                                        <?= $paymentTitle ?>
                                    </span>
                                </td>
                                <td class="stext7" width="5%">&nbsp;</td>
                                <td class="string" width="40%">
                                    <?= $clientId ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="subscript nowr">(наименование платежа)
                                </td>
                                <td class="subscript">&nbsp;</td>
                                <td class="subscript nowr">(номер лицевого счета (код) плательщика)
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table cellspacing="0" cellpadding="0" width="100%">
                            <tr>
                                <td class="stext" width="1%">Ф.И.О&nbsp;плательщика&nbsp;</td>
                                <td class="string">
                                    <span class="nowr">
                                        <?= $clientName ?>
                                    </span>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table cellspacing="0" cellpadding="0" width="100%">
                            <tr>
                                <td class="stext" width="1%">Адрес&nbsp;плательщика&nbsp;</td>
                                <td class="string">
                                    <span class="nowr" style="line-height: 1;">
                                        <?= $clientAddress ?>
                                    </span>
                                    <!--
                                    <span class="nowr" style="line-height: 1;">
                                        <?= $clientAddress ?>
                                    </span>
                                    -->
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table cellspacing="0" cellpadding="0" width="100%">
                            <tr>
                                <td class="stext" width="1%">Сумма&nbsp;платежа&nbsp;</td>
                                <td class="string" width="8%">
                                    <?= $payRub ?>
                                </td>
                                <td class="stext" width="1%">&nbsp;руб.&nbsp;</td>
                                <td class="string" width="8%">
                                    <?= $payKop ?>
                                </td>
                                <td class="stext" width="1%">&nbsp;коп.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Сумма&nbsp;платы&nbsp;за&nbsp;услуги&nbsp;</td>
                                <td class="string" width="8%">
                                    <?= $payBankRub ?>
                                </td>
                                <td class="stext" width="1%">&nbsp;руб.&nbsp;</td>
                                <td class="string" width="8%">
                                    <?= $payBankKop ?>
                                </td>
                                <td class="stext" width="1%">&nbsp;коп.</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table cellspacing="0" cellpadding="0" width="100%">
                            <tr>
                                <td class="stext" width="5%">Итого&nbsp;</td>
                                <td class="string" width="8%">
                                    <?= $payTotalRub ?>
                                </td>
                                <td class="stext" width="5%">&nbsp;руб.&nbsp;</td>
                                <td class="string" width="8%">
                                    <?= $payTotalKop ?>
                                </td>
                                <td class="stext" width="5%">&nbsp;коп.&nbsp;</td>
                                <td class="stext" width="20%" align="right">&laquo;&nbsp;</td>
                                <td class="string" width="8%">
                                    <?= $day ?>
                                </td>
                                <td class="stext" width="1%">&nbsp;&raquo;&nbsp;</td>
                                <td class="string" width="20%">
                                    <?= $month ?>
                                </td>
                                <td class="stext" width="5%" align="right">
                                    <?= $year ?>
                                </td>
                                <td class="stext" width="1%">&nbsp;г.</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td class="stext7" style="text-align: justify">
                        <?= $noteOne ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding-bottom: 0.5mm;">
                        <table cellspacing="0" cellpadding="0" width="100%">
                            <tr>
                                <td class="stext7" width="50%">&nbsp;</td>
                                <td class="stext7" width="1%"><b>Подпись&nbsp;плательщика&nbsp;</b></td>
                                <td class="string" width="40%">&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td style="width: 50mm; height: 80mm; vertical-align: bottom;"
            class="kassir">Квитанция<br/>
            <br/>
            Кассир
        </td>
        <td
            style="width: 130mm; height: 80mm; padding: 0mm 4mm 0mm 3mm; border-left: black 1.5px solid;">
            <table cellpadding="0" cellspacing="0" align="center"
                   style="width: 123mm; height: 100%">
                <tr>
                    <td style="height: 8mm;">
                        <table style="width: 100%; height: 100%;"
                               cellpadding="0" cellspacing="0">
                            <tr>
                                <td class="string">
                                    <span class="nowr">
                                        <?= $companyName ?>
                                    </span>
                                </td>
                                <td class="string nowr" style="width: 1mm;">
                                    &nbsp;КПП:&nbsp;
                                    <?= $companyKpp ?>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td class="subscript nowr">(наименование получателя
                        платежа)
                    </td>
                </tr>
                <tr>
                    <td>
                        <table cellspacing="0" cellpadding=0 width="100%">
                            <tr>
                                <td width="30%" class="floor">
                                    <table class="cells" cellspacing="0"
                                           cellpadding="0" width="100%">
                                        <tr>
                                            <?php
                                            for ($i = 0; $i < strlen($companyINN); $i++) {
                                                print '<td class="cell" width="10%" align="center">' . $companyINN[$i] . '</td>';
                                            }
                                            ?>
                                        </tr>
                                    </table>
                                </td>
                                <td width="10%" class="stext7">&nbsp;</td>
                                <td width="60%" class="floor">
                                    <table class="cells" cellspacing="0"
                                           cellpadding="0" width="100%">
                                        <tr>
                                            <?php
                                            for ($i = 0; $i < strlen($companyBankAccount); $i++) {
                                                print '<td class="cell" width="5%" align="center">' . $companyBankAccount[$i] . '</td>';
                                            }
                                            ?>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td class="subscript nowr">(ИНН получателя
                                    платежа)
                                </td>
                                <td class="subscript">&nbsp;</td>
                                <td class="subscript nowr">(номер счета
                                    получателя платежа)
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table cellspacing="0" cellpadding="0" width="100%">
                            <tr>
                                <td width="2%" class="stext">в</td>
                                <td width="64%" class="string">
                                    <span class="nowr" style="line-height: 1;">
                                        <?= $companyBank ?>
                                    </span>
                                </td>
                                <td width="7%" class="stext" align="right">БИК&nbsp;</td>
                                <td width="27%" class="floor">
                                    <table class="cells" cellspacing="0"
                                           cellpadding="0" width="100%">
                                        <tr>
                                            <?php
                                            for ($i = 0; $i < strlen($companyBankId); $i++) {
                                                print '<td class="cell" width="11%" align="center">' . $companyBankId[$i] . '</td>';
                                            }
                                            ?>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td class="subscript">&nbsp;</td>
                                <td class="subscript nowr">(наименование банка получателя платежа)</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table cellspacing="0" cellpadding="0" width="100%">
                            <tr>
                                <td class="stext7 nowr" width="40%">Номер
                                    кор./сч. банка получателя платежа
                                </td>
                                <td width="60%" class="floor">
                                    <table class="cells" cellspacing="0"
                                           cellpadding="0" width="100%">
                                        <tr>
                                            <?php
                                            for ($i = 0; $i < strlen($companyBankKS); $i++) {
                                                print '<td class="cell" width="5%" align="center">' . $companyBankKS[$i] . '</td>';
                                            }
                                            ?>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table cellspacing="0" cellpadding="0" width="100%">
                            <tr>
                                <td class="string" width="55%">
                                    <span class="nowr">
                                        <?= $paymentTitle ?>
                                    </span>
                                </td>
                                <td class="stext7" width="5%">&nbsp;</td>
                                <td class="string" width="40%">
                                    <?= $clientId ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="subscript nowr">(наименование платежа)
                                </td>
                                <td class="subscript">&nbsp;</td>
                                <td class="subscript nowr">(номер лицевого счета (код) плательщика)
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table cellspacing="0" cellpadding="0" width="100%">
                            <tr>
                                <td class="stext" width="1%">Ф.И.О&nbsp;плательщика&nbsp;</td>
                                <td class="string">
                                    <span class="nowr">
                                        <?= $clientName ?>
                                    </span>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table cellspacing="0" cellpadding="0" width="100%">
                            <tr>
                                <td class="stext" width="1%">Адрес&nbsp;плательщика&nbsp;</td>
                                <td class="string">
                                    <span class="nowr" style="line-height: 1;">
                                        <?= $clientAddress ?>
                                    </span>
                                    <!--
                                    <span class="nowr" style="line-height: 1;">
                                        <?= $clientAddress ?>
                                    </span>
                                    -->
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table cellspacing="0" cellpadding="0" width="100%">
                            <tr>
                                <td class="stext" width="1%">Сумма&nbsp;платежа&nbsp;</td>
                                <td class="string" width="8%">
                                    <?= $payRub ?>
                                </td>
                                <td class="stext" width="1%">&nbsp;руб.&nbsp;</td>
                                <td class="string" width="8%">
                                    <?= $payKop ?>
                                </td>
                                <td class="stext" width="1%">&nbsp;коп.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Сумма&nbsp;платы&nbsp;за&nbsp;услуги&nbsp;</td>
                                <td class="string" width="8%">
                                    <?= $payBankRub ?>
                                </td>
                                <td class="stext" width="1%">&nbsp;руб.&nbsp;</td>
                                <td class="string" width="8%">
                                    <?= $payBankKop ?>
                                </td>
                                <td class="stext" width="1%">&nbsp;коп.</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table cellspacing="0" cellpadding="0" width="100%">
                            <tr>
                                <td class="stext" width="5%">Итого&nbsp;</td>
                                <td class="string" width="8%">
                                    <?= $payTotalRub ?>
                                </td>
                                <td class="stext" width="5%">&nbsp;руб.&nbsp;</td>
                                <td class="string" width="8%">
                                    <?= $payTotalKop ?>
                                </td>
                                <td class="stext" width="5%">&nbsp;коп.&nbsp;</td>
                                <td class="stext" width="20%" align="right">&laquo;&nbsp;</td>
                                <td class="string" width="8%">
                                    <?= $day ?>
                                </td>
                                <td class="stext" width="1%">&nbsp;&raquo;&nbsp;</td>
                                <td class="string" width="20%">
                                    <?= $month ?>
                                </td>
                                <td class="stext" width="5%" align="right">
                                    <?= $year ?>
                                </td>
                                <td class="stext" width="1%">&nbsp;г.</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td class="stext7" style="text-align: justify">
                        <?= $noteOne ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding-bottom: 0.5mm;">
                        <table cellspacing="0" cellpadding="0" width="100%">
                            <tr>
                                <td class="stext7" width="50%">&nbsp;</td>
                                <td class="stext7" width="1%"><b>Подпись&nbsp;плательщика&nbsp;</b></td>
                                <td class="string" width="40%">&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>
