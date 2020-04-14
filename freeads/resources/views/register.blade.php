<center>
<h1> Inscription</h1>
<hr style="color:aqua"><br>

<form action="/registered" class="inscription">
  <div>
    <!-- <label for="nom">Nom : </label> -->
    <input type="text" name="nom" placeholder="Nom" required>
  </div>
  <div>
    <!-- <label for="prenom">Prénom : </label> -->
    <input type="text" name="prenom" placeholder="Prenom" required>
  </div>
  <div>
    <!-- <label for="birthdate">Date de naissance : </label> -->
    <input type="date" name="birthdate" value="2020-04-14" min="1900-01-01" max="2020-04-14" required>
  </div>
  <div>
    <!-- <label for="cpostal">Code postal:</label> -->
    <input type="text" name="cpostal" placeholder="code postal Ex : 75017" required>
  </div>
  <div>
    <!-- <label for="email">Email: </label> -->
    <input type="email" name="email" placeholder="Email" required>
  </div>
  <div>
  <div>
    <!-- <label for="email">Mot de passe: </label> -->
    <input type="password" name="password" placeholder="mot de passe" required>
  </div>
    <input type="submit" value="S'inscrire">
  </div>
</form>
</center>