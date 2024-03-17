
            <div class="container">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                    <h2 class="text-center pt-5 mb-2" id="reservation">Reservierung</h2>
                    <p class="text-center">Um unseren exklusiven Escortservice in vollen Zügen genießen zu können, füllen Sie bitte unser Buchungsformular unten aus.</p>
                        <form action="behandlung.php" method="post" class="mb-4 p-2" id="forms">
                            <!-- Nom -->
                            <div class="mb-3">
                                <label>Name</label>
                                <input type="text" class="form-control" name="nom" required>
                            </div>

                            <!-- Prenom -->
                            <div class="mb-3">
                                <label>Vorname</label>
                                <input type="text" class="form-control" name="prenom" required>
                            </div>

                            <!-- age -->
                            <div class="mb-3">
                                <label>Alter</label>
                                <input type="number" class="form-control" name="age" min="2" required>
                            </div>

                            <!-- Ville -->
                            <div class="mb-3">
                                <label>Stadt</label>
                                <input type="text" class="form-control" name="city" required>
                            </div>

                            <!-- Code postal -->
                            <div class="mb-3">
                                <label>Postleitzahl</label>
                                <input type="text" class="form-control" name="code_postal" title="Entrez un code postal valide" required>
                            </div>

                            <!-- Adresse complète -->
                            <div class="mb-3">
                                <label>Adresse</label>
                                <input type="text" class="form-control" name="adresse" required placeholder="Bitte geben Sie Ihre vollständige Adresse an.">
                            </div>

                            <!-- Profession -->
                            <div class="mb-3">
                                <label>Beruf</label>
                                <input type="text" class="form-control" name="profession" placeholder="Was machen Sie beruflich?" required>
                            </div>

                            <!-- E-mail -->
                            <div class="mb-4">
                                <label>E-Mail</label>
                                <input type="email" class="form-control" name="email" placeholder="test@example.com" required>
                            </div>

                            <!-- Numero de telephone/whatsap -->
                            <div class="mb-4">
                                <label>Telefon (whatsapp)</label>
                                <input type="tel" class="form-control" name="phone" max="15" placeholder="(+49) xxxxxx" required>
                            </div>

                            <!-- Option d'escorte choisie -->
                            <select class="form-select mb-3 form-control" name="option_escorte" required>
                                <option selected>Wählen Sie eine Escort</option>
                                <option value="alice">Alice</option>
                                <option value="amara">Amara</option>
                                <option value="angele">Angele</option>
                                <option value="bianca">Bianca</option>
                                <option value="carla">Carla</option>
                                <option value="cassie">Cassie</option>
                                <option value="doris">Doris</option>
                                <option value="guilla">Guilla</option>
                                <option value="iris">Iris</option>
                                <option value="isabelle">Isabelle</option>
                                <option value="jessica">Jessica</option>
                                <option value="kate">Kate</option>
                                <option value="kiara">Kiara</option>
                                <option value="larissa">Larissa</option>
                                <option value="leonore">Leonore</option>
                                <option value="leticia">Leticia</option>
                                <option value="lucie">Lucie</option>
                                <option value="mia">Mia</option>
                                <option value="sandrine">Sandrine</option>
                                <option value="ursula">Ursula</option>
                            </select>

                            <!-- Date et heure du rendez-vous -->
                            <div class="mb-4">
                                <label>Datum und Uhrzeit des Termins festlegen</label>
                                <input type="datetime-local" class="form-control" name="date_time" min="2024-01-01T00:00" max="2030-01-01T00:00"  required>
                            </div>

                            <!-- lieu du rendez-vous -->
                            <select class="form-select mb-4 form-control" name="lieu_rencontre" required>
                                <option selected>Wählen Treffpunkt</option>
                                <option value="hotel">Hotels</option>
                                <option value="domi_privE">Privathaus</option>
                                <option value="apprt_privE">Private Wohnungen</option>
                                <option value="domi_escorte">Zuhause der Eskorte</option>
                            </select>

                            <!-- Durée de rencontre -->
                            <select class="form-select mb-1 form-control" name="duree_tarif" required>
                                <option selected>Wählen Sie die Dauer des Treffens</option>
                                <option value="2hr">2 Stunden > 392€</option>
                                <option value="3hr">3 Stunden > 540€</option>
                                <option value="6hr_jour">6 Stunden (1/2 Tage) > 850€</option>
                                <option value="6hr_nuit">6 Stunden (1/2 Nächte) > 996€</option>
                                <option value="12hr_nuit">12 Stunden (nachts) > 1250€</option>
                                <option value="1jr_12hr">1 Tag (24 Stunden) > 1775€</option>
                                <option value="1_semain">1 Woche (7 Tage) > 4483€</option>
                            </select>

                            <div class="court_text mb-3">
                                <label for="">
                                    Jede weitere Stunde wird mit 130€ berechnet und jeder weitere Tag wird mit 992€ berechnet
                                </label>
                            </div>

                            <div class="form-check mb-4">
                                <input class="form-check-input" type="checkbox" id="gridCheck" required>
                                <label class="form-check-label" for="gridCheck">
                                    Mit dem Absenden dieses Formulars Stimmen Sie unseren <a href="cgu.php">Allgemeinen Nutzungsbedingungen</a> sowie unseren <a href="zahlungspolitik.php">zahlungsrichtlinien</a>zu.
                                </label>
                            </div>

    
                            <input type="submit" name="submit" class="btn" value="Ich reserviere">
                        </form>
                    
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
            
            