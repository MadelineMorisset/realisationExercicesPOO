# Carnet d'adresse

> [!IMPORTANT]
> Cet exercice ne figure pas dans le cours; c'est un exercice que j'ai décidée de rajouter pour m'exercer un peu plus sur ce sujet.

## Exercice - Carnet d'adresse :

### 1. Créez la classe Address :

- Cette classe aura trois propriétés : street, city, et postcode.

- Créez un constructeur pour initialiser ces propriétés.

- Créez une méthode hydrate pour remplir ces propriétés à partir d'un tableau associatif.

### 2. Créez la classe Person :

- Cette classe aura quatre propriétés : firstName, lastName, age, et addresses (qui sera un tableau d'objets Address).

- Créez un constructeur pour initialiser ces propriétés.

- Créez une méthode hydrate pour remplir ces propriétés à partir d'un tableau associatif.

- La méthode hydrate doit également hydrater les objets Address dans la propriété addresses.

### 3. Testez l'hydratation avec un tableau multidimensionnel :

- Créez un tableau multidimensionnel représentant une personne avec plusieurs adresses.

- Utilisez la méthode hydrate pour remplir un objet Person avec ces données.

---

## Exemple de tableau de données :

```PHP
$data = [
    'firstName' => 'John',
    'lastName' => 'Doe',
    'age' => 30,
    'addresses' => [
        [
            'street' => '123 Main St',
            'city' => 'Springfield',
            'postcode' => '12345'
        ],
        [
            'street' => '456 Elm St',
            'city' => 'Shelbyville',
            'postcode' => '67890'
        ]
    ]
];
```
