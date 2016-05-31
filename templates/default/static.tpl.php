<?php
$users = $someClasses =\Idno\Entities\ActivityStreamPost::getFromX("Idno\Entities\User");
?>
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
