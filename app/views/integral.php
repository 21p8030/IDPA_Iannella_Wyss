<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<form name="form1" method="post" action="integral_test">
  <table width="81%" border="0" bgcolor="#CCCCCC">
    <tr> 
      <td width="20%"><strong>Dimentions:</strong></td>
      <td colspan="3"><strong>x:</strong> <select name="x" id="x">
          <option value="200">200px</option>
          <option value="400">400px</option>
          <option value="600" selected>600px</option>
        </select> <strong>y:</strong> <select name="y" id="y">
          <option value="200">200px</option>
          <option value="400" selected>400px</option>
          <option value="600">600px</option>
          <option value="800">800px</option>
        </select></td>
    </tr>
    <tr> 
      <td width="20%"><strong>Calculation Range:</strong></td>
      <td colspan="3"><strong>a: 
        <input name="x_start" type="text" id="x_start" value="0" size="6" maxlength="4">
        b : 
        <input name="x_end" type="text" id="x_end" value="200" size="6" maxlength="4">
        </strong></td>
    </tr>
    <tr> 
      <td><strong>Background Color:</strong></td>
      <td width="29%"><strong>R: </strong> <input name="br" type="text" id="br" value="0" size="5" maxlength="3"></td>
      <td width="26%"><strong>G: </strong> <input name="bg" type="text" id="bg" value="0" size="5" maxlength="3"></td>
      <td width="25%"><strong>B: </strong> <input name="bb" type="text" id="bb" value="0" size="5" maxlength="3"> 
      </td>
    </tr>
    <tr> 
      <td><strong>Arc Color:</strong></td>
      <td><strong>R:</strong> <input name="ar" type="text" id="ar" value="255" size="5" maxlength="3"></td>
      <td><strong>G:</strong> <input name="ag" type="text" id="ag" value="255" size="5" maxlength="3"></td>
      <td><strong>B: </strong> <input name="ab" type="text" id="ab" value="255" size="5" maxlength="3"></td>
    </tr>
    <tr> 
      <td><strong>Function:</strong></td>
      <td colspan="3"><strong>y(x) =</strong> 
        <input name="eqx" type="text" id="eqx" value="sqrt(x)" size="30" maxlength="30"></td>
    </tr>
    <tr> 
      <td> <div align="left"><strong>Calculation Step:</strong></div></td>
      <td><select name="step" id="step">
          <option value=".001">.001</option>
          <option value=".01" selected>.01</option>
          <option value=".1">.1</option>
          <option value="1">1</option>
        </select></td>
      <td><strong>Draw Grid</strong> <input name="hasgrid" type="checkbox" id="hasgrid2" value="1"></td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td colspan="4"><div align="right"> 
          <input type="submit" name="Submit" value="Draw" align="right">
        </div></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  </form>
<p>&nbsp;</p></body>
</html>