<div class="landing">
    <h1>
        Known <br />
        <a href="#tags">Unknowns</a>
    </h1>
    <p class="description">
        Design is not rigid.<br />
        Knowledge is unstable. <br />
        This work explores territories we know are not understood.
    <form class="search">
        <input id="searchBar" placeholder="" required ></input>
        <span class="cursor"></span>
        <div id="autocomplete"></div>
    </form>
</div><!--landing -->
<div id="tags" class="tagCloud">
<?php
$allTypes =  \Idno\Common\ContentType::getRegisteredClasses();
$someClasses = \Idno\Entities\ActivityStreamPost::getFromX($allTypes,array(),array(),1000);
$allTags = array();
forEach ($someClasses as $contentItem){
    $itemTags = $contentItem->getTags();
    forEach ($itemTags as $tag){
        if (substr($tag,0,1) == "#"){
            $tag = substr($tag,1);
        }
        if ($allTags[$tag]){
            $allTags[$tag] += 1;
        }else{
            $allTags[$tag] = 1;
        }
    }
};
?>
<script>
searchIndex=[
    <?php forEach ($allTags as $tag => $uses){?>
        {"string":"<?=$tag?>",uses: <?=$uses?>,url:"/tag/<?=$tag?>"},
    <?php };?>
    <?php $users = $someClasses =\Idno\Entities\ActivityStreamPost::getFromX("Idno\Entities\User",array(),array(),100);?>
    <?php forEach ($users as $user){?>
        {"string":"<?=$user->getName()?>" ,uses: 10,url:"<?=$user->getUrl()?>"},
        {"string":"<?=$user->projTitle?>" ,uses: 10,url:"<?=$user->getUrl()?>"},
    <?php };?>
]
</script>
<h2>
    Tags
</h2>
<ul>
    <?php forEach ($allTags as $tag => $uses){?>
        <li style="font-size:<?=pow($uses,0.5)*100.0/2?>%" data-uses="<?=$uses?>" class="tagcolum-<?=rand(0,12)?>" >
            <a href="/tag/<?=$tag?>" ><?=$tag?></a>
        </li>
    <?php };?>
<ul>
