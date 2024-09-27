<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <html>
            <head>
                <title>Student Record</title>
            </head>
            <body>
                <h2>Student Record</h2>
                <table border="1">
                    <tr>
                        <th>Roll no</th>
                        <th>Name</th>
                        <th>Class</th>
                        <th>Percentage</th>
                    </tr>
                    <xsl:for-each select="college/student">
                        <tr>
                            <td><xsl:value-of select="rollno"/></td>
                            <td><xsl:value-of select="name"/></td>
                            <td><xsl:value-of select="class"/></td>
                            <td><xsl:value-of select="percentage"/></td>
                        </tr>
                    </xsl:for-each>
                </table>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>