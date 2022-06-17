<?php
/* Smarty version 4.1.0, created on 2022-06-17 17:17:48
  from 'C:\Users\Julien Wyss\Documents\IDPA\IDPA_Iannella_Wyss\app\views\ff.smarty' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62ac9b1c735693_53333221',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3027447aa913be85a56c5edb6662dc806310a1a' => 
    array (
      0 => 'C:\\Users\\Julien Wyss\\Documents\\IDPA\\IDPA_Iannella_Wyss\\app\\views\\ff.smarty',
      1 => 1655478950,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:plot.smarty' => 1,
    'file:main.smarty' => 1,
    'file:styles.smarty' => 1,
    'file:integral.smarty' => 1,
  ),
),false)) {
function content_62ac9b1c735693_53333221 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="de">
<head>
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <?php $_smarty_tpl->_subTemplateRender('file:plot.smarty', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender('file:main.smarty', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender('file:styles.smarty', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender('file:integral.smarty', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</head>

<body >
<!-- ======= Mobile nav toggle button ======= -->
    <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
    
    <header id="header" class="d-flex flex-column justify-content-center">

        <nav id="navbar" class="navbar nav-menu">
        <ul>
            <li><a href="/IDPA_Iannella_Wyss/public/grFunktionen" class="nav-link scrollto"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 121.83 122.88" style="enable-background:new 0 0 121.83 122.88" xml:space="preserve"><g><path d="M27.61,34.37l-4.07,4.6l0.4,1.74h10.48c-2.14,12.38-3.74,23.54-6.81,40.74c-3.67,21.94-5.78,27.33-7.03,29.3 c-1.1,1.95-2.68,2.96-4.82,2.96c-2.35,0-6.6-1.86-8.88-3.97c-0.82-0.56-1.79-0.42-2.82,0.26C2,111.74,0,114.42,0,116.82 c-0.12,3.24,4.21,6.06,8.34,6.06c3.64,0,9-2.28,14.64-7.64c7.71-7.31,13.48-17.34,18.3-39.02c3.1-13.84,4.56-22.84,6.74-35.5 l13.02-1.18l2.82-5.17H49.2C52.99,10.53,55.95,7,59.59,7c2.42,0,5.24,1.86,8.48,5.52c0.96,1.32,2.4,1.18,3.5,0.28 c1.85-1.1,4.13-3.92,4.28-6.48C75.96,3.5,72.6,0,66.82,0C61.58,0,53.55,3.5,46.8,10.38c-5.92,6.27-9.02,14.1-11.16,23.99H27.61 L27.61,34.37z M69.27,50.33c4.04-5.38,6.46-7.17,7.71-7.17c1.29,0,2.32,1.27,4.53,8.41l3.78,12.19 c-7.31,11.18-12.66,17.41-15.91,17.41c-1.08,0-2.17-0.34-2.94-1.1c-0.76-0.76-1.6-1.39-2.42-1.39c-2.68,0-6,3.25-6.06,7.28 c-0.06,4.11,2.82,7.05,6.6,7.05c6.49,0,11.98-6.37,22.58-23.26l3.1,10.45c2.66,8.98,5.78,12.81,9.68,12.81 c4.82,0,11.3-4.11,18.37-15.22l-2.96-3.38c-4.25,5.12-7.07,7.52-8.74,7.52c-1.86,0-3.49-2.84-5.64-9.82l-4.53-14.73 c2.68-3.95,5.32-7.27,7.64-9.92c2.76-3.15,4.89-4.49,6.34-4.49c1.22,0,2.28,0.52,2.94,1.25c0.87,0.96,1.39,1.41,2.42,1.41 c2.33,0,5.93-2.96,6.06-6.88c0.12-3.64-2.14-6.74-6.06-6.74c-5.92,0-11.14,5.1-21.19,20.04l-2.07-6.41 c-2.9-9-4.82-13.63-8.86-13.63c-4.7,0-11.16,5.78-17.48,14.94L69.27,50.33L69.27,50.33z"/></g></svg></i> <span>Gebrochen Rationale Funktionen</span></a></li>
            <li><a href="/IDPA_Iannella_Wyss/public/kinematik/ggb" class="nav-link scrollto active">K<span>Kinematik</span></a></li>
            <li><a href="/IDPA_Iannella_Wyss/public/Reibung" class="nav-link scrollto">R</i> <span>Reibung</span></a></li>
        </ul>
        </nav>

    </header>
<h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
<div>
    <ul style="list-style-type: none; display: flex">
        <li style="margin-right: 20px;"><a href="/IDPA_Iannella_Wyss/public/kinematik/ggb"><span>Gleichförmige geradlinige Bewegung</span></a></li>
        <li style="margin-right: 20px;"><a href="/IDPA_Iannella_Wyss/public/kinematik/gbb"><span>Gleichförmig beschleunigte Bewegung</span></a></li>
        <li style="margin-right: 20px;"><a href="/IDPA_Iannella_Wyss/public/kinematik/ff"><span class="text-success">Freier Fall</span></a></li>
        <li style="margin-right: 20px;"><a href="/IDPA_Iannella_Wyss/public/kinematik/sw"><span>Senkrechter Wurf</span></a></li>
        <li style="margin-right: 20px;"><a href="/IDPA_Iannella_Wyss/public/kinematik/schw"><span>Schiefer Wurf</span></a></li>
        <li style="margin-right: 20px;"><a href="/IDPA_Iannella_Wyss/public/kinematik/kb"><span>Kreisbewegung</span></a></li>
    </ul>
</div>
<h2>Freier Fall</h2>
<div class="flex_wrapper">
    <div>Der Freie Fall ist eine beschleunigte Bewegung, auf der die Erdbeschleunigung wirkt. Wenn der Luftwiderstand vernachlässigt werden darf, gelten die Formeln der gleichmässigen beschleunigten Bewegung (Hierbei wird g=9.81m/s^2 als beschleunigung verwendet). Der Weg (s) wird durch die Fallhöhe (h) ersetzt. Der Luftwiderstand kann in Situationen wie Fallschirmspringen nicht vernachlässigt werden.</div>
</div>


    <svg xmlns="http://www.w3.org/2000/svg" id="Freier_Fall_-_Strecke_universaldenker.org" data-name="Freier Fall - Strecke | universaldenker.org" viewBox="0 0 2700 1800" style="height: 300px;"><defs><style>.cls-1{fill:#696;}.cls-2{fill:#4c4c4c;}.cls-3,.cls-6,.cls-7{fill:none;stroke-miterlimit:10;stroke-width:20px;}.cls-3{stroke:#4c4c4c;}.cls-4{fill:#9cf;}.cls-5{fill:#963;}.cls-6,.cls-7{stroke:#ccc;stroke-linecap:round;}.cls-7{stroke-dasharray:37.99 37.99;}.cls-8{fill:#ccc;}</style></defs><title>free-fall-strecke-distance-from-starting-at-height-zero (universaldenker.org)</title><rect class="cls-1" x="-15" y="1447.6" width="2715" height="357.31"/><path class="cls-2" d="M1453.3,683c-28.8,0-44.9-23.1-44.9-51.3a87.3,87.3,0,0,1,9.3-38.8c9.6-20.2,24.4-35.6,42.4-44.6,9.3-4.5,17.3-7,27.9-7,13.4,0,20.8,7,27.9,15.4l1.2-1.6a17.1,17.1,0,0,1,13.5-7.4c5.1,0,10.6,3.8,10.6,9,0,7.3-36.9,150.7-37.5,152-8,23.1-36.3,40.1-68,40.1-24.7,0-39.1-4.8-43.6-14.1a15.9,15.9,0,0,1-1.6-7.7c0-10.6,8.3-21.2,20.5-21.2,7.4,0,13.5,5.1,13.5,12.8,0,11.2-8.4,16.4-8.4,17h.3c2.3.7,11.6,1,19.3,1,9.6,0,12.8-.3,19.2-3.9,9.6-4.8,19.3-15.4,22.8-25.6.3-1,2.9-10,5.1-19.9,3.2-11.9,4.2-17,4.2-18C1483.1,672.8,1468.7,683,1453.3,683Zm32.1-129.9c-1.3,0-2.9.4-3.9.4-8.3,1.9-17,8-23.4,16.6s-10.9,19.3-17,43.3c-4.1,16.7-5.4,22.8-5.4,32.1,0,14.4,5.4,25.3,19.9,25.3s27.5-12.2,35.2-22.4l2.6-3.2,17-67.4C1505.9,564,1501.1,553.1,1485.4,553.1Z"/><g id="Pfeil"><line class="cls-3" x1="1280.4" y1="490.2" x2="1280.4" y2="651.7"/><polygon class="cls-2" points="1280.4 736.4 1231.6 617.1 1280.4 645.4 1329.2 617.1 1280.4 736.4"/></g><path id="Wolke" class="cls-4" d="M2370.7,683c-36.7.3-72.8,16.9-85.3,47.1-61.4-81.4-196.3-5-157.2,76.5-92.8-17.2-71.5,132.9,15.1,118.3,37.2,38.7,94.3,45,156,17.6h.1c74.6,27.2,139.5,7,168.8-13.8,175.6,45.8,112.5-234.8-2.8-161.6C2464.5,708.8,2417.2,682.7,2370.7,683Z"/><path id="Wolke-2" data-name="Wolke" class="cls-4" d="M510.4,175.9c-36.6.3-72.8,16.9-85.3,47.1-61.4-81.4-196.3-5-157.2,76.5-92.8-17.2-71.5,132.9,15.2,118.3,37.1,38.7,94.2,45,156,17.6h0c74.6,27.2,139.5,6.9,168.8-13.8,175.7,45.8,112.5-234.8-2.8-161.6C604.2,201.7,556.9,175.6,510.4,175.9Z"/><circle class="cls-5" cx="1280.4" cy="424.3" r="82.6"/><line class="cls-3" x1="1043.8" y1="1113.3" x2="1043.8" y2="1437.6"/><rect class="cls-2" x="978.8" y="1427.6" width="130" height="20"/><path class="cls-2" d="M1129.1,854.9c0,6.4-31.5,130.2-33.7,136.6a89.7,89.7,0,0,1-43,50c-11.2,5.5-20.5,8.3-32.4,8.3-14.7,0-27.6-5.7-33-15.3-2.2-3.3-3.2-7.1-3.2-12.9,0-7.4,1.6-12.5,6.1-17s9-6.1,14.1-6.1c8.3,0,14.1,4.5,14.1,13.5a19.1,19.1,0,0,1-11.2,17.3,25.7,25.7,0,0,1-4.2,1.9,1.5,1.5,0,0,0-1,.4,23.2,23.2,0,0,0,6.8,4.1,27.3,27.3,0,0,0,10.2,2h2.6c4.2,0,5.5,0,8.4-.7,16-4.5,32-23.1,39.7-47.1,1-2.9,3.5-12.2,3.5-12.5s-6.7,5.1-16.3,8.6a51.6,51.6,0,0,1-12.5,1.6c-21.8,0-36.6-10.6-40.7-29.8-.4-2.2-.4-4.2-.4-9.9s0-7.7.7-11.9c1.9-11.2,5.4-22.1,14.7-47.2,6.8-17.9,7.1-19.5,7.1-26.3s-.7-8-4.5-8h-1.6c-5.1,0-9.3,2-14.1,6.8-6.8,6.7-12.2,17.3-15.7,30.8-1.3,2.8-.4,2.8-6.5,2.8h-4.4c-.7-.6-2-1.6-2-2.8a20.9,20.9,0,0,1,1-4.5c4.2-14.1,11.9-27.3,20.2-35,6.4-6.1,13.5-10.3,22.8-10.3,17.9,0,29.5,10.3,29.5,27.9-.3,2.9-.3,5.5-1,6.8s-2.2,7.4-4.8,13.8c-10.3,27.9-13.8,40.1-15.7,52.2a61.9,61.9,0,0,0-.3,7.4c0,14.8,3.5,25,17.9,25s25-11.8,32.4-21.4c0-.7,5.8-22.5,12.2-49.1,10.3-40.1,12.5-48.4,13.5-50.4a15.4,15.4,0,0,1,13.8-8.6C1123.6,845.9,1129.1,849.1,1129.1,854.9Z"/><line class="cls-6" x1="1436.7" y1="424.3" x2="1454.2" y2="424.3"/><line class="cls-7" x1="1492.2" y1="424.3" x2="1777.1" y2="424.3"/><line class="cls-6" x1="1796.1" y1="424.3" x2="1813.6" y2="424.3"/><path class="cls-8" d="M2029.3,377.6c0,5.6-27.4,113.5-29.4,119.1a78,78,0,0,1-37.4,43.6c-9.8,4.7-17.9,7.2-28.2,7.2-12.9,0-24-5-28.8-13.4-2-2.8-2.8-6.1-2.8-11.2s1.4-10.9,5.3-14.8,7.8-5.3,12.3-5.3c7.3,0,12.3,3.9,12.3,11.7a16.6,16.6,0,0,1-9.8,15.1,25.4,25.4,0,0,1-3.6,1.7.9.9,0,0,0-.8.3c.2.5,3.6,2.8,5.8,3.6a24.8,24.8,0,0,0,9,1.7h2.2a26.2,26.2,0,0,0,7.3-.6c13.9-3.9,27.9-20.1,34.6-41,.8-2.5,3.1-10.6,3.1-10.9s-5.9,4.4-14.3,7.5a42.8,42.8,0,0,1-10.9,1.4c-19,0-31.8-9.2-35.4-26-.3-1.9-.3-3.6-.3-8.6a60.2,60.2,0,0,1,.5-10.4c1.7-9.7,4.8-19.2,12.9-41,5.9-15.7,6.1-17.1,6.1-22.9s-.5-7-3.9-7h-1.4c-4.4,0-8.1,1.6-12.3,5.8-5.8,5.9-10.6,15.1-13.7,26.9-1.1,2.5-.2,2.5-5.5,2.5h-4c-.5-.6-1.6-1.4-1.6-2.5a14.2,14.2,0,0,1,.8-4c3.6-12.2,10.3-23.7,17.6-30.4,5.6-5.3,11.7-8.9,19.8-8.9,15.7,0,25.7,8.9,25.7,24.3-.2,2.5-.2,4.7-.8,5.8s-2,6.5-4.2,12c-8.9,24.3-12,35-13.7,45.6a45.7,45.7,0,0,0-.3,6.4c0,12.9,3.1,21.8,15.7,21.8s21.8-10.3,28.2-18.7c0-.6,5-19.6,10.6-42.8,9-34.9,10.9-42.2,11.8-43.8a13.4,13.4,0,0,1,12-7.6C2024.5,369.8,2029.3,372.6,2029.3,377.6Z"/><path class="cls-8" d="M2117,387.7h178c2.2,1.1,4.2,2.5,4.2,5.6s-2,4.2-4,5.3l-88.8.3h-88.8c-2.8-.9-4.5-2.3-4.5-5.6S2114.8,388.8,2117,387.7Zm.6,54.2h177.6c1.7,1.4,4,2.2,4,5.6s-2,4.5-4.2,5.6H2117c-2.2-1.1-3.9-2.5-3.9-5.6S2114.8,442.7,2117.6,441.9Z"/><path class="cls-8" d="M2454.2,304.2a53.4,53.4,0,0,1,35.8,13.9c5.3,5.1,9.2,10.9,12.8,19,7.3,16.2,10.4,35,10.4,63.7,0,30.8-3.4,49.8-12,66.3-5.6,11.4-12.6,18.4-22.9,23.4a53,53,0,0,1-23.8,5.9c-23.2,0-38.6-12.9-46.9-29.3s-12-35.5-12-66.3c0-34,3.9-54.7,15.9-74C2420.7,313.4,2435.5,304.2,2454.2,304.2Zm.3,10.3a28,28,0,0,0-20.1,8.9c-8.1,8.4-10.4,17.4-11.2,47.5,0,5.1-.3,15.4-.3,26.3,0,15.4.3,32.1.6,37.4,1.4,26,3.6,34.4,11.7,42.8,4.8,5.3,10.4,8.4,19.3,8.4s14.3-3.1,19-8.4c8.1-8.4,10.3-16.8,11.7-42.8.3-5.3.6-22,.6-37.4,0-10.9-.3-21.2-.3-26.3-.8-30.1-3.1-39.1-11.2-47.5C2469.3,317.9,2463.2,314.5,2454.5,314.5Z"/><line class="cls-6" x1="781.6" y1="424.3" x2="799.1" y2="424.3"/><line class="cls-7" x1="837" y1="424.3" x2="1122" y2="424.3"/><line class="cls-6" x1="1140.9" y1="424.3" x2="1158.4" y2="424.3"/><line class="cls-3" x1="1046.8" y1="424.5" x2="1046.8" y2="768.9"/><rect class="cls-2" x="981.8" y="414.5" width="130" height="20"/></svg>


<?php echo '<script'; ?>
>
  const geschw_v = document.getElementById('geschw_v')
  const zeit_t = document.getElementById('zeit_t')
  const weg_s = document.getElementById('weg_s')
  const used_formula = document.getElementById('used_formula')
  let parenthesis = 'keep'
  let implicit = 'hide'

  const mj = function (tex) {
    return MathJax.tex2svg(tex, {em: 32, ex: 3, display: false});
  }

  const GWZ = document.getElementById('GWZ')
  const tsv = document.getElementById('tsv')
  const svt = document.getElementById('svt')
  
  var GWZ_formula_pretty = "Geschwindigkeit (v) = Weg (s)/Zeit (t)";
  var GWZ_formula = "v=s/t";
  var tsv_formula = "t=s/v";
  var svt_formula = "s=v*t";


  GWZ.innerHTML = '';
  GWZ.appendChild(mj(math.parse(GWZ_formula_pretty).toTex({parenthesis: parenthesis})));
  tsv.innerHTML = '';
  tsv.appendChild(mj(math.parse(tsv_formula).toTex({parenthesis: parenthesis})));
  svt.innerHTML = '';
  svt.appendChild(mj(math.parse(svt_formula).toTex({parenthesis: parenthesis})));

<?php echo '</script'; ?>
>

  </body>

</html><?php }
}
