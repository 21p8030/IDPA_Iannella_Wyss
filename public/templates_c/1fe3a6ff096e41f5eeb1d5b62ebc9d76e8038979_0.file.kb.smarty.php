<?php
/* Smarty version 4.1.0, created on 2022-06-18 13:41:04
  from 'C:\Users\Julien Wyss\Documents\IDPA\IDPA_Iannella_Wyss\app\views\kb.smarty' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62adb9d09af9a6_50913570',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1fe3a6ff096e41f5eeb1d5b62ebc9d76e8038979' => 
    array (
      0 => 'C:\\Users\\Julien Wyss\\Documents\\IDPA\\IDPA_Iannella_Wyss\\app\\views\\kb.smarty',
      1 => 1655552463,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:plot.smarty' => 1,
    'file:main.smarty' => 1,
    'file:styles.smarty' => 1,
  ),
),false)) {
function content_62adb9d09af9a6_50913570 (Smarty_Internal_Template $_smarty_tpl) {
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
</head>

<body >
<!-- ======= Mobile nav toggle button ======= -->
    <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
    
    <header id="header" class="d-flex flex-column justify-content-center">

        <nav id="navbar" class="navbar nav-menu">
        <ul>
            <li><a href="/public/grFunktionen" class="nav-link scrollto"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 121.83 122.88" style="enable-background:new 0 0 121.83 122.88" xml:space="preserve"><g><path d="M27.61,34.37l-4.07,4.6l0.4,1.74h10.48c-2.14,12.38-3.74,23.54-6.81,40.74c-3.67,21.94-5.78,27.33-7.03,29.3 c-1.1,1.95-2.68,2.96-4.82,2.96c-2.35,0-6.6-1.86-8.88-3.97c-0.82-0.56-1.79-0.42-2.82,0.26C2,111.74,0,114.42,0,116.82 c-0.12,3.24,4.21,6.06,8.34,6.06c3.64,0,9-2.28,14.64-7.64c7.71-7.31,13.48-17.34,18.3-39.02c3.1-13.84,4.56-22.84,6.74-35.5 l13.02-1.18l2.82-5.17H49.2C52.99,10.53,55.95,7,59.59,7c2.42,0,5.24,1.86,8.48,5.52c0.96,1.32,2.4,1.18,3.5,0.28 c1.85-1.1,4.13-3.92,4.28-6.48C75.96,3.5,72.6,0,66.82,0C61.58,0,53.55,3.5,46.8,10.38c-5.92,6.27-9.02,14.1-11.16,23.99H27.61 L27.61,34.37z M69.27,50.33c4.04-5.38,6.46-7.17,7.71-7.17c1.29,0,2.32,1.27,4.53,8.41l3.78,12.19 c-7.31,11.18-12.66,17.41-15.91,17.41c-1.08,0-2.17-0.34-2.94-1.1c-0.76-0.76-1.6-1.39-2.42-1.39c-2.68,0-6,3.25-6.06,7.28 c-0.06,4.11,2.82,7.05,6.6,7.05c6.49,0,11.98-6.37,22.58-23.26l3.1,10.45c2.66,8.98,5.78,12.81,9.68,12.81 c4.82,0,11.3-4.11,18.37-15.22l-2.96-3.38c-4.25,5.12-7.07,7.52-8.74,7.52c-1.86,0-3.49-2.84-5.64-9.82l-4.53-14.73 c2.68-3.95,5.32-7.27,7.64-9.92c2.76-3.15,4.89-4.49,6.34-4.49c1.22,0,2.28,0.52,2.94,1.25c0.87,0.96,1.39,1.41,2.42,1.41 c2.33,0,5.93-2.96,6.06-6.88c0.12-3.64-2.14-6.74-6.06-6.74c-5.92,0-11.14,5.1-21.19,20.04l-2.07-6.41 c-2.9-9-4.82-13.63-8.86-13.63c-4.7,0-11.16,5.78-17.48,14.94L69.27,50.33L69.27,50.33z"/></g></svg></i> <span>Gebrochen Rationale Funktionen</span></a></li>
            <li><a href="/public/kinematik/ggb" class="nav-link scrollto active">K<span>Kinematik</span></a></li>
            <li><a href="/public/Reibung" class="nav-link scrollto">R</i> <span>Reibung</span></a></li>
        </ul>
        </nav>

    </header>
<h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
<div>
    <ul style="list-style-type: none; display: flex">
        <li style="margin-right: 20px;"><a href="/public/kinematik/ggb"><span>Gleichf??rmige geradlinige Bewegung</span></a></li>
        <li style="margin-right: 20px;"><a href="/public/kinematik/gbb"><span>Gleichf??rmig beschleunigte Bewegung</span></a></li>
        <li style="margin-right: 20px;"><a href="/public/kinematik/ff"><span>Freier Fall</span></a></li>
        <li style="margin-right: 20px;"><a href="/public/kinematik/sw"><span>Senkrechter Wurf</span></a></li>
        <li style="margin-right: 20px;"><a href="/public/kinematik/schw"><span>Schiefer Wurf</span></a></li>
        <li style="margin-right: 20px;"><a href="/public/kinematik/kb"><span class="text-success">Kreisbewegung</span></a></li>
    </ul>
</div>
<h2>Kreisbewegung</h2>
<div class="flex_wrapper">
    <div>Bei der Kreisbewegung bewegt sich ein Punkt um den Umfang eines Kreises, es ist also im ??berstrichenen Winkel ?? zu betrachten (Bogenmass). Durch den Geschwindigkeitsvektor ->v wird die Tangente gebildet.<br>

    Gleichf??rmige Kreisbewegung<br>
    Ist die Bewegung gleichf??rmig, werden in gleichen Zeitabschnitten gleiche Drehwinkel zur??ckgelegt.<br>
    
    Winkelgeschwindigkeit<br>
    Die Winkelgeschwindigkeit ist das Verh??ltnis des ??berstrichenen Winkels (Bogenmass) zur dabei verflossenen Zeit.<br>
    </div>
    <div style="margin-bottom: 20px;" id="GWZ"></div>
    <div>Wenn bei einer konstanten Winkelgeschwindigkeit ein voller Winkel 2?? betrachten, betr??gt die Zeit der Dauer einer Periode T. Somit:<br></div>
    <div style="margin-bottom: 20px;" id="tsv"></div>
    <div>Oftmals ist es notwendig die Geschwindigkeit in Meter pro Sekunde anzugeben, welche sich bei konstanter Winkelgeschwindigkeit, je nach Abstand zum Drehpunkt (Radius r), ??ndert. Im Spezialfall wird der Weg als volle Umdrehung betrachtet und die Zeit als Periode.<br></div>
    <div style="margin-bottom: 20px;" id="svt"></div>
</div>

    <svg xmlns="http://www.w3.org/2000/svg" id="Beschleunigte_Kreisbewegung_-_Zur??ckgelegter_Winkel_universaldenker.org" data-name="Beschleunigte Kreisbewegung - Zur??ckgelegter Winkel | universaldenker.org" viewBox="0 0 1770 1320" style="height: 300px;"><defs><style>.cls-1,.cls-11{fill:#4c4c4c;}.cls-1{opacity:0.12;}.cls-13,.cls-14,.cls-2,.cls-5,.cls-7,.cls-9{fill:none;stroke-linecap:round;}.cls-13,.cls-2{stroke:#4c4c4c;}.cls-13,.cls-14,.cls-2,.cls-5{stroke-linejoin:round;}.cls-2{stroke-width:11.11px;stroke-dasharray:46.99 46.99;}.cls-3{fill:#b03a2e;}.cls-4{fill:#ccc;}.cls-5{stroke:#69c;}.cls-13,.cls-14,.cls-5{stroke-width:21px;}.cls-6{fill:#69c;}.cls-7{stroke:#ccc;stroke-width:10px;stroke-dasharray:29.99;}.cls-7,.cls-9{stroke-miterlimit:10;}.cls-8{fill:#fceed4;}.cls-9{stroke:#960;stroke-width:10px;stroke-dasharray:28.58 28.58;}.cls-10{stroke:#000;stroke-width:12.91px;}.cls-12{fill:#960;}.cls-14{stroke:#b03a2e;}</style></defs><title>traversed-angle-during-circular-motion (universaldenker.org)</title><path class="cls-1" d="M604.7,1039.1,844,740.2l447.5,241.4a1261,1261,0,0,1-362.7,78.9A1234.1,1234.1,0,0,1,604.7,1039.1Z"/><g id="Scheibe"><ellipse class="cls-2" cx="848.8" cy="741.5" rx="690.5" ry="322.7"/></g><path id="g0-11" class="cls-3" d="M762,551.1c26.7-30.6,32.9-62.6,32.9-63.4,0-4-4.2-4-6.8-4-5.4,0-5.7.6-7.1,6-5.4,18.9-13.9,34.5-20.1,43.3-.3-13.6-.6-30.3-15.9-45.6s-33.1-17.8-46.4-17.8c-57.8,0-89,44.7-89,81.3,0,31.1,23.3,49,58.7,49,27.2,0,50.4-11.7,65.4-22.4,5.1,11.9,16.7,22.4,34,22.4s28.3-13.1,28.3-19c0-4-3.9-4-6.5-4s-5.1,0-6.5,3.7c-3.4,8.2-12.7,9.1-13.3,9.1C762.6,589.7,762,556.8,762,551.1Zm-92.3,38.6c-15.9,0-27.5-7.7-27.5-26.4,0-9.3,6.5-40.8,15-57.2,9.1-18.1,26.7-26.3,41.1-26.3,26.3,0,29.5,31.1,30.6,58.9.3,7.1,1.4,19.5,1.4,26.3,0,3.4-17.3,13.3-24.3,16.4C689,588.8,676.5,589.7,669.7,589.7Z"/><path class="cls-4" d="M846.6,735.6,734.3,874.5c13.6,11.4,69.3,55.7,151.3,53.2,96.8-3,154.9-68.8,164.1-79.6Z"/><g id="Geschwindigkeitspfeil"><line class="cls-5" x1="1295.9" y1="992.3" x2="1588.2" y2="836.2"/><polygon class="cls-6" points="1580.5 884.4 1576.8 842.3 1543.9 815.8 1643.5 806.7 1580.5 884.4"/></g><path class="cls-7" d="M610.7,1037.5,846.6,742.8l448.9,244.3"/><g id="Mittelpunkt"><circle class="cls-8" cx="609.6" cy="1036.6" r="63.7"/><circle class="cls-9" cx="609.6" cy="1036.6" r="63.7" transform="translate(-554.4 734.7) rotate(-45)"/></g><ellipse id="Punkt" class="cls-10" cx="848.8" cy="741.5" rx="12.9" ry="6"/><path id="g1-39" class="cls-11" d="M873.9,864.1c-2.9,0-5.4,0-5.4-.8s2.9-16,3.9-19.6c5.3-21.3,17.9-36.6,32.4-36.6,10.8,0,15.8,8.1,15.8,17.3C920.6,843.3,899.3,864.1,873.9,864.1Zm-7.2,8.7a49.4,49.4,0,0,0,5.7.3c27.2,0,52.4-26.3,52.4-52.6,0-10.1-4.5-22.4-18.5-22.4-24,0-34.1,33.7-43.4,65-19.2-3.6-27.1-13.8-27.1-24.9,0-4.5,3.4-22.3,13.1-34.3,1.8-2.2,1.8-2.5,1.8-2.8a1.4,1.4,0,0,0-1.6-1.4c-4.5,0-17.2,24.3-17.2,40.1,0,18.7,14.7,28.8,28.1,31.8l-8.6,28.1c-.8,2.5-.8,2.9-.8,3.5,0,4,4,4.2,4.3,4.2a6.5,6.5,0,0,0,6-4C861.4,901.9,866,876.1,866.7,872.8Z"/><path id="g0-33" class="cls-11" d="M1021,169.9c5.7-10.6,8.9-21.8,8.9-25.7s-2.7-10.1-8.7-10.1c-14.2,0-15.8,24.3-16,30.5-.3,3.5-.5,3.7-.7,3.9A38.8,38.8,0,0,1,979,178.6c-15.1,0-23.8-9.9-23.8-22.7,0-7.1,4.1-24.3,19.9-45.8,2.1-2.6,2.5-3.2,2.5-5.1a4.8,4.8,0,0,0-4.8-4.8,7.6,7.6,0,0,0-3.9,1.4c-1.1,1.1-25.9,31.2-25.9,63.9,0,23.2,11.7,38.3,31.2,38.3,16.3,0,29.1-11,34.2-16.5,2.9,6.9,9.6,16.5,24.7,16.5,19.7,0,37.4-14.4,47.5-30,14-21.8,16-51.1,16-54.3,0-17.7-10.5-21.4-15.3-21.4-8.8,0-17.5,9.2-17.5,17.5,0,5.9,4.4,8.7,6.7,10.5,5.9,3.9,11,9.4,11,16.7,0,15.2-19.7,35.8-43.6,35.8C1031.3,178.6,1025.1,176.8,1021,169.9Z"/><circle id="Mittelpunkt-2" data-name="Mittelpunkt" class="cls-12" cx="1294.8" cy="985.3" r="63.7"/><g id="Geschwindigkeitspfeil-2" data-name="Geschwindigkeitspfeil"><line class="cls-13" x1="848.8" y1="720.6" x2="848.8" y2="199.7"/><polygon class="cls-11" points="887.7 229.2 848.8 212.6 810 229.2 848.8 137 887.7 229.2"/></g><g id="Geschwindigkeitspfeil-3" data-name="Geschwindigkeitspfeil"><line class="cls-14" x1="848.8" y1="735" x2="848.8" y2="352.3"/><polygon class="cls-3" points="887.7 381.8 848.8 365.2 810 381.8 848.8 289.6 887.7 381.8"/></g><g id="page1"><path id="g0-116" class="cls-12" d="M478.3,1168.4h14.3c2.9,0,4.5,0,4.5-2.8s-1-1.7-4.1-1.7H479.4l5.7-22.6a8.9,8.9,0,0,0,.7-3.6,3.9,3.9,0,0,0-4.1-3.8c-1.2,0-4.8.4-6,5.4l-6.1,24.6H455.1c-3.1,0-4.5,0-4.5,3s1.1,1.5,4,1.5h13.8l-10.2,40.9c-1.3,5.5-1.7,7-1.7,9,0,7.3,5.1,14,13.8,14,15.6,0,24-22.6,24-23.7s-.6-1.4-1.6-1.4a1.2,1.2,0,0,0-1.2.6c-.2.2-.3.3-1.4,2.8-3.3,7.7-10.4,18.6-19.4,18.6-4.6,0-4.9-3.9-4.9-7.3a29.8,29.8,0,0,1,.4-5Z"/><path id="g1-61" class="cls-12" d="M649.6,1180.5c2.2,0,5,0,5-2.8s-2.6-2.9-5-2.9H558.4c-2.2,0-5,0-5,2.8s2.6,2.9,5,2.9Zm0,28.8c2.2,0,5,0,5-2.7s-2.6-3-5-3H558.4c-2.2,0-5,0-5,2.8s2.6,2.9,5,2.9Z"/><path id="g1-48" class="cls-12" d="M775.6,1181.1c0-12.8-.8-25.4-6.4-37.2s-17.5-16.2-25.1-16.2-20,4.5-25.7,17.3c-4.4,9.8-5.9,19.4-5.9,36.1,0,15.1,1.1,26.4,6.6,37.4a27.6,27.6,0,0,0,24.8,15.5c13.5,0,21.3-8.1,25.8-17.1C775.2,1205.3,775.6,1190.1,775.6,1181.1Zm-31.7,49.8c-4.9,0-15-2.8-17.9-19.7-1.7-9.3-1.7-21.1-1.7-31.9,0-12.7,0-24.2,2.4-33.3s10.6-15.2,17.2-15.2,14.9,3.5,17.9,16.9c2,8.8,2,21,2,31.6s0,22.1-1.7,31.6C759.1,1227.9,749.4,1230.9,743.9,1230.9Z"/></g></svg>


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
  
  var GWZ_formula_pretty = "Winkelgeschwindigkeit (??)=  (Winkel (?????))/(Zeit (???t))";
  var tsv_formula = "??=  2??/T=2?? *  1/T=2?? *Frequenz (f)???in Hz bzw.  s^-1";
  //var tsv_formula = "t=s/v";
  var svt_formula = "v=  (Bogenweg (???b))/t=spez.???  2??r/T=2??fr= ?? *Radius (r)";


  GWZ.innerHTML = '';
  GWZ.appendChild(mj(GWZ_formula_pretty));
  tsv.innerHTML = '';
  tsv.appendChild(mj(tsv_formula));
  svt.innerHTML = '';
  svt.appendChild(mj(svt_formula));

<?php echo '</script'; ?>
>

  </body>

</html><?php }
}
