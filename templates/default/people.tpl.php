<?php
$users = $someClasses =\Idno\Entities\ActivityStreamPost::getFromX("Idno\Entities\User",array(),array(),100);
?>
<table>
    <tr>
        <th class="fn">
            First Name
        </th>
        <th class="ln">
            Last Name
        </th>
        <th class="pr">
            Project
        </th>
    </tr>
    <?php forEach ($users as $user){
        $nameArray = explode(" ",$user->getName(),2);
        $firstName = $nameArray[0];
        $lastName = $nameArray[1];
        ?>
        <tr>
            <td class="fn">
                <a href="<?=$user->getURL()?>" >
                    <?=$firstName?>
                </a>
            </td>
            <td class="ln">
                <a href="<?=$user->getURL()?>" >
                    <?=$lastName?>
                </a>
            </td>
            <td class="pr">
                <a href="<?=$user->getURL()?>" >
                    <?=$user->projTitle?>
                </a>
                
            </td>
        </tr>
    <?php };?>
</table>
