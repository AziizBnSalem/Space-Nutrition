<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Loco</title>
</head>
<style>
    body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

header {
  background-color: #f2f2f2;
  padding: 20px;
  text-align: center;
}

nav ul {
  list-style: none;
  padding: 0;
}

nav ul li {
  display: inline;
  margin-right: 20px;
}

main {
  display: flex;
  justify-content: space-around;
  padding: 20px;
}

.product {
  text-align: center;
  margin: 20px;
}

.product img {
  width: 300px;
  height: 300px;
  object-fit: cover;
  border-radius: 10px;
}

footer {
  background-color: #f2f2f2;
  text-align: center;
  padding: 10px;
}
</style>
<body>
  <header>
    <h1>Boutique de Compléments Alimentaires</h1>
    <?php include("./lib/nav.php") ?></body>

    <nav>
      <ul>
        <li><a href="#">Accueil</a></li>
        <li><a href="#">Produits</a></li>
        <li><a href="#">À Propos</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>
  </header>
  <main>
    <section class="product">
      <img src="whey-protein.jpg" alt="Protéine de Lactosérum">
      <h2>Protéine de Lactosérum</h2>
      <p>Protéine de haute qualité pour la récupération musculaire et la croissance.</p>
      <p>€29.99</p>
      <button>Ajouter au Panier</button>
    </section>
    <section class="product">
      <img src="vitamin-supplements.jpg" alt="Compléments Alimentaires en Vitamines">
      <h2>Compléments Alimentaires en Vitamines</h2>
      <p>Compléments alimentaires pour un apport en vitamines essentielles.</p>
      <p>€19.99</p>
      <button>Ajouter au Panier</button>
    </section>
  </main>
  <footer>
    <p>&copy; 2023 Boutique de Compléments Alimentaires</p>
  </footer>
</body>
</html>

 