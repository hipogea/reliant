<?php 
use common\helpers\h;

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	color: #011775;
	font-weight: bold;
	font-size: 21px;
}
.style4 {font-family: Arial, Helvetica, sans-serif; font-size: 18px; color: #333333; }
.style7 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 19px;
}
.style13 {
	font-size: 18px;
	color: #365074;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
  <!-- fwtable fwsrc="Sin título" fwbase="inter_email.jpg" fwstyle="Dreamweaver" fwdocid = "1260569711" fwnested="0" -->
  <tr>
    <!-- Shim row, height 1. -->
    <td><img src="imagenes/spacer.gif" alt="" name="undefined_2" width="85" height="1" border="0" /></td>
    <td><img src="imagenes/spacer.gif" alt="" name="undefined_2" width="98" height="1" border="0" /></td>
    <td><img src="imagenes/spacer.gif" alt="" name="undefined_2" width="349" height="1" border="0" /></td>
    <td><img src="imagenes/spacer.gif" alt="" name="undefined_2" width="192" height="1" border="0" /></td>
    <td><img src="imagenes/spacer.gif" alt="" name="undefined_2" width="76" height="1" border="0" /></td>
    <td><img src="imagenes/spacer.gif" alt="" name="undefined_2" width="1" height="1" border="0" /></td>
  </tr>
  <tr>
    <!-- row 1 -->
    <?php $nombreDir='admision_alumno';  ?>
    <td colspan="5"><img src="<?= $message->embed(__DIR__.'/'.$nombreDir.'/inter_email_r1_c1.jpg'); ?>" alt="" name="inter_email_r1_c1_2" width="800" height="195" border="0" usemap="#inter_email_r1_c1_2Map" /></td>
    <td><img src="imagenes/spacer.gif" alt="" name="undefined_2" width="1" height="195" border="0" /></td>
  </tr>
  <tr>
    <!-- row 2 -->
    <td colspan="5"><img name="inter_email_r2_c1_2" src="<?= $message->embed(__DIR__.'/'.$nombreDir.'/inter_email_r2_c1.jpg'); ?>" width="800" height="38" border="0" alt="" /></td>
    <td><img src="imagenes/spacer.gif" alt="" name="undefined_2" width="1" height="38" border="0" /></td>
  </tr>
  <tr>
    <!-- row 3 -->
    <td rowspan="3">&nbsp;</td>
    <td colspan="2"><span class="style1">ESTIMADO<br />
      <?PHP echo $fullName;  ?> </span></td>
    <td colspan="2"><img name="inter_email_r3_c4_2" src="<?= $message->embed(__DIR__.'/'.$nombreDir.'/inter_email_r3_c4.jpg'); ?>" width="268" height="72" border="0" alt="" /></td>
    <td><img src="imagenes/spacer.gif" alt="" name="undefined_2" width="1" height="72" border="0" /></td>
  </tr>
  <tr>
    <!-- row 4 -->
    <td colspan="4"><img name="inter_email_r4_c2_2" src="<?= $message->embed(__DIR__.'/'.$nombreDir.'/inter_email_r4_c2.jpg'); ?>" width="715" height="31" border="0" alt="" /></td>
    <td><img src="imagenes/spacer.gif" alt="" name="undefined_2" width="1" height="31" border="0" /></td>
  </tr>
  <tr>
    <!-- row 5 -->
    <td height="316" valign="top"><img src="<?= $message->embed(__DIR__.'/'.$nombreDir.'/inter_email_r5_c2.jpg'); ?>" width="94" height="96" /></td>
    <td colspan="2" valign="top"><p class="style4">Has aprobado satisfactoriamente todo el proceso de <br />
    convocatoria, siendo admitido para el programa de <br />
    movilidad aced&eacute;mico <?php echo h::periodos()->currentPeriod;  ?> </p>
      <p class="style4">Te deseamos muchos &eacute;xitos en tu nueva experiencia <br />
      internacional en la Universidad (Nombre de la universidad)<br />
        (Pa&iacute;s) te espera</p>
      <p class="style4">&nbsp;</p>
      <table width="542" height="153" border="0">
        <tr>
          <td height="149" align="center" valign="middle" bgcolor="d7e2ee"><table width="518" border="0">
            <tr>
              <td width="512" height="82" valign="top"><p><span class="style7"><span class="style13">Agradecemos tu colaboraci&oacute;n y perseverancia a lo largo <br />
                del proceso de postulaci&oacute;n.</span></span></p>
                <p><span class="style4">En los pr&oacute;ximos d&iacute;as nos contacteremos con tigo para<br />
                  definir detalles que deber&iacute;as tener en cuenta antes de tu viaje<br />
                al extranjero. </span><span class="style7"><br />  
                    <br />
                  </span></p></td>
            </tr>
          </table></td>
        </tr>
      </table>
    </td>
    <td>&nbsp;</td>
    <td><img src="imagenes/spacer.gif" alt="" name="undefined_2" width="1" height="257" border="0" /></td>
  </tr>
  <tr>
    <!-- row 6 -->
    <td colspan="5"><img name="inter_email_r6_c1_2" src="<?= $message->embed(__DIR__.'/'.$nombreDir.'/inter_email_r6_c1.jpg'); ?>" width="800" height="124" border="0" alt="" /></td>
    <td><img src="imagenes/spacer.gif" alt="" name="undefined_2" width="1" height="124" border="0" /></td>
  </tr>
  <tr>
    <!-- row 7 -->
    <td colspan="5"><img name="inter_email_r7_c1_2" src="<?= $message->embed(__DIR__.'/'.$nombreDir.'/inter_email_r7_c1.jpg'); ?>" width="800" height="1" border="0" alt="" /></td>
    <td><img src="imagenes/spacer.gif" alt="" name="undefined_2" width="1" height="1" border="0" /></td>
  </tr>
  <tr>
    <!-- row 8 -->
    <td colspan="5"><img src="<?= $message->embed(__DIR__.'/'.$nombreDir.'/inter_email_r8_c1.jpg'); ?>" alt="" name="inter_email_r8_c1_2" width="800" height="210" border="0" usemap="#inter_email_r8_c1_2Map" /></td>
    <td><img src="imagenes/spacer.gif" alt="" name="undefined_2" width="1" height="210" border="0" /></td>
  </tr>
  <!--   This table was automatically created with Macromedia Fireworks   -->
  <!--   http://www.macromedia.com   -->
</table>
<!--========================= STOP COPYING THE HTML HERE =========================-->
<!--========================= STOP COPYING THE HTML HERE =========================-->


<map name="inter_email_r8_c1_2Map" id="inter_email_r8_c1_2Map">
  <area shape="rect" coords="121,117,151,141" href="https://www.instagram.com/fcctp_usmp/" target="_blank" />
  <area shape="rect" coords="89,117,119,141" href="https://www.youtube.com/user/webusmp/videos?view=0&amp;sort=p&amp;flow=grid" target="_blank" />
  <area shape="rect" coords="389,52,734,130" href="https://fcctp.usmp.edu.pe/site/" target="_blank" />
<area shape="rect" coords="63,118,86,142" href="https://www.facebook.com/fcctp/" target="_blank" />
</map>

<map name="inter_email_r1_c1_2Map" id="inter_email_r1_c1_2Map"><area shape="rect" coords="67,42,366,144" href="http://fcctp.usmp.edu.pe/internacional/" target="_blank" />
</map></body>
</html>

