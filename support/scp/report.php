<?php
    ob_start();
    readfile(dirname(__FILE__).'/../report.php');
    echo htmlentities(ob_get_clean());
    ?>
    
<page footer="form">
<h1 style="font:actor"align="center"><strong><cite><var>Customer  Service Report</var></cite></strong></h1>
<form action="action="<?php echo $url; ?>">
<table width="1005" border="1" cellpadding="0" cellspacing="0" >
  <tr>
    <td width="154" rowspan="2" valign="top"><p><strong>Customer Name</strong></p></td>
    <td width="197" rowspan="2" valign="top"><p><strong>&nbsp;</strong></p></td>
    <td colspan="4" valign="top"><p><strong>Customer Contact Name</strong>:</p></td>
  </tr>
  <tr>
    <td colspan="4" valign="top"><p><strong>Customer Contact Phone Number :</strong></p>
    <p>
      <input type="tel" name="tel" id="tel">
    </p></td>
  </tr>
  <tr>
    <td width="154" valign="top"><p><strong>Site Location</strong></p></td>
    <td colspan="5" valign="top"><p><strong>&nbsp;</strong></p></td>
  </tr>
  <tr>
    <td width="154" valign="top"><p><strong>Date &amp; Time</strong></p></td>
    <td width="197"><p><strong>&nbsp;</strong>
      <input type="datetime" name="datetime" id="datetime">
    </p></td>
    <td colspan="2" valign="top"><p><strong>Engineer </strong></p></td>
    <td colspan="2"><p><strong>&nbsp;</strong></p></td>
  </tr>
  <tr>
    <td width="154" valign="top"><p><strong>Type of Visit</strong></p></td>
    <td colspan="5" valign="top"><p>
      <select name="select" id="select">
        <option value="1">Support Contract</option>
        <option value="2">Warranty</option>
        <option value="3">Troubleshoot</option>
        <option value="4">Maintenance Work</option>
        <option value="5">Project</option>
        <option value="6">Others</option>
      </select>
    </p></td>
  </tr>
  <tr>
    <td width="154" valign="top"><p><strong>Description</strong></p></td>
    <td colspan="5"><p>
      <select name="select2" id="select2">
        <option value="1">Hardware</option>
        <option value="2">Software</option>
      </select>
    </p>
    <p>
      <select name="select3" id="select3">
        <option>PC</option>
        <option>Server</option>
        <option>Network</option>
        <option>Application</option>
        <option>Other</option>
      </select>
    </p></td>
  </tr>
  <tr>
    <td width="154" valign="top"><p><strong>Summary</strong></p></td>
    <td colspan="5" valign="top"><p><strong>&nbsp;</strong></p></td>
  </tr>
  <tr>
    <td width="154" valign="top"><p><strong>H/W IP Address</strong></p></td>
    <td colspan="2" valign="top"><p><strong>&nbsp;</strong>          </p></td>
    <td colspan="2" valign="top"><p><strong>H/W Model</strong></p></td>
    <td width="384" valign="top"><p><strong>&nbsp;</strong></p></td>
  </tr>
  <tr>
    <td width="154" valign="top"><p><strong>Serial Number</strong></p></td>
    <td colspan="2" valign="top"><p><strong>&nbsp;</strong></p></td>
    <td colspan="2" valign="top"><p><strong>Project Number</strong></p></td>
    <td width="384" valign="top"><p><strong>&nbsp;</strong></p></td>
  </tr>
  <tr>
    <td width="154" valign="top"><p><strong>Status</strong></p></td>
    <td colspan="5"><p><select name="select4" id="select4">
      <option value="1">Complete</option>
      <option value="2">Incomplete</option>
      <option value="3">Pending</option>
      <option value="4">Under Observation</option>
      <option value="5">Working Solution Provided</option>
    </select>
    </p></td>
  </tr>
</table></form>

<table border="1" cellspacing="0" cellpadding="0" width="500">
  <tr>
    <td colspan="3" valign="top"><p align="center"><strong>Service Details</strong></p></td>
  </tr>
  <tr>
    <td width="114" valign="top"><p align="center"><strong>Time</strong></p></td>
    <td width="657" valign="top"><p align="center"><strong>Action</strong></p></td>
    <td width="226" valign="top"><p align="center"><strong>Engineer    Initial</strong></p></td>
  </tr>
  <tr>
    <td width="114" valign="top"><p align="center">&nbsp;</p></td>
    <td width="657" valign="top"><div align="center"> </div></td>
    <td width="226" valign="top"><p align="center">&nbsp;</p></td>
  </tr>
  <tr>
    <td width="114" valign="top"><p align="center">&nbsp;</p></td>
    <td width="657" valign="top"><div align="center"> </div></td>
    <td width="226" valign="top"><p align="center">&nbsp;</p></td>
  </tr>
  <tr>
    <td width="114" valign="top"><p align="center">&nbsp;</p></td>
    <td width="657" valign="top"><div align="center"> </div></td>
    <td width="226" valign="top"><p align="center">&nbsp;</p></td>
  </tr>
  <tr>
    <td width="114" valign="top"><p align="center">&nbsp;</p></td>
    <td width="657" valign="top">&nbsp;</td>
    <td width="226" valign="top"><p align="center">&nbsp;</p></td>
  </tr>
  <tr>
    <td width="114" valign="top"><p align="center">&nbsp;</p></td>
    <td width="657" valign="top"><div align="center">&nbsp;    </div></td>
    <td width="226" valign="top"><p align="center">&nbsp;</p></td>
  </tr>
  <tr>
    <td width="114" valign="top"><p align="center">&nbsp;</p></td>
    <td width="657" valign="top"><div align="center">&nbsp;    </div></td>
    <td width="226" valign="top"><p align="center">&nbsp;</p></td>
  </tr>
  <tr>
    <td width="114" valign="top"><p align="center">&nbsp;</p></td>
    <td width="657" valign="top"><div align="center"> </div></td>
    <td width="226" valign="top"><p align="center">&nbsp;</p></td>
  </tr>
  <tr>
    <td width="114" valign="top"><p align="center">&nbsp;</p></td>
    <td width="657" valign="top"><div align="center">&nbsp;    </div></td>
    <td width="226" valign="top"><p align="center">&nbsp;</p></td>
  </tr>
  <tr>
    <td width="114" valign="top"><p align="center">&nbsp;</p></td>
    <td width="657" valign="top"><div align="center">
      <table border="1" cellspacing="0" cellpadding="0" width="657">
      </table>
    </div></td>
    <td width="226" valign="top"><p align="center">&nbsp;</p></td>
  </tr>
  <tr>
    <td height="204" colspan="3" valign="top"><table border="1" cellspacing="0" cellpadding="0" width="1001">
      <tr>
        <td width="997" valign="top"><p align="center"><strong>Remarks</strong></p></td>
      </tr>
    </table><p align="center">&nbsp;</p></td>
  </tr>
 <?php
?> 
</table>
</page>
