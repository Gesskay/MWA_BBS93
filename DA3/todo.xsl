<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <html>
            <head>
                <title>My To-Do List</title>
                <style>
                    /* Add your CSS styles here */
                </style>
            </head>
            <body>
                <h1>My To-Do List</h1>
                <table border="1">
                    <tr>
                        <th>Description</th>
                        <th>Type</th>
                        <th>Timing</th>
                        <th>Deadline</th>
                        <th>Completed</th>
                    </tr>
                    <xsl:apply-templates select="todo-list/tasks/task"/>
                </table>
            </body>
        </html>
    </xsl:template>
    
    <xsl:template match="task">
        <tr>
            <td><xsl:value-of select="description"/></td>
            <td><xsl:value-of select="type"/></td>
            <td><xsl:value-of select="timing"/></td>
            <td><xsl:value-of select="deadline"/></td>
            <td><xsl:value-of select="completed"/></td>
        </tr>
    </xsl:template>
</xsl:stylesheet>
