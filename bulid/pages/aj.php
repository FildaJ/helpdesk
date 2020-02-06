	<form method="post" action="">
		<?php
		$ID = 5;
		$result = mysqli_query($conn, "SELECT nazev FROM okruhy WHERE ID_predmet = $ID");
		while ($nazev  = mysqli_fetch_assoc($result)) {
			echo "<div class='btn primary'>";
			echo	"<input type='submit' name='idclanek' value='$nazev[nazev]' />";
			echo "</div>";
		}
		?>
	</form>
	<?php
	$_SESSION["clanekid"] = $_POST["idclanek"];
	if (isset($_POST['idclanek'])) {
		header("location: index.php?page=clanek");
	}
	?>
<div id="disqus_thread"></div>
<script>
/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/

var disqus_config = function () {
//this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = '12345'; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};

(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://matura-jednoduse-cz.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>