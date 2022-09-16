    <h1>Création de compte</h1>
    
    <form action="index.php?module=user&action=insert" method="post">
        <label>
            Nom
            <input type="text" name="name">
        </label>
        <label>
            Username
            <input type="email" name="username">
        </label>
        <label>
            Mot de passe
            <input type="password" name="password">
        </label>
        <label>
            Date de naissance
            <input type="date" name="birthday">
        </label>
        <input type="submit">
    </form>
</body>
</html>