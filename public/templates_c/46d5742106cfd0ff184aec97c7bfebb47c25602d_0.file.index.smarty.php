<?php
/* Smarty version 4.1.0, created on 2022-06-18 13:14:47
  from 'C:\Users\Julien Wyss\Documents\IDPA\IDPA_Iannella_Wyss\app\views\index.smarty' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62adb3a7bd50f3_43345812',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46d5742106cfd0ff184aec97c7bfebb47c25602d' => 
    array (
      0 => 'C:\\Users\\Julien Wyss\\Documents\\IDPA\\IDPA_Iannella_Wyss\\app\\views\\index.smarty',
      1 => 1655550886,
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
function content_62adb3a7bd50f3_43345812 (Smarty_Internal_Template $_smarty_tpl) {
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
            <li><a href="/public/grFunktionen" class="nav-link scrollto active"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 121.83 122.88" style="enable-background:new 0 0 121.83 122.88" xml:space="preserve"><g><path d="M27.61,34.37l-4.07,4.6l0.4,1.74h10.48c-2.14,12.38-3.74,23.54-6.81,40.74c-3.67,21.94-5.78,27.33-7.03,29.3 c-1.1,1.95-2.68,2.96-4.82,2.96c-2.35,0-6.6-1.86-8.88-3.97c-0.82-0.56-1.79-0.42-2.82,0.26C2,111.74,0,114.42,0,116.82 c-0.12,3.24,4.21,6.06,8.34,6.06c3.64,0,9-2.28,14.64-7.64c7.71-7.31,13.48-17.34,18.3-39.02c3.1-13.84,4.56-22.84,6.74-35.5 l13.02-1.18l2.82-5.17H49.2C52.99,10.53,55.95,7,59.59,7c2.42,0,5.24,1.86,8.48,5.52c0.96,1.32,2.4,1.18,3.5,0.28 c1.85-1.1,4.13-3.92,4.28-6.48C75.96,3.5,72.6,0,66.82,0C61.58,0,53.55,3.5,46.8,10.38c-5.92,6.27-9.02,14.1-11.16,23.99H27.61 L27.61,34.37z M69.27,50.33c4.04-5.38,6.46-7.17,7.71-7.17c1.29,0,2.32,1.27,4.53,8.41l3.78,12.19 c-7.31,11.18-12.66,17.41-15.91,17.41c-1.08,0-2.17-0.34-2.94-1.1c-0.76-0.76-1.6-1.39-2.42-1.39c-2.68,0-6,3.25-6.06,7.28 c-0.06,4.11,2.82,7.05,6.6,7.05c6.49,0,11.98-6.37,22.58-23.26l3.1,10.45c2.66,8.98,5.78,12.81,9.68,12.81 c4.82,0,11.3-4.11,18.37-15.22l-2.96-3.38c-4.25,5.12-7.07,7.52-8.74,7.52c-1.86,0-3.49-2.84-5.64-9.82l-4.53-14.73 c2.68-3.95,5.32-7.27,7.64-9.92c2.76-3.15,4.89-4.49,6.34-4.49c1.22,0,2.28,0.52,2.94,1.25c0.87,0.96,1.39,1.41,2.42,1.41 c2.33,0,5.93-2.96,6.06-6.88c0.12-3.64-2.14-6.74-6.06-6.74c-5.92,0-11.14,5.1-21.19,20.04l-2.07-6.41 c-2.9-9-4.82-13.63-8.86-13.63c-4.7,0-11.16,5.78-17.48,14.94L69.27,50.33L69.27,50.33z"/></g></svg></i> <span>Gebrochen Rationale Funktionen</span></a></li>
            <li><a href="/public/kinematik/ggb" class="nav-link scrollto">K<span>Kinematik</span></a></li>
            <li><a href="/public/Reibung" class="nav-link scrollto">R</i> <span>Reibung</span></a></li>
        </ul>
        </nav>
    </header>
<h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
<div class="flex_wrapper">
Die drei Darstellungen der gebrochen rationalen Funktionen:

<table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Besipielfunktion</th>
                <th scope="col">Allgemein</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>ausdividierte Form</td>
                <td id="ausForm"></td>
                <td id="ausFormAllg"></td>
                <td>a(x) : Polynom, (Schiefe) Asymptote<br>
                r(x): Resthyperbel</td>
            </tr>
            <tr>
                <td>Bruchform</td>
                <td id="Bruch1"></td>
                <td id="Bruch2"></td>
                <td>Z(x), N(x):Polynome</td>
            </tr>
            <tr>
                <td>Bruchform</td>
                <td id="Bruch3"></td>
                <td id="Bruch4"></td>
                <td>n : Z??hlergrad<br>
                m : Nennergrad
                </td>
            </tr>
        </tbody>
    </table>
    <div>
    Bruchform ??? ausdividierte Form	:	Polynomdivision (mit Rest)<br>
ausdividierte Form ??? Bruchform	:	gleichnamig machen<br></div>
<div>Schiefe Asymptote: <div id="asymptote"></div></div>
<table class="table table-hover">
<thead>
            <tr>
                <th scope="col" colspan="2">Nullstellen des Z??hlers und Nenners (Bruchform)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>vom Z??hlen Z(x)<br>(und nicht gleichzeitig vom Nenner)</td>
                <td >Nullstellen der Funktion</td>
                
            </tr>
            <tr>
                <td>vom Nenner N(x)<br>(und nicht gleichzeitig vom Z??hler)</td>
                <td>Definitionsl??cke<br>Polstellen<br>Polgeraden (senkrechte Asymptoten)</td>
                
            </tr>
        </tbody>
    </table>
</div>
<div class="wrapper">
    <div id="myPlot" style="width: 650px; height: 650px;"></div>

    <table>
    <tr>
        <th>Funktion
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="func_checkbox" checked="">
            <label class="form-check-label" for="func_checkbox">
            Graph Anzeigen
            </label>
        </div>
        </th>
        <td><input type="text" id="expr"/></td>
    </tr>
    <tr>
        <th>Sch??n Schrift</th>
        <td><div id="pretty"></div></td>
    </tr>
    <tr>
        <th>Ableitung
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="abl_checkbox">
            <label class="form-check-label" for="abl_checkbox">
            Graph Anzeigen
            </label>
        </div>
        </th>
        <td><div id="abl"></div></td>
    </tr>
    <tr>
        <th>Result</th>
        <td><div id="result"></div></td>
    </tr>
    <tr>
        <th>Input</th>
        <td><input type="text" id="start_point"/><br>
        <button type="button" class="btn btn-success" onclick="newton(expr.value,0 ,start_point.value)">Nullstellen berechnen</button></td>
    </tr>
    </table>
</div>
<div class="wrapper_nullstellen">
    <table id="nullstellen"  class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Xn</th>
                <th scope="col">Funktion</th>
                <th scope="col">Ableitung</th>
                <!--<th scope="col">Graph anzeigen</th>-->
            </tr>
        </thead>
        <tbody id="Nullstellen_Body"></tbody>
    </table>
</div>
<!--<b>Parenthesis option:</b>
    <input type="radio" name="parenthesis" value="keep" onclick="parenthesis = 'keep'; expr.oninput();" checked>keep
    <input type="radio" name="parenthesis" value="auto" onclick="parenthesis = 'auto'; expr.oninput();">auto
    <input type="radio" name="parenthesis" value="all" onclick="parenthesis = 'all'; expr.oninput();">all-->


<?php echo '<script'; ?>
>
  const expr = document.getElementById('expr')
  expr.value = '(x^2+x)/(x-1)';
  const start_point = document.getElementById('start_point')
  const pretty = document.getElementById('pretty')
  const result = document.getElementById('result')
  const abl = document.getElementById('abl')
  const abl_checkbox = document.getElementById('abl_checkbox')
  const func_checkbox = document.getElementById('func_checkbox')
  func_checkbox.value = expr.value;
  abl_checkbox.value = math.format(math.derivative(expr.value, 'x'));
  var table = document.getElementById('nullstellen');
  var checkboxes = [];
  checkboxes.push(abl_checkbox);
  checkboxes.push(func_checkbox);
  let parenthesis = 'keep';
  let implicit = 'hide';
  console.log(checkboxes);

  abl_checkbox.addEventListener('change', (event) => {
    add_plots_checkboxes();
  })
  func_checkbox.addEventListener('change', (event) => {
    add_plots_checkboxes();
  })

  const mj = function (tex) {
    return MathJax.tex2svg(tex, {em: 32, ex: 3, display: false});
  }

  const ausFOm = document.getElementById('ausForm')
  const ausFOmAllg = document.getElementById('ausFormAllg')
  const Bruch1 = document.getElementById('Bruch1')
  const Bruch2 = document.getElementById('Bruch2')
  const Bruch3 = document.getElementById('Bruch3')
  const Bruch4 = document.getElementById('Bruch4')
  const asymptote = document.getElementById('asymptote')
  
  var asymptoteF = "y=a(x)";
  var ausFo = "f(x)=x+2+2/(x-1)";
  var ausFoAllg = "f(x)=a (x)  + r(x)";
  var Bruch1F = "f(x)=a (x)  + r(x)";
  var Bruch2F = "f(x)=  (Z(x))/(N(x))";
  var Bruch3F = "f(x)=  (x(x+1))/(x-1)";
  var Bruch4F = "f(x)=  (a_n x^n+ etc + a_1 x+a_0  )/(b_m x^m+ etc + b_1 x+b_0 )";


  ausFOm.innerHTML = '';
  ausFOm.appendChild(mj(math.parse(ausFo).toTex({parenthesis: parenthesis})));
  ausFOmAllg.innerHTML = '';
  ausFOmAllg.appendChild(mj(math.parse(ausFoAllg).toTex({parenthesis: parenthesis})));
  Bruch1.innerHTML = '';
  Bruch1.appendChild(mj(math.parse(Bruch1F).toTex({parenthesis: parenthesis})));
  Bruch2.innerHTML = '';
  Bruch2.appendChild(mj(math.parse(Bruch2F).toTex({parenthesis: parenthesis})));
  Bruch3.innerHTML = '';
  Bruch3.appendChild(mj(math.parse(Bruch3F).toTex({parenthesis: parenthesis})));
  Bruch4.innerHTML = '';
  Bruch4.appendChild(mj(math.parse(Bruch4F).toTex({parenthesis: parenthesis})));
  asymptote.innerHTML = '';
  asymptote.appendChild(mj(math.parse(asymptoteF).toTex({parenthesis: parenthesis})));

  function newton(func, int, Xn) {
      const table = document.getElementById("Nullstellen_Body");
      table.innerHTML = "";
      //let abl = math.format(math.simplify(math.derivative(func, 'x')));
      let abl = math.format(math.derivative(func, 'x'));
      console.log(abl);
      for (let i = 0; i < 100; i++) {
          Xtemp = Xn;
          Xn = Xn - (math.evaluate(func, {x: Xn}) / math.evaluate(abl, {x: Xn}));
          let row = table.insertRow();
          let Xn_Table = row.insertCell(0);
          Xn_Table.innerHTML = Xn;
          let funct_numb = row.insertCell(1);
          funct_numb.innerHTML = math.evaluate(func, {x: Xn});
          let abl_numb = row.insertCell(2);
          abl_numb.innerHTML = math.evaluate(abl, {x: Xn});
          /*let checkbox_col = row.insertCell(3);
          checkbox_col.innerHTML = '<input class="form-check-input" type="checkbox" value="" id="checkbox_'+ i +'" style="margin-left: 0px;">';
          checkboxes.push(document.getElementById("checkbox_"+i));
          document.getElementById("checkbox_"+i).value = Xn + "-" + (func + "/" + abl);
          document.getElementById("checkbox_"+i).addEventListener('change', (event) => {
            add_plots_checkboxes();
          })*/
          console.log("Xn: " + Xn + ", Funkion: " + math.evaluate(func, {x: Xn}) + ", abl: " + math.evaluate(abl.replace(/x/g, Xn)));
          if(check_float(Xtemp, Xn)) {
              console.log("Final close, X: " + Xn);
              let row = table.insertRow();
              row.outerHTML = "<tr class='table-success'><td>Finale Nullstelle</td><td colspan='3'>" + Xn + "</td>";
              break;
          }
      }
  }

    function main(inp) {
            myPlot = new Fooplot(document.getElementById('myPlot'));
            myPlot.addPlot(inp,FOOPLOT_TYPE_FUNCTION, {'color' : "#62c462"});
            //myPlot.addPlot(math.format(math.derivative(inp, 'x')),FOOPLOT_TYPE_FUNCTION, {'color' : "#ea4335"});
            myPlot.reDraw();
    }

    function check_float(X1, X2) {
        console.log(Math.abs((X1)-(X2)));
        let diffPot = 0.00000000001;
        if(diffPot > Math.abs((X1)-(X2))) {
            return true;
        } else {
            return false;
        }
    }

    function add_plots_checkboxes(func) {
        //console.log(checkboxes);
        myPlot = new Fooplot(document.getElementById('myPlot'));
        checkboxes.forEach(element => {
            console.log(element.value);
            if(element.checked) {
                console.log(element);
                if(element.value == expr.value) {
                    myPlot.addPlot(element.value,FOOPLOT_TYPE_FUNCTION, {'color' : "#62c462"});
                } else if(element.value ==  math.format(math.derivative(expr.value, 'x'))){
                    myPlot.addPlot(element.value,FOOPLOT_TYPE_FUNCTION, {'color' : "#ea4335"});
                } else {
                    myPlot.addPlot(element.value,FOOPLOT_TYPE_FUNCTION);
                }
            }
        });

        myPlot.reDraw();
    }

  start_point.value = 0;
  pretty.innerHTML = '';
  pretty.appendChild(mj(math.parse(expr.value).toTex({parenthesis: parenthesis})));
  
  /*if(!expr.value.indexOf("x")) {
    result.innerHTML = math.format(math.evaluate(expr.value))
  }*/
  abl.innerHTML = '';
  abl.appendChild(mj(math.parse(math.format(math.derivative(expr.value, 'x'))).toTex({parenthesis: parenthesis})));

  main(expr.value);

  expr.oninput = function () {
    func_checkbox.value = expr.value;
    abl_checkbox.value = math.format(math.derivative(expr.value, 'x'));
    let node = null
    add_plots_checkboxes();
    try {
      // parse the expression
      node = math.parse(expr.value)

      // evaluate the result of the expression
      //result.innerHTML = math.format(node.compile().evaluate())
    }
    catch (err) {
      //result.innerHTML = '<span style="color: red;">' + err.toString() + '</span>'
    }

    try {
      // export the expression to LaTeX
      const latex = node ? node.toTex({parenthesis: parenthesis, implicit: implicit}) : ''
      console.log('LaTeX expression:', latex)

      // display and re-render the expression
      MathJax.typesetClear();
      abl.innerHTML = '';
      abl.appendChild(mj(math.parse(math.format(math.derivative(expr.value, 'x'))).toTex({parenthesis: parenthesis})));
      pretty.innerHTML = '';
      pretty.appendChild(mj(latex));
    }
    catch (err) {}

    
  }
<?php echo '</script'; ?>
>

  </body>

</html><?php }
}
