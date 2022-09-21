<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<html>
<body>
<h1 align="center">Venue Information</h1>

<table style="margin-left:163px; border-collapse:collapse;font-family:Comic Sans MS; font-size:20; cellspacing:5px; cellpadding:2px; width:75%; text-alignment:center; height:50% " border="1" >
<tr bgcolor="pink">
<th>Landmark</th>
<th>Location</th>
<th>Country</th>
<th>Rates</th>
</tr>


<xsl:for-each select="Cuustomer/Cust-Details">

<xsl:sort select ="rates"/>


<tr bgcolor="white">
<td><xsl:value-of select="landmark"/></td>
<td><xsl:value-of select="location"/></td>
<td><xsl:value-of select="country"/></td>
<td><xsl:value-of select="rates"/></td>
</tr>




</xsl:for-each>
</table>
</body>
</html>
</xsl:template>
</xsl:stylesheet>