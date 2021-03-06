<?php
/* Smarty version 4.1.0, created on 2022-06-17 17:17:12
  from 'C:\Users\Julien Wyss\Documents\IDPA\IDPA_Iannella_Wyss\app\views\kinematik.smarty' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62ac9af80ce478_88696890',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94904806c8c2690d4d4b4b73d96bd3233e4a4093' => 
    array (
      0 => 'C:\\Users\\Julien Wyss\\Documents\\IDPA\\IDPA_Iannella_Wyss\\app\\views\\kinematik.smarty',
      1 => 1655478933,
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
function content_62ac9af80ce478_88696890 (Smarty_Internal_Template $_smarty_tpl) {
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
        <li style="margin-right: 20px;" ><a href="/public/kinematik/ggb"><span class="text-success">Gleichf??rmige geradlinige Bewegung</span></a></li>
        <li style="margin-right: 20px;"><a href="/public/kinematik/gbb"><span>Gleichf??rmig beschleunigte Bewegung</span></a></li>
        <li style="margin-right: 20px;"><a href="/public/kinematik/ff"><span>Freier Fall</span></a></li>
        <li style="margin-right: 20px;"><a href="/public/kinematik/sw"><span>Senkrechter Wurf</span></a></li>
        <li style="margin-right: 20px;"><a href="/public/kinematik/schw"><span>Schiefer Wurf</span></a></li>
        <li style="margin-right: 20px;"><a href="/public/kinematik/kb"><span>Kreisbewegung</span></a></li>
    </ul>
</div>
<h2>Gleichf??rmige geradlinige Bewegung</h2>
<div class="flex_wrapper">
    <div>Eine gleichf??rmige geradlinige Bewegung liegt vor, wenn ein K??rper eine Strecke mit einer konstanten Geschwindigkeit hinterlegt.</div>
    <div style="margin-top: 20px; margin-bottom: 20px;">Folgende Formeln gelten:</div>
    <div style="margin-bottom: 20px;" id="GWZ"></div>
    <div style="margin-bottom: 20px;" id="tsv"></div>
    <div style="margin-bottom: 20px;" id="svt"></div>
</div>
<div class="wrapper">
    <div id="myPlot" style="width: 650px; height: 650px;"></div>

    <table>
    <tr>
        <th>Geschwindigkeit v:</th>
        <td><input type="text" id="geschw_v"/></td>
    </tr>
    <tr>
        <th>Zeit t:</th>
        <td><input type="text" id="zeit_t"/></td>
    </tr>
    <tr>
        <th>Weg s:</th>
        <td><input type="text" id="weg_s"/></td>
    </tr>
    <tr>
        <th>Verwendete Formel</th>
        <td><div id="used_formula"></div></td>
    </tr>
    <tr>
        <th>Berechnen</th>
        <td><button type="button" class="btn btn-success" onclick="GGB()">Berechnen</button></td>
    </tr>
    </table>
</div>

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

  myPlot = new Fooplot(document.getElementById('myPlot'));
  myPlot.reDraw();

    function main(inp) {
            myPlot = new Fooplot(document.getElementById('myPlot'));
            myPlot.addPlot(inp,FOOPLOT_TYPE_FUNCTION);
            //myPlot.addPlot(math.format(math.derivative(inp, 'x')),FOOPLOT_TYPE_FUNCTION, {'color' : "#ea4335"});
            myPlot.reDraw();
    }

    function GGB() {
        if(geschw_v.value && zeit_t.value && weg_s.value) {
            alert("Bitte genau zwei der Felder bef??llen");
        } else if(geschw_v.value && zeit_t.value) {
           // console.log(math.evaluate(svt_formula, {v: geschw_v.value, t: zeit_t.value}));
            weg_s.value = math.evaluate(svt_formula, {v: geschw_v.value, t: zeit_t.value});
            used_formula.innerHTML = '';
            used_formula.appendChild(mj(math.parse(svt_formula).toTex({parenthesis: parenthesis})));
            var plot_fomula = svt_formula.replace(/v/g, geschw_v.value);
            var plot_fomula = plot_fomula.replace(/t/g, zeit_t.value);
            console.log(plot_fomula);
            main(plot_fomula);
        } else if(geschw_v.value && weg_s.value) {
            // console.log(math.evaluate(svt_formula, {v: geschw_v.value, t: zeit_t.value}));
            zeit_t.value = math.evaluate(tsv_formula, {v: geschw_v.value, s: weg_s.value});
            used_formula.innerHTML = '';
            used_formula.appendChild(mj(math.parse(tsv_formula).toTex({parenthesis: parenthesis})));
            var plot_fomula = tsv_formula.replace(/v/g, geschw_v.value);
            var plot_fomula = plot_fomula.replace(/s/g, weg_s.value);
            console.log(plot_fomula);
            main(plot_fomula);
        } else if(zeit_t.value && weg_s.value) {
            // console.log(math.evaluate(svt_formula, {v: geschw_v.value, t: zeit_t.value}));
            geschw_v.value = math.evaluate(GWZ_formula, {t: zeit_t.value, s: weg_s.value});
            used_formula.innerHTML = '';
            used_formula.appendChild(mj(math.parse(GWZ_formula).toTex({parenthesis: parenthesis})));
            var plot_fomula = GWZ_formula.replace(/t/g, zeit_t.value);
            var plot_fomula = plot_fomula.replace(/s/g, weg_s.value);
            var plot_fomula = plot_fomula.replace(/v/g, "x");
            console.log(plot_fomula);
            main(plot_fomula);
        } else {
            alert("Bitte genau zwei der Felder bef??llen");
        }
    }
   

  // initialize with an example expression
  //expr.value = 'sqrt(75 / 3) + det([[-1, 2], [3, 1]]) - sin(pi / 4)^2'
  /*expr.value = '(x^2+x)/(x-1)';
  start_point.value = 0;
  pretty.innerHTML = '';
  pretty.appendChild(mj(math.parse(expr.value).toTex({parenthesis: parenthesis})));
  */
  /*if(!expr.value.indexOf("x")) {
    result.innerHTML = math.format(math.evaluate(expr.value))
  }*/
 // abl.innerHTML = '';
  //abl.appendChild(mj(math.parse(math.format(math.derivative(expr.value, 'x'))).toTex({parenthesis: parenthesis})));

  //main(expr.value);

<?php echo '</script'; ?>
>

  </body>

</html><?php }
}
