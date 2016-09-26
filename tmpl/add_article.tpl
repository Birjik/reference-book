<h1>Написать статью</h1>
%message%
<p>
	<form action="functions.php" method="post">
        <table align="center" width="500px" border="0px">           
        	<tr>
        		<td>Название статьи</td>
        	</tr>
        	<tr>
        	    <td>
        		<input type="text" name="title" size="40">
        		</td>
        	</tr>
        	<tr>
        		<td>Вступительный текст</td>
        	</tr>
        	<tr>
        		<td>
        			<textarea cols="80" rows="5" name="intro_text"></textarea>
        		</td>
        	</tr>
        	<tr>
        		<td>Полный текст</td>
        	</tr>        
        	<tr>
        		<td>
        			<textarea cols="80" rows="15" name="full_text"></textarea>
        		</td>
        	</tr>
        	<tr>
        		<td>
        			<input name="article" type="submit" value="Опубликовать">
        		</td>
        	</tr>                                      
        </table>
	</form>
</p>               
