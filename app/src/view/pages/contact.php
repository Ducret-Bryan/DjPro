<div class="container">
    <h1>
        Contact
    </h1>
    <p id="subTitle">
        Laissez-nous un message !
    </p>

    <section id="profil">
        <div class="left">
            <img class="avatar" src="asset/image/djs/cyril.jpg" alt="photo" />
        </div>
        <div class="right">
            <h2>Cyril</h2>
            <ul class="infos">
                <li><span>Entreprise: </span> Djs Pro Champagne-Ardenne (Gérant)</li>
                <li><span>Type: </span> ***</li>
                <li><span>Lieu de Travail: </span> Haute-Marne</li>
                <li><span>Tél: </span> ***</li>
            </ul>
            <p class="description">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corrupti, molestias. Itaque, aut sed illum at tempore accusantium corporis dignissimos, odit repellat deserunt ut reprehenderit quae animi nulla earum adipisci magni?
            </p>
        </div>
    </section>
    <section id="contactMe">
        <h2>Contactez Nous</h2>
        <form id="formContact">
            <div class="left">
                <label for="name">Nom Prénom</label>
                <input type="text" name="name" id="name" placeholder="Dupont Jean" required />
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Dupont.Jean@example.com" required />
                <label for="subject">Objet</label>
                <select name="subject" id="subject">
                    <option value="Question diverses">Questions diverses</option>
                </select>
            </div>
            <div class="right">
                <label for="message">Message</label>
                <textarea name="message" id="message" rows="5" required></textarea>
            </div>
            <div class="bottom">
                <button type="submit">Envoyer</button>
                <button type="reset">Reset</button>
            </div>
        </form>
    </section>
</div>