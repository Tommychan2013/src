<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.-->
<script>var __adobewebfontsappname__="dreamweaver"</script>
<script src="http://use.edgefonts.net/actor:n4:default.js" type="text/javascript"></script>

<page orientation="paysage" >
    <bookmark title="Document" level="0" ></bookmark>
    <a name="document_reprise"></a>
    <table cellspacing="0" style="width: 100%;">
        <tr>
            <td width="12%" style="width: 10%;">&nbsp;</td>
            <td width="78%" style="width: 80%; text-align: center; text-decoration: underline; font-weight: bold; font-size: 20pt;">
                <h1><span style="font-size: 12pt" align="center"><br></span>
               Customer Service Report
            </h1></td>
            <td align="right" style="width: 10%;"><img style="width: 50%" src="./res/logo_2.png" alt="Logo HTML2PDF" >
            </td>
        </tr>
    </table>
    <table cellspacing="0" style="width: 100%;">
        <tr>
            <td width="55%" style="width: 55% ">
                <table width="90%" cellspacing="0" style="width: 100%; border: solid 2px #000000; ">
                    <tr>
                      <td style="width: 100%; font-size: 12pt;">&nbsp;</td>
                      <td style="width: 100%; font-size: 12pt;">&nbsp;</td>
                      <td style="width: 100%; font-size: 12pt;">&nbsp;</td>
                    </tr>
                    <tr>
                      <td style="width: 100%; font-size: 12pt;">&nbsp;</td>
                      <td style="width: 100%; font-size: 12pt;">&nbsp;</td>
                        <td style="width: 100%; font-size: 12pt;"><br>
                            Date : <?php echo date('d/m/Y'); ?><br>                            <br>
                        </td>
                    </tr>
                    <tr>
                      <td style="width: 100%; font-size: 12pt;">&nbsp;</td>
                      <td style="width: 100%; font-size: 12pt;">&nbsp;</td>
                      <td style="width: 100%; font-size: 12pt;">&nbsp;</td>
                    </tr>
                    <tr>
                      <td style="width: 100%; font-size: 12pt;">&nbsp;</td>
                      <td style="width: 100%; font-size: 12pt;">&nbsp;</td>
                      <td style="width: 100%; font-size: 12pt;">&nbsp;</td>
                    </tr>
                    <tr>
                      <td style="width: 100%; font-size: 12pt;">&nbsp;</td>
                      <td style="width: 100%; font-size: 12pt;">&nbsp;</td>
                      <td style="width: 100%; font-size: 12pt;">&nbsp;</td>
                    </tr>
                </table>
                <br>
          </td>
        </tr>
        <tr>
            <td style="width: 55%; color: #C33; font-family: actor; font-style: normal; font-weight: 400;">
                <table cellspacing="0" style="padding: 1px; width: 100%; border: solid 2px #000000; font-size: 11pt; ">
                    <tr>
                        <th style="width: 100%; text-align: center; border: solid 1px #000000;" colspan="4">
                            Partie réservée à Spipu Corp
                        </th>
                    </tr>
                    <tr>
                        <th style="width: 100%; text-align: center; border: solid 1px #000000;" colspan="4">
                            QUANTITE PREVUE AU CHARGEMENT
                        </th>
                    </tr>
                    <tr>
                        <th style="width: 15%; border: solid 1px #000000;">Produit</th>
                        <th style="width: 55%; border: solid 1px #000000;">Designation</th>
                        <th style="width: 15%; border: solid 1px #000000;">Neuf</th>
                        <th style="width: 15%; border: solid 1px #000000;">Abîmé</th>
                    </tr>
<?php
$i=0;
foreach ($produits as $produit) {
    $i++;
?>
                    <tr>
                        <td style="width: 15%; border: solid 1px #000000;"><?php echo $produit[0];        ?></td>
                        <td style="width: 55%; border: solid 1px #000000;text-align: left;"><?php echo $produit[1];        ?></td>
                        <td style="width: 15%; border: solid 1px #000000;"><?php echo $produit[4];        ?></td>
                        <td style="width: 15%; border: solid 1px #000000;"><?php echo $produit[2]-$produit[4];        ?></td>
                    </tr>

<?php
}
for ($i; $i<12; $i++) {
?>
                    <tr>
                        <td style="width: 15%; border: solid 1px #000000;">&nbsp;</td>
                        <td style="width: 55%; border: solid 1px #000000;">&nbsp;</td>
                        <td style="width: 15%; border: solid 1px #000000;">&nbsp;</td>
                        <td style="width: 15%; border: solid 1px #000000;">&nbsp;</td>
                    </tr>
<?php
}
?>
                </table>
                <br>
                <strong>Service Details</strong><br>
                <table cellspacing="0" style="width: 100%; border: solid 2px #000000; text-align: center; font-size: 10pt">
                    <tr>
                        <td style="width: 30%"><strong>Time</strong></td>
                        <td style="width: 40%">&nbsp;</td>
                        <td style="width: 30%"></td>
                    </tr>
                    <tr>
                      <td style="width: 30%"><br><br></td>
                        <td style="width: 40%"></td>
                      <td style="width: 30%"><br><br></td>
                    </tr>
                </table>
            </td>
      </tr>
    </table>
</page>