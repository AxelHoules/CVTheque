        <h1>Uploader un CV</h1>
          <h3>Bonjour <?php echo $_SESSION["firstName"] ? $_SESSION["firstName"] . ' ' . $_SESSION["name"] : $_SESSION["nickname"] ?>!</h3>
             <form action="CV/ajouterCV" method="post" enctype="multipart/form-data">
                 <p>Nom : *</p><input type="text" name="nom" id="nom" required><br/>
                 <p>Prenom : *</p><input type="text" name="prenom" id="prenom" required><br/>
                 <p>Numéro de sécurité sociale :</p><input type="text" name="numsecu" id="numsecu" required><br/>
                 <!-- <input type="text" name="//TODO Assurance professionnelle :" id="assurancepro"> -->
                <p>Tel portable : *</p><input type="tel"  name="telP" id="telP" required><br/>
                <p>Tel fixe : *</p><input type="tel"  name="telF" id="telF" required><br/>
                <p>Adresse :</p><input type="text" name="adresse" id="adresse"><br/>
                <p>CP :</p><input type="number" name="codePostal" id="codePostal"><br/>
                <p>Ville :</p><input type="text" name="ville" id="ville"><br/>
                <p>Photo :</p><input type="file" name="photo" id="photo"><br/>
                <p>Votre CV (en pdf) :</p><input type="file" name="pdf" id="pdf"><br/>
                <p>Domaine d'activité :</p>
                    <select name="domaine"><br/>
                         <option value="agro"selected>Agroalimentaire</option>
                         <option value="banque">Banques / Assurances</option>
                         <option value="btp">BTP</option>
                         <option value="chimie">Chimie</option>
                         <option value="commerce">Commerce</option>
                         <option value="communication">Communication</option>
                         <option value="electro">Electronique / Electricité</option>
                         <option value="etude">Études et conseils</option>
                         <option value="pharma">Industrie pharmaceutique</option>
                         <option value="info">Informatique / Télécommunications</option>
                         <option value="machine">Machines et équipements</option>
                         <option value="metal">Métallurgie</option>
                         <option value="service">Services aux entreprises</option>
                         <option value="text">Textile</option>
                         <option value="logistique">Transports et logistique</option>
                    </select><br/>
                 <p>Remarques :</p><input type="remarques" name="remarques" id="remarques"><br/>
                 <input type="submit" value="Soumettre" name="submit" class="btn btn-primary"><br/>
            </form>
        <p>* : Ces champs sont obligatoires</p>