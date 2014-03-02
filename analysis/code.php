<textarea name="source" cols="50" rows="10" id="source" onclick="this.innerHTML=''" onmouseout="if(this.innerHTML.length()==0){this.innerHTML='Enter code here'}">Enter code here</textarea>
<input name="INPUT" id="INPUT" type="text"><div id="results"></div>
<br><input name="RUN" type="button" value="RUN" onclick="loadXMLDoc('run')" /><input name="ANALYZE" type="button" value="ANALYZE" onclick="loadXMLDoc('analyze')" />
<script>
function loadXMLDoc(but)
{
	var xmlhttp;
	
	xmlhttp=new XMLHttpRequest();
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			json = xmlhttp.responseText;
			document.getElementById("results").innerHTML=JSON.parse(json).output;
		}
	}
	CLIENT_SECRET = '089b00ffc6bcb22a7893427d784dd23cc1535a40';
	lang = 'PYTHON';
	xmlhttp.open("POST",but=='run'?"../ideone/index.php":"engine.php",true);
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	var params = "source="+encodeURIComponent(document.getElementById('source').value);
	params+= document.getElementById('INPUT').value==""?'':"&INPUT="+document.getElementById('INPUT').value
	xmlhttp.send(params);
}
</script>