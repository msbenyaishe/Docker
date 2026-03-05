# Utiliser l'image Node.js officielle
FROM node:18

# Définir le répertoire de travail
WORKDIR /app

# Copier les fichiers package.json et installer les dépendances
COPY package*.json ./
RUN npm install express

# Copier le reste de l'application
COPY . .

# Exposer le port 4000
EXPOSE 4000

# Démarrer l'application
CMD ["node", "index.js"]