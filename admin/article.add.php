﻿<!DOCTYPE html>
<html>
<tr>
    <td>
        <p><a href="article.add.php">发布文章</a></p>
        <p><a href="article.manage.php">管理文章</a></p>
        <a href="article.add.php"></a>
    </td>
    <td width = 837 valign = "top" bfgcolor = "#FFFFFF">
        <form id = "form1" name = "form1" method = "post" action = "article.add.handle.php">
            <table width = "779" border = "0" cellpadding="8" cellspacing="1">
                <tr>
                    <td colspan="2" align="center">发布文章</td>
                </tr>
                <tr>
                    <td width = "119">标题</td>
                    <td width = "625"><label for = "title"></label>
                    <input type = "text" name = "title" id = "title"/></td>
                </tr>
                <tr>
                    <td>作者</td>
                    <td><input type = "text" name = "author" id = "author"/></td>
                </tr>
                <tr>
                    <td>简介</td>
                    <td><label for = "description"></label>
                    <textarea name = "description" id = "description" cols="60" rows="5 "></textarea></td>
                </tr>
                <tr>
                    <td>内容</td>
                    <td><textarea name="content" cols="60" rows="15" id="content"></textarea></td>
                </tr>
                <tr>
                    <td colspan="2" align="right" ><input type="submit" name="button" id = "button" value="提交"></td>
                </tr>
            </table>
        </form>
    </td>
</tr>


</html>
