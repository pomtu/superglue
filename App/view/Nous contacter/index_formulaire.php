<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de contact</title>
    <link href="formulaire.css" rel="stylesheet">
</head>
<?php include 'equipe_header.php'; ?>
<body>
    <h1>Formulaire de contact</h1>
    
    <form id="survey-form">
       
        <div class="form-group">
            <label id="firstname-label" for="firstname">Prénom*</label>
            <input
              type="text"
              name="prenom"
              id="prenom"
              class="form-control"
              required
            />
          </div>
        
        <div class="form-group">
          <label id="name-label" for="nom">Nom*</label>
          <input
            type="text"
            name="nom"
            id="nom"
            class="form-control"
            required
          />
        </div>

        <div class="form-group">
          <label id="email-label" for="email">Email*</label>
          <input
            type="email"
            name="email"
            id="email"
            class="form-control"
            required
          />
        </div>


        <div class="form-group">
          <label id="number-label" for="number"
            >Age<span class="clue">(facultatif)</span></label>
          <input
            type="number"
            name="age"
            id="number"
            min="12"
            max="99"
            class="form-control"
          />
        </div>
    
        <div class="form-group">
            <p>Objet du message*</p>
            <select id="dropdown" name="role" class="form-control" required>
              <option disabled selected value>Choisissez l'objet qui correspond à votre demande</option>
              <option value="student">Remarque(s)</option>
              <option value="job">Idée de stickers</option>
              <option value="learner">Participation au séance de collage</option>
              <option value="other">Autre</option>
            </select>
          </div>

    
        <div class="form-group">
          <p>Message*</p>
          <textarea
            id="comments"
            class="input-textarea"
            name="comment"
            placeholder="Veuillez taper votre message..."
          ></textarea>
        </div>
    
        <div class="form-group">
          <button type="submit" id="submit" class="submit-button">
            Envoyer
          </button>
        </div>

      </form>

    </main>

</body>
<?php include '../Common/footer.php'; ?>
</html>