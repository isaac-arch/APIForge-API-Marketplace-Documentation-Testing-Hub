<input id="url" placeholder="Full API URL">
<select id="method">
<option>GET</option><option>POST</option>
</select>
<button onclick="testAPI()">Send</button>
<pre id="result"></pre>

<script>
function testAPI(){
 fetch(document.getElementById("url").value)
 .then(r=>r.text())
 .then(d=>document.getElementById("result").innerText=d);
}
</script>