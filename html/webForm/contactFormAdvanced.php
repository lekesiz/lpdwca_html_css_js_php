<?php
/**
 * Formulaire de Contact Avancé avec Validation
 * Auteur: Mikail Lekesiz
 * Formation: LP DWCA 2025
 * Description: Formulaire avec validation côté serveur et gestion d'erreurs
 */

// Initialisation des variables
$errors = [];
$success = false;
$formData = [
    'firstName' => '',
    'lastName' => '',
    'email' => '',
    'phone' => '',
    'subject' => '',
    'message' => ''
];

// Traitement du formulaire
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupération et nettoyage des données
    $formData['firstName'] = trim($_POST['firstName'] ?? '');
    $formData['lastName'] = trim($_POST['lastName'] ?? '');
    $formData['email'] = trim($_POST['email'] ?? '');
    $formData['phone'] = trim($_POST['phone'] ?? '');
    $formData['subject'] = trim($_POST['subject'] ?? '');
    $formData['message'] = trim($_POST['message'] ?? '');
    
    // Validation
    if (empty($formData['firstName'])) {
        $errors['firstName'] = 'Le prénom est requis';
    } elseif (strlen($formData['firstName']) < 2) {
        $errors['firstName'] = 'Le prénom doit contenir au moins 2 caractères';
    }
    
    if (empty($formData['lastName'])) {
        $errors['lastName'] = 'Le nom est requis';
    } elseif (strlen($formData['lastName']) < 2) {
        $errors['lastName'] = 'Le nom doit contenir au moins 2 caractères';
    }
    
    if (empty($formData['email'])) {
        $errors['email'] = 'L\'email est requis';
    } elseif (!filter_var($formData['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'L\'email n\'est pas valide';
    }
    
    if (!empty($formData['phone']) && !preg_match('/^[0-9\s\-\+\(\)]{10,}$/', $formData['phone'])) {
        $errors['phone'] = 'Le numéro de téléphone n\'est pas valide';
    }
    
    if (empty($formData['subject'])) {
        $errors['subject'] = 'Le sujet est requis';
    }
    
    if (empty($formData['message'])) {
        $errors['message'] = 'Le message est requis';
    } elseif (strlen($formData['message']) < 10) {
        $errors['message'] = 'Le message doit contenir au moins 10 caractères';
    }
    
    // Si pas d'erreurs, traiter le formulaire
    if (empty($errors)) {
        $success = true;
        
        // Ici vous pouvez ajouter:
        // - Envoi d'email
        // - Sauvegarde en base de données
        // - Etc.
        
        // Pour la démo, on affiche juste les données
        // Réinitialiser le formulaire après succès
        $formData = [
            'firstName' => '',
            'lastName' => '',
            'email' => '',
            'phone' => '',
            'subject' => '',
            'message' => ''
        ];
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Contact - Mikail Lekesiz</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .container {
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.2);
            width: 100%;
            max-width: 600px;
            padding: 40px;
        }
        
        h1 {
            color: #2c3e50;
            margin-bottom: 10px;
        }
        
        .subtitle {
            color: #7f8c8d;
            margin-bottom: 30px;
        }
        
        .alert {
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        
        .alert-success {
            background: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
        
        .alert-error {
            background: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        label {
            display: block;
            margin-bottom: 8px;
            color: #2c3e50;
            font-weight: 600;
        }
        
        .required {
            color: #e74c3c;
        }
        
        input, select, textarea {
            width: 100%;
            padding: 12px;
            border: 2px solid #ecf0f1;
            border-radius: 8px;
            font-size: 16px;
            font-family: inherit;
            transition: border-color 0.3s ease;
        }
        
        input:focus, select:focus, textarea:focus {
            outline: none;
            border-color: #667eea;
        }
        
        input.error, select.error, textarea.error {
            border-color: #e74c3c;
        }
        
        .error-message {
            color: #e74c3c;
            font-size: 14px;
            margin-top: 5px;
        }
        
        textarea {
            resize: vertical;
            min-height: 120px;
        }
        
        button {
            width: 100%;
            padding: 15px;
            background: #667eea;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s ease, transform 0.1s ease;
        }
        
        button:hover {
            background: #5568d3;
        }
        
        button:active {
            transform: scale(0.98);
        }
        
        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }
        
        @media (max-width: 600px) {
            .form-row {
                grid-template-columns: 1fr;
            }
            
            .container {
                padding: 20px;
            }
        }
        
        .data-display {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            margin-top: 20px;
        }
        
        .data-display h3 {
            color: #2c3e50;
            margin-bottom: 15px;
        }
        
        .data-item {
            margin-bottom: 10px;
            padding: 10px;
            background: white;
            border-radius: 5px;
        }
        
        .data-label {
            font-weight: bold;
            color: #667eea;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>📬 Formulaire de Contact</h1>
        <p class="subtitle">Par Mikail Lekesiz - LP DWCA 2025</p>
        
        <?php if ($success): ?>
            <div class="alert alert-success">
                ✅ Votre message a été envoyé avec succès ! Nous vous répondrons dans les plus brefs délais.
            </div>
            
            <div class="data-display">
                <h3>Données reçues :</h3>
                <?php foreach ($_POST as $key => $value): ?>
                    <div class="data-item">
                        <span class="data-label"><?php echo htmlspecialchars($key); ?>:</span>
                        <?php echo htmlspecialchars($value); ?>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        
        <?php if (!empty($errors)): ?>
            <div class="alert alert-error">
                ❌ Veuillez corriger les erreurs ci-dessous
            </div>
        <?php endif; ?>
        
        <form method="POST" action="">
            <div class="form-row">
                <div class="form-group">
                    <label for="firstName">Prénom <span class="required">*</span></label>
                    <input type="text" 
                           id="firstName" 
                           name="firstName" 
                           value="<?php echo htmlspecialchars($formData['firstName']); ?>"
                           class="<?php echo isset($errors['firstName']) ? 'error' : ''; ?>"
                           placeholder="Mikail">
                    <?php if (isset($errors['firstName'])): ?>
                        <div class="error-message"><?php echo $errors['firstName']; ?></div>
                    <?php endif; ?>
                </div>
                
                <div class="form-group">
                    <label for="lastName">Nom <span class="required">*</span></label>
                    <input type="text" 
                           id="lastName" 
                           name="lastName" 
                           value="<?php echo htmlspecialchars($formData['lastName']); ?>"
                           class="<?php echo isset($errors['lastName']) ? 'error' : ''; ?>"
                           placeholder="Lekesiz">
                    <?php if (isset($errors['lastName'])): ?>
                        <div class="error-message"><?php echo $errors['lastName']; ?></div>
                    <?php endif; ?>
                </div>
            </div>
            
            <div class="form-group">
                <label for="email">Email <span class="required">*</span></label>
                <input type="email" 
                       id="email" 
                       name="email" 
                       value="<?php echo htmlspecialchars($formData['email']); ?>"
                       class="<?php echo isset($errors['email']) ? 'error' : ''; ?>"
                       placeholder="mikail@netz-informatique.fr">
                <?php if (isset($errors['email'])): ?>
                    <div class="error-message"><?php echo $errors['email']; ?></div>
                <?php endif; ?>
            </div>
            
            <div class="form-group">
                <label for="phone">Téléphone</label>
                <input type="tel" 
                       id="phone" 
                       name="phone" 
                       value="<?php echo htmlspecialchars($formData['phone']); ?>"
                       class="<?php echo isset($errors['phone']) ? 'error' : ''; ?>"
                       placeholder="+33 1 23 45 67 89">
                <?php if (isset($errors['phone'])): ?>
                    <div class="error-message"><?php echo $errors['phone']; ?></div>
                <?php endif; ?>
            </div>
            
            <div class="form-group">
                <label for="subject">Sujet <span class="required">*</span></label>
                <select id="subject" 
                        name="subject"
                        class="<?php echo isset($errors['subject']) ? 'error' : ''; ?>">
                    <option value="">-- Choisissez un sujet --</option>
                    <option value="info" <?php echo $formData['subject'] === 'info' ? 'selected' : ''; ?>>Demande d'information</option>
                    <option value="support" <?php echo $formData['subject'] === 'support' ? 'selected' : ''; ?>>Support technique</option>
                    <option value="devis" <?php echo $formData['subject'] === 'devis' ? 'selected' : ''; ?>>Demande de devis</option>
                    <option value="autre" <?php echo $formData['subject'] === 'autre' ? 'selected' : ''; ?>>Autre</option>
                </select>
                <?php if (isset($errors['subject'])): ?>
                    <div class="error-message"><?php echo $errors['subject']; ?></div>
                <?php endif; ?>
            </div>
            
            <div class="form-group">
                <label for="message">Message <span class="required">*</span></label>
                <textarea id="message" 
                          name="message"
                          class="<?php echo isset($errors['message']) ? 'error' : ''; ?>"
                          placeholder="Votre message..."><?php echo htmlspecialchars($formData['message']); ?></textarea>
                <?php if (isset($errors['message'])): ?>
                    <div class="error-message"><?php echo $errors['message']; ?></div>
                <?php endif; ?>
            </div>
            
            <button type="submit">Envoyer le message</button>
        </form>
    </div>
</body>
</html>

