<?php
    $title = "CV";
?>

<!DOCTYPE html>
<html lang="fr">

<?php require("head.php") ?>

<body>
	<?php require("header.php") ?>

	<div id="profil">
		<figure id="photo-profil">
			<img src="./images/photoprofil.jpg" loading="lazy" />
		</figure>
		<p>Actuellement étudiant en BTS Services Informatiques aux Organisations, je recherche un stage professionnel
           afin de compléter ma formation. Je suis passionné par l'informatique et bilingue</p>
	</div>

	<div id="not-header">
		<main id="index-main">
			<section id="formation">
				<h2>Formation</h2>
				<article>
                    <h3>BTS services informatiques aux organisations</h3>
                    <p>Lycée-Campus Saint Joseph, Boulogne-Sur-Mer, 2024-</p>
                </article>
				<article>
					<h3>DEUST bureautique et communication multimédia - parcours webdesigner/webdéveloppeur</h3>
					<p>Université du Littoral Côte d'Opale, Calais, 2023-2024</p>
				</article>
				<article>
					<h3>Licence informatique</h3>
					<p>Université du Littoral Côte d'Opale, Calais, 2022-2023</p>
				</article>
				<article>
					<h3>Lycée</h3>
					<p>HQE Léonard de Vinci, Calais, 2020-2022</p>
				</article>
				<article>
					<h3>Dessin, sculpture, peinture, gravure</h3>
					<p>Le Concept, Calais, 2010-2023</p>
				</article>
			</section>

			<div class="diviseur x"></div>

			<section id="certificats">
				<h2>Certificats</h2>
				<ul>
					<li>Baccalauréat général, option numérique science informatique/anglais monde contemporrain (2022)</li>
					<li>Cambridge English Certificate</li>
				</ul>
			</section>

			<div class="diviseur x"></div>

			<section id="autres">
				<article>
					<h2>Qualités</h2>
					<ul>
						<li>Imaginatif</li>
						<li>Curieux</li>
					</ul>
				</article>

				<div class="diviseur x"></div>

				<article>
					<h2>Centres d'intérêt</h2>
					<ul>
						<li>Gaming</li>
						<li>Aviron</li>
					</ul>
				</article>
			</section>
		</main>

		<aside>
			<section>
				<h2>Compétences informatique</h2>
				<h3>HTML/CSS</h3>
				<div title="Expérimenté" class="barre"><div class="niveau niv-html"></div></div>
				<h3>Python</h3>
				<div title="Expérimenté" class="barre"><div class="niveau niv-python"></div></div>
				<h3>PHP</h3>
				<div title="Novice" class="barre"><div class="niveau niv-php"></div></div>
				<h3>C++</h3>
				<div title="Moyen" class="barre"><div class="niveau niv-cplus"></div></div>
			</section>

			<section>
				<h2>Compétences logiciels</h2>
				<h3>Microsoft WORD</h3>
				<div title="Bon" class="barre"><div class="niveau niv-word"></div></div>
				<h3>Microsoft EXCEL</h3>
				<div title="Bon" class="barre"><div class="niveau niv-excel"></div></div>
				<h3>Photoshop</h3>
				<div title="Moyen" class="barre"><div class="niveau niv-photoshop"></div></div>
				<h3>Illustrator</h3>
				<div title="Moyen" class="barre"><div class="niveau niv-illustrator"></div></div>
			</section>

			<section>
				<h2>Langages</h2>
				<h3>Anglais</h3>
				<div title="Expert" class="barre"><div class="niveau niv-anglais"></div></div>
			</section>
		</aside>

		<footer>
			<section>
				<h3>Infos personnelles</h3>
				<ul id="infos">
					<li>dumesnilmesnilgabin123@gmail.com</li>
					<li>07 83 65 98 10</li>
					<li>161 rue Michel Ange, Calais</li>
					<li>15 décembre 2004</li>
				</ul>
			</section>

			<div class="diviseur y"></div>

			<section>
				<h3>Réseaux sociaux</h3>
				<ul id="reseaux">
					<li><a href="https://www.linkedin.com/in/gabin-dumesnil-445457297/">Linkedin</a></li>
				</ul>
			</section>
		</footer>
	</div>
</body>

</html>