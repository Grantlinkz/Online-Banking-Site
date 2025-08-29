<?php
include('account/connect.php');
//WEBSITE SETTINGS
 $query = $conn->query("SELECT * FROM setting WHERE id = 1") or die(mysqli_error($conn));
 while($rows = mysqli_fetch_array($query)){
    $sitename = $rows["name"];
    $logo = $rows["logo"];
    $tagline = $rows["tagline"];
    $favicon = $rows["favicon"];
    $register = $rows["register"];
    $sitephone = $rows["phone"];
    $siteemail = $rows["email"];
    $siteaddress = $rows["address"];
    $description = $rows["description"];
    $seo = $rows["seo"];
    $darklogo = $rows["darklogo"];
    $rate1 = $rows["stockrate"];
    $rate2 = $rows['stockrate2'];
    $money = $rows["money"];
    $sitecountry = $rows["country"];
    $visa_picture = $rows["visa_picture"];
    $tawk  = $rows['tawk'];
    $shortname = $rows['shortname'];
    $blocked_msg = $rows['blocked_msg'];
    //$blocked_icon = $rows['blocked_icon'];
    $blocked_title = $rows['blocked_title'];
    $imfMsg = $rows['imfmsg'];
    $cotMsg = $rows['cotmsg'];
    $icMsg = $rows['icmsg'];
    $tacMsg = $rows['tacmsg'];
    $tinMsg = $rows['tinmsg'];
    $userstac = $rows['userstac'];
    $usersic = $rows['usersic'];
    $userstin = $rows['userstin'];
    $transfercharge = $rows['charges'];
    $localmsg = $rows['localmsg'];
    $wiremsg = $rows['wiremsg'];
    $footerlogo = $rows['footerlogo'];
    $imf_cot_counter = $rows['cot_imf_counter'];
    $cot_error = $rows['cot_error'];
    $imf_error = $rows['imf_error'];
    $enable_cot_imf = $rows['enable_cot_imf'];
    $sitedescription = $rows['description'];
    $rest_msg = $rows['rest_msg'];
    $enable_tin_ic_tac = $rows['enable_tin_ic_tac'];
    $enable_tin = $rows['enable_tin'];
    $enable_ic = $rows['enable_ic'];
    $crypto = $rows['crypto'];
    $bots = $rows['bots'];
    $site_url = $rows['site_url'];
    if ($sitecountry == "United Kingdom") {
        $routine = "Sort code";
    }
    else{
        $routine = "Routing number";
    }
    if ($rows['stock'] == 1) {
        $stockrate = $rate1;
    }else {$stockrate = $rate2;}
}
?>